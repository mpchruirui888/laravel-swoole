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

        echo phpinfo();
        die;
//        $this->redis->set('demo',json_encode(['id'=>1,'name'=>'小子']));
//        dd($this->redis->get('demo'));
    }


}
