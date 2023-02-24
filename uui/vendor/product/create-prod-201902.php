<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/wysihtml5-editor.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li><li class="active">新增商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product create-prod clearfix">
    <h1 class="title">商品基本資料<span class="highlight">*為必填</span></h1>
    <!-- 修改商品名稱 -->
    <div class="create-prod-line clearfix">
		<div class="create-sub-title">名稱*</div>
		<div class="create-input"><input type="text" class="input-f" value="SONY索尼 A9F | MASTER 系列"/></div>
	</div>
	
	<div class="create-prod-line clearfix">
		<div class="create-sub-title">品牌*</div>
		<div class="create-input"><input id="tag_input1" class="tagsinput" type="text" value="SONY,索尼"/><small>(可輸入多個品牌，用逗號分開)</small></div>
	</div>
	
	<div class="create-prod-line clearfix">
		<div class="create-sub-title">售價*</div>
		<div class="create-input"><input type="number" class="input-s" value="195000"/></div>
	</div>
	
	<div class="create-prod-line clearfix">
		<div class="create-sub-title">特色說明</div>
		<div class="create-input"><textarea rows="10" class="input-s" placeholder="最多100字"></textarea></div>
	</div>
	
	<div class="create-prod-line clearfix">
		<div class="create-sub-title">廠商自用料號</div>
		<div class="create-input"><input type="text" value="sony0001"/></div>
	</div>
	
	<div class="create-prod-line clearfix">
		<div class="duoline">
			<div class="create-sub-title">EAN碼</div>
			<div class="create-input"><input type="text" value="12357346"/></div>
			<div class="create-sub-title">ISBN碼</div>
			<div class="create-input"><input type="text" value="12357346"/></div>
		</div>
    </div>
	
	<div class="create-prod-line clearfix">
		<div class="create-sub-title">商品主圖<br/><small>(影片亦可)</small></div>
		<div class="create-pic">
			<div class="fileinput-img">
				<img src="../img/sample.jpg" alt=""/>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>
			<div class="fileinput-img">
				<img src="../img/sample.jpg" alt=""/>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>
			<div class="fileinput-img">
				<img src="../img/sample.jpg" alt=""/>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>
			<div class="fileinput-img">
				<img src="../img/sample.jpg" alt=""/>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>
			<div class="fileinput-img">
				<img src="../img/sample.jpg" alt=""/>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>

			<div class="fileinput-href">
				<span class="fileinput-button">
				<i class="fa fa-plus"></i>
				</span>
				<a href="#" class="fileupload go-popup" data-width="500" data-href="popup/create-pic-popup.php"></a>
				<a href="#">修改</a>
				<a href="#">刪除</a>
			</div>
			<div class="fileinput-href">
				<span class="fileinput-button">
				<i class="fa fa-plus"></i>
				</span>
				<input type="file" class="fileupload" name="userfile" multiple=""/>
			</div>
			<div class="fileinput-href">
				<span class="fileinput-button">
				<i class="fa fa-plus"></i>
				</span>
				<input type="file" class="fileupload" name="userfile" multiple=""/>
			</div>
			<div class="fileinput-href">
				<span class="fileinput-button">
				<i class="fa fa-plus"></i>
				</span>
				<input type="file" class="fileupload" name="userfile" multiple=""/>
			</div>
			<div class="fileinput-href">
				<span class="fileinput-button">
				<i class="fa fa-plus"></i>
				</span>
				<input type="file" class="fileupload" name="userfile" multiple=""/>
			</div>
		</div>
	</div>
	<hr/>
	<div class="create-prod-line clearfix">
		<div class="create-multi">
			<div class="create-multi-top"><a href="#">我要建立多規格選項></a><small>(非必填)</small></div>
			<div class="create-multi-list edit">
				<div class="create-multi-list-t">請設定規格名稱及每個規格的選項</div>
				<table class="create-multi-table">
					<tr>
						<th class="multi-th-grey">規格一</th>
						<td class="multi-td-col"><input type="text" value="尺寸"/><input type="text" size="83" placeholder="請輸入項目，如：S,M,L (用逗號分開)"/><a href="#">清除</a></td>
					</tr>
					<tr>
						<th class="multi-th-grey">規格二</th>
						<td class="multi-td-col"><input type="text" value="尺寸"/><input type="text" size="83" placeholder="請輸入項目，如：S,M,L (用逗號分開)"/><a href="#">清除</a></td>
					</tr>
				</table>
				<button type="button "class="btn-gen">產生清單</button>
			</div>

			<div class="create-multi-list form">
				<div class="create-multi-list-t clearfix"><a href="#">我要重設定規格名稱及每個規格的選項</a></div>
				<div class="table-scroll">
					<table class="create-multi-table check">
						<tr>
							<th><input type="checkbox" name="clickAll" id="clickAll"/>全選</th>
							<th>售價</th>
							<th>規格圖</th>
							<th>廠商自用料號</th>
							<th>EAN碼</th>
							<th>ISBN碼</th>
						</tr>
						<tr>
							<td><input type="checkbox" name="checkname" id="" value="1"/><span class="editable">SONY索尼 KD-A9F 4K Ultra HD OLED 液晶電視</span><span class="highlight">70吋</span> <span class="highlight">黑框</span></td>
							<td>195,000<a href="#">修</a></td>
							<td><a href="#">另加圖</a> </td>
							<td><input type="text" name="" id="" value="sony001"/></td>
							<td>12357346</td>
							<td>12357346</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="checkname" id="" value="2"/><span class="editable" contentEditable="true">SONY索尼 KD-A9F 4K Ultra HD OLED 液晶電視</span><span class="highlight">70吋</span> <span class="highlight">黑框</span></td>
							<td>195,000<a href="#">修</a></td>
							<td><a href="#">另加圖</a> </td>
							<td><input type="text" name="" id="" value="sony002"/></td>
							<td>12357346</td>
							<td>12357346</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="checkname" id="" value="3"/><span class="editable" contentEditable="true">SONY索尼 KD-A9F 4K Ultra HD OLED 液晶電視</span><span class="highlight">70吋</span> <span class="highlight">黑框</span></td>
							<td>195,000<a href="#">修</a></td>
							<td><a href="#">另加圖</a> </td>
							<td><input type="text" name="" id="" value="sony003"/></td>
							<td>12357346</td>
							<td>12357346</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>

	<hr/>

	<div class="create-prod-line clearfix">
		<h2 class="sub-title">另加商品介紹說明<small>(非必填)</small></h2>
		<div class="create-des">
			<div class="create-des-col1">用圖檔介紹</div>
				<div class="create-des-col2">
				<form>
					<input type="text" name="search" required="required" placeholder=""/>
					<input type="reset" class="clear" value="x" alt="clear" />
				</form>
			</div>
			<div class="create-des-col3">貼上圖片網址或 <button type="button" class="btn-upload">檔案上傳</button><input type="file" class="" name="userfile" multiple=""/></div>
		</div>
		<div class="create-preview">
			<span>圖檔預覽</span><img src="../img/sample.jpg" alt="預覽圖"/>
		</div>
		<div class="create-des">
			<div class="create-des-col1">用影片介紹</div>
			<div class="create-des-col2">
				<form>
					<input type="text" name="search" required="required" placeholder=""/>
					<input type="reset" class="clear" value="x" alt="clear" />
				</form>
			</div>
			<div class="create-des-col3">貼上Youtube網址或 <button type="button" class="btn-upload">檔案上傳</button><input type="file" class="" name="userfile" multiple=""/></div>
		</div>
		<div class="create-preview">
			<span>影片預覽</span><img src="../img/sample.jpg" alt="預覽圖"/>
		</div>
		<a href="#" class="create-des-edit">您也可以自由編輯介紹說明</a>
	</div>
	<hr/>
	<div class="create-prod-line checkradio clearfix">
		<div class="create-sub-title">是否為數位虛擬商品</div>
		<div class="create-input"><input type="radio" name="digi" value="1"/>是<input type="radio"  name="digi" value="2"/>否</div>
	</div>
	<div class="create-prod-line checkradio clearfix">
		<div class="create-sub-title">是否有限定配送方式</div>
		<div class="create-input"><input type="radio" name="sendway" value="1"/>不限定<input type="radio"  name="sendway" value="2"/>僅能宅配<input type="radio" name="sendway" id="" value="3">僅能超取(含門市)</div>
	</div>
    <div class="template-button clearfix">
      <div class="fr">
        <button class="btn-draft" onclick="location.href='product-list-build.php'">存為草稿，不上架</button>
        <button class="btn-action" onclick="location.href='product-list-build.php'">完成且上架</button>
      </div>
    </div>
  </div>
</section>
</div>
    <!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/wysihtml5-0.3.0.min.js"></script>
<script src="../js/lib/wysihtml5-advanced.js"></script>

<script src="../js/lib/wysihtml.js"></script>
<script src="../js/lib/wysihtml.all-commands.js"></script>
<script src="../js/lib/wysihtml.table_editing.js"></script>
<script src="../js/lib/wysihtml.toolbar.js"></script>
<script src="../js/lib/advanced_unwrap.js"></script>
<script src="../js/lib/jquery.tagsinput.min.js"></script>

<script src="../js/update-fancybox.js"></script>
<script src="../js/template-action.js"></script>


<script>  
//全選
$("#clickAll").click(function() {
   if($("#clickAll").prop("checked")) {
     $("input[name='checkname']").each(function() {
         $(this).prop("checked", true);
     });
   } else {
     $("input[name='checkname']").each(function() {
         $(this).prop("checked", false);
     });           
   }
});


$(function() {
	$('#tag_input1').tagsInput({
		width:'71.2%',
		height:'auto',
		defaultText:'',
	});
});

$(".create-multi-top a").click(function() {
	$(".create-multi-list.edit").show();
});
$(".btn-gen").click(function() {
	$(".create-multi-list.form").show();
});
</script>
</body>
</html>