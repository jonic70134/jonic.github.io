<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/wysihtml5-editor.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
<link href="../css/inside-modify.css" rel="stylesheet" type="text/css">
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
      <section class="coupon-edit extend-theme form-element template-content">
        <div class="add-product clearfix">
          <h1 class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>新增折價券</h1>

          <div class="prod-edit-line clearfix">
            <h2 class="sub-title"><span class="highlight">*</span>基本設定</h2>
            <h3 class="sub-title-grey">活動名稱*</h3>
            <div class="full-div">
              <input type="text" class="full-input" name="" id=""/>
            </div>
          </div>

          <div class="prod-edit-line clearfix">
            <h3 class="sub-title-grey">獲得方式*</h3>
            <div class="select-group">
              <label for="radio-1"><input type="radio" id="radio-1" name="radioGroup1" checked="checked" value="1">直接發放(系統自動歸戶)</label>
              <label for="radio-2"><input type="radio" id="radio-2" name="radioGroup1" value="2">手動輸入折價券序號領取(會員手動歸戶)</label>
            </div>
          </div>

          <div class="prod-edit-line clearfix desc" id="getway1">
            <h3 class="sub-title-grey">可領券方式*</h3>
            <div class="select-group">
              <label for="radio-3"><input type="radio" id="radio-3" name="radioGroup2">直接發放(系統自動歸戶)</label>
              <label for="radio-4"><input type="radio" id="radio-4" name="radioGroup2">VIP會員</label>
              <label for="radio-5"><input type="radio" id="radio-5" name="radioGroup2">VVIP會員</label>
              <label for="radio-6"><input type="radio" id="radio-6" name="radioGroup2">VIP+VVIP</label>
              <label for="radio-7"><input type="radio" id="radio-7" name="radioGroup2">自訂名單上傳 <input type="file" class="input-bg-img" name="" id=""/> </label>
            </div>
          </div>

          <div class="prod-edit-line clearfix desc" id="getway2" style="display:none;">
              <h3 class="sub-title-grey">發放張數</h3>
              <div class="select-group">
                <label><input type="text" value="500" size="5" name="" id=""/>張</label>
                <label for="radio-10"><input type="radio" id="radio-10" name="radioGroup4">折價券序號不重複</label>
                <label for="radio-11"><input type="radio" id="radio-11" name="radioGroup4">折價券序號可重複<input type="text" size="5" name="" id=""/>次</label>
              </div>
          </div>

          <div class="prod-edit-line clearfix">
            <h3 class="sub-title-grey">領獎期限*</h3>
            <div class="select-group">
              <label class="timedate"><input type="text" class="input-search-time" placeholder="" value="" id=""/><i class="fa fa-calendar" aria-hidden="true"></i><i class="fa fa-clock-o" aria-hidden="true"></i></label>
              &#x2014;&nbsp;&nbsp;
              <label class="timedate"><input type="text" class="input-search-time" placeholder="" value="" id=""/><i class="fa fa-calendar" aria-hidden="true"></i><i class="fa fa-clock-o" aria-hidden="true"></i></label>
            </div>
          </div>

          <div class="prod-edit-line clearfix">
              <h3 class="sub-title-grey">使用期限*</h3>
              <div class="select-group">
                <label class="timedate"><input type="text" class="input-search-time" placeholder="" value="" id=""/><i class="fa fa-calendar" aria-hidden="true"></i><i class="fa fa-clock-o" aria-hidden="true"></i></label>
                &#x2014;&nbsp;&nbsp;
                <label class="timedate"><input type="text" class="input-search-time" placeholder="" value="" id=""/><i class="fa fa-calendar" aria-hidden="true"></i><i class="fa fa-clock-o" aria-hidden="true"></i></label>
              </div>
            </div>
          
            <hr/>

          <div class="prod-edit-line clearfix">
              <h2 class="sub-title">折抵設定</h2>
              <h3 class="sub-title-grey">折價券面額</h3>
              <div class="select-group">
                <label for="radio-8"><input type="radio" id="radio-8" name="radioGroup3">享<input type="text" value="95" size="5" name="" id=""/>折</label>
                <label for="radio-9"><input type="radio" id="radio-9" name="radioGroup3">折抵<input type="text" value="95" size="5" name="" id=""/>元</label>
              </div>
          </div>

          <div class="prod-edit-line clearfix"> 
              <h3 class="sub-title-grey">購物車滿額門檻</h3>
              <div class="select-group">
                <label for="chk1"><input type="checkbox" id="chk1" name="chkGroup1">限訂購物車滿額達<input type="text" value="95" size="5" name="" id=""/>元(以上)方可使用</label>
            </div>
          </div>

          <div class="prod-edit-line clearfix"> 
              <h3 class="sub-title-grey">折抵範圍設定&nbsp;&nbsp;&nbsp;<span class="highlight">(如無設定則為全館賣場皆適用)</span></h3>
              <dl class="coupon-range">
                <dt class="edit-menu-title">品牌</dt>
                <dd class="edit-menu-content">
                  <div class="condition-tags">
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;人利家就金他上</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕頓啦了賴</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕賴</p>
                  </div>
                  <button class="btn-action"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </dd>
              </dl> 

              <dl class="coupon-range">
                <dt class="edit-menu-title">廠商</dt>
                <dd class="edit-menu-content">
                  <div class="condition-tags">
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;人利家就金他上</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕頓啦了賴</p>
                  </div>
                  <button class="btn-action"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </dd>
              </dl> 

              <dl class="coupon-range">
                <dt class="edit-menu-title">分類</dt>
                <dd class="edit-menu-content">
                  <div class="condition-tags">
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;人利家就金他上</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕頓啦了賴</p>
                  </div>
                  <button class="btn-action"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </dd>
              </dl> 

              <dl class="coupon-range">
                <dt class="edit-menu-title">排除賣場</dt>
                <dd class="edit-menu-content">
                  <div class="condition-tags">
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;人利家就金他上</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕頓啦了賴</p>
                  </div>
                  <button class="btn-action"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </dd>
              </dl> 

              <dl class="coupon-range">
                <dt class="edit-menu-title">加入賣場</dt>
                <dd class="edit-menu-content">
                  <div class="condition-tags">
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;人利家就金他上</p>
                    <p class="condition-tag"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;了腕頓啦了賴</p>
                  </div>
                  <button class="btn-action"><i class="fa fa-plus" aria-hidden="true"></i></button>
                </dd>
              </dl> 

              <div class="prod-edit-line clearfix"> 
                  <div class="select-group">
                    <label for="chk2"><input type="checkbox" id="chk2" name="chkGroup2">排除毛利率低於<input type="text" value="95" size="5" name="" id=""/>%的賣場</label>
                </div>
              </div>
          </div>




          <div class="template-button clearfix">
            <div class="fl">
            <button class="btn-draft" onclick="location.href='product-list-build.php'">取&nbsp;&nbsp;&nbsp;消</button>
            </div>
            <div class="fr">
              <button class="btn-action" onclick="location.href='product-list-build.php'">儲&nbsp;&nbsp;&nbsp;存</button>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>

<script src="../js/lib/advanced_unwrap.js"></script>

<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>

<script src="../js/update-fancybox.js"></script>
<script src="../js/template-action.js"></script>

<script>  
//modify: date time picker
var timeOption = {
  dateFormat: 'yy/mm/dd',
  timeFormat: 'HH:mm',
  stepMinute: 10
};
$('.input-search-time').datetimepicker(timeOption);

// 獲取方式開合
$("input[name$='radioGroup1']").click(function() {
    var getway = $(this).val();
    $("div.desc").hide();
    $("#getway" + getway).show();
});
</script>
</body>
</html>