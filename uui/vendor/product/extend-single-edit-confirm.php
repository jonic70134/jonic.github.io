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
      <h1 class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>確認與編輯各商品成本</h1>
      <div class="add-product">
          <div class="prod-edit-line clearfix">
            <h2 class="sub-title">賣場名稱&nbsp;*</h2>
            <div class="prod-name-edit">
              <span class="prod-name">Miss Hana 花娜小姐 唇膏3g</span>
            </div>
          </div>

          <div class="prod-edit-line clearfix">
            <h2 class="sub-title">賣場售價：<span>79(含稅)</span></h2>
          </div>
          <div class="prod-edit-line clearfix">
            <h2 class="sub-title">賣場商品成本與約當售價明細&nbsp;*</>
          </div>

          <div class="extend-table-bg form-element clearfix">
            <h3 class="extend-table-title">自訂區塊標題文字：<span>Miss Hana 花娜小姐 唇膏3g+3g 三色可選 3選1</span></h3>
            <table class="extend-table template-table">
              <tr>
                <th class="col-black">商品ID</th>
                <th class="col-black">商品名稱</th>
                <th class="col-black">規格顏色</th>
                <th class="col-black">規格尺寸</th>
                <th class="col-black">借貸/轉單</th>
                <th class="col-black">預設成本</th>
                <th class="col-black">預設售價</th>
                <th class="col-red-light">商品成本</th>
                <th class="col-red-light">約當售價</th>
              </tr>
              <tr>
                <td>201712AM280008903</td>
                <td>Miss Hana 花娜小姐 唇膏3g</td>
                <td>單一規格</td>
                <td>---</td>
                <td>借貸</td>
                <td><span class="highlight">19</span></td>
                <td>29</td>
                <td class="col-red-light"><input type="text" name="" id="" size="5"  value="17"/></td>
                <td class="col-red-light">$19.75</td>
              </tr>
              <tr>
                <td>201712AM280008903</td>
                <td>Miss Hana 花娜小姐 唇膏3g</td>
                <td>單一規格</td>
                <td>---</td>
                <td>借貸</td>
                <td><span class="highlight">19</span></td>
                <td>29</td>
                <td class="col-red-light"><input type="text" name="" id="" size="5" value="17"/></td>
                <td class="col-red-light">$19.75</td>
              </tr>
            </table>
            <br/>
            <div class="highlight">同一隻紅筆被加入3次，表示一次要賣3隻紅筆</div>
      </div>
      
      <div class="add-product">
        <div class="template-button clearfix">
          <div class="fl">
            <button class="btn-draft" onclick="location.href='extend-single-edit.php'"><&nbsp;修改賣場售價與商品</button>
          </div>
          <div class="fr">
            <button class="btn-action" onclick="location.href='#'">編輯賣場文案&nbsp;></button>
          </div>
        </div>
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