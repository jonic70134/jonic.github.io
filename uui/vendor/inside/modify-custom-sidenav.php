<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/inside-modify-custom.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]-->
</head>
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站佈置<span class="divider"> &gt; </span></li> <li><a href="/inside/modify-custom.html">自訂頁面管理</a><span class="divider"> &gt; </span></li> <li class="active">新增導航列</li></ul>
</div>
<p class="modify-infr">此設定為當您的自訂頁面使用兩欄式選單時，可套用的左邊導航欄內容</p>
<div class="template-function template-button">
  <button class="btn-create btn-add-group"><i class="fa fa-plus"></i>新增導航列</button>
</div>
<dl class="form-element custom-sidenav-group">
  <dd class="active">
    <span class="sidenav-name">幫助中心<button class="btn-edit btn-grey btn-edit-name"><i class="fa fa-pencil"></i>編輯名稱</button></span>
    <span class="edit-sidenav-name"><input type="text" class="input-name" size="20" value="幫助中心" placeholder="請輸入導航列名稱"><button class="btn-edit btn-red btn-save-name"><i class="fa fa-check"></i>儲存名稱</button></span>
    <button class="btn-edit btn-select-group"><i class="fa fa-list-ul"></i>編輯內容</button>
  </dd>
  <dd>
    <span class="sidenav-name">關於寵物公園<button class="btn-edit btn-grey btn-edit-name"><i class="fa fa-pencil"></i>編輯名稱</button></span>
    <span class="edit-sidenav-name"><input type="text" class="input-name" size="20" value="關於寵物公園" placeholder="請輸入導航列名稱"><button class="btn-edit btn-red btn-save-name"><i class="fa fa-check"></i>儲存名稱</button></span>
    <button class="btn-edit btn-select-group"><i class="fa fa-list-ul"></i>編輯內容</button>
  </dd>
  <dd class="new" style="display:none;">
    <input type="text" class="input-name" size="20" placeholder="請輸入導航列名稱"><button class="btn-edit btn-red btn-save-name" onclick="confirm('確認新增後將轉入導航編輯頁面，請確認目前已修改的導航頁面已儲存！');"><i class="fa fa-check"></i>確認新增</button>
  </dd>
</dl>
<h1 class="title custom-sidenav-title"><i class="fa fa-list-ul"></i>幫助中心</h1>
<div class="modify-form custom-sidenav-content">
  <div class="custom-sidenav">
    <dl class="form-element edit-sitemap clearfix">
      <dt class="edit-sitemap-title">
        <input type="text" size="15" placeholder="請輸入區塊標題">
        <label for="radioCustom1"><input type="radio" id="radioCustom1" class="radio-custom" name="sidenav-group1" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl1"><input type="radio" id="radioUrl1" class="radio-url" name="sidenav-group1">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
      </dt>
      <dd class="edit-sitemap-content">
        <input type="text" size="15" placeholder="請輸入頁面標題">
        <label for="radioCustom1_1"><input type="radio" id="radioCustom1_1" class="radio-custom" name="sidenav-group1-1" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl1_1"><input type="radio" id="radioUrl1_1" class="radio-url" name="sidenav-group1-1">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
        <button class="btn-delete-line"><i class="fa fa-times"></i></button>
      </dd>
      <dd class="edit-sitemap-content">
        <input type="text" size="15" placeholder="請輸入頁面標題">
        <label for="radioCustom1_2"><input type="radio" id="radioCustom1_2" class="radio-custom" name="sidenav-group1-2" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl1_2"><input type="radio" id="radioUrl1_2" class="radio-url" name="sidenav-group1-2">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
        <button class="btn-delete-line"><i class="fa fa-times"></i></button>
      </dd>
      <button class="btn-create-line"><i class="fa fa-angle-down"></i>新增連結...</button>
      <button class="btn-delete-block"><i class="fa fa-times"></i>清除導航區塊</button>
    </dl>
    <dl class="form-element edit-sitemap clearfix">
      <dt class="edit-sitemap-title">
        <input type="text" size="15" placeholder="請輸入區塊標題">
        <label for="radioCustom2"><input type="radio" id="radioCustom2" class="radio-custom" name="sidenav-group2" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl2"><input type="radio" id="radioUrl2" class="radio-url" name="sidenav-group2">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
      </dt>
      <dd class="edit-sitemap-content">
        <input type="text" size="15" placeholder="請輸入頁面標題">
        <label for="radioCustom2_1"><input type="radio" id="radioCustom2_1" class="radio-custom" name="sidenav-group2-1" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl2_1"><input type="radio" id="radioUrl2_1" class="radio-url" name="sidenav-group2-1">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
        <button class="btn-delete-line"><i class="fa fa-times"></i></button>
      </dd>
      <dd class="edit-sitemap-content">
        <input type="text" size="15" placeholder="請輸入頁面標題">
        <label for="radioCustom2_2"><input type="radio" id="radioCustom2_2" class="radio-custom" name="sidenav-group2-2" checked>使用自訂頁面 </label><select name="" id="" class="select-custom"><option value="">請選擇</option><option value="">幫助中心-隱私權政策  </option></select>
        <label for="radioUrl2_2"><input type="radio" id="radioUrl2_2" class="radio-url" name="sidenav-group2-2">直接設定連結 </label><input type="text" class="input-url" size="30" placeholder="http://www.yoursite.com/page.html">
        <button class="btn-delete-line"><i class="fa fa-times"></i></button>
      </dd>
      <button class="btn-create-line"><i class="fa fa-angle-down"></i>新增連結...</button>
      <button class="btn-create-block"><i class="fa fa-plus"></i>新增導航區塊</button>
      <button class="btn-delete-block"><i class="fa fa-times"></i>清除導航區塊</button>
    </dl>
  </div>
  <div class="custom-sidenav-right">Page Content...</div>
</div>
<div class="modify-button">
  <button class="btn-cancel" onclick="location.href='/inside/modify-custom.html'"><i class="fa fa-times"></i>取消</button>
  <button class="btn-submit" onclick="alert('「幫助中心」導航列編輯完成'); location.href='/inside/modify-custom.html';"><i class="fa fa-check"></i>確認送出</button>
</div>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/inside-action.js"></script>
<script>
(function($){
  //name
  $('.btn-edit-name').click(function() {
    $(this).parents('dd').find('.sidenav-name').hide();
    $(this).parents('dd').find('.edit-sidenav-name').show();
  });
  $('.btn-save-name').click(function() {
    $(this).parents('dd').find('.sidenav-name').show();
    $(this).parents('dd').find('.edit-sidenav-name').hide();
  });
  //select group
  $('.btn-select-group').click(function() {
    $(this).parents('dl').find('dd').removeClass('active');
    $(this).parents('dd').addClass('active');
  });
  //new group
  $('.btn-add-group').click(function() {
    $('.custom-sidenav-group').find('.new').show();
  });
  //radio
  $('.select-custom').click(function() {
    $(this).parent().find('.radio-custom').prop('checked',true);
  });
  $('.input-url').focus(function() {
    $(this).parent().find('.radio-url').prop('checked',true);
  });
})(jQuery);
</script>
</body>
</html>