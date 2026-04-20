<?php

namespace App\Modules\Management\Business\System;

use App\Exceptions\Common\AppException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Management\Dao\CorePermission\CoreAdmAccountDao;
use App\Modules\Management\Invoke\Crm\CrmUserInvoke;

class CoreSysUserBusiness extends BaseBusiness
{

    /**
     * CoreAccountBusiness constructor.
     * @param CoreAdmAccountDao $coreAdmAccountDao
     * @param CrmUserInvoke $crmUserInvoke
     */
    public function __construct(
        protected CoreAdmAccountDao $coreAdmAccountDao,
        protected CrmUserInvoke $crmUserInvoke
    )
    {
    }

    /**
     * 生成模拟登录鉴权链接
     * @param array $adminInfo
     * @return array
     * @throws AppException
     */
    public function generateAuthLink(array $adminInfo): array
    {
        $account = array_get($adminInfo, 'account');

        $coreAdmAccount = $this->coreAdmAccountDao->findByAccount($account, ['bind_crm_user_no']);

        if (blank($coreAdmAccount?->bind_crm_user_no))
        {
            throw new AppException(110006, [], '当前账户未绑定CRM账户');
        }

        return ['link' => $this->crmUserInvoke->generateAuthLink($coreAdmAccount->bind_crm_user_no, $adminInfo)];
    }

}
