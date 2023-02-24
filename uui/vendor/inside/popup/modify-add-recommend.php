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
  <h1 class="title"><i class="fa fa-plus"></i>新增選單</h1>
  <div class="modify-form">
	<dl class="form-element edit-menu clearfix">
		<dt class="edit-menu-title">上層選單：</dt>
    <dd class="edit-menu-content">家電、視聽</dd>
    <dt class="edit-menu-title">選單名稱：</dt>
		<dd class="edit-menu-content"><input type="text" class="input-edit-menu" placeholder="請輸入選單名稱"></dd>
		<dt class="edit-menu-title edit-menu-title-top">設定方式：</dt>
		<dd class="edit-menu-content">
			<label for="addRecommUrl" class="input-line"><input type="radio" id="addRecommUrl" name="addRecommend">設定連結</label>
			<label for="addRecommCondition" class="input-line"><input type="radio" id="addRecommCondition" name="addRecommend">用「自訂條件」篩選商品</label>
		</dd>
	</dl>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
(function($){
	$('.modify-button .btn-submit').click(function() {
		if($('#addRecommUrl').prop('checked')) {
			reOpenPopup(400,'popup/modify-recomm-url.php');
		}
		else if ($('#addRecommCondition').prop('checked')) {
			reOpenPopup(500,'popup/modify-recomm-condition.php');
		}
	});
})(jQuery);
</script>
</body>
</html>