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
<section class="popup-content">
  <h1 class="title"><i class="fa fa-search"></i>設定活動 - 2014/12/31 10:00</h1>
  <dl class="form-element template-popup-form add-campaign">
    <dd>
      <label class="label-content-title">類型：</label>
      <label for="radio1_1"><input type="radio" id="radio1_1" name="radio1" checked>連動售價/特賣變價</label>
      <label for="radio1_2"><input type="radio" id="radio1_2" name="radio1">自行輸入價格 (價格不連動)</label>
    </dd>
    <dd class="import-product">
      <input type="text" size="20" placeholder="請輸入賣場ID">
      <button class="btn-active"><i class="fa fa-plus"></i>讀入賣場資訊</button>
    </dd>
    <dd><label class="label-content-title">顯示名稱：</label><input type="text" size="40" placeholder="請輸入活動顯示名稱"></dd>
    <dd><label class="label-content-title">優惠價：</label><b class="highlight">$99,999</b></dd>
    <dd><label class="label-content-title">優惠價：</label><input type="text" size="10" placeholder="$99,999起"></dd>
    <dd><label class="label-content-title">連結網址：</label><input type="text" size="50" value="http://www.url.com/page.html" disabled></label></dd>
    <dd>
      <label class="label-content-title">上傳圖片：</label>
      <div class="upload-file">
        <input type="file" class="input-file" accept="image/*">
        <button class="btn-active"><i class="fa fa-picture-o"></i>編輯 160*160</button>
      </div>
      <span class="comment">限為160*160px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案</span-->
    </dd>
    <dd class="img-preview"><img src="http://placehold.it/160x160/"></dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>關閉 (瀏覽用)</button>
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
</body>
</html>