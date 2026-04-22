<?php

namespace App\Modules\Management\Business\System\Factory;

use Carbon\Carbon;

trait FormatParamsTrait
{
    /**
     * @param array $params
     * @return array
     */
    public function formatParams(array $params = [])
    {
        $params['order_by'] = 'add_time,desc';

        $addTimeStart = array_get($params, 'add_time_start');
        if ($addTimeStart)
        {
            $params['add_time_start'] = Carbon::parse($addTimeStart)->startOfDay()->timestamp;
        }

        $addTimeEnd = array_get($params, 'add_time_end');
        if ($addTimeEnd)
        {
            $params['add_time_end'] = Carbon::parse($addTimeEnd)->endOfDay()->timestamp;
        }

        return $params;
    }
}
