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
  <h1 class="title"><i class="fa fa-pencil"></i>編輯版尾資訊</h1>
  <div class="modify-form">
	<div class="form-element clearfix">
		<label class="form-element-name">編輯版尾色系</label>
		<div class="form-element-content">
			<input type="radio" id="radioBgColor" name="selectBg"><label for="radioBgColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label><br>
			<input type="radio" id="radioBgImg" name="selectBg"><label for="radioBgImg"><input type="file" class="input-bg-img" accept="image/*"></label>
		</div>
		<div class="comment">選擇您網站版頭的色系或要放置的圖片<br>(限為1220*530px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案)</div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">網站導覽</label>
		<div class="form-element-content"><button class="btn-edit-sitemap" onclick="reOpenPopup(800,'popup/modify-sitemap.php');">編輯網站導覽</button></div>
		<div class="comment">本導覽列將於網站下方列出。例：</div>
		<div class="form-element-infr"><img src="/img/infr-sitemap.jpg" width="500" height="133" alt="網站導覽說明"></div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">網站下方版權說明</label>
		<div class="form-element-content"><textarea class="input-text" placeholder="請輸入您的網站下方版權說明"></textarea></div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">追蹤碼設定</label>
		<div class="form-element-content">
			<dl class="analytics-type">
				<dd>
					<input type="checkbox" id="checkGoogle" name="selectAnalytics"><label for="checkGoogle">Google</label>
					<dl class="analytics-content">
						<dd><label>申請網域</label><input type="text" class="input-analytics" placeholder="例：asus.com"></dd>
						<dd><label>Google Analytics追蹤ID</label><input type="text" class="input-analytics" placeholder="請輸入您的Google Analytics追蹤ID"></dd>
						<dd><label>Google 再行銷追蹤ID</label><input type="text" class="input-analytics" placeholder="再行銷轉換碼"></dd>
						<dd><label>Google GDN追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
						<dd><label>Google Search追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
						<dd><label>Google Youtube追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
					</dl>
				</dd>
				<dd>
					<input type="checkbox" id="checkFacebook" name="selectAnalytics"><label for="checkFacebook">Facebook</label>
					<dl class="analytics-content">
						<dd><label>申請網域</label><input type="text" class="input-analytics" placeholder="例：asus.com"></dd>
						<dd><label>Google Analytics追蹤ID</label><input type="text" class="input-analytics" placeholder="請輸入您的Google Analytics追蹤ID"></dd>
						<dd><label>Google 再行銷追蹤ID</label><input type="text" class="input-analytics" placeholder="再行銷轉換碼"></dd>
						<dd><label>Google GDN追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
						<dd><label>Google Search追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
						<dd><label>Google Youtube追蹤ID</label><input type="text" class="input-analytics" placeholder="購物完成轉換碼"></dd>
					</dl>
				</dd>
				<dd><input type="checkbox" id="checkYahoo" name="selectAnalytics"><label for="checkYahoo">Yahoo</label></dd>
			</dl>
		</div>
		<div class="comment"><a href="" target="_blank"><i class="fa fa-question-circle"></i>如何取得ID？</a></div>
	</div>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>儲存</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/color-picker.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>