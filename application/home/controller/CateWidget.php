<?php
/**
 * Created by PhpStorm.
 * User: XL
 * Date: 2016/12/19
 * Time: 15:59
 */
namespace home\widget;
use Think\Controller;
use Think\Db;

class CateWidget extends Controller {
    public function menu(){
        $data=Db::table('cate')->select();
        $this->assign('menu',$data);
        $this->display('Cate:menu');
    }
}