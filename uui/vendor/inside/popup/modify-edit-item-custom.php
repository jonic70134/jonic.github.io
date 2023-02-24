<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-pencil"></i>6頁廣告區設定</h1>
  <p class="modify-infr">可上傳檔案JPG / JPEG / GIF / PNG檔，尺寸限制1220*589px / 500kB以內。<br>本區最多可上5則廣告，您已設定4組，尚餘1組。</p>
  <div class="modify-form">
  	<div class="form-element edit-block-name clearfix">
		<label>區塊名稱</label><input type="text" class="input-text" placeholder="請輸入本熱門廣告區名稱">
  	</div>
  	<div class="form-element edit-block-name clearfix">
		<dl class="edit-ad-content item-detail">
			<dt>區塊底色</dt>
			<dd>
				<input type="radio" id="radioBodyColor" class="radio-bg-color" name="selectBodyBg"><label for="radioBodyColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label><br>
				<input type="radio" id="radioBodyImg" class="radio-bg-img" name="selectBodyBg"><label for="radioFooterImg"><input type="file" class="input-bg-img" accept="image/*"></label> <span class="body-img-repeat">背景圖片重覆<select name="" id="selectBodyImg"><option value="">請選擇</option><option value="">垂直水平皆重覆</option><option value="">垂直方向重覆</option><option value="">水平方向重覆</option><option value="">不重覆</option></select></span> <a href="" target="_blank"><i class="fa fa-picture-o">&nbsp;</i>預覽</a>
			</dd>
			<dd class="comment" style="padding-left:0;">選擇此區塊的底色或要放置的背景圖片 (限為大小上限50KB的JPG / JPEG / GIF / PNG格式檔案)</dd>
		</dl>
	</div>
	<hr>
	<div class="form-element edit-block-name clearfix">
		<label>您想</label>
		<label for="radio_edit_custom"><input type="radio" id="radio_edit_custom" name="radio_edit_type" checked>自訂固定商品</label>
		<label for="radio_edit_condition"><input type="radio" id="radio_edit_condition" name="radio_edit_type">設定條件自動更換商品</label>
		<select name="" id="" class="select-condition-location" style="display:none;"><option value="">本地商品</option><option value="">海外商品</option></select>
  	</div>
  	<button class="btn-block-infr"><i class="fa fa-info-circle"></i>佈置說明</button>
  	<div class="edit-block-infr">
  		<div class="add-block clearfix">
			<span class="add-block-name">您選擇的是：內容區塊 - 1大4小</span>
			<div class="add-block-content"><img src="../../img/home-block-item5.png" width="348" height="162" alt="內容區塊 - 1大4小"></div>
		</div>
  	</div>
  	<section class="edit-custom">
  		<h1 class="title"><i class="fa fa-archive"></i>自訂固定商品</h1><br>
	  	
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">1</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><input type="text" placeholder="請輸入商品ID"><select name="" id=""><option value="">本地商品</option><option value="">海外商品</option></select><button class="btn-sync-item"><i class="fa fa-plus"></i>讀入商品資訊</button></dd>
				<dd><span class="item-detail-name">品名</span><input type="text" size="40" value="身的目失咖值倒裡往相解痛在出幕更" placeholder="請輸入商品品名"></dd>
				<dd><span class="item-detail-name">銷售口號</span><input type="text" size="60" value="進上亮覺為憊早起服就高的啡們的現比道" placeholder="請輸入商品銷售口號"></dd>
				<dd><span class="item-detail-name">連結</span><input type="text" size="60" value="http://www.yoursite.com/your-product.html" placeholder="請輸入賣場連結"></dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
			<button class="btn-clear-ad"><i class="fa fa-times"></i>清空廣告設定</button>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">2</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><input type="text" placeholder="請輸入商品ID"><select name="" id=""><option value="">本地商品</option><option value="">海外商品</option></select><button class="btn-sync-item"><i class="fa fa-plus"></i>讀入商品資訊</button></dd>
				<dd><span class="item-detail-name">品名</span><input type="text" size="40" value="拜入行什餃死喝之的集" placeholder="請輸入商品品名"></dd>
				<dd><span class="item-detail-name">銷售口號</span><input type="text" size="60" value="出時自易麼利-雙沒三教褲到來簡咖去" placeholder="請輸入商品銷售口號"></dd>
				<dd><span class="item-detail-name">連結</span><input type="text" size="60" value="http://www.yoursite.com/your-product.html" placeholder="請輸入賣場連結"></dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
			<button class="btn-clear-ad"><i class="fa fa-times"></i>清空廣告設定</button>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">3</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><input type="text" placeholder="請輸入商品ID"><select name="" id=""><option value="">本地商品</option><option value="">海外商品</option></select><button class="btn-sync-item"><i class="fa fa-plus"></i>讀入商品資訊</button></dd>
				<dd><span class="item-detail-name">品名</span><input type="text" size="40" value="忙啊易晨點有說啡好城拚苦雲知分萄.實爭" placeholder="請輸入商品品名"></dd>
				<dd><span class="item-detail-name">銷售口號</span><input type="text" size="60" value="胃提看值再用也在祖吃種生" placeholder="請輸入商品銷售口號"></dd>
				<dd><span class="item-detail-name">連結</span><input type="text" size="60" value="http://www.yoursite.com/your-product.html" placeholder="請輸入賣場連結"></dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
			<button class="btn-clear-ad"><i class="fa fa-times"></i>清空廣告設定</button>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">4</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><input type="text" placeholder="請輸入商品ID"><select name="" id=""><option value="">本地商品</option><option value="">海外商品</option></select><button class="btn-sync-item"><i class="fa fa-plus"></i>讀入商品資訊</button></dd>
				<dd><span class="item-detail-name">品名</span><input type="text" size="40" value="終決為-裡人都一便吃實們那些不一什互" placeholder="請輸入商品品名"></dd>
				<dd><span class="item-detail-name">銷售口號</span><input type="text" size="60" value="夫的個到歲連比捨又很" placeholder="請輸入商品銷售口號"></dd>
				<dd><span class="item-detail-name">連結</span><input type="text" size="60" value="http://www.yoursite.com/your-product.html" placeholder="請輸入賣場連結"></dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
			<button class="btn-clear-ad"><i class="fa fa-times"></i>清空廣告設定</button>
		</div>
		
	</section>
	<section class="edit-condition" style="display: none;">
		<h1 class="title"><i class="fa fa-filter"></i>設定條件 - 依條件撈取N個商品</h1><br>
	  	<dl class="form-element edit-menu clearfix">
			<dt class="edit-menu-title"><span class="highlight">*</span> 海外商品來源國：</dt>
			<dd class="edit-menu-content">
				<select name="" id=""><option value="">日本</option><option value="">新加坡</option></select>
			</dd>
			<dt class="edit-menu-title"><span class="highlight">*</span> 篩選條件設定：</dt>
			<dd class="edit-menu-content">
				<label for="radio_select_condition"><input type="radio" id="radio_select_condition" name="radio_condition_type" checked>用條件篩選</label>
				<label for="radio_select_keyword"><input type="radio" id="radio_select_keyword" name="radio_condition_type">用關鍵字篩選</label>
			</dd>
			<section class="select-condition">
				<dd class="modify-infr comment">*商品分類、品牌至少需要設定一項</dd>
				<dt class="edit-menu-title">商品分類：</dt>
				<dd class="edit-menu-content">
					<div class="condition-tags">
						<button onclick="reOpenPopup(800,'popup/modify-select-catagories.php');"></button>
					</div>
				</dd>
				<dt class="edit-menu-title">品牌：</dt>
				<dd class="edit-menu-content">
					<div class="condition-tags">
						
						<span class="condition-tag">空做可</span>
						
						<span class="condition-tag">走任爸良水</span>
						
						<span class="condition-tag">白點</span>
						
						<button onclick="reOpenPopup(800,'popup/modify-select-brands.php');"></button>
					</div>
				</dd>
				<dt class="edit-menu-title">屬性選項：</dt>
				<dd class="edit-menu-content">
					<div class="condition-tags">
						
						<span class="condition-tag">把憑種為有２</span>
						
						<span class="condition-tag">以閒的夜了議的</span>
						
						<span class="condition-tag">麼此判所憑是</span>
						
						<span class="condition-tag">段以老說人地再</span>
						
						<span class="condition-tag">地似互忙雙在一</span>
						
						<button onclick="reOpenPopup(800,'popup/modify-select-attrs.php');"></button>
					</div>
				</dd>
				<dt class="edit-menu-title">商品新增日：</dt>
				<dd class="edit-menu-content"><input type="text" class="input-timepicker" placeholder="起始日期"> ~ <input type="text" class="input-timepicker" placeholder="結束日期"></dd>
				<dt class="edit-menu-title">價格區間：</dt>
				<dd class="edit-menu-content"><input type="text" class="input-price" placeholder="最低價格"> ~ <input type="text" class="input-price" placeholder="最高價格"></dd>
			</section>
			<section class="select-keyword" style="display: none;">
				<dt class="edit-menu-title"><span class="highlight">*</span> 商品關鍵字：</dt>
				<dd class="edit-menu-content"><input type="text" size="50" placeholder="請輸入關鍵字"></dd>
			</section>
			<dt class="edit-menu-title edit-menu-title-top"><span class="highlight">*</span> 排序規則：</dt>
			<dd class="edit-menu-content">
				<dl>
					<dd><label for="radio_sort1"><input type="radio" id="radio_sort1" name="radio_sort">熱賣排序：7天內的平均銷售量由高到低排序</label></dd>
					<dd><label for="radio_sort2"><input type="radio" id="radio_sort2" name="radio_sort">新品排序：賣場新增日期由新到舊排序</label></dd>
					<dd><label for="radio_sort3"><input type="radio" id="radio_sort3" name="radio_sort">低價排序：售價由低到高排序</label></dd>
					<dd><label for="radio_sort4"><input type="radio" id="radio_sort4" name="radio_sort">高價排序：售價由高到低排序</label></dd>
				</dl>
			</dd>
		</dl>
	</section>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-active btn-custom" onclick="parent.$.fancybox.close();"><i class="fa fa-floppy-o"></i>儲存暫不發佈</button>
    <button class="btn-submit btn-custom" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>儲存並預覽</button>
    <button class="btn-submit btn-condition" onclick="window.open('popup/modify-item-list.php','_blank','toolbar=yes, scrollbars=yes, resizable=yes, top=100, left=100, width=800, height=600');" style="display: none;"><i class="fa fa-caret-right"></i>下一步</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/color-picker.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
$('#selectBodyImg').click(function() {
	$('#radioBodyImg').prop('checked',true);
});
//modify: date time picker
var timeOption = {
	dateFormat: 'yy/mm/dd'
};
$('.input-timepicker').datepicker(timeOption);
//toggle
$('#radio_edit_custom').click(function() {
	$('.select-condition-location').hide();
	$('.edit-custom').show();
	$('.edit-condition').hide();
	$('.modify-button .btn-custom').show();
	$('.modify-button .btn-condition').hide();
	parent.$.fancybox.update();
});
$('#radio_edit_condition').click(function() {
	$('.select-condition-location').show();
	$('.edit-custom').hide();
	$('.edit-condition').show();
	$('.modify-button .btn-custom').hide();
	$('.modify-button .btn-condition').show();
	parent.$.fancybox.update();
});
$('#radio_select_condition').click(function() {
	$('.select-condition').show();
	$('.select-keyword').hide();
	parent.$.fancybox.update();
});
$('#radio_select_keyword').click(function() {
	$('.select-condition').hide();
	$('.select-keyword').show();
	parent.$.fancybox.update();
});
</script>
</body>
</html>