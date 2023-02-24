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
      <h1 class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>請選擇商品加入單品銷售賣場</h1>
      <div class="extend-table-bg form-element clearfix">
        <div class="search-filter clearfix">
          <label class="label-search"><input type="text" size="30" placeholder="商品名稱/商品ID/廠商自用料號"></label>
          <button class="btn-action"><i class="fa fa-search"></i>搜尋</button>
          <div class="fr highlight">同一支紅筆被加入3次，表示一定要賣3支紅筆</div>
        </div>
        <table class="extend-table template-table">
          <tr>
            <th class="col-black">商品ID</th>
            <th class="col-black">商品名稱</th>
            <th class="col-black">規格顏色</th>
            <th class="col-black">規格尺寸</th>
            <th class="col-black">借貸/轉單</th>
            <th class="col-black">預設成本</th>
            <th class="col-black">預設售價</th>
            <th class="col-black" width="30"><input type="checkbox"/></th>
          </tr>
          <tr>
            <td>201712AM280008903</td>
            <td>Miss Hana 花娜小姐 唇膏3g</td>
            <td>單一規格</td>
            <td>---</td>
            <td>借貸</td>
            <td>19</td>
            <td>29</td>
            <td><input type="checkbox" name="" id=""></td>
          </tr>
          <tr>
            <td>201712AM280008903</td>
            <td>Miss Hana 花娜小姐 唇膏3g</td>
            <td>單一規格</td>
            <td>---</td>
            <td>借貸</td>
            <td>19</td>
            <td>29</td>
            <td><input type="checkbox" name="" id=""></td>
          </tr>
        </table>
        <div class="clearfix">
          <button class="btn-add-green" type="button"><i class="fa fa-plus" aria-hidden="true"></i>加入</button>
        </div>
        <hr/>
        <table class="extend-table template-table">
          <tr>
            <th class="col-black">商品ID</th>
            <th class="col-black">商品名稱</th>
            <th class="col-black">規格顏色</th>
            <th class="col-black">規格尺寸</th>
            <th class="col-black">借貸/轉單</th>
            <th class="col-black">預設成本</th>
            <th class="col-black">預設售價</th>
            <th class="col-black" width="30"></th>
          </tr>
          <tr>
            <td>201712AM280008903</td>
            <td>Miss Hana 花娜小姐 唇膏3g</td>
            <td>單一規格</td>
            <td>---</td>
            <td>借貸</td>
            <td>19</td>
            <td>29</td>
            <td><button type="button" class="btn-grey"><i class="fa fa-times"></i></button><br/>刪除</td>
          </tr>
        </table>
      </div>
      <div class="add-product">
        <div class="prod-edit-line prod-name clearfix">
          <h2 class="sub-title">賣場名稱&nbsp;*<br></h2>
          <input type="text" name="" id=""/>
        </div>

        <div class="prod-edit-line clearfix">
          <h2 class="sub-title">設定賣場售價&nbsp;*<br></h2>
          <input type="text" name="" id=""/>
        </div>

        <div class="template-button clearfix">
          <div class="fl">
            <button class="btn-draft" onclick="location.href='product-list-build.php'"><&nbsp;選擇延伸賣場銷售方式</button>
          </div>
          <div class="fr">
            <button class="btn-action" onclick="location.href='extend-single-edit-confirm.php'">下一步&nbsp;></button>
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