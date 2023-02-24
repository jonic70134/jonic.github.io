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
	<h1 class="title"><i class="fa fa-list-alt"></i>設定全站活動商品</h1>
	<dl class="form-element template-popup-form select-conditions">
		<dd><label class="label-content-title">活動名稱：</label>是也聽去一在山歹行我它-</dd>
		<dd><label class="label-content-title">活動範圍：</label>全站未做行銷活動的商品<span class="comment">* 不含買立折、特賣變價、原價限購、組合商品、預購商品</span></dd>
		<dd>
			<label class="label-content-title">排除商品：</label>
			<div class="condition-tags">
				<button onclick="reOpenPopup(1000,'popup/campaign-select-products.php');"></button>
			</div>
		</dd>
	</dl>
	<div class="template-button">
		<button class="btn-cancel" onclick="reOpenPopup(400,'popup/campaign-set-campaign.php');"><i class="fa fa-caret-left"></i>上一步</button>
    <button class="btn-submit" onclick="alert('請繼續確認活動成本'); reOpenPopup(800,'popup/campaign-cost-all.php');"><i class="fa fa-caret-right"></i>下一步</button>
	</div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>