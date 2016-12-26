<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:63:"D:\WWW\think5\public/../application/index\view\index\index.html";i:1481702290;}*/ ?>
<html>
<head>
    <style>
        .center{height:200px; width:600px; border:1px solid #ccc; margin: auto; position: absolute; top: 0; left: 0; bottom: 0; right: 0;   text-align:center;}
    </style>
</head>
<body>
<a href="<?php echo Url('index/hello'); ?>">hello</a>
<div class="center" id="center">
    <font class="font" id="font" style="color: #9877f9; font-family:微软雅黑; font-size:36; font-weight:700; line-height:200px;">welcome</font>
</div>
</body>
</html>
<script src="http://localhost/think5/public/static/js/jquery.min.js"></script>
<script language="JavaScript">
    var getRandomColor = function(){
        return '#'+(function(h){
                    return new Array(7-h.length).join("0")+h
                })((Math.random()*0x1000000<<0).toString(16))
    }
    var speed = 200; //转换速度 (1000 = 1 秒)
    var speed0 = 100; //转换速度 (1000 = 1 秒)
    var f= $(".font");
    var text=f.text();
    //alert(text);
    function changeCharColor(text)
    {
        var color=getRandomColor();
        document.getElementById("font").style.color=color;
    }
    function changeboderColor(text)
    {
        var color=getRandomColor();
        document.getElementById("center").style.border='1px dashed'+color;
    }
    setInterval("changeCharColor()", speed);
    setInterval("changeboderColor()", speed0);
</script>