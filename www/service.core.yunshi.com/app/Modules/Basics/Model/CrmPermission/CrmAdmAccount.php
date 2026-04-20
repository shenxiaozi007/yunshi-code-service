<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Model\Company\CoreHeadquartersCompany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 用户模型
 * Class CrmAdmAccount
 * @package App\Modules\Basics\Model\CrmPermission
 * @property integer id
 * @property string account_no
 * @property integer company_id
 * @property string account_status
 * @property string real_name
 * @property string job_sn
 * @property string account
 * @property int resignation_at
 * @property int register_at
 * @property string department_role
 * @property CoreHeadquartersCompany headquartersCompany
 * @property int old_id
 * @property string $mobile
 */
class CrmAdmAccount extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_adm_account';

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
     * 主表的唯一编号
     * @return string
     */
    public function mainNo(): string
    {
        return 'account_no';
    }

    /**
     * 是否超管
     */
    public function isSuperUser()
    {
        return $this->role_id == 0;
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
     * @return string
     */
    public function getAvatarUrlAttribute()
    {
        return file_url($this->avatar_id);
    }

    /**
     * 获取执业证编号
     * @return string
     */
    public function getQualificationCertificateSnAttribute()
    {
        return $this->CrmAdmAccountQualifications->qualification_certificate_sn ?? '';
    }

    /**
     * 获取子账户数量
     * @return mixed
     */
    public function getSubAccountQuantityAttribute()
    {
        return $this->subAccounts()->count();
    }

    /**
     * ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdQuery(Builder $query, $value)
    {
        return $query->where('id', $value);
    }

    /**
     * 批量查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdsQuery(Builder $query, $value)
    {
        return $query->whereIn('id', to_array($value));
    }

    /**
     * 角色ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRoleIdQuery(Builder $query, $value)
    {
        return $query->where('role_id', $value);
    }

    /**
     * account_no 查询.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountNoQuery(Builder $query, $value)
    {
        return $query->where('account_no', $value);
    }

    /**
     * account_no 查询.
     * @param Builder $query
     * @param array $value
     * @return Builder
     */
    public function scopeAccountNoArrQuery(Builder $query, array $value)
    {
        return $query->whereIn('account_no', $value);
    }

    /**
     * job_sn 查询.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeJobSnQuery(Builder $query, $value)
    {
        return $query->where('job_sn', $value);
    }

    /**
     * job_sn 模糊查询.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeJobSnLikeQuery(Builder $query, $value)
    {
        return $query->where('job_sn', 'like', "%$value%");
    }

    /**
     * 工号批量查询
     *
     * @param Builder $query
     * @param array   $value
     *
     * @return Builder
     */
    public function scopeJobSnInQuery(Builder $query, array $value)
    {
        return $query->whereIn('job_sn', $value);
    }

    /**
     * search_column 查询.
     *
     * @param Builder $query
     * @param array $value
     * @return Builder
     */
    public function scopeSearchColumnQuery(Builder $query, $value)
    {
        return $query->where(function ($query) use ($value)
        {
            $query->RealNameLikeQuery($value);

            $query->orWhere(function ($query) use ($value)
            {
                $query->JobSnLikeQuery($value);
            });
        });
    }

    /**
     * old_job_no 查询.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeOldJobNoQuery(Builder $query, $value)
    {
        return $query->where('old_job_no', $value);
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
     * close_at空查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeCloseAtQuery(Builder $query, $value)
    {
        return $query->where('close_at', $value);
    }

    /**
     * close_at空查询
     * @param $query
     * @param $value
     * @return Builder
     */
    public function scopeNeqCloseAtQuery(Builder $query, $value)
    {
        return $query->where('close_at', '!=', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountQuery(Builder $query, string $value)
    {
        return $query->where('account', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountLikeQuery(Builder $query, string $value)
    {
        return $query->where('account', 'LIKE', "%$value%");
    }

    /**
     * real_name 模糊搜索.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRealNameLikeQuery(Builder $query, string $value)
    {
        return $query->where('real_name', 'LIKE', "%$value%");
    }

    /**
     * real_name 搜索.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRealNameQuery(Builder $query, string $value)
    {
        return $query->where('real_name', $value);
    }

    /**
     * department_role 查询.
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeDepartmentRoleQuery(Builder $query, string $value)
    {
        return $query->where('department_role', $value);
    }

    /**
     * 销售角色查询
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeRoleQuery(Builder $query, string $value)
    {
        return $query->where('role', $value);
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
     * 手机号查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeMobileQuery(Builder $query, $value): Builder
    {
        return $query->where('mobile', $value);
    }

    /**
     * 手机号模糊查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeMobileLikeQuery(Builder $query, $value): Builder
    {
        return $query->where('mobile', 'LIKE',"%$value%");
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
     * 是否是经济公司查询
     * @param Builder $query
     * @param $value
     * @author leo 2021/12/20
     */
    public function scopeIsBrokerCompanyQuery(Builder $query, $value)
    {
        $query->whereHas('headquartersCompany', function ($query) use ($value)
        {
            $query->withoutGlobalScope('is_broker_company');
            $query->isBrokerCompanyQuery($value);
        });
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
     * 关联角色
     */
    public function sysRole()
    {
        return $this->belongsTo(CrmAdmRole::class, 'role_id');
    }

    /**
     * 获取公司名
     * @return mixed
     */
    public function getCompanyNameAttribute()
    {
        return $this->headquartersCompany->name ?? '';
    }


    /**
     * 获取分组名称
     * @return mixed
     */
    public function getTeamNameAttribute()
    {
        return $this->team->name ?? '';
    }

}
