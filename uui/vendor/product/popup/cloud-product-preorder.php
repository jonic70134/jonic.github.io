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
  <h1 class="title"><i class="fa fa-search"></i>預購紀錄</h1>
  <table class="cloud-product-popup-table template-table">
    <thead>
      <tr>
        <th>預購期間</th>
        <th>預購數量</th>
        <th>指定出貨日</th>
        <th>預計可出貨日</th>
        <th>新增人</th>
        <th>新增日期</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td colspan="6">目前無資料</td>
      </tr>
      <?php 
              for ($x = 0; $x <= 5; $x++) {
                  echo '
                    <tr>
                      <td>2013/09/15 20:59 <br>~ 2013/06/22 20:59</td>
                      <td>65,535</td>
                      <td>2013/01/04 20:59</td>
                      <td>2013/05/19 20:59</td>
                      <td>於智</td>
                      <td>2013/03/18 20:59</td>
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