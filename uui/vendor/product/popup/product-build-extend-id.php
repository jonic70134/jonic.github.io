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
	<table class="build-popup-list template-table form-element ">
		<thead>
			<tr>
				<th class="col-black">賣場商品</th>
				<th class="col-black">原售價</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>SONY 索尼 智慧型電視KD-65A9F 65吋 OLED</td>
				<td>$195,000</td>
			</tr>
		</tbody>
	</table>

	<div class="extend-grey-bg form-element">
		<div class="extend-line">
			請輸入要綁賣的商品ID<input type="text" class="extend-input" value="201808AG13293239984"/><button class="btn-action extend-add-id"><i class="fa fa-plus"></i></button>
		</div>

		<div class="extend-line-id-list" style="display:none;">
			<button class="btn-plus"><i class="fa fa-plus"></i></button>
			<p>201808AG13293239984 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 <a href="#" class="remove all">全規格移除</a></p>
			<p class="choose_oth">此為多規格品，預設全規格加入 <a href="#">我要挑選特別項</a></p>
			<ul class="extend-line-ul" style="display:none;">
				<li>201808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml <a href="#">移除</a></li>
				<li>201808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 670ml <a href="#">移除</a></li>
				<li>201808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 370ml <a href="#">移除</a></li>
			</ul>

			<div class="extend-line-sub-list">
				<p>SAMPO 聲寶 陶瓷電暖器(HX-FB06P)<a href="#" class="remove">移除</a></p>
			</div>
		</div>
		
	</div>

	<div class="template-button">
		<button class="btn-cancel" onclick="parent.$.fancybox.close();">取消</button>
		<button class="btn-action" onclick="reOpenPopup(850,'popup/product-build-extend-complete.php');">確認加入</button>
	</div>
</div>

<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
	$('.extend-add-id').click(function() {
  		$('.extend-line-id-list').toggle();
	});
	
	$('.choose_oth a').click(function() {
  		$('.extend-line-ul').show();
		$('.choose_oth').hide();
	});

	$('.extend-line-id-list .btn-plus').click(function() {
  		$('.extend-line-ul').slideToggle();
		  $('.extend-line-id-list .btn-plus i').toggleClass("fa-minus");
	});
	
	$(".extend-line-id-list p .all").click(function() {
		$(".extend-line-id-list").toggle();
	});

	$(".extend-line-ul li a").click(function() {
		$(this).parents("li").toggle();
	});

	$(".extend-line-sub-list a").click(function() {
		$(this).parents("p").toggle();
	});
	
</script>
</body>
</html>