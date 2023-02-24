<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-plus"></i>新增「品牌篩選」選單</h1>
  <p class="modify-infr">*「廠商」或「品牌」至少需填寫一項</p>
  <div class="modify-form">
	<dl class="form-element edit-menu clearfix">
		<dt class="edit-menu-title">上層選單：</dt>
		<dd class="edit-menu-content">家電、視聽 &gt; 季節家電</dd>
		<dt class="edit-menu-title">選單名稱：</dt>
		<dd class="edit-menu-content">3M品牌專區</dd>
		<dt class="edit-menu-title">廠商：</dt>
		<dd class="edit-menu-content">
			<div class="condition-tags">
				
				<span class="condition-tag">人利家就金他上</span>
				
				<span class="condition-tag">了腕頓啦了賴</span>
				
				<button onclick="reOpenPopup(800,'popup/modify-select-vendors.php');"></button>
			</div>
		</dd>
		<dt class="edit-menu-title">品牌：</dt>
		<dd class="edit-menu-content">
			<div class="condition-tags">
				
				<span class="condition-tag">啦切裊的</span>
				
				<span class="condition-tag">又了鴨</span>
				
				<span class="condition-tag">到萄拚</span>
				
				<button onclick="reOpenPopup(800,'popup/modify-select-brands.php');"></button>
			</div>
		</dd>
	</dl>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('新增成功！'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
//modify: date time picker
var timeOption = {
	dateFormat: 'yy/mm/dd'
};
$('.input-timepicker').datepicker(timeOption);
</script>
</body>
</html>