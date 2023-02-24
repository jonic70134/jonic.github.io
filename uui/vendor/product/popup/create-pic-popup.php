<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="add-product create-prod create-prod-popup clearfix">
	<div class="create-prod-line clearfix">
		<h4 class="sub-title">商品主圖</h4>
		<div class="create-des">
			<div class="create-des-col1"><input type="radio" name="choosepic" id="" value="1"/>用圖檔介紹</div>
				<div class="create-des-col2">
				<form>
					<input type="text" name="search" required="required" placeholder="">
					<input type="reset" class="clear" value="x" alt="clear">
				</form>
			</div>
			<div class="create-des-col3">貼上圖片網址或 <button type="button" class="btn-upload">檔案上傳</button><input type="file" class="" name="userfile" multiple=""></div>
		</div>
		
		<div class="create-des">
			<div class="create-des-col1"><input type="radio" name="choosepic" id="" value="2"/>用影片介紹</div>
			<div class="create-des-col2">
				<form>
					<input type="text" name="search" required="required" placeholder="">
					<input type="reset" class="clear" value="x" alt="clear">
				</form>
			</div>
			<div class="create-des-col3">貼上Youtube網址或 <button type="button" class="btn-upload">檔案上傳</button><input type="file" class="" name="userfile" multiple=""></div>
		</div>

		<div class="template-button">
			<button class="btn-cancel" onclick="parent.$.fancybox.close();">取消</button>
			<button class="btn-submit" onclick="parent.$.fancybox.close();">確認</button>
		</div>
	</div>
</div>

<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
</body>
</html>