<?php


namespace App\Common;

use Illuminate\Support\Facades\Redis;

class Factory
{
    public static function createRedis()
    {
        $redis = new Redis();
        return $redis::connection('myCluster');
    }
}
