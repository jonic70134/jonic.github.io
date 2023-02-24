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
<div class="popup-content form-element product-edit-size">
  <h1 class="title"><i class="fa fa-plus"></i>設定顏色</h1>
  <table class="template-table">
    <thead>
      <tr>
        <th>商品主圖</th>
        <th>選顏色圖示</th>
        <th>顏色說明</th>
        <th>尺寸</th>
        <th>刪除</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="50" class="word-wrap">
          <div class="img-product img-product-tiny">
            <input type="file" class="input-img-file" accept="image/*">
            <p class="t-img-file-comment">
              <span class="link-tiny"><i class="fa fa-plus"></i><br>圖片</span>
            </p>
          </div>
        </td>
        <td width="50" class="word-wrap">
          <div class="img-product img-product-tiny">
            <p class="t-img-file-comment">
              <span class="link-tiny go-edit-crop" onclick="reOpenPopupNoClose(500,'popup/product-edit-crop.php');"><i class="fa fa-crop"></i><br>編輯</span>
            </p>
          </div>
        </td>
        <td width="100"><input type="text" size="10" placeholder="顏色說明"></td>
        <td class="txt word-wrap"><a class="link-tiny go-add-size"><i class="fa fa-plus"></i>&nbsp;尺寸</td>
        <td width="50"><button class="btn-grey go-color-disabled" title="刪除"><i class="fa fa-times"></i></button></td>
      </tr>
      <tr>
        <td class="word-wrap">
          <div class="img-product img-product-tiny">
            <input type="file" class="input-img-file" accept="image/*">
            <img src="http://placehold.it/50x30/999999/ffffff">
            <span class="t-edit-img">Edit</span>
          </div>
        </td>
        <td class="word-wrap">
          <div class="img-product img-product-tiny">
            <a class="go-edit-crop" onclick="reOpenPopupNoClose(500,'popup/product-edit-crop.php');">
              <span class="t-edit-img">Edit</span>
            </a>
            <img src="http://placehold.it/50x50/999999/ffffff">
          </div>
        </td>
        <td><input type="text" size="10" placeholder="顏色說明"></td>
        <td class="txt word-wrap">
          <input type="text" class="input-size" size="10" placeholder="尺寸"><a class="comment" title="刪除"><i class="fa fa-times"></i></a>
          <br>
          <input type="text" class="input-size" size="10" value="S" placeholder="尺寸" disabled><a class="comment" title="回復"><i class="fa fa-repeat"></i></a>
          <br>
          <a class="link-tiny go-add-size"><i class="fa fa-plus"></i>&nbsp;尺寸</a>
        </td>
        <td><button class="btn-grey go-color-disabled" title="刪除"><i class="fa fa-times"></i></button></td>
      </tr>
      <tr class="disabled">
        <td class="word-wrap">
          <div class="img-product img-product-tiny">
            <img src="http://placehold.it/50x50/999999/ffffff">
          </div>
        </td>
        <td class="word-wrap">
          <div class="img-product img-product-tiny">
            <img src="http://placehold.it/50x50/999999/ffffff">
          </div>
        </td>
        <td><input type="text" size="10" value="黑色" placeholder="顏色說明" disabled></td>
        <td class="txt word-wrap">
          <input type="text" class="input-size" size="10" value="S" placeholder="尺寸" disabled>
        </td>
        <td><button class="btn-blue go-color-reverse" title="回復"><i class="fa fa-repeat"></i></button></td>
      </tr>
    </tbody>
  </table>
  <button class="btn-transparent"><i class="fa fa-plus"></i>&nbsp;顏色</button>
  <a class="link-tiny link-right" onclick="reOpenPopupNoClose(400,'popup/product-edit-size.php');">我只要設定尺寸</a>
  <div class="clearfix"></div>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>