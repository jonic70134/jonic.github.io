<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-filter"></i>進階篩選設定</h1>
  <div class="modify-form">
  	<div class="form-element modify-filter">
		<label>是否顯示進階篩選區塊？</label>
		<input type="radio" id="radioFilterOn" name="selectFilter" checked><label for="radioFilterOn">全站皆顯示</label>
		<input type="radio" id="radioFilterOff" name="selectFilter"><label for="radioFilterOff">全站皆不顯示</label>
		<button class="btn-submit" onclick="alert('設定成功'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
		<button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
  	</div>
  	<div class="filter-infr">
  		<h2 class="title">進階篩選區塊示意圖</h2>
  		<img src="../../img/infr-filter.jpg" width="700" height="233" alt="進階篩選區塊示意圖">
  	</div>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/inside-action.js"></script>
</body>
</html>