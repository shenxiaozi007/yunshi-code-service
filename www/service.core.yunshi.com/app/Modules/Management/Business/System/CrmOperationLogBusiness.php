<?php

namespace App\Modules\Management\Business\System;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Dao\Crm\CrmUserDao;
use App\Modules\Basics\Dao\System\CoreCrmOperationLogDao;
use App\Modules\Basics\Dao\System\CrmAdmOperationLogDao;
use App\Modules\Management\Business\System\Factory\FormatParamsTrait;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CrmOperationLogBusiness extends BaseBusiness
{
    use FormatParamsTrait;

    /**
     * CrmOperationLogBusiness constructor.
     * @param CoreCrmOperationLogDao $coreCrmOperationLogDao
     * @param CrmAdmOperationLogDao $crmAdmOperationLogDao
     * @param CrmUserDao $crmUserDao
     */
    public function __construct(
        protected CoreCrmOperationLogDao $coreCrmOperationLogDao,
        protected CrmAdmOperationLogDao $crmAdmOperationLogDao,
        protected CrmUserDao $crmUserDao,
    )
    {}

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

        $jobSnLike = array_pull($payload, 'job_sn_like');
        if (filled($jobSnLike))
        {
            $crmUser = $this->crmUserDao->getListByJobSnLike($jobSnLike);
            $accountIds = $crmUser->pluck('id')->toArray();
            $payload['account_ids'] = $accountIds;
        }

        // 员工编号转id
        if (filled($userNo = array_pull($payload, 'user_no', [])))
        {
            $accountIds = $this->crmUserDao->getIdListByUserNo($userNo);
            $payload['account_ids'] = array_merge($accountIds, array_get($payload, 'account_ids', []));
        }

        $columns = ['id', 'account_id', 'account_name', 'display_name', 'add_time'];

        $list = $this->coreCrmOperationLogDao->getPageList($payload, $columns)->toArray();
        $listData = array_get($list, 'data', []);
        if (empty($listData))
        {
            return $list;
        }

        $accountIds =  array_unique(array_column($listData, 'account_id'));
        $crmUser = $this->crmUserDao->getListByIdArr($accountIds, ['id', 'account', 'job_sn']);
        $keyCrmAdmAccount = $crmUser->keyBy('id')->toArray();

        $data = [];
        foreach ($listData as $item)
        {
            $account = $keyCrmAdmAccount[$item['account_id']] ?? [];

            $data[] = [
                'id'            => $item['_id'],
                'real_name'     => $item['account_name'],
                'account'       => $account['account'] ?? '',
                'job_sn'        => $account['job_sn'] ?? '',
                'display_name'  => $item['display_name'],
                'add_time'      => date('Y-m-d H:i:s', $item['add_time']),
            ];
        }
        $list['data'] = $data;

        return $list;
    }

    /**
     * 获取某个用户的操作日志
     * @param string $userNo
     * @return LengthAwarePaginator
     * @throws AppException
     */
    public function getLoginLogsByUserNo(string $userNo): LengthAwarePaginator
    {
        /* @var CrmUser $userInfo */
        $userInfo = $this->crmUserDao->findByUserNo($userNo, ['account']);

        $columns = [
            'id',
            'account',
            'action',
            'ip',
            'province',
            'city',
            'remark',
            'add_time',
        ];

        $params = [
            'account' => $userInfo->account ?: '-1',
            'order_by' => 'add_time,desc',
        ];

        return $this->crmAdmOperationLogDao->getPageList($params, $columns);
    }
}
