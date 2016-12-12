<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\View;

class Index extends Controller
{
    public function index()
    {
       /* $data=Db::name('admin')->select();
        echo '<pre>';
        print_r($data);*/
        //return '<p>this is tp5 index</p>';
        return $this->fetch('index');
    }
}
