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
			<h1>CSS</h1>
			<p>Global CSS settings, fundamental HTML elements styled and enhanced with extensible classes, and an advanced grid system.</p>
		</div>
	</section>
	<section class="block">
		<div class="container">
			<h1 class="page-header">Mixin <span class="date">(更新日期：2014-08-25 18:00)</span></h1>
			<h2><i class="fa fa-star"></i> RWD($mode)</h2>
			<pre class="prettyprint">
//Including higher than 15 inch monitor. Static width: 1220px.					
@include RWD(desktop-all) {
 ...
}
//Including higher than 17 inch monitor. Static width: 1220px.
@include RWD(desktop-extra) {
 ...
}
//Between 15 ~ 17 inch monitor. Static width: 960px.
@include RWD(desktop-normal) {
 ...
}
//Including common mobile & pad size. Width fluid for 100%.
@include RWD(pad-mobile) {
 ...
}
//Between 768px ~ 999px. Width fluid for 100%
@include RWD(pad) {
 ...
}
//lower than 767px. Width fluid for 100%
@include RWD(mobile) {
 ...
}
//lower than 320px. Width fluid for 100%
@include RWD(mobile-small) {
 ...
}
</pre>
		</div>
	</section>
	<?php include "../frame/_footer.php";?>
	<?php include "../frame/__js_library.php";?>
</body>
</html>
