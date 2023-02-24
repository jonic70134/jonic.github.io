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
  <h1 class="title"><i class="fa fa-list-alt"></i>選擇廠商</h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>搜尋廠商</label><input type="text" class="input-search" placeholder="廠商名稱或部份關鍵字">
      <button class="btn-submit"><i class="fa fa-search"></i>搜尋</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
      <span class="error-msg"><i class="fa fa-times-circle"></i>查無資料！</span>
      <dl class="related-searches" style="left:57px;">
        
        <dd>黃偉中 (dolorem)</dd>
        
        <dd>雷秀 (at)</dd>
        
        <dd>鄒翰 (vero)</dd>
        
      </dl>
  	</div>
  </div>
  <div class="select-list">
    <div class="list-title">請選擇廠商</div>
    <dl class="select-list-content scroll">
      
      <dd class="clearfix"><span class="setect-list-name">個字裡割聲功</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">再歌我一家和倒</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">了巷移做夜過人肉</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">他也麵哪一憑乙來</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">人地圓到試了和在</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">以不方運讓</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">的嚇堆就的</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">譁的實問能煮</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">.就真他人全不以</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">些須驚身遮著人</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
    </dl>
    <button class="btn-more"><i class="fa fa-angle-down"></i>more</button>
  </div>
  <div class="select-list selected">
    <div class="list-title">已選擇的廠商</div>
    <dl class="select-list-content scroll-selected">
      <dd class="clearfix"><span class="setect-list-name">個地命掉一婦了較</span><button class="btn-delete"><i class="fa fa-times"></i>刪除</button></dd>
    </dl>
  </div>
  <div class="select-list-arrow"><i class="fa fa-arrow-circle-right"></i></div>
  <div class="clearfix"></div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('新增成功！'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/inside-action.js"></script>
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