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
  <h1 class="title"><i class="fa fa-list-alt"></i>差異筆數</h1>
  <table class="template-table">
    <thead>
      <tr>
        <th>商品名稱</th>
        <th>顏色</th>
        <th>尺寸</th>
        <th>自用料號</th>
        <th>失敗原因</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        for ($x = 0; $x <= 5; $x++) {
            echo '
              <tr>
                <td class="txt">是的你快的多媽所廢他繞點裡</td>
                <td>白</td>
                <td>XXXL</td>
                <td>8888888888</td>
                <td class="txt">EAN格式錯誤</td>
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