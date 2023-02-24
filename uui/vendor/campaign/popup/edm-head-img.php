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
  <h1 class="title"><i class="fa fa-file-code-o"></i>上傳版頭圖檔</h1>
  <dl class="form-element template-popup-form">
    <dd>
      <label class="label-content-title" for="radioFile"><input type="radio" id="radioFile" name="selectImg">上傳圖檔：</label><input type="file" class="input-img" accept="image/*">
      <span class="comment"> (大小上限500kB的JPG / JPEG / GIF / PNG格式檔案)</span>
    </dd>
    <dd>
      <label class="label-content-title" for="radioUrl"><input type="radio" id="radioUrl" name="selectImg">圖片連結：</label><input type="text" class="input-img input-large" placeholder="http://">
    </dd>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
<script>
  $('.input-img').each(function() {
    $(this).focus(function() {
      $(this).parent().find('input[name="selectImg"]').prop('checked', true);
    });
  });
</script>
</body>
</html>