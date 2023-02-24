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
	<a href="#" class="add-oth-prod">我要加入其它商品一起陳售 <i class="fa fa-plus"></i></a>

	<div class="extend-grey-bg" style="display:none;">
		<div class="extend-line">
			<label for="add_p1"><input type="radio" name="add_p" id="add_p1" value="1">加入加購品(消費者非必買)</label>
			<p class="txt-grey">ex:買紅米Note7 黑色+(B商品+C商品)(B、C非必選)=6500+被選擇的B或C商品售價加總</p>
		</div>
		<div class="extend-line">
			<label for="add_p2"><input type="radio" name="add_p" id="add_p2" value="2">加入加購品(消費者必選)</label>
			<p>ex:買紅米Note7 黑色+多個其它商品任選n個=6500+被選擇的其它商品的約當售價加總</p>
		</div>
		<!--選擇後打開的區塊-->
		<div class="extend-combine" id="extend-combine-1" style="display:none;">
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
				<div class="template-button">
					<button class="btn-cancel delextend">取消</button>
					<button class="btn-action addextend">確定</button>
				</div>
			</div>
			
		</div>


		<div class="extend-combine" id="extend-combine-2" style="display:none;">
			<div class="extend-line">
				請輸入要綁賣的商品ID<input type="text" class="extend-input" value="201808AG13293239984"/><button class="btn-action extend-add-id"><i class="fa fa-plus"></i></button>
			</div>

			<div class="extend-line-id-list" style="display:none;">
				<button class="btn-plus"><i class="fa fa-plus"></i></button>
				<p>201808AG13293239984 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 <a href="#" class="remove all">全規格移除</a></p>
				<p class="choose_oth">此為多規格品，預設全規格加入 <a href="#">我要挑選特別項</a></p>
				<ul class="extend-line-ul" style="display:none;">
					<li>201808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml <a href="#">移除</a></li>
				</ul>

				<div class="extend-line-sub-list">
					<p>SAMPO 聲寶 陶瓷電暖器(HX-FB06P)<a href="#" class="remove">移除</a></p>
				</div>
				<div class="template-button">
					<button class="btn-cancel delextend">取消</button>
					<button class="btn-action addextend">確定</button>
				</div>
			</div>
		</div>
		
	</div>


	<div class="template-button">
		<button class="btn-cancel" onclick="parent.$.fancybox.close();">取消建立</button>
		<button class="btn-action" onclick="reOpenPopup(1000,'popup/product-build-extend-price.php');">設定賣場售價</button>
	</div>
</div>

<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
$(function() {
	$('.add-oth-prod').click(function() {
  		$('.extend-grey-bg').show();
		$('.extend-popup > .template-button').hide();
	});

	$("input[name$='add_p']").click(function() {
        var radValue = $(this).val();
        $(".extend-combine").hide();
        $("#extend-combine-" + radValue).show();
    });

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
	

	$(".extend-line-sub-list a").click(function() {
		$(this).parents("p").toggle();
	});

//移除賣場商品
	$(".extend-popup").on('click', '.removeAdd', function() {
			$(this).closest("tr").remove();
	});
//新增到買場商品列表
	$(".addextend").click( function () { 
		var addhtml ='<tr><td><span class="tag-grey">綁賣</span> 01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td><td>$1,999 <a href="#" class="removeAdd">移除</a></td></tr>'
		+ '<tr><td><span class="tag-green">贈品</span>01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td><td>$999 <a href="#" class="removeAdd">移除</a></td></tr>'
		+ '<tr><td><span class="tag-blue">加購</span>01808AG13293239981 Snapware 康寧密扣 Evo Vent 二代幸福圓滿耐熱玻璃保鮮盒 970ml </td><td>$999 <a href="#" class="removeAdd">移除</a></td></tr>' ;
		$(".extend-popup tbody tr").after(addhtml);
		$(".extend-popup > .template-button").show();
		$(".extend-grey-bg").hide();

	});
	$(".delextend").click(function () { 
		$(".extend-popup > .template-button").show();
		$(".extend-grey-bg").hide();
	});
	
});	
</script>
</body>
</html>