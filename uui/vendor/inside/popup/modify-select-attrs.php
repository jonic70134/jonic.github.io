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
  <h1 class="title"><i class="fa fa-list-alt"></i>選擇商品屬性</h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>搜尋屬性</label><select class="select-search"><option>------請選擇------</option></select>&gt;<select class="select-search"><option>------請選擇------</option></select>&gt;<select class="select-search"><option>------請選擇------</option></select><button class="btn-submit"><i class="fa fa-search"></i>搜尋</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  	</div>
  </div>
  <div class="select-list">
    <div class="list-title">請選擇屬性</div>
    <dl class="select-list-content scroll">
      
      <dd class="clearfix"><span class="setect-list-name">須趕是給這他來紅但</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">我憊最丙一啊比</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">.哈來得月</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">誰痛上前經的個快無</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">千好罵鑼哈使鬧</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">市雙自杯水</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">有多咖進的輸</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">是調弟的樣了了悟們</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">憑孫臉進台連這吃沒</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
      <dd class="clearfix"><span class="setect-list-name">能掉和去褲</span><button class="btn-add"><i class="fa fa-plus"></i>加入</button></dd>
      
    </dl>
    <button class="btn-more"><i class="fa fa-angle-down"></i>more</button>
  </div>
  <div class="select-list selected">
    <div class="list-title">已選擇的屬性</div>
    <dl class="select-list-content scroll-selected">
      <dd class="clearfix"><span class="setect-list-name">趁甘少的人☆氛劑-</span><button class="btn-delete"><i class="fa fa-times"></i>刪除</button></dd>
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