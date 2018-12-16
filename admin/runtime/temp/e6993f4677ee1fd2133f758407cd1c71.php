<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:57:"C:\wwwroot\app.m6php.cn/application/app\view\index\m.html";i:1536914056;}*/ ?>
﻿
<!DOCTYPE HTML>
<!--[if IE 8 ]> <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
		<!-- TITLE -->
	<title>千月影视手机客户端</title>

	<!-- CSS -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<style>
		*{margin: 0;padding: 0;}
		body{font-family: SimHei,'微软雅黑';}
		.header-center-box{text-align: center;}
		.header-slider li{background-size: auto 100%;background-position: center center;}
		h2.light-heading{font-weight: bold;}
		.download{margin-top: 40px;}
		.download .code{display: inline-block; width: 120px;height: 120px;vertical-align: top;border-radius: 6px;padding: 10px;background: #fff;overflow: hidden;margin-bottom: 30px;}
		.downloadBtn{display: inline-block;margin:0 30px;}
		.download .button{padding:0 35px 0 35px;height: 52px;line-height: 52px; margin-top:2px;margin-bottom:12px;display: block;border: 2px solid;color: #fff;font-size: 14px;padding-left: 60px;}
		.header-logo{margin-bottom: 30px;}
		.button.transparent-white, .button.hover-transparent-white:hover{background:inherit;background-color: transparent;}
		.button-ios{background-image: url(images/btn-ios01.png);background-size: 19px 23px; background-repeat:  no-repeat;background-position: 30px center;background-color: transparent;}
		.button-android{background-image: url(images/btn-android01.png);background-size: 24px 27px; background-repeat:  no-repeat;background-position: 30px center;background-color: transparent;}
		.button-ios:hover{background-image: url(images/btn-ios02.png);background-color: #fff;color: #4d4d4d;border-color: #fff;}
		.button-android:hover{background-image: url(images/btn-android02.png);background-color: #fff;color: #4d4d4d;border-color: #fff;}
		header .tipP{font-size: 14px;}
		.progressBar{text-align: center;position: fixed;left:0;right:0;margin-left: -100px;top: 0;z-index: 10000;background: rgba(255,255,255,0.6);-webkit-border-radius: 2px;border-radius: 2px;}
		.progressBar a{display:block;height: 2px;width: 0; background: rgba(0,0,0,0.4);-webkit-border-radius: 2px;border-radius: 2px;}
		@media screen  and (min-width: 480px) and (max-width: 1200px){
			.col-md-5 img{margin-top: 30px; }

		}
		@media screen  and (max-width: 480px){
			[class*="col-"]:nth-child(1) .header-center-box-content{padding-top: 20px!important;}
			h2.light-heading{font-size: 26px;}
			h5.light-heading{font-size: 20px;}
			header p{font-size: 14px;}
			header .tipP{font-size: 12px;}
			.download{margin-top: 20px;}
			.download .code{display: none;}
			.header-logo img{width: 80px;}
			header .owl-item:nth-child(1) li{background-image: url(images/bg-sm-01.jpg)!important;}
		}
	</style>
</head>

<body>

<!-- 进度条 -->
<div class="progressBar">
	<a href="###"></a>
</div>

<div id="full-container">
	<header id="header">

		<section id="header-featured-content-outer">
			<div class="header-parallax fullscreen">
				<div class="header-featured-content">
					<ul class="header-slider owl-carousel" data-hs-autoplay-time="7000" data-hs-transition-style="fadeUp">
						<!-- 第一屏 -->
						<li data-stellar-background-ratio="0.5">
							<div class="header-colored-background" data-background-color="#0091ff" data-background-color-opacity="0.85"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-7">
										<div class="header-center-box">
											<div class="header-center-box-content">
													<span class="header-logo">
														<img src="images/icon.png"
															 class="animated"
															 style="animation-delay:0s;">
													</span>

												<h2 class="light-heading animated"
													style="animation-delay:0.3s;">
	<?php
            $txt_file=file("bj/Softwarename/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h2>

												<h5 class="light-heading subhader animated"
													style="animation-delay:0.4s;">
	<?php
            $txt_file=file("bj/briefintroduction/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h5>

												<p  class="animated"
													style="animation-delay:0.5s;">
	<?php
            $txt_file=file("bj/information/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</p>

												<div class="download">
													<img src="http://qr.liantu.com/api.php?text=http://120.86.156.22:8082/app/index/m.html?uid=<?php echo $sid; ?>" width="112" height="112" alt=""
														 style="animation-delay:0s;">
													<div class="downloadBtn">
														<a class="button rounded button-ios animated" style="animation-delay:0.7s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D">
															苹果版下载
														</a>

														<a class="button rounded button-android animated" style="animation-delay:0.8s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D" >
															安卓版下载
														</a>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="header-center-box">
											<div class="header-center-box-content">
												<div class="vertical-featured-image-container">
													<img src="images/mobile01.png" alt="" class="animated"
														 style="animation-delay:1s;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<img src="images/bg01.png" alt="">
						</li>
						<!-- 第二屏 -->
						<li data-stellar-background-ratio="0.5">
							<div class="header-colored-background" data-background-color="#fb9e35" data-background-color-opacity="0.9"></div>
							<div class="container">
								<div class="row">
									<div class="col-md-7">
										<div class="header-center-box">
											<div class="header-center-box-content">
													<span class="header-logo">
														<img src="images/icon.png"
															 class="animated"
															 style="animation-delay:0s;">
													</span>

												<h2 class="light-heading animated"
													style="animation-delay:0.3s;">
	<?php
            $txt_file=file("bj/Softwarename/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h2>

												<h5 class="light-heading subhader animated"
													style="animation-delay:0.4s;">
	<?php
            $txt_file=file("bj/briefintroduction/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h5>

												<p
													class="animated"
													style="animation-delay:0.5s;">
	<?php
            $txt_file=file("bj/information/2.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</p>

												<div class="download">
													<img src="http://qr.liantu.com/api.php?text=http://120.86.156.22:8082/app/index/m.html?uid=<?php echo $sid; ?>" width="112" height="112" alt=""
														 style="animation-delay:0.6s;">
													<div class="downloadBtn">
														<a class="button rounded button-ios animated" style="animation-delay:0.7s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D">
															苹果版下载
														</a>

														<a class="button rounded button-android animated" style="animation-delay:0.8s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D" >
															安卓版下载
														</a>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="header-center-box">
											<div class="header-center-box-content">
												<div class="vertical-featured-image-container">
													<img src="images/mobile02.png" alt=""
														 class="animated"
														 style="animation-delay:1s;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<img src="images/bg02.jpg" alt="">
						</li>
						<!-- 第三屏 -->
						<li data-stellar-background-ratio="0.5">
							<div class="header-colored-background" data-background-color="#ff7081" data-background-color-opacity="0.9"></div>
							<div class="container">
								<div class="row">

									<div class="col-md-7">
										<div class="header-center-box">
											<div class="header-center-box-content">
													<span class="header-logo">
														<img src="images/icon.png"
															 class="animated"
															 style="animation-delay:0s;">
													</span>

												<h2 class="light-heading animated"
													style="animation-delay:0.3s;">
	<?php
            $txt_file=file("bj/Softwarename/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h2>

												<h5 class="light-heading subhader animated"
													style="animation-delay:0.4s;">
	<?php
            $txt_file=file("bj/briefintroduction/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h5>

												<p
													class="animated"
													style="animation-delay:0.5s;">
	<?php
            $txt_file=file("bj/information/3.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</p>

												<div class="download">
													<div class="img-box">
<img src="http://qr.liantu.com/api.php?text=http://120.86.156.22:8082/app/index/m.html?uid=<?php echo $sid; ?>" width="112" height="112" alt=""

														 style="animation-delay:0.6s;">
													<div class="downloadBtn">
														<a class="button rounded button-ios animated" style="animation-delay:0.7s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D">
															苹果版下载
														</a>

														<a class="button rounded button-android animated" style="animation-delay:0.8s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D" >
															安卓版下载
														</a>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="header-center-box">
											<div class="header-center-box-content">
												<div class="vertical-featured-image-container">
													<img src="images/mobile03.png" alt=""
														 class="animated"
														 style="animation-delay:1s;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<img src="images/bg03.jpg" alt="">
						</li>
						<!-- 第四屏 -->
						<li data-stellar-background-ratio="0.5">
							<div class="header-colored-background" data-background-color="#1dc567" data-background-color-opacity="0.85"></div>
							<div class="container">
								<div class="row">

									<div class="col-md-7">
										<div class="header-center-box">
											<div class="header-center-box-content">
													<span class="header-logo">
														<img src="images/icon.png"
															 class="animated"
															 style="animation-delay:0s;">
													</span>

												<h2 class="light-heading animated"
													style="animation-delay:0.3s;">
	<?php
            $txt_file=file("bj/Softwarename/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h2>

												<h5 class="light-heading subhader animated"
													style="animation-delay:0.4s;">
	<?php
            $txt_file=file("bj/briefintroduction/1.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</h5>

												<p
													class="animated"
													style="animation-delay:0.5s;">
	<?php
            $txt_file=file("bj/information/4.txt");
            foreach($txt_file as $value){
                echo $value."<br />";
            }
        ?>
												</p>

												<div class="download">
													<div class="img-box">
<img src="http://qr.liantu.com/api.php?text=http://120.86.156.22:8082/app/index/m.html?uid=<?php echo $sid; ?>" width="112" height="112" alt=""
														 style="animation-delay:0.6s;">
													<div class="downloadBtn">
														<a class="button rounded button-ios animated" style="animation-delay:0.7s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D">
															苹果版下载
														</a>

														<a class="button rounded button-android animated" style="animation-delay:0.8s;" href="http://www.appbsl.com/index.php?ctl=app_download&code=paC0qr%2BgtLTQwODE3LS0wA%3D%3D" >
															安卓版下载
														</a>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-md-5">
										<div class="header-center-box">
											<div class="header-center-box-content">
												<div class="vertical-featured-image-container">
													<img src="images/mobile04.png" alt=""
														 class="animated"
														 style="animation-delay:1s;">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<img src="images/bg04.jpg" alt="">
						</li>
					</ul>
				</div>
			</div>

		</section>

	</header>

</div>

<div id="website-loading">
	<div class="loading-effect">
		<div class="la-ball-fall">
			<div></div>
			<div></div>
			<div></div>
		</div>
		<span class="loading-title">加载中</span>
	</div>
</div>

<!-- JAVASCRIPT -->
<script src="js/jquery.js"></script>
<script src="js/jquery.stellar.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src='js/custom.js'></script>

</body>
</html>