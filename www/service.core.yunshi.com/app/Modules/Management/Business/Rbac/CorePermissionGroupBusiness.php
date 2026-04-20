<?php

namespace App\Modules\Management\Business\Rbac;

use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Management\Dao\CorePermission\CoreAdmPermissionDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmPermissionGroupDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SysPermissionGroupBusiness
 * @package App\Modules\Management\Business\Rbac
 */
class CorePermissionGroupBusiness extends BaseBusiness
{
    /**
     * @var CoreAdmPermissionGroupDao
     */
    protected $coreAdmPermissionGroupDao;

    /**
     * @var CoreAdmPermissionDao
     */
    protected $coreAdmPermissionDao;

    /**
     * @var CoreAdmRoleBindRelationDao
     */
    protected $coreAdmRoleBindRelationDao;

    /**
     * CorePermissionGroupBusiness constructor.
     */
    public function __construct()
    {
        $this->coreAdmPermissionGroupDao    = app(CoreAdmPermissionGroupDao::class);
        $this->coreAdmPermissionDao         = app(CoreAdmPermissionDao::class);
        $this->coreAdmRoleBindRelationDao   = app(CoreAdmRoleBindRelationDao::class);
    }

    /**
     * 权限初始化
     * @param array $permissionGroups
     * @param int $pid
     * @param array $mergeList
     * @return array
     */
    public function init(array $permissionGroups, int $pid = 0, array $mergeList = [])
    {
        foreach ($permissionGroups as $permissionGroup)
        {
            // 插入权限组
            $permissionGroup['pid'] = $pid;
            $data                   = $permissionGroup;
            unset($data['child']);
            $sysPermissionGroup = $this->coreAdmPermissionGroupDao->updateOrCreate(
                [
                    'alias_name' => $data['alias_name']
                ],
                $data
            );
            $mergeList[]        = $permissionGroup['alias_name'];

            // 嵌套组
            if (filled($permissionGroups = array_get($permissionGroup, 'child', [])))
            {
                $mergeList = array_merge($this->init($permissionGroups, $sysPermissionGroup->id), $mergeList);
            }
        }

        return $mergeList;
    }

    /**
     * 存储
     * @param array $data
     * @return Model
     */
    public function store(array $data)
    {
        return $this->coreAdmPermissionGroupDao->store($data);
    }

    /**
     * 获取权限树
     * @return Collection
     */
    public function getTree()
    {
        return $this->coreAdmPermissionGroupDao->getByPid();
    }

    /**
     * @param $newAliasNameList
     */
    public function deleteNotInAliasNameList($newAliasNameList)
    {
        // 删除不存在的别名数据
        $this->coreAdmPermissionGroupDao->deleteListNotInAliasNameList($newAliasNameList);

        // 获取删除掉的权限组权限
        $permissions = $this->coreAdmPermissionDao->getNotInGroupAlias($newAliasNameList);

        // 删除
        foreach ($permissions as $permission)
        {
            $this->coreAdmPermissionDao->destroy($permission->id);

            $this->coreAdmRoleBindRelationDao->deleteByPermissionId($permission->id);
        }
    }

    /**
     * 获取角色权限
     * @param int $roleId
     * @return array
     */
    public function getDetailByRoleId(int $roleId)
    {
        $permissionList = $this->coreAdmRoleBindRelationDao->getByRoleId($roleId);

        $permissionIds  = $permissionList->pluck('permission_id');

        $encryptByIds   = $permissionList->pluck('encryption_option', 'permission_id');

        $tree = $this->getTree();

        return $this->checkPermissionGroups($tree->toArray(), $permissionIds->toArray(), $encryptByIds->toArray());
    }

    /**
     * 标记选中状态，方便前端
     * @param array $tree
     * @param array $hasPermissionIds
     * @param array $encryptByIds
     * @return array
     */
    public function checkPermissionGroups(array $tree, array $hasPermissionIds, array $encryptByIds)
    {
        // 遍历权限组
        foreach ($tree as $key => $permissionGroup)
        {
            // 处理权限
            $permissionGroup['permissions']       = $this->identityPermissionStatus(
                array_get($permissionGroup, 'permissions', []),
                $hasPermissionIds,
                $encryptByIds
            );

            $permissionGroup['permission_groups'] = $this->checkPermissionGroups(
                array_get($permissionGroup, 'permission_groups', []),
                $hasPermissionIds,
                $encryptByIds
            );

            // 若group节点中没有包含有效节点，则删除此group节点
            if (
                blank($permissionGroup['permissions'])
                && blank($permissionGroup['permission_groups'])
            ) {
                unset($tree[$key]);
                continue;
            }

            $tree[$key] = $permissionGroup;
        }

        return array_values($tree);
    }

    /**
     * 给权限打标识，前端用
     * @param array $permissions
     * @param array $hasPermissionIds
     * @param array $encryptByIds
     * @return array
     */
    private function identityPermissionStatus(array $permissions, array $hasPermissionIds, array $encryptByIds)
    {
        // 标识权限
        foreach ($permissions as $key => $permission)
        {
            $permissionId = array_get($permission, 'id');
            if (filled($permissionId))
            {
                $permission['is_checked']       = in_array($permissionId, $hasPermissionIds);
                $permission['encryption_option']= array_get($encryptByIds, $permissionId, '');

                $permissions[$key] = $permission;
            }
        }

        return array_values($permissions);
    }

}
