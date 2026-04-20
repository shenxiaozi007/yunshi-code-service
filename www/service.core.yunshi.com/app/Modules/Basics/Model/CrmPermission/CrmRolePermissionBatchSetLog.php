<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelMainNoTrait;
use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 批量设置权限日志模型
 * Class CrmRolePermissionBatchSetLog
 * @package App\Modules\Basics\Model\SysPermission
 */
class CrmRolePermissionBatchSetLog extends Model
{
    use SoftDeletes, ModelTimeTraits, ModelMainNoTrait;

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_role_permission_batch_set_log';

    protected $casts = [
        'role_nos'       => 'array',
        'permission_ids' => 'array',
    ];

    /**
     * @var array
     */
    public $hidden = [
        'add_time',
        'last_update_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    public function getMainNoColumn(): string
    {
        return 'permission_batch_set_log_no';
    }
}
