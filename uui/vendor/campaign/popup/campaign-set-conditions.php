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
	<h1 class="title"><i class="fa fa-list-alt"></i>自訂條件</h1>
	<dl class="form-element template-popup-form select-conditions">
		<dd><label class="label-content-title">活動名稱：</label>忙反鬧進悲悽啡的命負</dd>
		<dd><label class="label-content-title">活動範圍：</label>自訂條件<span class="comment">* 不含買立折、特賣變價、原價限購、組合商品、預購商品</span></dd>
		<dd><label class="label-content-title">活動權限：</label><label for="checkboxPermission"><input type="checkbox" id="checkboxPermission">不分PM，設定所有商品<span class="comment">* 如未勾選，僅能設定自己的商品</span></label></dd>
		<dd>
			<label class="label-content-title">商品分類：</label>
			<div class="condition-tags">
				<button onclick="reOpenPopup(800,'popup/campaign-select-catagories.php');"></button>
			</div>
		</dd>
		<dd>
			<label class="label-content-title">廠商：</label>
			<div class="condition-tags">
				
				<span class="condition-tag">鬧以哪</span>
				
				<span class="condition-tag">甘真的</span>
				
				<span class="condition-tag">啊拚地再</span>
				
				<span class="condition-tag">老子實百</span>
				
				<span class="condition-tag">去開不一</span>
				
				<span class="condition-tag">射爸</span>
				
				<span class="condition-tag">褲出去</span>
				
				<span class="condition-tag">為下啦血下</span>
				
				<span class="condition-tag">悽進又和他應</span>
				
				<span class="condition-tag">的向疲問明</span>
				
				<button onclick="reOpenPopup(800,'popup/campaign-select-vendors.php');"></button>
			</div>
		</dd>
		<dd>
			<label class="label-content-title">品牌：</label>
			<div class="condition-tags">
				<button onclick="reOpenPopup(800,'popup/campaign-select-brands.php');"></button>
			</div>
		</dd>
		<dd>
			<label class="label-content-title">排除商品：</label>
			<div class="condition-tags">
				<button onclick="reOpenPopup(1000,'popup/campaign-select-products.php');"></button>
			</div>
		</dd>
		<dd>
			<label class="label-content-title">增加商品：</label>
			<div class="condition-tags">
				<button onclick="reOpenPopup(1000,'popup/campaign-select-products.php');"></button>
			</div>
		</dd>
	</dl>
	<div class="template-button">
		<button class="btn-cancel" onclick="reOpenPopup(400,'popup/campaign-set-campaign.php');"><i class="fa fa-caret-left"></i>上一步</button>
    <button class="btn-submit" onclick="reOpenPopup(1000,'popup/campaign-confirm-products.php');"><i class="fa fa-caret-right"></i>下一步</button>
	</div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>