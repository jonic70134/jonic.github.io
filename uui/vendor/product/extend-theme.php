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
      <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li></ul>
    </div>
    <div class="extend-theme">
      <dl class="theme">
        <dt class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>請選擇延伸賣場銷售方式</dt>
        <dd class="clearfix">
          <div class="extend-way">
            <div class="extend-way-title">單品銷售</div> 
            <div class="extend-way-sub">只販賣同一種商品</div> 
          </div>
          <a href="extend-single-edit.php"><img src="../img/extend-theme1.png" width="270" height="543"/></a>
        </dd>

        <dd class="clearfix">
        <div class="extend-way">
            <div class="extend-way-title">A+B一起賣</div> 
            <div class="extend-way-sub">多種不同的商品為一組</div> 
          </div>
          <a href="#"><img src="../img/extend-theme2.png" width="270" height="543"/></a>
        </dd>

        <dd class="clearfix">
          <div class="extend-way">
            <div class="extend-way-title">任選X件</div> 
            <div class="extend-way-sub">多個的商品任選</div> 
          </div>
          <a href="#"><img src="../img/extend-theme3.png" width="270" height="543"/></a>
        </dd>
        <dd class="clearfix">
          <div class="extend-way">
            <div class="extend-way-title">A、B區任選</div> 
            <div class="extend-way-sub">各區的商品任選</div> 
          </div>
          <a href="#"><img src="../img/extend-theme4.png" width="270" height="543"/></a>
        </dd>
      </dl>
    </div>
  </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
<script>
(function($){
  $('body').css('overflow','hidden');
  //dialog
  $('.theme-detail .btn-submit').each(function() {
    $(this).click(function() {
      confirm('請注意，若重新選擇主題，確定套用\n原已佈置的主題將視同重新佈置\n我們將保留您的網站選單');
    });
  });
})(jQuery);
//cover
function closeCover() {
  $('.cover').fadeOut(100);
  $('body').css('overflow','auto');
  $('.select-site').show();
};
function openCover() {
  $('.cover').fadeIn(100);
  $('body').css('overflow','hidden');
  $('.select-site').hide();
};
</script>
</body>
</html>