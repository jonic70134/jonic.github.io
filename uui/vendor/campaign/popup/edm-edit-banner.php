<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<section class="popup-content">
  <h1 class="title"><i class="fa fa-pencil"></i>編輯橫幅</h1>
  <dl class="form-element template-popup-form add-campaign">
    <dd><label class="label-content-title"><span class="highlight">*</span>標題文字：</label><input type="text" class="input-form" placeholder="請輸入描述文字"></dd>
    <dd><label class="label-content-title">標題文字顏色：</label><input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></dd>
    <dd><label class="label-content-title">設定背景：</label><input type="radio" id="radioEdmColor" class="radio-bg-color" name="selectEdmBg"><label for="radioEdmColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label>
      <input type="radio" id="radioEdmImg" class="radio-bg-img" name="selectEdmBg"><label for="radioEdmImg"><input type="file" class="input-bg-img" accept="image/*"></label>
      <span class="comment" style="margin-left: 0; display: inline;"> (大小上限500kB的JPG / JPEG / GIF / PNG格式檔案)</span></dd>
    <dd><label class="label-content-title">錨點：</label><input type="text" size="10"></dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/color-picker.js"></script>
</body>
</html>