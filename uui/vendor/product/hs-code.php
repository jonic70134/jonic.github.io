<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li class="active">找參考HS code</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>HS code 分類</label>
      <input type="text" size="30"><a class="go-popup" data-width="500" data-href="popup/hs-code-catagories.php">選</a>
    </div>
    <div class="select-group">
      <label>字詞</label>
      <input type="text" size="30" placeholder="Custom's English product name">
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead>
          <tr>
            <th>&nbsp;</th>
            <th>Layer1</th>
            <th>Layer2</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          for ($x = 0; $x <= 20; $x++) {
              echo '
                <tr>
                  <td><input type="radio" id="radio_1" name="radio_hs"></td>
                  <td class="txt">Books &amp; Magazines</td>
                  <td class="txt">Toy musical instruments &amp; apparatus</td>          
                </tr>
              ';
            } 
         ?> 
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="template-table scroll-content">
          <thead>
            <tr>
              <th>English Product Name</th>
              <th>Sub Code ID</th>
              <th>Sub Code Name</th>
              <th>HS Code</th>
              <th>Custom's English<br>Product Name</th>
              <th>Tax</th>
            </tr>
          </thead>
          <tbody>
            
            <?php 
              for ($x = 0; $x <= 20; $x++) {
                  echo '
                    <tr>
                      <td class="txt">stuffed animal / character toy</td>
                      <td>950440</td>
                      <td class="txt">stuffed animal / character toy</td>
                      <td>950440</td>
                      <td class="txt">Playing cards (including poker)</td>
                      <td>100%</td>
                    </tr>
                  ';
                } 
             ?> 
          </tbody>
        </table>
      </section>
    </div>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
  <div class="template-button">
    <button class="btn-cancel"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit"><i class="fa fa-check"></i>確認送出</button>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/template-action.js"></script>
<script src="../js/double-scroll.js"></script>
</body>
</html>