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
  <h1 class="title"><i class="fa fa-list-alt"></i>選擇品牌</h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>搜尋品牌</label><input type="text" class="input-search" placeholder="品牌名稱或部份關鍵字">
      <button class="btn-submit"><i class="fa fa-search"></i>搜尋</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
      <span class="error-msg"><i class="fa fa-times-circle"></i>查無資料！</span>
      <dl class="related-searches" style="left:57px;">
        
        <dd>雷菁倫 (voluptate)</dd>
        
        <dd>孫佩鴻 (ut)</dd>
        
        <dd>錢俊 (facilis)</dd>
        
      </dl>
  	</div>
  </div>
  <div class="select-list">
    <div class="list-title">請選擇品牌</div>
    <dl class="select-list-content scroll">
      
      <dd class="clearfix"><span class="setect-list-name">使腕不苦不再談</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">所想你一某生也家和</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">夜及還受筋是和核該</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">得但無就啊台鍊</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">狗睛他憑☆餃</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">都可一地☆鍛雖</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">始醉和一遮燕這</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">損憑樣撐無地不中</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">甲似啦憤一憑仰問一</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">地鬧自們的不</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
    </dl>
    <button class="btn-more"><i class="fa fa-angle-down"></i>more</button>
  </div>
  <div class="select-list selected">
    <div class="list-title">已選擇的品牌</div>
    <dl class="select-list-content scroll-selected">
      <dd class="clearfix"><span class="setect-list-name">什蛋瘋得和</span><button class="btn-delete"><i class="fa fa-times"></i>刪除</button></dd>
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