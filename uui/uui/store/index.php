<?php include "../frame/__data.php";?>
<!doctype html>
<html lang="zh-TW">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Language" content="zh-TW">
	<meta content="免費官網購物建站提供者 一天讓你擁有電子商務官網。幫你出貨，超世界級的速度。一條龍解決方案，可代操作。連結世界，出貨全球。" name="description">
	<meta content="品牌電商,官網購物,金流,物流,購物車,倉儲服務,開店工具,uitox inside" name="keywords">
	<meta content="品牌電商,官網購物 | uitox inside" property="og:site_name">
	<meta content="品牌電商,官網購物 | uitox inside" property="og:title">
	<meta content="website" property="og:type">
	<meta content="免費官網購物建站提供者,一天讓你擁有電子商務官網,幫您出貨,超世界級的速度。一條龍解決方案,可代操作,連結世界,出貨全球。" property="og:description">
	<meta content="http://www.uitox.com/inside" property="og:url">
	<meta content="http://www.uitox.com/c/web/inside/assets/img/intro/fb.jpg" property="og:image">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title>品牌電商,官網購物 | uitox inside</title>
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../assets/css/frame/frame.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/store/index.css">
	<!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../assets/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
	<?php include "../frame/_header_store.php";?>
	<?php include "../store/_store_slide.php";?>
	<section class="block">
		<div class="container">
		<h1>為什麼選用 uitox inside ?</h1>
		<h2>全功能、時尚設計的官方網店</h2>
		<p>電子商務其實一點都不難－我們的目標是讓所有店主都可以輕易地營運網店，展示自己的品牌。技術上，你不需要學習任何電腦程式編寫技能。我們的設計團隊擁有豐富國外經驗，保證為店主提供最前端的時尚設計。</p>
		</div>
	</section>
	<section class="block">
		<div class="container">
			<h1>你的品牌官網</h1>
			<div class="left-col">
				<h2>客製化你的電子商務網站</h2>
				<p>You have complete control over the look and feel of your website, from its domain name to its layout, colors and content.</p>
				<h2>不需要設計技能</h2>
				<p>Choose from over 100 professional store templates, or build your own design using HTML and CSS.</p>
			</div>
			<!-- <img src="../assets/img/store/demo01.jpg" alt="" style="float: right;"> -->
		</div>
	</section>
	<section class="case block">
		<div class="container">
			<h1>多種版型免費使用</h1>
			<a href="" name="case"></a>
			<a href="#" class="theme"><img src="../assets/img/case/c1.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c2.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c3.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c4.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c5.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c6.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c7.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c8.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c9.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c10.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c11.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c12.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c13.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c14.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c15.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c16.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c17.jpg" alt=""></a>
			<a href="#" class="theme"><img src="../assets/img/case/c18.jpg" alt=""></a>

		</div>
	</section>
	<?php include "../frame/_footer.php";?>
	<?php include "../frame/__js_library.php";?>
	<script>
    (function($){
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            autoplay: 5000,
            speed: 800,
            loop: false,
            grabCursor: true,
            calculateHeight: true,
            resizeReInit: true,
            paginationClickable: true,
        })
        $(window).resize(function() {
            mySwiper.reInit();
        });
    })(jQuery);
    </script>
</body>
</html>
