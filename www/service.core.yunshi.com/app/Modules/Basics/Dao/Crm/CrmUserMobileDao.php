<?php

namespace App\Modules\Basics\Dao\Crm;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseDao;
use App\Modules\Basics\Model\CrmPermission\CrmUserMobile;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CrmUserMobileDao
 * @package App\Modules\Basics\Dao\Crm
 */
class CrmUserMobileDao extends BaseDao
{
    /**
     * @return Model
     */
    protected function getModel(): Model
    {
        return app(CrmUserMobile::class);
    }

    /**
     * 通过手机号查询
     * @param string $mobile
     * @param array $columns
     * @param array $relations
     * @throws AppException
     */
    public function findByMobileOrFail(string $mobile, array $columns = [], array $relations = [])
    {
        $params = [
            'mobile' => $mobile,
        ];

        $model = $this->doQuery($params, $columns, $relations)->first();

        if (blank($model))
        {
            throw new  AppException(110006, [], '手机号没有添加到通讯号管理');
        }

        return $model;
    }

    public function beforeBuildFiled(Builder $query, array $params): array
    {
        if (filled($realNameLike = array_pull($params, 'real_name_like')))
        {
            $crmUserParams['real_name_like'] = $realNameLike;
        }

        if (filled($jobSnLike = array_pull($params, 'job_sn_like')))
        {
            $crmUserParams['job_sn_like'] = $jobSnLike;
        }

        $params['crm_user_params'] = $crmUserParams ?? [];

        return $params;
    }
}
