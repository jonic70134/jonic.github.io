<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/cropper.min.css" rel="stylesheet" type="text/css">
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content product-edit-crop">
  <h1 class="title"><i class="fa fa-crop"></i>編輯選顏色圖示</h1>
  <div class="img-crop-product">
    <img id="img_crop" src="http://placehold.it/360x360/999999/ffffff">
  </div>
  <span class="btn-transparent link-right"><i class="fa fa-picture-o"></i>&nbsp;我要換圖<input type="file" class="input-img-file" accept="image/*"></span>
  <div class="clearfix"></div>
  <div class="template-button">
    <button class="btn-cancel" onclick="reOpenPopupNoClose(600,'popup/product-edit-color.php');"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="reOpenPopupNoClose(800,'popup/product-edit-image.php');"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/cropper.min.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
$(function () {
  $('#img_crop').cropper({
      aspectRatio: 1/1,
      minContainerWidth: 360,
      minContainerHeight: 360,
      minCanvasWidth: 360,
      minCanvasHeight: 360,
      minCropBoxWidth: 50,
      minCropBoxHeight: 50
    });
});
</script>
</body>
</html>