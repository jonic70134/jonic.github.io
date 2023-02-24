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
  <h1 class="title"><i class="fa fa-pencil"></i>全站導覽設定</h1>
  <p class="modify-infr">本區為網站下方導覽設定功能，最多5個導覽區塊，若想自訂頁面，您可到主選單的選單管理，新增你想要自訂的頁面。</p>
  <div class="modify-form">
  	<div class="form-element sitemap-infr clearfix">
		<label class="form-element-name"><input type="checkbox">開啟全站導覽</label>
		<div class="comment">網站導覽將於網站下方列出。例：</div>
		<div class="form-element-infr"><img src="../../img/infr-sitemap.jpg" width="500" height="133" alt="網站導覽說明"></div>
	</div>
  	
	<dl class="form-element edit-sitemap clearfix">
		<dt class="edit-sitemap-title">
			<label>標題</label><input type="text" class="input-sitemap-title" placeholder="請輸入本導覽區塊的標題"><input type="text" class="input-sitemap-url" placeholder="請輸入本導覽區塊的標題連結">
		</dt>
		<dd class="edit-sitemap-content">
			<input type="text" class="input-sitemap-title" placeholder="請輸入頁面標題"><input type="text" class="input-sitemap-url" placeholder="請輸入頁面連結"><button class="btn-delete-line"><i class="fa fa-times"></i></button>
		</dd>
		<dd class="edit-sitemap-content">
			<input type="text" class="input-sitemap-title" placeholder="請輸入頁面標題"><input type="text" class="input-sitemap-url" placeholder="請輸入頁面連結"><button class="btn-delete-line"><i class="fa fa-times"></i></button>
		</dd>
		<button class="btn-create-line"><i class="fa fa-angle-down"></i>新增連結...</button>
		<button class="btn-delete-block"><i class="fa fa-times"></i>清除導覽區塊</button>
	</dl>
	
  </div>
  <div class="modify-button">
    <button class="btn-create"><i class="fa fa-plus"></i>新增導覽區塊</button>
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/inside-action.js"></script>
</body>
</html>