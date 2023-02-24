<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-pencil"></i>熱門廣告區設定</h1>
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
  	<button class="btn-block-infr"><i class="fa fa-info-circle"></i>佈置說明</button>
  	<div class="edit-block-infr">
  		<div class="add-block clearfix">
			<span class="add-block-name">您選擇的是：內容區塊 - 1大4小</span>
			<div class="add-block-content"><img src="../../img/home-block-item5.png" width="348" height="162" alt="內容區塊 - 1大4小"></div>
		</div>
  	</div>
  	
  	<?php 
		for ($x = 0; $x <= 5; $x++) {
			echo '
				<div class="form-element edit-ad clearfix">
					<div class="edit-ad-preview">
						<span class="edit-ad-num">1</span><!-- ad num -->
						<div class="edit-ad-img"><img src="http://placehold.it/250x100/f1f1f1/666666"></div>
					</div>
					<dl class="edit-ad-content item-detail">
						<dd><input type="text" placeholder="請輸入商品ID"><button class="btn-sync-item"><i class="fa fa-plus"></i>讀入商品資訊</button></dd>
						<dd><span class="item-detail-name">品名</span><input type="text" size="40" value="啡還憐揪也特兒來麼番的熱環" placeholder="請輸入商品品名"></dd>
						<dd><span class="item-detail-name">銷售口號</span><input type="text" size="60" value="何榮似生難面那過千月得是有感互說那忙睡" placeholder="請輸入商品銷售口號"></dd>
						<dd><span class="item-detail-name">連結網址</span><input type="text" size="60" value="http://"></dd>
						<dd><span class="item-detail-name">售價 (含)</span>NT$ <input type="text" size="10" value="99000000"></dd>
						<dd><span class="item-detail-name">建議售價</span>NT$ <input type="text" size="10" value="99000000"></dd>
						<dd><span class="item-detail-name">可賣量</span>10</dd>
					</dl>
					<button class="btn-clear-ad"><i class="fa fa-times"></i>清空廣告設定</button>
				</div>

			';
		} 
	?>
 
	
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-active" onclick="parent.$.fancybox.close();"><i class="fa fa-floppy-o"></i>儲存暫不發佈</button>
    <button class="btn-submit" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>儲存並預覽</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/color-picker.js"></script>
<script>
$('#selectBodyImg').click(function() {
	$('#radioBodyImg').prop('checked',true);
});
</script>
</body>
</html>