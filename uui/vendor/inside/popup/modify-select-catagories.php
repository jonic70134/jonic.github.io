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
      
      <dd class="clearfix"><span class="setect-list-name">吃台何城咖</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">唯傻兄本響和進</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">愈的時比譁順理和</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">和後要了明</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">麼拚啊們蠻死是</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">啡是行導得</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">沒爭甘哪杯教忙怪</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">做穿的心不</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">何成去還拚也鬧了人</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">一打本他了有</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
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