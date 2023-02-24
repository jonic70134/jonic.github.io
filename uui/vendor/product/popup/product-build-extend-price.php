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
<div class="popup-content extend-popup">
	<h1 class="title"><i class="fa fa-file-text-o"></i>開始建立延伸賣場</h1>
	<div class="extend-sub-title">
		<span>賣場名稱</span>
		<input type="text" value="SONY 索尼 智慧型電視KD-65A9F 65吋 OLED" size="50"/>
	</div>
	<div class="extend-sub-title">
		<span>賣場售價</span>
		<div class="edit-done"><p>19500</p><a href="#" class="btn-edit">修改</a></div>
		<div class="edit-save" style="display:none;"><input type="text" name="" id="" value="19500" size="8"/><a href="#" class="btn-save">儲存</a></div>
	</div>
	

	<table class="build-popup-list template-table form-element ">
		<thead>
			<tr>
				<th class="col-black">賣場商品</th>
				<th class="col-black"></th>
				<th class="col-black">約當售價</th>
				<th class="col-black">原售價</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>SONY 索尼 智慧型電視KD-65A9F 65吋 OLED</td>
				<td></td>
				<td>$193,000</td>
				<td>$195,000</td>
			</tr>
			<tr>
				<td><span class="tag-grey">綁賣</span> 01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td>
				<td></td>
				<td>$1,999</td>
				<td>$1,999</td>
			</tr>
			<tr>
				<td><span class="tag-green">贈品</span>01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td>
				<td></td>
				<td>$599</td>
				<td>$999</td>
			</tr>
			<tr>
				<td><span class="tag-blue">加購</span>01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td>
				<td><div class="done-add-price">加購價$899<a href="#" class="btn-add-edit">修改</a></div><div class="edit-add-price" style="display:none;"><input type="text" name="" id="" size="10" value="加購價$899"><a href="#" class="btn-add-save">儲存</a></div></td>
				<td></td>
				<td>$999</td>
			</tr>
		</tbody>
	</table>
	

	<div class="template-button">
		<div class="fl">
			<button class="btn-cancel" onclick="reOpenPopup(850,'popup/product-build-extend-complete.php');">設定賣場商品</button>
		</div>
		<div class="fr">
			<button class="btn-action">繼續編輯</button><!--回賣場商品編輯頁-->
			<button class="btn-action" onclick="parent.$.fancybox.close();">確定, 並以系統預設賣場資訊上架</button>
		</div>
	</div>
</div>

<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
$('.btn-edit').each(function() {
	$(this).click(function() {
		$(this).parents().find('.edit-done').hide();
		$(this).parents().find('.edit-save').show();
	});
});
$('.btn-save').each(function() {
	$(this).click(function() {
		$(this).parents().find('.edit-save').hide();
		$(this).parents().find('.edit-done').show();
	});
});

$('.btn-add-edit').each(function() {
	$(this).click(function() {
		$(this).parents().find('.done-add-price').hide();
		$(this).parents().find('.edit-add-price').show();
	});
});
$('.btn-add-save').each(function() {
	$(this).click(function() {
		$(this).parents().find('.edit-add-price').hide();
		$(this).parents().find('.done-add-price').show();
	});
});

$(".extend-popup tbody .removeAdd").click(function () { 
		$(this).parents("tr").remove();
	});
	

</script>
</body>
</html>