<?php

namespace App\Http\Controllers\Home;

use App\Common\Factory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public $redis;

    public function __construct()
    {
        $conn = new Factory();
        $redis = $conn::createRedis();
        $this->redis = $redis;
    }

    public function index()
    {

        $this->redis->set('name','大王叫我来巡山！');
        dd($this->redis->get('name'));
//        $res = \DB::table('goods')->find('1');
//        dd($res);
//        return json_encode(['code'=>200,'data'=>['name'=>'Tdong','sex'=>1],'msg'=>'success']);
    }


}
