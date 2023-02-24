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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="add-product.php">新增商品 (單筆/大量)</a><span class="divider"> &gt; </span></li> <li class="active">新增單筆商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product-upload">
    <div class="form-element add-product-upload-form">
      <h1 class="title">placeat provident reiciendis optio nihil tenetur aperiam eum aspernatur aspernatur</h1>
      <table class="template-table">
        <thead>
          <tr>
            <th>顏色</th>
            <th>尺寸</th>
            <th><span class="highlight">*</span>&nbsp;設定可賣量</th>
            <th>廠商自用料號</th>
            <th class="col-grey">EAN</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td><span class="t-ellipsis">紅色紅色紅色紅色</span></td>
            <td><span class="t-ellipsis">XXXXXXXXXXXXXXXXL</span></td>
            <td class="txt">
              <input type="radio" id="radio_instock_qtn_1_1" class="radio-instock-qtn" name="radio_instock_qtn1" checked>
              <label for="radio_instock_qtn_1_1">可賣量</label>
              <input type="number" class="input-tiny-number input-instock-qty">個
              &nbsp;&nbsp;
              <input type="radio" id="radio_instock_qtn_1_2" name="radio_instock_qtn1">
              <label for="radio_instock_qtn_1_2">暫不設定</label>
            </td>
            <td><input type="text" size="15" placeholder="廠商自用料號"></td>
            <td><input type="text" size="15" placeholder="可不填"></td>
          </tr>
          
          <tr>
            <td><span class="t-ellipsis">紅色紅色紅色紅色</span></td>
            <td><span class="t-ellipsis">XXXXXXXXXXXXXXXXL</span></td>
            <td class="txt">
              <input type="radio" id="radio_instock_qtn_2_1" class="radio-instock-qtn" name="radio_instock_qtn2" checked>
              <label for="radio_instock_qtn_2_1">可賣量</label>
              <input type="number" class="input-tiny-number input-instock-qty">個
              &nbsp;&nbsp;
              <input type="radio" id="radio_instock_qtn_2_2" name="radio_instock_qtn2">
              <label for="radio_instock_qtn_2_2">暫不設定</label>
            </td>
            <td><input type="text" size="15" placeholder="廠商自用料號"></td>
            <td><input type="text" size="15" placeholder="可不填"></td>
          </tr>
          
          <tr>
            <td><span class="t-ellipsis">紅色紅色紅色紅色</span></td>
            <td><span class="t-ellipsis">XXXXXXXXXXXXXXXXL</span></td>
            <td class="txt">
              <input type="radio" id="radio_instock_qtn_3_1" class="radio-instock-qtn" name="radio_instock_qtn3" checked>
              <label for="radio_instock_qtn_3_1">可賣量</label>
              <input type="number" class="input-tiny-number input-instock-qty">個
              &nbsp;&nbsp;
              <input type="radio" id="radio_instock_qtn_3_2" name="radio_instock_qtn3">
              <label for="radio_instock_qtn_3_2">暫不設定</label>
            </td>
            <td><input type="text" size="15" placeholder="廠商自用料號"></td>
            <td><input type="text" size="15" placeholder="可不填"></td>
          </tr>
          
        </tbody>
      </table>
    </div>
    <dl class="form-element add-product-upload-form">
      <dd>
        <span class="highlight">*</span>&nbsp;TIC: <input type="text" size="10">&nbsp;<a href="https://taxcloud.net/" target="_blank" class="link-tiny">Inquire</a>
      </dd>
    </dl>
    <dl class="form-element add-product-upload-form">
      <dd>Electronic waste recycling fee (only to California State): </dd>
      <dd class="form-content-indent">
        <input type="radio" id="radio_recyling_fee_1" name="radio_recyling_fee" checked>
        <label for="radio_recyling_fee_1">No</label>
      </dd>
      <dd class="form-content-indent">
        <input type="radio" id="radio_recyling_fee_2" name="radio_recyling_fee">
        <label for="radio_recyling_fee_2">3USD / screen size: More than four inches but less than 15 inches</label>
      </dd>
      <dd class="form-content-indent">
        <input type="radio" id="radio_recyling_fee_3" name="radio_recyling_fee">
        <label for="radio_recyling_fee_3">4USD / screen size: More than 15 inches but less than 35 inches</label>
      </dd>
      <dd class="form-content-indent">
        <input type="radio" id="radio_recyling_fee_4" name="radio_recyling_fee">
        <label for="radio_recyling_fee_4">5USD / screen size: 35 inches or more</label>
      </dd>
    </dl>
    <dl class="form-element add-product-upload-form">
      <dd><a class="link-tiny go-more-info link-right">我要填更多資訊</a><div class="clearfix"></div></dd>
    </dl>
    <dl class="form-element add-product-upload-form more-info hide">
      <dd>
        <span class="highlight">*</span>&nbsp;缺貨通知： 當商品剩下<input type="number" class="input-tiny-number">個通知我
      </dd>
    </dl>
    <dl class="form-element add-product-upload-form more-info hide">
      <dd><input type="checkbox" checked>本商品願意賣海外</dd>
      <dd class="form-content-indent">
        <dl class="form-content-box">
          <dt class="form-label">
            <span class="highlight">*</span>&nbsp;商品英文名稱
          </dt>
          <dd class="form-content">
            <input type="text" size="60" value="aliquam ut nesciunt dignissimos tempore dolores debitis quod">
            <a class="link-question">
              <i class="fa fa-question-circle"></i>
              <div class="tip-add-product">系統自動翻譯，不滿意可以直接修改</div>
            </a>
          </dd>
          <dt class="form-label">
            <span class="highlight">*</span>&nbsp;Made in
          </dt>
          <dd class="form-content">
            <input type="text" size="20" class="input-search" value="Taiwan">
            <dl class="related-searches" style="top: 24px; left: 3px;">
              
              <dd>veritatis fuga</dd>
              
              <dd>aut voluptas</dd>
              
              <dd>et quae</dd>
              
            </dl>
            <span class="comment">商品原產地</span>
          </dd>
        </dl>
      </dd>
    </dl>
    <div class="template-button">
      <button class="btn-save-only" onclick="location.href='add-product-detail.php'"><i class="fa fa-caret-left"></i>上一步</button>
      <button class="btn-action"><i class="fa fa-floppy-o"></i>暫不上架</button>
      <button class="btn-submit go-popup" data-width="300" data-href="popup/product-upload-confirm.php" data-with-close="false"><i class="fa fa-check"></i>立即上架</button>
    </div>
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
<script>
//可賣量
$('.input-tiny-number').focus(function() {
  $(this).parent().find('.radio-instock-qtn').prop('checked',true);
});
//更多資訊
$('.go-more-info').click(function() {
  $('.more-info').removeClass('hide');
  $(this).hide();
});
//產地下拉
$('.input-search').bind('keyup change',function(){
    $(this).next('.related-searches').slideDown(100);
    if ($(this).val() == '') {
        $(this).next('.related-searches').slideUp(50);
    };
}).blur(function() {
    $(this).next('.related-searches').slideUp(50);
});
</script>
</body>
</html>