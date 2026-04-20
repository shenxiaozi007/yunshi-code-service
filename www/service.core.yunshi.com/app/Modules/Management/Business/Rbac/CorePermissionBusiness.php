<?php

namespace App\Modules\Management\Business\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Traits\SecretDataTrait;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Management\Dao\CorePermission\CoreAdmPermissionDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmPermissionGroupDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CorePermissionBusiness
 * @package App\Modules\Management\Business\Rbac
 */
class CorePermissionBusiness extends BaseBusiness
{
    use SecretDataTrait;

    /**
     * CorePermissionBusiness constructor.
     * @param CoreAdmPermissionDao $coreAdmPermissionDao
     * @param CoreAdmPermissionGroupDao $coreAdmPermissionGroupDao
     * @param CoreAdmRoleBindRelationDao $coreAdmRoleBindRelationDao
     * @param CoreAdmRoleDao $coreAdmRoleDao
     * @param CoreAdmAccountDao $coreAdmAccountDao
     */
    public function __construct(
        protected CoreAdmPermissionDao          $coreAdmPermissionDao,
        protected CoreAdmPermissionGroupDao     $coreAdmPermissionGroupDao,
        protected CoreAdmRoleBindRelationDao    $coreAdmRoleBindRelationDao,
        protected CoreAdmRoleDao                $coreAdmRoleDao,
        protected CoreAdmAccountDao             $coreAdmAccountDao,
    ) {}

    /**
     * 通过配置文件初始化权限
     * @param array $permissions
     */
    public function init(array $permissions)
    {
        $newAliasName = [];
        foreach ($permissions as $permission)
        {
            $newAliasName[]     = $permission['alias_name'];
            $sysPermissionGroup = $this->coreAdmPermissionGroupDao->findByAliasName($permission['group_alias']);

            if (filled($sysPermissionGroup))
            {
                $permission['group_id'] = $sysPermissionGroup->id;
                $this->coreAdmPermissionDao->updateOrCreate(['alias_name' => $permission['alias_name']], $permission);
            }
        }

        // 删除不存在的权限
        $this->coreAdmPermissionDao->forceDeleteNotInAliasNames($newAliasName);
    }

    /**
     * 返回加密后的报文
     *
     * @param string $encrypt
     * @param array $responseContent
     * @return array
     * @author 秦昊
     * Date: 2021/9/22 14:11
     */
    public function getEncryptResponseContent(string $encrypt, array $responseContent): array
    {
        return $this->secretData($responseContent, $encrypt);
    }

    /**
     * 获取加密级别
     *
     * @param int $sysUserId
     * @param string $path
     * @return false|string
     * @throws AppException
     * @author 秦昊
     * Date: 2021/9/10 16:41
     */
    public function getEncrypt(int $sysUserId, string $path): bool|string
    {
        $sysRolePermissionRelation = $this->checkPermission($sysUserId, $path);

        // 加密级别
        $encryptionOption = $sysRolePermissionRelation->encryption_option;
        if (
            filled($encryptionOption)
            && in_array($encryptionOption, EncryptionOption::all())
        ) {
            return $encryptionOption;
        }

        return false;
    }

    /**
     * 检查权限
     * @param int $sysUserId
     * @param string $path
     * @return Model|object|null
     * @throws AppException
     */
    public function checkPermission(int $sysUserId, string $path)
    {
        $sysUser = $this->coreAdmAccountDao->find($sysUserId, ['id', 'role_id']);
        $roleId = $sysUser->role_id;

        // 匹配不到加密级别时，再匹配不加密情况

        $sysPermissions = $this->coreAdmPermissionDao->getByRouteName($path, ['id', 'name']);

        if (0 == $sysPermissions->count())
        {
            $permissionError = "请联系管理员配置权限！";
            throw new AppException(110007, [], $permissionError);
        }

        $permissionIds = $sysPermissions->pluck('id')->toArray();

        $sysRolePermissionRelation = $this->findRelationInPermissionIds($roleId, $permissionIds);

        if (blank($sysRolePermissionRelation))
        {
            $permissionError = '缺少以下权限: '. $sysPermissions->implode('name', ', ');
            throw new AppException(110007, [], $permissionError);
        }

        return $sysRolePermissionRelation;
    }

    /**
     * 通过是否初始化获取权限id列表
     * @param int $isInit
     * @return Builder[]
     * @throws AppException
     */
    public function getIdListByIsInit(int $isInit)
    {
        return $this->coreAdmPermissionDao->getListByIsInit($isInit, ['id']);
    }

    /**
     * 获取权限列表
     * @param int $sysUserId
     * @return array
     * @throws AppException
     */
    public function myPermissionList(int $sysUserId)
    {
        $clientRouteNames = [];
        $sysUser          = $this->coreAdmAccountDao->findOrFail($sysUserId);

        // 没有超管角色，通过关联表去查
        $sysRolePermissionRelations = $this->coreAdmRoleBindRelationDao->getByRoleId($sysUser->role_id, [
            'sysPermission'
        ]);

        $sysRolePermissionRelations->each(function ($sysRolePermissionRelation) use (& $clientRouteNames)
        {
            if ($sysPermission = $sysRolePermissionRelation->sysPermission)
            {
                $clientRouteNames = array_merge($sysPermission->client_route_name, $clientRouteNames);
            }
        });

        return array_values(array_unique($clientRouteNames));
    }

    /**
     * 获取关联DAO
     * @param $roleId
     * @param array $permissionIds
     * @return Model|object|null
     */
    private function findRelationInPermissionIds($roleId, array $permissionIds)
    {
        return $this->coreAdmRoleBindRelationDao->findByPositionIdAndInPermissionId($roleId, $permissionIds);
    }

}
