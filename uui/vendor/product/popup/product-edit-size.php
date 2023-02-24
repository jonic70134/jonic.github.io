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
  <h1 class="title"><i class="fa fa-plus"></i>設定尺寸</h1>
  <table class="template-table">
    <thead>
      <tr>
        <th>尺寸</th>
        <th>刪除</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="txt word-wrap">
          <input type="text" class="input-size" size="10" placeholder="尺寸">
        </td>
        <td><button class="btn-grey go-color-disabled" title="刪除"><i class="fa fa-times"></i></button></td>
      </tr>
    </tbody>
  </table>
  <button class="btn-transparent"><i class="fa fa-plus"></i>&nbsp;尺寸</button>
  <a class="link-tiny link-right" onclick="reOpenPopupNoClose(600,'popup/product-edit-color.php');">我也要設定顏色</a>
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