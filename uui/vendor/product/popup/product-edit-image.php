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
<div class="popup-content">
  <h1 class="title"><i class="fa fa-plus"></i>商品圖片</h1>
  <br>
  <p class="description comment">*最多上傳10張&nbsp;/&nbsp;建議比例1:1&nbsp;/&nbsp;寬不可小於360px&nbsp;/&nbsp;大小不超過2MB</p>
  
  <?php 
    for ($x = 0; $x <= 8; $x++) {
        echo '
          <div class="img-product img-product-medium">
            <input type="file" class="input-img-file" accept="image/*">
            <img src="http://placehold.it/130x130/999999/ffffff">
            <span class="t-edit-img">Edit</span>
            <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
          </div>
        ';
    } 
  ?>

  <div class="img-product img-product-medium">
    <input type="file" class="input-img-file" accept="image/*">
    <p class="t-img-file-comment">
      <span class="link-tiny"><i class="fa fa-plus"></i>&nbsp;圖片</span>
    </p>
  </div>
  <div class="template-button">
    <button class="btn-cancel" onclick="reOpenPopupNoClose(600,'popup/product-edit-color.php');"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="reOpenPopupNoClose(600,'popup/product-edit-color.php');"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>