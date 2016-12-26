<?php
namespace app\home\controller;
use app\home\model\Admin;
use think\Controller;
use think\Db;
use think\Loader;
use think\Request;

class Index extends Controller
{
    public function _initialize()
    {
        echo '<hr/>';
    }
    public function index()
    {
        /*config([
            'default_home_url'=>'http://www.baidu.com',
            'wait_time'=>'2'
        ]);
        $data=db('admin')->alias(['admin'=>'a','user'=>'b'])->join('user','b.id=a.id')->select();
        print_r($data);
        $data1=db('admin')->where('name|password','like','%user%')->select();
        print_r($data1);
        db('admin')->where(['name'=>'admin'])->delete();
        $data2=db('admin')->select();
        print_r($data2);
        $data3=array(['name'=>'admin','password'=>'admin']);
        db('admin')->where(['name'=>'admin1','password'=>'admin1'])->update($data3);
        echo Db::table('admin')->getLastSql();
        $data4=db('admin')->select();
        print_r($data4);*/
        /*$admin= new Admin();
        $admin->where(['name'=>'admin'])->delete();
        $data3=array('id'=>1,'name'=>'admin','password'=>'admin','last_login_time'=>'2016-12-22','register_time'=>'2016-12-22');
        $admin->save($data3);
        $data5=db('admin')->select();
        print_r($data5);*/
        /*$data1=Db::name('admin')->select();
        $data2=db('admin')->select();
        $data3=Db::select(function($query){
            $query->table('admin')->where(1);
        });
        echo '<pre>';
        print_r($data1);
        print_r($data2);
        print_r($data3);
        $name=Db::table('admin')->where('id',1)->value('name');
        $column=Db::table('admin')->column('name','id');
        echo $name;
        print_r($column);
        $data=[
        'name'=>'user3',
        'password'=>'user3',
        'last_login_time'=>'2016-12-22',
        'register_time'=>'2016-12-22'];
        Db::name('admin')->insert($data);
        db('admin')->insertGetId($data);
        db('admin')->where('id',4)->update(['name'=>'admin1','password'=>'admin1']);
        $data4=db('admin')->select();
        print_r($data4);*/
        $admin=Db::table('admin');
        $data=$admin->paginate(2);
        $this->assign('data',$data);
        /*$array=[
            'id'=>1,
            'name'=>'admin',
            'password'=>'admin',
            'last_login_time'=>'2016-12-22',
            'register_time'=>'2016-12-22'];
        $validate=Loader::validate('Admin');
        if(!$validate->check($array)){
            print_r($validate->getError());
        }else{
            Db::table('admin')->insert($array);
        }
        $data=Db::name('admin')->select();
        $data=json_encode($data);
        $this->assign('admin',$data);*/
        return $this->fetch();
    }
    public function show($name=''){
        /*$request=Request::instance();
        echo 'domain:'.$request->domain().'<br/>';
        echo 'file:'.$request->file().'<br/>';
        echo 'url:'.$request->url().'<br/>';
        echo 'url with domain:'.$request->url(true).'<br/>';
        //echo 'url without domain:'.$request->url(false).'<br/>';
        echo 'root:'.$request->root(true).'<br/>';
        //echo 'root without domain:'.$request->root(false).'<br/>';
        echo 'pathinfo:'.$request->pathinfo().'<br/>';
        echo 'pathinfo:'.$request->path().'<br/>';
        echo 'ext:'.$request->ext().'<br/>';
        echo 'moudle:'.$request->module().'<br/>';
        echo 'type'.$request->type().'<br/>';
        echo 'ip:'.$request->ip().'<br/>';
        echo 'isajax:'.var_export($request->isAjax(),true).'<br/>';
        echo 'param:';
        echo '<pre>';
        print_r($request->param());
        echo 'route:';
        print_r($request->route());
        echo 'dispathch:';
        print_r($request->dispatch());
        echo 'method:';
        if($request->isPut()){
            echo 'put';
        }elseif($request->isGet()){
            echo 'get';
        }
        echo '<br/>';
        session('name','zhangsan');
        echo 'session.name:';
        echo $request->session('name');
        if($request->isPost()){
            echo '<pre>';
            print_r($_POST);
        }
        $info=$request->header();
        echo '<pre>';
        print_r($info);*/
        echo '<pre>';
        print_r($_POST);
        print_r($_FILES);
        $file=request()->file('file');
        $info=$file->move(ROOT_PATH.'public/uploads');
        print_r($info);
        return $this->fetch();
    }
    public function verify(){
        vendor('captcha.captcha');
    }
}
