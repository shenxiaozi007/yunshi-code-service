<?php

namespace App\Modules\Basics\Model\CorePermission;

use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Constant\Common\SuperAdministratorRole;
use App\Modules\Basics\Constant\Common\YesOrNo;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Basics\Model\CrmPermission\CrmUser;
use App\Modules\Basics\Model\CrmPermission\CoreHeadquartersDepartment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 系统用户模型
 * Class Company
 * @package App\Modules\Management\Model
 * @property int $id
 * @property int $real_name
 * @property string $mobile
 * @property CrmUser|null bindCrmUser
 * @property string account_no
 * @property string bind_crm_user_no
 * @property CoreAdmAccountAuth accountAuth
 * @property string account
 * @property string department_no
 * @property int is_enable_extension
 */
class CoreAdmAccount extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'core_adm_account';

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
     * @var string[]
     */
    public $casts = [
        'cfyf_manage_company_nos'   => 'array'
    ];

    /**
     * @var array
     */
    protected $guarded = [];

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
     * 获取角色名称
     * @return string
     */
    public function getRoleNameAttribute()
    {
        return $this->sysRole->name ?? '';
    }

    /**
     * 获取部门名称
     * @return string
     */
    public function getDepartmentNameAttribute()
    {
        return $this->department->name ?? '';
    }

    /**
     * 超管，造个假数据，前端显示用
     * @param $value
     * @return mixed
     */
    public function getRoleIdAttribute($value)
    {
        // 超管，造个假数据，前端显示用
        if ($value == 0)
        {
            $now = get_now();

            $data = [
                'add_time'         => $now,
                'id'               => 0,
                'last_update_time' => $now,
                'name'             => SuperAdministratorRole::NAME,
                'remark'           => SuperAdministratorRole::NAME,
            ];

            $this->setRelation('sysRole', new CoreAdmRole($data));
        }

        return $value;
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
     * ID查询(批量)
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdsQuery(Builder $query, $value): Builder
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
        return $query->whereIn('role_id', to_array($value));
    }

    /**
     * 手机号模糊查询
     *
     * @param Builder $query
     * @param $value
     * @author 秦昊
     * Date: 2021/9/14 11:24
     */
    public function scopeMobileLikeQuery(Builder $query, $value): void
    {
        $query->where('mobile', 'LIKE', "%$value%");
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
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeDepartmentNoQuery(Builder $query, $value)
    {
        return $query->where('department_no', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeDepartmentNosQuery(Builder $query, $value)
    {
        return $query->whereIn('department_no', to_array($value));
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
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeRealNameLikeQuery(Builder $query, string $value)
    {
        return $query->where('real_name', 'LIKE', "%$value%");
    }

    /**
     * account_no 查询.
     *
     * @param Builder $query
     * @param $value
     */
    public function scopeAccountNoQuery(Builder $query, $value): void
    {
        $query->where('account_no', $value);
    }

    /**
     * 关联角色
     */
    public function sysRole()
    {
        return $this->belongsTo(CoreAdmRole::class, 'role_id');
    }

    /**
     * 关联accountAuth
     *
     * @return HasOne
     * @author 秦昊
     * Date: 2021/9/13 14:10
     */
    public function accountAuth()
    {
        return $this->hasOne(CoreAdmAccountAuth::class, 'account_id', 'id');
    }

    /**
     * 绑定crm_user
     * @return BelongsTo
     */
    public function bindCrmUser(): BelongsTo
    {
        return $this->belongsTo(CrmUser::class, 'bind_crm_user_no','user_no');
    }

    /**
     * 绑定的crm账户
     * @return string
     */
    public function getBindCrmAccountAttribute(): string
    {
        $account = (string)array_get($this, 'bindCrmUser.account');

        $this->makeHidden(['bindCrmUser']);

        return $account;
    }

    /**
     * cfyf是否开启了管理B端公司的权限细分
     * @return bool
     */
    public function cfyfIsManageSpecificCompany(): bool
    {
        return ((int) $this->cfyf_is_manage_specific_company) === YesOrNo::YES;
    }

    /** cfyf细分管理的B端公司
     * @param $companyNos
     * @return void
     */
    public function setCfyfManageCompanyNosAttribute($companyNos)
    {
        $companyNos = array_map(function($v){
            return $v;
        }, array_filter($companyNos));

        $this->attributes['cfyf_manage_company_nos'] = json_encode($companyNos);
    }

    /**
     * 细分管理B端公司获取器，格式化一个输出字段值
     * @param $value
     * @return array
     */
    public function getCfyfManageCompanyNosAttribute($value)
    {
        if (is_null($value))
        {
            return [];
        }

        return json_strict_decode($value);
    }

    /**
     * 是否开启了管理B端公司的权限细分
     * @return bool
     */
    public function isCfyfManageSpecificCompany(): bool
    {
        return ((int) $this->cfyf_is_manage_specific_company) === YesOrNo::YES;
    }

    /**
     * 是否开启了管理B端公司的权限细分
     * @return bool
     */
    public function isManageSpecificCompany(): bool
    {
        return ((int) $this->cfyf_is_manage_specific_company) === YesOrNo::YES;
    }

}
