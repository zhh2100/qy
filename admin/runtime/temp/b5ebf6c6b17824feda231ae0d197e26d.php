<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/app.yuxiaxie888.cn/application/app/view/index/mm.html";i:1538941074;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>千月影视_APP下载在线免费观看全网影视</title>
    <link rel="stylesheet" href="css/mh_style.css">
    <script>
        adaptation(750);
        function adaptation(size) {
            if (document.documentElement.clientWidth > size) {
                document.documentElement.style.fontSize = size / 7.5 + "px"
            } else {
                document.documentElement.style.fontSize = document.documentElement.clientWidth / 7.5 + "px"
            }
        }
    </script>

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?d220d387d09be72f98cfcb3cd301affd";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body style="background:#fff;">
<div class="step" style="display:none;">
    <div class="step-header">
        苹果手机如何通过信任教程
    </div>
    <img src="images/step/step-0.png" alt="">
    <img src="images/step/step-1.png" alt="">
    <img src="images/step/step-2.png" alt="">
    <img src="images/step/step-3.png" alt="">
    <img src="images/step/step-4.png" alt="">
    <img src="images/step/step-5.png" alt="">
    <img src="images/step/step-6.png" alt="">
    <img src="images/step/step-7.png" alt="">
</div>
<div class="weixin" style="display:none;">
    <img src="images/step/weixinTip.png" alt="">
</div>
<div class="an-pc" style="display:none;">
    <p>正在后台下载安装中</p>
    <p>请稍等...</p>
</div>
<script src="js/jquery.2.1.4.min.js"></script>
<script>
    $(function () {
        if( typeof WeixinJSBridge !== "undefined" ) {
            $('.weixin').show();
        }else{
            down();
        }
    });
    function down() {
        if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
            //苹果下载地址
            window.location.href ="https://baidu.com";  //苹果替换下载地址
            $('.step').show();
        } else if (/(Android)/i.test(navigator.userAgent)) {
            //安卓下载地址
            $('body').css('background','#fff');
            $('an-pc').show();
            window.location.href ="https://baidu.com"; //安卓替换下载地址
        } else {
            //pc下载地址，默认可以为安卓版本
            $('body').css('background','#fff');
            $('an-pc').show();
            window.location.href ="https://baidu.com";
        }
    }
</script>
</body>
</html>