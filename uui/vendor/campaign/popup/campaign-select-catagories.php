<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-list-alt"></i>選擇商品分類</h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>搜尋分類</label><select class="select-search"><option>------請選擇------</option></select>&gt;<select class="select-search"><option>------請選擇------</option></select>&gt;<select class="select-search"><option>------請選擇------</option></select><button class="btn-submit"><i class="fa fa-search"></i>搜尋</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  	</div>
  </div>
  <div class="select-list">
    <div class="list-title">請選擇分類</div>
    <dl class="select-list-content scroll">
      
      <dd class="clearfix"><span class="setect-list-name">本國啡和在纔實</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">國就小冷要厭災歡吃</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">兒前咖你出好問醉慨</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">已點要去地</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">比裡效和我</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">這雙動礙放頂但</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">把地的混說吹說</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">什憑微身不懷趕問快</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">爭麼曉一人有天真</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">輸容街寧風</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
    </dl>
    <button class="btn-more"><i class="fa fa-angle-down"></i>more</button>
  </div>
  <div class="select-list selected">
    <div class="list-title">已選擇的分類</div>
    <dl class="select-list-content scroll-selected">
    </dl>
  </div>
  <div class="select-list-arrow"><i class="fa fa-arrow-circle-right"></i></div>
  <div class="clearfix"></div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="reOpenPopup(600,'popup/campaign-set-conditions.php');"><i class="fa fa-caret-left"></i>上一步</button>
    <button class="btn-submit" onclick="reOpenPopup(600,'popup/campaign-set-conditions.php');"><i class="fa fa-caret-right"></i>下一步</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
(function($){
  //scroll
  function initScrollbar(obj) {
    obj.mCustomScrollbar({
      scrollInertia: 100,
      autoHideScrollbar:true,
      advanced: {
          autoExpandScrollbar: true
      }
    });
  };
  initScrollbar($('.scroll'));
  initScrollbar($('.scroll-selected'));
})(jQuery);
</script>
</body>
</html>