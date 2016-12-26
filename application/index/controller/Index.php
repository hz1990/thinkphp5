<?php
namespace app\index\controller;
use think\Controller;
use think\Db;

class Index extends Controller
{
    public function _initialize()
    {
        echo '';
    }
    public function index()
    {
        config([
            'default_home_url'=>'http://www.baidu.com',
            'wait_time'=>'2'
        ]);
        $data=Db::name('admin')->select();
        $this->assign('data',$data);
        $this->assign('url',config('default_home_url'));
        $this->assign('time',config('wait_time'));
        return $this->fetch();
    }
    public function hello($name=''){
        echo $name;
        echo '<p>this is show page</p>';
        return $this->fetch();
    }
}
