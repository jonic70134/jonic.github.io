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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li><li class="active">新增商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product">
    <dl class="form-element create-prod-form">
      <dd>
        <h2 class="sub-title"><span class="highlight">*</span>商品名稱<br/></h2>
        <input type="text" class="input-exlarge input-product-name" size="50" placeholder="商品名稱"/>
      </dd>
      <dd>
        <h2 class="sub-title"><span class="highlight">*</span>價格<br/></h2>
        <table class="create-prod-form-list template-table form-element ">
          <thead>
            <tr>
              <th class="col-grey">售價</th>
              <th class="col-grey">成本</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" class="input-exlarge input-product-name" size="8"></td>
              <td>
                  <input type="radio" name="price_radio1" id="1" checked="checked"> 進貨價計<input type="number" class="input-price" value="634" size="5"/><br/><br/>
                  <input type="radio" name="price_radio1" id="2"> 以售價抽<input type="number" class="input-price" value="" size="5"/>%換算
              </td>
            </tr>
          </tbody>
        </table>
      </dd>
    </dl>
    <div class="template-button">
      <button class="btn-action" onclick="location.href='create-prod-detail.php'">開始創建商品檔</button>
    </div>
  </div>
</section>
    </div>
    <!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/template-action.js"></script>

</body>
</html>