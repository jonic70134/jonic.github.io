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
  <h1 class="title"><i class="fa fa-search"></i>賣場最大銷售量</h1>
  <table class="cloud-product-popup-table template-table">
    <thead>
      <tr>
        <th>商品類型</th>
        <th>商品ID</th>
        <th>商品名稱</th>
        <th>顏色</th>
        <th>尺寸</th>
        <th>可賣量</th>
        <th>可被預購量</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>一般商品</td>
        <td>201502AG250000440</td>
        <td class="txt break-all">啡去城走疑會時夜老哈咖到再爭音和我是人</td>
        <td>白</td>
        <td>M</td>
        <td>65,535</td>
        <td>65,535</td>
      </tr>
    </tbody>
  </table>
  <table class="cloud-product-popup-table cloud-product-darken-table template-table">
    <caption>設定方式：固定數量 (不更新)</caption>
    <thead>
      <tr>
        <th>販售平台</th>
        <th>賣場ID</th>
        <th>賣場名稱</th>
        <th>廠商設定<br>最大銷售量</th>
        <th>PM設定<br>最大銷售量</th>
        <th>目前<br>可銷售數量</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        for ($x = 0; $x <= 5; $x++) {
            echo '
              <tr>
                <td>ASAP</td>
                <td>201502AG250000440</td>
                <td class="txt break-all">腕電月杯以以高的以弟皮股是我他棒頓還</td>
                <td>65,535</td>
                <td>65,535</td>
                <td>65,535</td>
              </tr>
            ';
        } 
      ?>
    </tbody>
  </table>
  <div class="comment">＊未填寫數值，則沒有賣場最大銷售量限制。<br>＊組合商品有多顏色尺寸時，僅能使用固定數量的設定方式。</div>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>關閉</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
</body>
</html>