<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="../index.php">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">活動詳情</li></ul>
</div>
<section class="template-content">
  <button class="btn-back-prev" onclick="location.href='campaign-list.php'"><i class="fa fa-reply"></i>回活動列表</button>
  <dl class="campaign-infr">
    <dd>活動名稱：正佔渡到是們要的經-一</dd>
    <dd>活動時間：2014/02/01 00:00 ~ 2014/02/28 00:00</dd>
    <dd>活動促銷：每滿1000元折100元</dd>
    <dd>活動範圍：商品</dd>
  </dl>
  <div class="campaign-summary">目前共有 <span class="highlight">888</span> 個符合活動的商品：</div>
  <section class="table-container table-with-img">
    <div class="table-hd">
      <table class="template-table" width="400">
        <thead>
          <tr>
            <th>賣場圖片</th>
            <th>賣場ID</th>
            <th width="200">賣場名稱</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 10; $x++) {
                echo '
                  <tr>
                    <td><img src="http://placehold.it/50x50" width="50" height="50" alt"好那生樹意裡就些沒們似台顆"></td>
                    <td>201310AG170000105</td>
                    <td class="txt break-all" title="街已明行一子悲行開地容早我似茶解我像他傷歹不不入們像但示有有續個無憐去好得水樣沒">啦好的疑忙們頭他應去天人不急鑼...</td>
                  </tr>
                ';
            } 
          ?>
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <table class="template-table">
        <thead>
          <tr>
            <th>顏色</th>
            <th>尺寸</th>
            <th>售價</th>
            <th>成本</th>
            <th>毛利率</th>
            <th>借貨/採購</th>
            <th>分類</th>
            <th>品牌</th>
            <th>販售平台</th>
            <th>廠商</th>
            <th>自用料號</th>
            <th>PM</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            for ($x = 0; $x <= 10; $x++) {
                echo '
                  <tr>
                    <td>--</td>
                    <td>--</td>
                    <td class="num">$65,535</td>
                    <td class="num">$65,535</td>
                    <td class="num">100%</td>
                    <td>借貨</td>
                    <td>零食</td>
                    <td>錢幾-</td>
                    <td>ASAP</td>
                    <td>千七身他</td>
                    <td>good00205</td>
                    <td>郝盈</td>
                  </tr>
                ';
            } 
          ?>
        </tbody>
      </table>
    </div>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/campaign-action.js"></script>
</body>
</html>