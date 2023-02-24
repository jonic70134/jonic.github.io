<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-pencil"></i>活動網頁設定</h1>
  <div class="form-element clearfix">
		<label class="form-element-name">上傳HTML的ZIP</label>
		<input type="file" class="input-file" accept=".zip">
		<p class="comment">【注意事項】<br>1. 煩請確認html已作行動裝置版型設計(RWD)。<br>2. HTML版型如有商品資訊，價格將不會連動調整。</p>
  	</div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-active" onclick="parent.$.fancybox.close();"><i class="fa fa-floppy-o"></i>儲存暫不發佈</button>
    <button class="btn-submit" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>儲存並預覽</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/color-picker.js"></script>
<script>
$('#selectBodyImg').click(function() {
	$('#radioBodyImg').prop('checked',true);
});
</script>
</body>
</html>