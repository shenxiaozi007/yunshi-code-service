<?php

namespace App\Modules\Management\Business\System;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Dao\System\CoreOperationLogDao;
use App\Modules\Management\Business\System\Factory\FormatParamsTrait;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;

class OperationLogBusiness extends BaseBusiness
{
    use FormatParamsTrait;

    /**
     * OperationLogBusiness constructor.
     * @param CoreOperationLogDao $coreOperationLogDao
     * @param CoreAdmAccountDao $coreAdmAccountDao
     */
    public function __construct(
        protected CoreOperationLogDao $coreOperationLogDao,
        protected CoreAdmAccountDao $coreAdmAccountDao,
    ) {}

    /**
     * 操作日志列表
     *
     * @param array $payload
     * @return array
     * @throws AppException
     */
    public function getPageList(array $payload): array
    {
        $payload = $this->formatParams($payload);

        $columns = ['id', 'account_id', 'account_name', 'sub_account_id', 'display_name', 'add_time'];

        $list = $this->coreOperationLogDao->getPageList($payload, $columns)->toArray();
        $listData = array_get($list, 'data', []);
        if (empty($listData))
        {
            return $list;
        }

        $accountIds = array_unique(array_column($listData, 'account_id'));

        /** @var \Illuminate\Database\Eloquent\Collection $coreAdmAccount */
        $coreAdmAccount = $this->coreAdmAccountDao->getListByIdArr($accountIds, ['id', 'account']);
        $keyCoreAdmAccount = $coreAdmAccount->keyBy('id')->toArray();

        $data = [];
        foreach ($listData as $item)
        {
            $account = $keyCoreAdmAccount[$item['account_id']] ?? [];
            $data[] = [
                'id'            => $item['_id'],
                'real_name'     => $item['account_name'],
                'account'       => $account['account'] ?? '',
                'display_name'  => $item['display_name'],
                'add_time'      => date('Y-m-d H:i:s', $item['add_time']),
            ];
        }
        $list['data'] = $data;

        return $list;
    }
}
