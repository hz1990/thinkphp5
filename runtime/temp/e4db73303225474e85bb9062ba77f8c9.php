<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:61:"D:\WWW\think5\public/../application/home\view\index\show.html";i:1482397103;}*/ ?>
<html>
<header>
    <title>show page</title>
</header>
<style>
    form table{ border: 2px solid black; width:30%; margin: 0 auto;}
    table tr td{ border: 1px solid black; text-align: center;}
    .td_left{width:30%; text-align: right; font-size: 18px;}
    .td_right{width:70%; text-align: left;}
    .input{ width: 100%;}
    textarea{resize:none}
    .button1{padding: 2px 20px; border: 1px black dashed; border-top-left-radius: 80%; border-bottom-right-radius: 80%; border-top-right-radius: 5%; border-bottom-left-radius: 5%;}
    .button2{padding: 2px 20px; border: 1px black dashed; border-top-left-radius: 5%; border-bottom-right-radius: 5%; border-top-right-radius: 80%; border-bottom-left-radius: 80%;}
</style>
<body>
<form method="post" action="<?php echo Url('Index/show'); ?>" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="put"/>
    <table>
        <tr>
            <th colspan="2">联系方式调查</th>
        </tr>
        <tr>
            <td class="td_left">姓名：</td>
            <td class="td_right"><input type="text" name="name" maxlength="8" class="input" placeholder="请输入中文姓名"/></td>
        </tr>
        <tr>
            <td class="td_left">头像：</td>
            <td class="td_right"><input type="file" name="file" class="input" placeholder="请选择图像文件"/></td>
        </tr>
        <tr>
            <td class="td_left">电话：</td>
            <td class="td_right"><input type="number" name="tel" maxlength="16" class="input" placeholder="请填写电话号码"/></td>
        </tr>
        <tr>
            <td class="td_left">地址：</td>
            <td class="td_right"><input type="text" name="address" class="input" placeholder="请填写地址"/></td>
        </tr>
        <tr>
            <td class="td_left">时间：</td>
            <td class="td_right"><input type="date" name="date" class="input date" placeholder="请选择时间"/></td>
        </tr>
        <tr>
            <td class="td_left">邮箱：</td>
            <td class="td_right"><input type="email" name="email" maxlength="20" class="input" placeholder="请填写邮箱"/></td>
        </tr>
        <tr>
            <td class="td_left">简介：</td>
            <td class="td_right"><textarea type="email" name="email" maxlength="120" class="input" placeholder="请填写简介内容(120字)"></textarea></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="提交" class="button1"/>
                <input type="reset" value="重置" class="button2"/></td>
        </tr>
    </table>
</form>
</body>
</html>