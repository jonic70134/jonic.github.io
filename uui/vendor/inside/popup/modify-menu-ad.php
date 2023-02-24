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
  <h1 class="title"><i class="fa fa-file-image-o"></i>上傳廣告圖片</h1>
  <div class="modify-form">
	<dl class="form-element edit-menu clearfix">
		<dt class="edit-menu-title">選擇圖片檔案：</dt>
		<dd class="edit-menu-content"><input type="file" class="input-bg-img" accept="image/*"> <a>清空</a></dd>
		<dt class="edit-menu-title">圖片連結：</dt>
		<dd class="edit-menu-content"><input type="text" class="input-edit-menu" placeholder="http://your-site.com/your-page.html"></dd>
		<span class="comment">*上傳圖片尺寸限制1220*1046px / 300kB以內。</span>
	</dl>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('設定成功！'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/inside-action.js"></script>
</body>
</html>