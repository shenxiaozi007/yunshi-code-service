<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Base\BaseModel;
use App\Kernel\Traits\ModelTimeTraits;

/**
 * crm用户绑定手机号记录
 * Class CrmUserAuth
 * @property string password
 * @property string salt
 * @package App\Modules\Basics\Model\CrmPermission
 */
class CrmUserMobileBindLog extends BaseModel
{
    use ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_user_mobile_bind_log';

    protected $guarded = [];
}
