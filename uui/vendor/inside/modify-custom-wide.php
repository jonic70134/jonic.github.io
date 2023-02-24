<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../css/inside-modify-custom.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站佈置<span class="divider"> &gt; </span></li> <li><a href="modify-custom.php">自訂頁面管理</a><span class="divider"> &gt; </span></li> <li class="active">編輯全頁式頁面</li></ul>
</div>
<section class="template-content">
  <dl class="form-element custom-page-setting">
    <dd>
      <label>頁面名稱 (title)：</label>
      <input type="text" size="30" placeholder="請輸入您的頁面名稱">
      <span class="comment">請填寫英文半形 (不限大小寫) 及中文，不可輸入符號</span>
    </dd>
    <dd>
      <label>是否使用版頭版尾：</label>
      <label for="radioHeaderYes"><input type="radio" id="radioHeaderYes" name="radioHeader" checked>是</label>
      <label for="radioHeaderNo"><input type="radio" id="radioHeaderNo" name="radioHeader">否</label>
    </dd>
    <dd>
      <label>頁面背景：</label>
      <input type="radio" id="radioBodyColor" class="radio-bg-color" name="selectBodyBg"><label for="radioBodyColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label>
      <input type="radio" id="radioBodyImg" class="radio-bg-img" name="selectBodyBg"><label for="radioFooterImg"><input type="file" class="input-bg-img" accept="image/*"></label> <span class="body-img-repeat">背景圖片重覆<select name="" id="selectBodyImg"><option value="">請選擇</option><option value="">垂直水平皆重覆</option><option value="">垂直方向重覆</option><option value="">水平方向重覆</option><option value="">不重覆</option></select></span> <a href="" target="_blank"><i class="fa fa-picture-o">&nbsp;</i>預覽</a>
      <div class="comment">選擇您版面中間的底色或要放置的背景圖片 (限為大小上限50KB的JPG / JPEG / GIF / PNG格式檔案)</div>
    </dd>
  </dl>
  <div class="template-function template-button">
    頁面編輯區：
    <button class="btn-action"><i class="fa fa-file-text-o"></i>新增內文文字</button>
    <button class="btn-action"><i class="fa fa-picture-o"></i>上傳圖片</button>
  </div>
  <section class="editor-content wide">
    <div class="modify-form">
      
      <!-- text -->
      <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="1"></dd>
          <dd><select name="" id="" class="select-txt-size"><option value="">12px</option></select></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="textAlign1" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="textAlign1"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="textAlign1"></span>
          </dd>
          <dd>
            <span class="btn-txt btn-txt-type"><i class="fa fa-bold"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-italic"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-underline"></i><input type="checkbox"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <textarea name="" id="" class="texterea-editor" rows="5">請輸入內文...</textarea>
      </dl>
    </div>
    <!-- img -->
    <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="2"></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="imgAlign2" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="imgAlign2"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="imgAlign2"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <img src="http://placehold.it/851x360/">
      </dl>
    </div>
    
      <!-- text -->
      <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="2"></dd>
          <dd><select name="" id="" class="select-txt-size"><option value="">12px</option></select></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="textAlign2" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="textAlign2"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="textAlign2"></span>
          </dd>
          <dd>
            <span class="btn-txt btn-txt-type"><i class="fa fa-bold"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-italic"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-underline"></i><input type="checkbox"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <textarea name="" id="" class="texterea-editor" rows="5">請輸入內文...</textarea>
      </dl>
    </div>
    <!-- img -->
    <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="3"></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="imgAlign3" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="imgAlign3"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="imgAlign3"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <img src="http://placehold.it/851x360/">
      </dl>
    </div>
    
      <!-- text -->
      <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="3"></dd>
          <dd><select name="" id="" class="select-txt-size"><option value="">12px</option></select></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="textAlign3" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="textAlign3"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="textAlign3"></span>
          </dd>
          <dd>
            <span class="btn-txt btn-txt-type"><i class="fa fa-bold"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-italic"></i><input type="checkbox"></span>
            <span class="btn-txt btn-txt-type"><i class="fa fa-underline"></i><input type="checkbox"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <textarea name="" id="" class="texterea-editor" rows="5">請輸入內文...</textarea>
      </dl>
    </div>
    <!-- img -->
    <div class="form-element editor">
        <dl class="toolbar">
          <dd>排序 <input class="input-sort" size="3" value="4"></dd>
          <dd>
            <span class="btn-txt btn-txt-align active"><i class="fa fa-align-left"></i><input type="radio" name="imgAlign4" checked></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-center"></i><input type="radio" name="imgAlign4"></span>
            <span class="btn-txt btn-txt-align"><i class="fa fa-align-right"></i><input type="radio" name="imgAlign4"></span>
          </dd>
          <dd><button class="btn-delete" onclick="confirm('確定刪除此區塊？')"><i class="fa fa-times"></i>刪除</button></dd>
        </dl>
        <img src="http://placehold.it/851x360/">
      </dl>
    </div>
    
  </section>
  <div class="clearfix"></div>
  <div class="modify-button">
    <button class="btn-cancel"><i class="fa fa-times"></i>取消</button>
    <button class="btn-preview" onclick="window.open('demo/index.php')"><i class="fa fa-desktop"></i>預覽頁面</button>
    <button class="btn-submit"><i class="fa fa-check"></i>儲存並發佈</button>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/lib/jquery.colpick.js"></script>
<script src="../js/color-picker.js"></script>
<script>
(function($){
  //sort spinner
  $('.input-sort').spinner({
    spin: function(event, ui) {
      if (ui.value < 1) {
        $(this).spinner('value', 1);
        return false;
      }
    }
  });
  //select sidenav
  $('.go-select-sidenav').click(function() {
    $(this).parent('dl').toggleClass('active');
  });
  $('.select-sidenav dd').click(function() {
    $(this).parent('dl').toggleClass('active');
    $(this).parent('dl').find('dd').removeClass('active');
    $(this).addClass('active');
  });
  //editor
  $('.btn-txt-align').click(function(){
    $(this).parent('dd').find('.btn-txt-align').removeClass('active');
    $(this).addClass('active');
  });
  $('.btn-txt-type').click(function(){
    $(this).toggleClass('active');
  });
})(jQuery);
</script>
</body>
</html>