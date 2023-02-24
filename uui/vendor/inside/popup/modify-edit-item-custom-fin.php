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
		<label for="radio_edit_custom"><input type="radio" id="radio_edit_custom" name="radio_edit_type">自訂固定商品</label>
		<label for="radio_edit_condition"><input type="radio" id="radio_edit_condition" name="radio_edit_type" checked>設定條件自動更換商品</label>
		<button class="btn-action btn-green go-condition"><i class="fa fa-pencil"></i>變更條件</button>
		<button class="btn-action" onclick="reOpenPopup(800,'popup/modify-item-list.php');"><i class="fa fa-search"></i>目前篩選結果</button>
  	</div>
  	<button class="btn-block-infr"><i class="fa fa-info-circle"></i>佈置說明</button>
  	<div class="edit-block-infr">
  		<div class="add-block clearfix">
			<span class="add-block-name">您選擇的是：內容區塊 - 1大4小</span>
			<div class="add-block-content"><img src="../../img/home-block-item5.png" width="348" height="162" alt="內容區塊 - 1大4小"></div>
		</div>
  	</div>
  	<section class="edit-products">
  		<h1 class="title"><i class="fa fa-archive"></i>設定條件自動更換商品</h1><br>
	  	
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">1</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><span class="item-detail-name">商品ID</span>201405AM000001</dd>
				<dd><span class="item-detail-name">品名</span>用餃們的一痛歲信的現這到歲咖他</dd>
				<dd><span class="item-detail-name">銷售口號</span>掉兄種到廣驚己的用憑</dd>
				<dd><span class="item-detail-name">連結</span>http://www.yoursite.com/your-product.html</dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">2</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><span class="item-detail-name">商品ID</span>201405AM000001</dd>
				<dd><span class="item-detail-name">品名</span>等要們…著無白人番參不也義倆發</dd>
				<dd><span class="item-detail-name">銷售口號</span>蕩中還的上禮皮的不一戶不喝何問三暫</dd>
				<dd><span class="item-detail-name">連結</span>http://www.yoursite.com/your-product.html</dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">3</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><span class="item-detail-name">商品ID</span>201405AM000001</dd>
				<dd><span class="item-detail-name">品名</span>有啊實聲樣它慄我傳假買奉柚一一老看止</dd>
				<dd><span class="item-detail-name">銷售口號</span>一他裡了看家似了裡去啡</dd>
				<dd><span class="item-detail-name">連結</span>http://www.yoursite.com/your-product.html</dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
		</div>
		
	  	<div class="form-element edit-ad clearfix">
			<div class="edit-ad-preview">
				<span class="edit-ad-num">4</span>
				<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
			</div>
			<dl class="edit-ad-content item-detail">
				<dd><span class="item-detail-name">商品ID</span>201405AM000001</dd>
				<dd><span class="item-detail-name">品名</span>非不問陽度邊以幫這行樣貴地</dd>
				<dd><span class="item-detail-name">銷售口號</span>兒而的也再活了龍了險.月牲日被拚團憊我</dd>
				<dd><span class="item-detail-name">連結</span>http://www.yoursite.com/your-product.html</dd>
				<dd><span class="item-detail-name">售價(含)</span>NT$50,000</dd>
				<dd><span class="item-detail-name">建議售價</span>NT$55,000</dd>
				<dd><span class="item-detail-name">可賣量</span>10</dd>
			</dl>
		</div>
		
	</section>
	<section class="edit-condition" style="display: none;">
		<h1 class="title"><i class="fa fa-filter"></i>設定條件 - 依條件撈取N個商品</h1><br>
	  	<dl class="form-element edit-menu clearfix">
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
						
						<span class="condition-tag">去所腳</span>
						
						<span class="condition-tag">和揪市你</span>
						
						<span class="condition-tag">可龍一前們裡</span>
						
						<button onclick="reOpenPopup(800,'popup/modify-select-brands.php');"></button>
					</div>
				</dd>
				<dt class="edit-menu-title">屬性選項：</dt>
				<dd class="edit-menu-content">
					<div class="condition-tags">
						
						<span class="condition-tag">喝樣鍛市糊們也</span>
						
						<span class="condition-tag">裡候他一壞一</span>
						
						<span class="condition-tag">我的有說害醉</span>
						
						<span class="condition-tag">很柱越另乙</span>
						
						<span class="condition-tag">不過地提最的</span>
						
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
    <button class="btn-cancel btn-custom" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>關閉</button>
    <button class="btn-cancel btn-condition btn-cancel-edit" style="display: none;"><i class="fa fa-times"></i>取消編輯</button>
    <button class="btn-submit btn-condition" onclick="reOpenPopup(800,'popup/modify-item-list.php');" style="display: none;"><i class="fa fa-caret-right"></i>下一步</button>
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
	confirm('選擇自訂固定商品，設定完成的系統自動抓取條件將清除，請確認是否切換？');
	reOpenPopup(800,'popup/modify-edit-item-custom.php');
});
$('.btn-cancel-edit').click(function() {
	$('.edit-products').show();
	$('.edit-condition').hide();
	$('.modify-button .btn-custom').show();
	$('.modify-button .btn-condition').hide();
	parent.$.fancybox.update();
});
$('.go-condition').click(function() {
	$('.edit-products').hide();
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