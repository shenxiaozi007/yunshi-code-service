<?php

namespace App\Modules\Management\Business\Rbac;

use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleDao;
use App\Modules\Management\Dao\CorePermission\CoreAdmRoleBindRelationDao;
use Throwable;

class CoreRolePermissionRelationBusiness extends BaseBusiness
{
    /**
     * @var CoreAdmRoleBindRelationDao
     */
    protected $coreAdmRoleBindRelationDao;

    /**
     * @var CoreAdmRoleDao
     */
    protected $coreAdmRoleDao;

    /**
     * CoreRolePermissionRelationBusiness constructor.
     */
    public function __construct()
    {
        $this->coreAdmRoleBindRelationDao   = app(CoreAdmRoleBindRelationDao::class);
        $this->coreAdmRoleDao               = app(CoreAdmRoleDao::class);
    }

    /**
     * @param int $roleId
     * @param array $data
     * @param array $payload
     * @return mixed
     * @throws Throwable
     */
    public function update(int $roleId, array $data, array $payload)
    {
        // 查看角色是否存在
        $this->coreAdmRoleDao->findOrFail($roleId, ['id']);

        return app('db')->transaction(function () use ($roleId, $data, $payload)
        {
            $this->coreAdmRoleBindRelationDao->deleteByRoleId($roleId);

            $permissions = array_get($data, 'permissions', []);
            foreach ($permissions as $permission)
            {
                $this->coreAdmRoleBindRelationDao->store(
                    [
                        'role_id'           => $roleId,
                        'permission_id'     => $permission['id'],
                        'encryption_option' => $permission['encryption_option'] ?? '',
                        'edit_admin_id'     => $payload['edit_admin_id'],
                        'edit_admin_name'   => $payload['edit_admin_name'],
                    ]
                );
            }
        });
    }

}
