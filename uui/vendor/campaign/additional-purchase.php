<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="../index.php">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">購物車加購</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="additional-purchase.php" class="active">購物車加購</a></dd>
  <dd><a href="additional-purchase-log.php">修改記錄</a></dd>
</dl>
<section class="template-content template-content-tab">
    <dl class="additional-purchase">
        <dd class="hide">
            <div class="product-image"><img src="http://placehold.it/160x160/f1f1f1/666666" alt="YAMASAKI 山崎 優賞16吋遙控型涼風立扇(SK-1660SR) 超值2入組"></div>
            <dl class="product">
                <dd><b>商品ID：</b>201404AM150000120</dd>
                <dd><b>商品名稱：</b>YAMASAKI 山崎 優賞16吋遙控型涼風立扇(SK-1660SR) 超值2入組</dd>
                <dd><b>加購價：</b>$100</dd>
                <dd><b>成本：</b>$80</dd>
                <dd><b>毛利率：</b>20%</dd>
                <dd><b>此商品於購物車加購中，目前的狀態：</b>隱藏</dd>
            </dl>
            <div class="button">
                <button class="btn-edit go-popup" data-width="700" data-href="popup/additional-purchase-edit.php"><i class="fa fa-pencil"></i>編輯</button>
                <button class="btn-delete" onclick="confirm('確定刪除這個加購商品嗎？');"><i class="fa fa-times"></i>刪除</button>
            </div>
        </dd>
        <?php 
          for ($x = 0; $x <= 11; $x++) {
              echo '
                <dd>
                  <div class="product-image"><img src="http://placehold.it/160x160/f1f1f1/666666" alt="YAMASAKI 山崎 優賞16吋遙控型涼風立扇(SK-1660SR) 超值2入組"></div>
                  <dl class="product">
                      <dd><b>商品ID：</b>201404AM150000121</dd>
                      <dd><b>商品名稱：</b>YAMASAKI 山崎 優賞16吋遙控型涼風立扇(SK-1660SR) 超值2入組</dd>
                      <dd><b>加購價：</b>$100</dd>
                      <dd><b>成本：</b>$80</dd>
                      <dd><b>毛利率：</b>20%</dd>
                      <dd><b>此商品於購物車加購中，目前的狀態：</b>顯示</dd>
                  </dl>
                  <div class="button">
                      <button class="btn-edit go-popup" data-width="700" data-href="popup/additional-purchase-edit.php"><i class="fa fa-pencil"></i>編輯</button>
                      <button class="btn-delete" onclick="confirm("確定刪除這個加購商品嗎？"");"><i class="fa fa-times"></i>刪除</button>
                  </div>
              </dd>
              ';
          } 
        ?>
        
    </dl>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/campaign-action.js"></script>
</body>
</html>