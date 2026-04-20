<?php

namespace App\Modules\Management\Invoke\Crm;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseInvoke;
use App\Modules\Management\Business\CrmRbac\CrmUserBusiness;

class CrmUserInvoke extends BaseInvoke
{

    /**
     * CrmUserInvoke constructor.
     * @param CrmUserBusiness $business
     */
    public function __construct(
        protected CrmUserBusiness $business
    )
    {
    }

    /**
     * 生成模拟登录鉴权链接
     * @param string $userNo
     * @param array $adminInfo
     * @return string
     * @throws AppException
     */
    public function generateAuthLink(string $userNo, array $adminInfo): string
    {
        return $this->business->generateVirtuallyAuthLink($userNo, $adminInfo);
    }

    /**
     * 成员列表
     * @param array $payload
     * @return array
     * @throws AppException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getPageList(array $payload = []): array
    {
        return $this->response($this->business->getPageList($payload));
    }
}
