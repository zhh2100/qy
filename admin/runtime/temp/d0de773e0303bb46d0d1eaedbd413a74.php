<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"/www/wwwroot/88.88.88.88/application/app/view/index/qudao.html";i:1534298450;}*/ ?>
<!doctype html>
<html style="font-size: 50px;">
<head>
  	<title>千月影视_APP下载</title>
    <meta charset="utf-8">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0"/>
    <meta name="format-detection" content="telephone=no,email=no,date=no,address=no">
    <link rel="stylesheet" type="text/css" href="/public/static/share/share.css" />
</head>
<body>
  <div class="sp-content">
  	<div class="bigImg">
  		<img src="/public/static/share/top.jpg">
  		<div class="getVip">
  			<input id="phone" type="tel" name="telNumber" placeholder="请输入手机号" maxlength="11"><button onClick="getZce()">领取VIP</button>
  		</div>
  	</div>
  	<div class="rule">
  		<h3>
  		<p>
  			使用规则
  		</p>
  		</h3>
  		<ul>
  			<li>千月影视是一款免费看爱奇艺、优酷、腾讯、乐视、芒果TV、搜狐、PPTV等VIP视频的APP。</li>
  			<li>需下载千月影视APP，用手机号注册登录后，在【充值】页面使用体验时长券。</li>
  			<li>此页面可以分享给好友，分享成功可获得更多观影时长。</li>
  		</ul>
  	</div>
  </div>
</body>
<script src="http://qicaiapp.oss-cn-beijing.aliyuncs.com/img/jquery.min.js"></script>
<script src="http://qicaiapp.oss-cn-beijing.aliyuncs.com/img/layer.js"></script>
<script type="text/javascript">
  function getZce() {
    var phone = document.getElementById("phone").value;
    if (phone=='') {
      layer.msg('请输入手机号码');
      return;
    }
    if (phone.length != 11) {
      layer.msg('请输入11位手机号码');
      document.getElementById("phone").value = '';
      return;
    }

    $.ajax({
      type: "GET",
      url: "http://88.88.88.88/login/login/zce.html",
      data: {phone:phone,uid:'<?php echo $uid; ?>',sid:'<?php echo $sid; ?>',code:'<?php echo $code; ?>'},
      dataType: "jsonp",
      success: function(data){
         if (data.code == 1) {
           layer.msg('领取成功！');
           setTimeout("tourl()","2000");
         }else if (data.code == 0) {
           layer.msg(data.msg);
           setTimeout("tourl()","2000");
         }
        }
    });


    //

  }
  function tourl(){
    window.location.href='http://88.88.88.88/app/index/m.html';
  }
</script>
</html>
