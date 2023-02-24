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
  <h1 class="title"><i class="fa fa-list-alt"></i>未完成配圖明細</h1>
  <table class="template-table">
    <thead>
      <tr>
        <th>商品ID</th>
        <th>商品名稱</th>
        <th>圖類別</th>
        <th>檔名</th>
        <th>配圖狀態</th>
        <th>更新時間</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        for ($x = 0; $x <= 5; $x++) {
            echo '
              <tr>
                <td>201406AG110001051</td>
                <td class="txt">甘咖夜了動出有龍吶啊萄又龍又-人易啡和來城然</td>
                <td>主商品圖</td>
                <td>est.jpg</td>
                <td>找不到圖</td>
                <td>2013/03/03 20:59:59</td>
              </tr>
            ';
        } 
      ?>
    </tbody>
  </table>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>關閉</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
</body>
</html>