<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"D:\WWW\think5\public/../application/home\view\index\index.html";i:1482485884;}*/ ?>
<html>
<header>
    <title>aaa</title>
</header>
<body>
<?php if(is_array($data) || $data instanceof \think\Collection): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
    <a href=""><?php echo $vo['name']; ?></a><br/>
<?php endforeach; endif; else: echo "" ;endif; ?>
<br/>
<?php echo $data->render(); ?>
<br/>
<div><?php echo captcha_img(); ?></div>
</body>
</html>