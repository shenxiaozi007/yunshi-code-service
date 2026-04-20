<?php

namespace App\Modules\Management\Trait\Log;

use App\Modules\Basics\Constant\Rbac\AdminOperation;
use App\Modules\Management\Dao\CorePermission\CoreAdmOperationLogDao;

/**
 * Class CoreAdmOperationLogTrait
 * @package App\Modules\Management\Trait\Log
 */
Trait CoreAdmOperationLogTrait
{
    /**
     * 新增操作日志
     * @param $account
     * @param string $action
     * @param string $remark
     * @param array $params
     */
    public function addCoreAdmOperationLog($account, string $action, string $remark = '', array $params = []): void
    {
        /** @var CoreAdmOperationLogDao $coreAdmOperationLogDao */
        $coreAdmOperationLogDao = app(CoreAdmOperationLogDao::class);

        $data = [
            'account'               => $account,
            'action'                => $action,
            'request_header'        => app('request')->header(),
            'ip'                    => get_real_ip(),
            'remark'                => $remark ?: AdminOperation::getName($action),
            'province'              => array_get($params, 'province') ?: '',
            'city'                  => array_get($params, 'city') ?: '',
        ];

        $coreAdmOperationLogDao->store($data);
    }
}
