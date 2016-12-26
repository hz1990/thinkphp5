<?php
/**
 * Created by PhpStorm.
 * User: XL
 * Date: 2016/12/22
 * Time: 17:40
 */
namespace app\home\validate;
use think\Validate;
class Admin extends Validate{
    protected $rule=[
        'name'=>'require|max:25',
        'password'=>'require|min:6',
    ];
}