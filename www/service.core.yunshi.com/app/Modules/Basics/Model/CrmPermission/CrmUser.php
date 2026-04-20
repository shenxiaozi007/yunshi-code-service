<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseModel;
use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Model\Sales\CoreSales;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Carbon;

/**
 * 用户模型
 * Class CrmUser
 * @property string user_no
 * @property int position_grade
 * @property int id
 * @property string job_sn
 * @property mixed account_status
 * @property string mobile
 * @property string account
 * @property array identity
 * @property string                  real_name
 * @property string                  sales_no
 * @property int                     sales_id
 * @property int                     register_at
 * @property CoreSalesQualifications qualifications
 * @property CrmUserAuth             accountAuth
 * @property CoreSalesQualifications crmUserWithQualifications
 * @property string                  department_no
 * @property mixed                   birthday
 * @property CrmUserWechatUser       salesWechatUser
 * @property CoreSales               coreSales
 * @property string                  manpower_type
 * @package App\Modules\Basics\Model\CrmPermission
 */
class CrmUser extends BaseModel
{
    use ModelTimeTraits;

    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_user';

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

    /**
     * @var string[]
     */
    public $appends = [];

    /**
     * @var string[]
     */
    protected $casts = [
        'identity' => 'array',
    ];

    /**
     * 主表的唯一编号
     * @return string
     */
    public function mainNo(): string
    {
        return 'user_no';
    }

    /**
     * id
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdArrQuery(Builder $query, $value)
    {
        return $query->whereIn('id', to_array($value));
    }

    /**
     * 筛选身份
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeIdentityQuery($query, $value)
    {
        return $query->whereJsonContains('identity', $value);
    }

    /**
     * 真实姓名 like
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeRealNameLikeQuery($query, $value)
    {
        return $query->where('real_name', 'like', '%' . $value . '%');
    }

    /**
     * real_name 搜索.
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeRealNameQuery(Builder $query, string $value)
    {
        return $query->where('real_name', $value);
    }

    /**
     * 角色ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRoleIdQuery(Builder $query, $value)
    {
        return $query->whereIn('adm_role_id', to_array($value));
    }

    /**
     * 工号或者姓名模糊查询
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeNameOrJobNoQuery($query, $value)
    {
        $value = trim($value);

        return $query->where(function ($query) use ($value) {
            $query->where('real_name', 'LIKE', '%' . $value . '%')
                ->orWhere('job_sn', 'LIKE', '%' . $value . '%');
        });
    }

    /**
     * 账号状态
     * @param $value
     * @return mixed|null
     */
    public function getAccountStatusAttribute($value)
    {
        if (filled($value))
        {
            $this->append('account_status_str');
        }

        return $value;
    }

    /**
     * 账号状态字符串
     * @return string
     */
    public function getAccountStatusStrAttribute()
    {
        return AccountStatus::getName($this->account_status) ?? '';
    }

    /**
     * user_no_arr
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeUserNoArrQuery($query, $value)
    {
        return $query->whereIn('user_no', to_array($value));
    }

    /**
     * 添加头像路径属性
     * @param $value
     * @return mixed
     */
    public function getAvatarIdAttribute($value)
    {
        if (filled($value))
        {
            $this->append('avatar_url');
        }

        return $value;
    }

    /**
     * 获取头像链接
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        return file_url($this->avatar_id);
    }

    /**
     * user_no 查询.
     * @param Builder $query
     * @param $value
     * @return void
     */
    public function scopeUserNoQuery(Builder $query, $value): void
    {
        $query->whereIn('user_no', to_array($value));
    }

    /**
     * id 查询
     * @param Builder $query
     * @param $value
     * @return void
     */
    public function scopeIdQuery(Builder $query, $value): void
    {
        $query->whereIn('id', to_array($value));
    }

    /**
     * 账号 查询
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeAccountQuery(Builder $query, string $value)
    {
        return $query->where('account', $value);
    }

    /**
     * close_at查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeCloseAtQuery(Builder $query, $value)
    {
        return $query->where('close_at', $value);
    }

    /**
     * job_sn 查询. 支持批量查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeJobSnQuery(Builder $query, $value)
    {
        return $query->whereIn('job_sn', to_array($value));
    }

    /**
     * job_sn like.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeJobSnLikeQuery(Builder $query, $value)
    {
        return $query->where('job_sn', 'like', '%' . $value . '%');
    }

    /**
     * 管理员状态查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountStatusQuery(Builder $query, $value)
    {
        return $query->whereIn('account_status', to_array($value));
    }

    /**
     * 管理员状态查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountStatusArrQuery(Builder $query, $value)
    {
        return $query->whereIn('account_status', to_array($value));
    }

    /**
     * 根据本部公司id查询
     *
     * @param Builder $query
     * @param $value
     * @author 秦昊
     * Date: 2021/9/6 20:52
     */
    public function scopeCompanyIdQuery(Builder $query, $value): void
    {
        $query->whereIn('company_id', to_array($value));
    }

    /**
     * 根据公司部门no查询
     * @param Builder $query
     * @param $value
     */
    public function scopeDepartmentNoQuery(Builder $query, $value): void
    {
        $query->whereIn('department_no', to_array($value));
    }

    /**
     * 手机号 模糊查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeMobileLikeQuery(Builder $query, $value): Builder
    {
        return $query->where('mobile', 'like', "%$value%");
    }

    /**
     * 入职时间开始查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRegisterAtStartQuery(Builder $query, $value): Builder
    {
        return $query->where('register_at', '>=', $value);
    }

    /**
     * 入职时间结束查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRegisterAtEndQuery(Builder $query, $value): Builder
    {
        return $query->where('register_at', '<=', $value);
    }

    /**
     * 离职时间开始查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeResignationAtStartQuery(Builder $query, $value): Builder
    {
        return $query->where('resignation_at', '>=', $value);
    }

    /**
     * 离职时间结束查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeResignationAtEndQuery(Builder $query, $value): Builder
    {
        return $query->where('resignation_at', '<=', $value);
    }

    /**
     * 旧系统代理人id
     * @param Builder $query
     * @param $value
     * @author leo 2023/1/18
     */
    public function scopeOldAgentIdQuery(Builder $query, $value)
    {
        $query->where('old_agent_id', $value);
    }

    /**
     * ID排序
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeSortByIdQuery($query, $value)
    {
        return $query->orderBy('id', $value);
    }

    /**
     * 是否开启接客
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeAdviserIsReceiveCustomerQuery($query, $value)
    {
        return $query->where('adviser_is_receive_customer', $value);
    }

    /**
     * 关联执业证状态
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeUseSalesQualificationStatusQuery($query, $value)
    {
        return $query->where('use_sales_qualification_status', $value);
    }

    /**
     * 关联角色
     * @return BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(CrmAdmRole::class, 'adm_role_id');
    }

    /**
     * 关联账户验证
     * @return HasOne
     */
    public function accountAuth(): HasOne
    {
        return $this->hasOne(CrmUserAuth::class, 'crm_user_id', 'id');
    }

    /**
     * expert_team_id
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeExpertTeamIdQuery($query, $value)
    {
        return $query->where('expert_team_id', $value);
    }

    /**
     * 身份
     * @param $value
     * @return mixed|null
     */
    public function getIdentityAttribute($value)
    {
        $value = $value ? json_decode($value, true) : [];

        if (filled($value))
        {
            $this->append('identity_map');
        }

        return $value;
    }

    /**
     * 入职时间
     * @return string
     */
    public function getRegisterAtStrAttribute(): string
    {
        return $this->register_at ? Carbon::createFromTimestamp($this->register_at)->format('Y-m-d H:i:s') : '';
    }

    /**
     * 入职日期
     * @return string
     */
    public function getRegisterDateStrAttribute(): string
    {
        return $this->register_at ? Carbon::createFromTimestamp($this->register_at)->format('Y-m-d') : '';
    }

    /**
     * 入职时间
     * @param $value
     * @return mixed
     */
    public function getRegisterAtAttribute($value)
    {
        $this->append('register_at_str');
        $this->append('register_date_str');

        return $value;
    }

    /**
     * 离职时间
     * @return string
     */
    public function getResignationAtStrAttribute(): string
    {
        return $this->resignation_at ? Carbon::createFromTimestamp($this->resignation_at)->format('Y-m-d H:i:s') : '';
    }

    /**
     * 离职日期
     * @return string
     */
    public function getResignationDateStrAttribute(): string
    {
        return $this->resignation_at ? Carbon::createFromTimestamp($this->resignation_at)->format('Y-m-d') : '';
    }

    /**
     * 离职时间
     * @param $value
     * @return mixed
     */
    public function getResignationAtAttribute($value)
    {
        $this->append('resignation_at_str');
        $this->append('resignation_date_str');

        return $value;
    }

    /**
     * 关联的销售
     * @return HasOne
     */
    public function coreSales(): HasOne
    {
        return $this->hasOne(CoreSales::class, 'sales_no', 'sales_no');
    }

    /**
     * 团队绑定用户查询
     * @param $query
     * @param $params
     */
    public function scopeTeamBindUserParamsQuery($query, $params)
    {
        if (blank($params))
        {
            return;
        }

        // 当前团队
        if (filled($joinTeamId = array_get($params, 'join_team_id')))
        {
            $query->whereHas('crmExpertTeamBindUsers', function ($query) use ($joinTeamId)
            {
                $query->teamIdQuery($joinTeamId);
                $query->endDateQuery(YesOrNo::NO);
            });
        }

        // 历史加入过的团队
        if (filled($historyJoinTeamId = array_get($params, 'history_join_team_id')))
        {
            $query->whereHas('crmExpertTeamBindUsers', function ($query) use ($historyJoinTeamId)
            {
                $query->teamIdQuery($historyJoinTeamId);
            });
        }
    }

    /**
     * 职位等级筛选
     * @param Builder $query
     * @param $value
     */
    public function scopePositionGradeQuery(Builder $query, $value)
    {
        $query->where('position_grade', $value);
    }

    /**
     * 归属的上级销售編號 查询
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeAscriptionUserNoQuery($query, $value)
    {
        return $query->where('ascription_user_no', $value);
    }

    /**
     * 未离职的用户
     *
     * @param $query
     * @return mixed
     */
    public function scopeNotDimissionQuery($query)
    {
        return $query->where('resignation_at', 0);
    }

    /**
     * 职位等级筛选 gt
     * @param Builder $query
     * @param $value
     */
    public function scopePositionGradeLtQuery(Builder $query, $value)
    {
        $query->where('position_grade', '<', $value);
    }

    /**
     * 归属上级
     * @return BelongsTo
     */
    public function ascriptionUser(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'ascription_user_no', 'user_no');
    }

    /**
     * 通过旧的工号进行查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeOldJobNoQuery(Builder $query, $value)
    {
        return $query->where('old_job_no', $value);
    }

    /**
     * use_sales_qualification_no 关联执业证查询.
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeUseSalesQualificationNoQuery(Builder $query, $value): Builder
    {
        return $query->where('use_sales_qualification_no', $value);
    }

    /**
     * sales_no 查询
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeSalesNoQuery($query, $value)
    {
        return $query->where('sales_no', $value);
    }

    /**
     * in sales_no 查询
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeInSalesNoQuery($query, $value)
    {
        return $query->whereIn('sales_no', to_array($value));
    }

    /**
     * 客服信息编号
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeCustomerServiceNoQuery($query, $value)
    {
        return $query->where('customer_service_no', $value);
    }

    /**
     * 员工绑定手机号记录
     * @return HasMany
     */
    public function userMobileBindLogs(): HasMany
    {
        return $this->hasMany(CrmUserMobileBindLog::class, 'crm_user_id');
    }

    /**
     * use_sales_qualification_no 未关联
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeEmptyUseSalesQualificationNoQuery(Builder $query): Builder
    {
        return $query->where('use_sales_qualification_no', '');
    }

    /**
     * 不为sales_no 查询
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeNotSalesNoQuery($query, $value)
    {
        return $query->where('sales_no','!=', $value);
    }

    /**
     * 根据部门no为空查询
     * @param Builder $query
     * @param $value
     */
    public function scopeEmptyDepartmentNoQuery(Builder $query, $value): void
    {
        $query->where('department_no','');
    }

    /**
     * 根据部门no为空或已经离开部门的成员
     * @param Builder $query
     * @param $value
     */
    public function scopeEmptyDepartmentNoOrLeaveQuery(Builder $query, $value): void
    {
        $query->where('department_no', '')->orWhereIn('user_no', to_array($value));
    }

    /**
     * 根据部门no为空查询
     * @param Builder $query
     * @param $value
     */
    public function scopeNotEmptyDepartmentNoQuery(Builder $query, $value): void
    {
        $query->where('department_no','!=','');
    }

    /**
     * 根据sales no not 为空查询
     * @param Builder $query
     */
    public function scopeSalesNoIsNotEmptyQuery(Builder $query): void
    {
        $query->where('sales_no','!=','');
    }

    /**
     * 根据sales no not 为空查询
     * @param Builder $query
     * @param $value
     */
    public function scopeMobileQuery(Builder $query, $value): void
    {
        $query->where('sales_no', $value);
    }

    /**
     * 是否离职
     * @return bool
     * @throws AppException
     */
    public function isDimission(): bool
    {
        $this->checkExistsAttributes('account_status');

        return $this->account_status === AccountStatus::DIMISSION;
    }

}
