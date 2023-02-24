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
  <h1 class="title"><i class="fa fa-search"></i>顏色/尺寸</h1>
  <table class="cloud-product-popup-table template-table">
    <thead>
      <tr>
        <th>商品圖</th>
        <th>顏色</th>
        <th>商品ID</th>
        <th>廠商自用料號</th>
        <th>EAN</th>
        <th>ISBN</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        for ($x = 0; $x <= 5; $x++) {
            echo '
              <tr>
                <td><img src="http://placehold.it/50x50/" width="50" height="50" alt="顏色顏色顏色顏色顏色顏色"></td>
                <td>粉</td>
                <td><a onclick="parent.location.href="cloud-product-market.php";">201502AG250000440</a></td>
                <td>201502AG250000440</td>
                <td>5-053177-132017</td>
                <td>ISBN 978-957-208-570-0</td>
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
<script src="../../js/template-action.js"></script>
</body>
</html>