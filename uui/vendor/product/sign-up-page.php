<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
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
          <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">報品列表</li></ul>
        </div>
        <section class="template-content">
          <div class="template-button" style="width:500px; margin:90px auto; text-align:left;">
            <button class="btn-action" onclick="location.href='sign-up.php'"><i class="fa fa-plus"></i>批次報名</button>
            <br><br>
            <button class="btn-action" onclick="location.href='sign-up-access.php'"><i class="fa fa-file-excel-o"></i>審核廠商申請</button>
            <br><br>
            <button class="btn-action" onclick="location.href='sign-up-already2.php'"><i class="fa fa-refresh"></i>看已報名的商品列表</button>
          </div>
        </section>
    </div><!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/template-action.js"></script>
</body>
</html>