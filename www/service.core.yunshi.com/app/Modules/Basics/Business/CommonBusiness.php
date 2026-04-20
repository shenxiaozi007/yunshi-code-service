<?php

namespace App\Modules\Basics\Business;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseBusiness;
use App\Kernel\Traits\RegionArrTrait;
use App\Modules\Basics\Dao\Common\BaseRegionDao;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class CommonBusiness
 * @package App\Modules
 */
class CommonBusiness extends BaseBusiness
{
    use RegionArrTrait;

    /**
     * CommonBusiness constructor.
     */
    public function __construct(
        protected BaseRegionDao $baseRegionDao,
    ) {
    }

    /**
     * 获取系统当前时间
     * @return array
     */
    public function now()
    {
        $response = [];

        $response['timezone'] = date_default_timezone_get();
        $response['now'] = get_now();

        return $response;
    }

    /**
     * 地区
     *
     * @return array|string[]
     * @author 秦昊
     */
    public function getRegions()
    {
        return $this->region;
    }

    /**
     * 地区筛选列表
     *
     * @param array $params
     *
     * @return Builder[]|\Illuminate\Database\Eloquent\Collection
     * @throws AppException
     */
    public function baseRegionList(array $params)
    {
        $columns = [
            'name',
            'code',
        ];
        return $this->baseRegionDao->getList($params, $columns);
    }

    /**
     * 根据PID获取列表
     * @param int $pid
     * @return
     */
    public function getListByPid(int $pid)
    {
        return $this->baseRegionDao->getListByPid($pid);
    }

    /**
     * 后台最新版本号
     * @return array
     */
    public function backendWebVersion(): array
    {
        return [
            'latest_version' => config('site.backend_web.version'),
        ];
    }

}
