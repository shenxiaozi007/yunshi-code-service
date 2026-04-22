<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelMainNoTrait;
use App\Modules\Basics\Constant\CrmUser\MobileStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Kernel\Traits\ModelTimeTraits;

/**
 * 销售手机号码
 *
 * Class SalesMobile
 * @property string status
 * @package App\Modules\Crm\Model
 */
class CrmUserMobile extends Model
{
    use SoftDeletes, ModelTimeTraits, ModelMainNoTrait;

    protected $table = 'ycrm_user_mobile';

    protected $fillable = [
        'last_update_time',
        'add_time',
        'mobile',
        'user_no',
        'user_mobile_no',
        'status',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
        'last_update_time',
        'add_time',
    ];

    /**
     * 自动追加的字段
     *
     * @var array
     */
    protected $appends = [
        'status_name',
    ];

    /**
     * 获取唯一编码字段名称
     * @return string
     * @author leo 2022/5/6
     */
    public function getMainNoColumn(): string
    {
        return 'user_mobile_no';
    }

    /**
     * 手机号归属的用戶
     * @return BelongsTo
     */
    public function crmUser(): BelongsTo
    {
        return $this->belongsTo(CrmUser::class, 'user_no', 'user_no');
    }

    /**
     * 手机号是否可以被删除
     *
     * @return bool
     */
    public function canDelete(): bool
    {
        return $this->status === MobileStatus::UNUSED;
    }

    /**
     * 用户手机号编码
     * @param $builder
     * @param $value
     */
    public function scopeUserMobileNoQuery($builder, $value)
    {
        $builder->whereIn('user_mobile_no', to_array($value));
    }

    /**
     * 用户编码
     * @param $builder
     * @param $value
     */
    public function scopeUserNoQuery($builder, $value)
    {
        $builder->whereIn('user_no', to_array($value));
    }

    /**
     * 状态查询
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeStatusQuery($query, $value)
    {
        return $query->where('status', $value);
    }

    /**
     * 手机号码查询
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeMobileQuery($query, $value)
    {
        return $query->where('mobile', $value);
    }

    /**
     * 手机号模糊查询
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeMobileLikeQuery($query, $value)
    {
        return $query->where('mobile', 'LIKE', $value . '%');
    }

    /**
     * 手机号分配状态名称
     *
     * @return string
     */
    public function getStatusNameAttribute(): string
    {
        return (string)MobileStatus::getName($this->status);
    }

    /**
     * crm用户参数筛选
     * @param $query
     * @param array $params
     */
    public function scopeCrmUserParamsQuery($query, array $params)
    {
        $params = array_filter($params, function ($param)
        {
            return filled($param);
        });

        if (blank($params))
        {
            return;
        }

        $query->whereHas('crmUser', function ($query) use ($params)
        {
            // 姓名模糊筛选
            if (filled($realNameLike = array_pull($params, 'real_name_like')))
            {
                $query->realNameLikeQuery($realNameLike);
            }

            // 工号模糊筛选
            if (filled($jobSnLike = array_pull($params, 'job_sn_like')))
            {
                $query->jobSnLikeQuery($jobSnLike);
            }
        });
    }


}
