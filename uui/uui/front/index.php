<?php include "../frame/__data.php";?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title>UUI template guideline v0.1</title>
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../assets/css/frame/frame.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/front/index.css">
	<!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../assets/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
	<?php include "../frame/_header.php";?>
	<section class="doc-header">
		<div class="container">
			<h1><i class="fa fa-trophy"></i> Getting Started</h1>
			<p>Welcome to UUI(uitox inside UI) guideline v0.1</p>
			<p>Purpose: scalable responsive web design templates for uitox webstore.</p>
		</div>
	</section>
	<section class="block">
		<div class="container">
			<h1 class="page-header">賣場頁面 <span class="date">(更新日期：2014-08-11 12:00)</span></h1>
			<p class="lead">主要需求頁面如下：(參考<a href="../../sth_prototype/temp/sitemap.php" target="_blank">prototype sitemap</a>)，CSS檔名皆與頁面名稱相同。</p>
			<ul>
				<li>
					<h3>首頁 (index.php)</h3>
				</li>
				<li>
					<h3>區頁 (market.php) 可與館頁共用</h3>
				</li>
				<li>
					<h3>館頁 (category.php)</h3>
				</li>
				<li>
					<h3>單品頁 (item.php)</h3>
				</li>
				<li>
					<h3>搜尋頁 (search.php)</h3>
				</li>
				<li>
					<h3>活動頁 (activity.php)</h3>
				</li>
				<li>
					<h3>錯誤頁 (error.php)</h3>
				</li>
			</ul>
			<h1 class="page-header">共用頁面 <span class="date">(更新日期：2014-07-28 16:00)</span></h1>
			<ul>
				<li>購物車 (待規劃新版RWD)</li>
				<li>顧客中心 (待規劃新版RWD)</li>
				<li>說明頁面 (help center)</li>
			</ul>
			<h1 class="page-header">元件 component <span class="date">(更新日期：2014-08-25 18:00)</span></h1>
			<ul>
				<li>麵包屑 nav-breadcrumbs</li>
				<li>分類選單 nav-menu</li>
				<li>分頁 nav-paginatioon</li>
				<li>使用者選單 nav-user</li>
				<li>篩選 site-filter</li>
				<li>排序 site-sort</li>
				<li>搜尋 site-search</li>
				<li>語言 site-language</li>
				<li>語言 site-message (ex: 加入購物車浮水印)</li>
			</ul>
			<!-- <h1 class="page-header">版型類別 <span class="date">(更新日期：2014-07-28 16:00)</span></h1>
			<ul>
				<li>Big market (<a href="http://www.asap.com.tw">ASAP</a>)</li>
				<li>Middle market
				(<a href="../../theme_002/" target="_blank">002</a>)
				</li>
				<li>Small market 
				(<a href="../../adi/" target="_blank">ADI</a>)
				</li>
				<li>Brand store</li>
				<li>Window store</li>
				<li>Flash sale</li>
			</ul> -->
			<h1 class="page-header">Preview <span class="date">(更新日期：2014-08-11 12:00)</span></h1>
			<p class="lead">版面完成要給出預覽圖片至少四張</p>
			<ul>
				<li>首頁縮圖 (200px寬*300px高)</li>
				<li>首頁 (deskop版尺寸-寬不超過1220px)</li>
				<li>館頁 (deskop版尺寸-寬不超過1220px)</li>
				<li>單品頁(deskop版尺寸-寬不超過1220px)</li>
			</ul>
			<h2>Naming rule</h2>
			<p>[名稱]_[顏色]_[語系]_[頁面].jpg</p>
			<h2>Example:</h2>
			<ul>
				<li>asus_white_zh-tw_preview.jpg(預覽圖)</li>
				<li>asus_white_zh-tw_index.jpg (首頁)</li>
				<li>asus_white_zh-tw_category.jpg (館頁)</li>
				<li>asus_white_zh-tw_item.jpg (單品頁)</li>
			</ul>
			<h2>圖檔路徑</h2>
			<p>/c/img/frame</p>
			<h1 class="page-header">Support Tool <span class="date">(更新日期：2014-07-28 16:00)</span></h1>
			<ul>
				<li><a href="http://www.sublimetext.com/">Sublime Text</a></li>
				<li><a href="https://www.apachefriends.org/zh_tw/index.html">XAMPP</a></li>
				<li><a href="http://fireapp.kkbox.com/">fire.app (for compile SCSS)</a></li>
			</ul>
			<h1 class="page-header">參考文件</h1>
			<ul>
				<li><a href="http://frontendbabel.info/articles/bem-with-css-preprocessors/">BEM SCSS</a></li>
			</ul>
		</div>
	</section>
	<?php include "../frame/_footer.php";?>
</body>
</html>
