<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:58:"/www/wwwroot/88.88.88.88/application/app/view/index/m.html";i:1534583192;}*/ ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=no">
<meta name="applicable-device" content="pc,mobile">
<title>千月影视_壕送会员</title>
<link rel="stylesheet" href="/public/static/share/style.css">
<script src="/public/static/share/jquery-2.1.4.min.js"></script>
<script>
window.onload=window.onresize=function(){
    document.documentElement.style.fontSize=20*document.documentElement.clientWidth/375+'px'
};
</script>
</head>
<body>
  
    <div class="box">
        <img src="/public/static/share/1.jpg" height="100%" width="100%">
        <a href="javascript:;" class="down"></a>
    </div>
    <div class="shade_share"></div>
    <div class="share_pic">
        <img src="/public/static/share/live_weixin.png"/>
    </div>
<script>
    $('.down').click(function(){
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
        if(isAndroid)
        {
            var weixin=is_weixin();
            if(weixin){
                $('.shade_share').css('display','block');
                $('.share_pic').css('display','block');
            }else{
                window.location.href="http://downloadpkg.apicloud.com/app/download?path=/zip/cc/b1/ccb1b6933e27b5fd557d06cc29496ade.apk";
            }
        }else{
          
            window.location.href="http://88.88.88.88/";
        }
    });
    
//js判断微信浏览器的代码：

function is_weixin(){
    var ua = navigator.userAgent.toLowerCase();
    var qq=ua.match(/MQQBrowser/i)=="mqqbrowser";
    if(ua.match(/MicroMessenger/i)=="micromessenger") {
        return true;
    }else if(ua.indexOf('mobile mqqbrowser')>-1){
        return true;
    }
    else if(ua.match(/QQ/i) == "qq"&&qq==false){
        return true;
    }else if (ua.match(/WeiBo/i) == "weibo") {
        return true;
    }else if(ua.match(/Alipay/i)=="alipay"){
        return true;
    }else {
        return false;
    }
}
</script>
</body>
</html>