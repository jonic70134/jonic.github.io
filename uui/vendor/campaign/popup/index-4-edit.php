<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<link href="../../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-gear"></i>設定首頁四頭條</h1>
  <dl class="campaign-infr">
    <dd>平台：ASAP 閃電購物網</dd>
    <dd>顯示日期：2016/04/30</dd>
      <table class="template-table">
        <tr>
          <th>順序</th>
          <th>活動名稱</th>
          <th>自訂連結</th>
          <th>重設</th>
        </tr>
        
        <tr>
          <td>1</td>
          <td><input type="text" class="input" size="30" value="ASAP 兩小時到貨開跑了！"></td>
          <td><input type="text" class="input" size="30" value="http://"></td>
          <td><button class="btn-red"><i class="fa fa-times"></i></button></td>
        </tr>
        <tr>
          <td>2</td>
          <td><input type="text" class="input" size="30" value="全智賢最愛辣炒年糕"></td>
          <td><input type="text" class="input" size="30" value="http://"></td>
          <td><button class="btn-red"><i class="fa fa-times"></i></button></td>
        </tr>
        <tr>
          <td>3</td>
          <td><input type="text" class="input" size="30" value="ASAP 兩小時到貨開跑了！"></td>
          <td><input type="text" class="input" size="30" value="http://"></td>
          <td><button class="btn-red"><i class="fa fa-times"></i></button></td>
        </tr>
        <tr>
          <td>4</td>
          <td><input type="text" class="input" size="30" value="全智賢最愛辣炒年糕"></td>
          <td><input type="text" class="input" size="30" value="http://"></td>
          <td><button class="btn-red"><i class="fa fa-times"></i></button></td>
        </tr>
        
        
      </table>

    <div class="clearfix"></div>
  </div>
  <div class="template-button">
    <button class="btn-cancel" onclick="javascript:parent.$.fancybox.close();">取消</button>
    <button class="btn-submit">儲存</button>
  </div>
</div>
<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/campaign-action.js"></script>
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
  initScrollbar($('.scroll-selected'));
})(jQuery);
</script>
</body>
</html>