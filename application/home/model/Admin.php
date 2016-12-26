<?php
/**
 * Created by PhpStorm.
 * User: XL
 * Date: 2016/12/22
 * Time: 15:45
 */
namespace app\home\model;

use think\Model;

class Admin extends Model{
    protected static function init()
    {
        Admin::event('before_delete',function($admin){
            if($admin->name =='admin'){
                return false;
            }
        });
    }
}