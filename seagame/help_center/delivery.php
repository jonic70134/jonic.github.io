<?php 
    include "../frame/__data.php";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="QA">
    <meta name="keywords" content="QA">
    <meta property="og:site_name" content="QA"/>
    <meta property="og:title"/>
    <meta property="og:type" content="QA"/>
    <meta property="og:description" content="QA"/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content="../c/img/sample/mobile_hero.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <title>ASUS STORE 首頁</title>
    <link rel="shortcut icon" href="../c/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../c/css/white/default/main/frame.css">
    <link rel="stylesheet" type="text/css" href="../c/css/front/help_center.css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/white/default/main/ie8.css" media="screen">
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../c/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
	<?php include "../frame/_header_inn.php";?>
	<div class="container">
		<?php include "../help_center/_side_menu.php";?>
		<article class="help-center">
			<a name="shipping_rate"></a>
			<h4>配送方式說明</h4>
			<div class="tip">
				<ul>
					<li>送貨方式：透過宅配送達或至超商取貨</li>
					<li>送貨範圍：限台灣本島</li>
				</ul>
			</div>
			<h5>運費說明<a name="shipping_rate"></a></h5>
			
			<ol>
				<li>結帳商品滿 <sapn class="red">$490</span>免運費</li>
			</ol>
			<hr>
			<a name="arrival_time"></a>
			<h5>到貨時間說明</h5>
			<h6 class="gray">台北市5小時到貨服務</h6>
			<ul>
				<li class="red">例外一：晚上9:00-早上8:00的時段不列入到貨時間計算。
					<ul class="s_colum">
						<li><b>舉例：</b>18:01 訂購完成 , 將於隔天上午10點前。</li>
						<li>20:01 訂購完成 , 將於隔天中午12點前送達。</li>
						<li>22:01 訂購完成 , 將於隔天下午 1點前送達。</li>
					</ul>
				</li>
				<li>例外二：付款方式為「超商取貨付款」或「ATM」</li>
				<li>例外三：信用卡交易如果銀行需確認資料時</li>
				<li>例外四：商品標示「大材積」</li>
			</ul>
			<br>
			<h6 class="gray">台灣本島24小時到貨服務</h6>
			<ul>
				<li class="red">例外一：非北北基地區，晚上10:00~早上10:00下訂</li>
				<li>例外二：付款方式為「超商取貨付款」或「ATM」</li>
				<li>例外三：信用卡交易如果銀行需確認資料時</li>
			</ul>
			<hr>
			<h5>若遇到以下狀況 出貨時間將順延</h5>
			<ul>
				<li>使用信用卡與貨到付款以外的付款方式，如：ATM轉帳、超商取貨..等。</li>
				<li>收件人資料填寫不完整、更改收件地址或收貨人無法收貨。</li>
				<li>遇颱風地震等天災、公共工程、節慶活動管制路段，或遇系統設備維護，倉儲調整、盤點等情況。</li>
			</ul>
			<hr>
			<h5>「超商取貨付款」 到貨時間</h5>
			<ul>
				<li>假設 D日11:00 前 完成訂購，預計會在 D+ 1 日 送達超商門市。</li>
				<li>假設 D日11:00 後 完成訂購，預計會在 D+ 2 日 送達超商門市。
					<ul class="s-colum">
						<li><b>舉例：</b>15日10:00 完成訂購，預計 16日 送達超商門市。</li>
						<li>15日13:00 完成訂購，預計 17日 送達超商門市。</li>
					</ul>
				</li>
				<li>受物流配送與門市營業狀況，可能影響實際送達門市時間。</li>
			</ul>
		</article>
	</div>
	<?php include "../frame/_footer_nav.php";?>
    <?php include "../frame/_footer.php";?>
    <?php include "../frame/__js_library.php";?>
</body>