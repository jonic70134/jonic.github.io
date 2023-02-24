<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-gear"></i>設定活動範圍</h1>
  <dl class="form-element template-popup-form set-conditions">
  	<dd><label for="typeProducts"><input type="radio" id="typeProducts" name="campaignConditions">商品<span class="comment">自行指定商品</span></label></dd>
    <dd><label for="typeConditions"><input type="radio" id="typeConditions" name="campaignConditions">自訂條件<span class="comment">使用分類、品牌條件來設定商品</span></label></dd>
    <dd><label for="typeAll"><input type="radio" id="typeAll" name="campaignConditions">全站<span class="comment">設定全站所有商品</span></label></dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="reOpenPopup(600,'popup/campaign-add.php');"><i class="fa fa-caret-left"></i>上一步</button>
    <button class="btn-submit"><i class="fa fa-caret-right"></i>下一步</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
(function($){
	$('.template-button .btn-submit').click(function() {
		if($('#typeProducts').prop('checked')) {
      		reOpenPopup(1000,'popup/campaign-set-products.php');
		}
		else if ($('#typeConditions').prop('checked')) {
			reOpenPopup(600,'popup/campaign-set-conditions.php');
		}
    else if ($('#typeAll').prop('checked')) {
      reOpenPopup(600,'popup/campaign-set-all.php');
    }
		else {
			alert('請選擇活動範圍');
		}
	});
})(jQuery);
</script>
</body>
</html>