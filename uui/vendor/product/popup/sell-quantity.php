<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-pencil"></i>可賣量</h1>
  <dl class="form-element template-popup-form sell-quantity">
    <dd><label class="label-content-title">商品ID：</label>201406AP11000123</dd>
    <dd><label class="label-content-title">商品名稱：</label>.要在子爸就沒割最可大實他百高色問比蹶小</dd>
    <dd><label class="label-content-title">可賣量：</label>999<button class="btn-quantity plus">增加</button><button class="btn-quantity minus">減少</button><span class="edit-quantity"><span></span><input type="text" size="5"></span></dd>
  </dl>
  <div class="template-button" style="margin:0 0 30px;">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="alert('可賣量已修改為9999');parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
  <h1 class="title"><i class="fa fa-file-text-o"></i>修改記錄</h1>
  <table class="template-table">
    <caption>*僅提供3個月內記錄</caption>
    <thead>
      <tr>
        <th>日期時間</th>
        <th>修改前可賣量</th>
        <th>&nbsp;</th>
        <th>修改後可賣量</th>
        <th>變更人</th>
      </tr>
    </thead>
    <tbody>
      
      <tr>
        <td>2013/08/13 20:59:59</td>
        <td>9999</td>
        <td>→</td>
        <td>9999</td>
        <td>張芬世</td>
      </tr>
      
      <tr>
        <td>2013/07/23 20:59:59</td>
        <td>9999</td>
        <td>→</td>
        <td>9999</td>
        <td>林凱</td>
      </tr>
      
      <tr>
        <td>2013/03/05 20:59:59</td>
        <td>9999</td>
        <td>→</td>
        <td>9999</td>
        <td>呂龍</td>
      </tr>
      
      <tr>
        <td>2013/11/14 20:59:59</td>
        <td>9999</td>
        <td>→</td>
        <td>9999</td>
        <td>白珊芳</td>
      </tr>
      
      <tr>
        <td>2013/09/09 20:59:59</td>
        <td>9999</td>
        <td>→</td>
        <td>9999</td>
        <td>方韻銘</td>
      </tr>
      
    </tbody>
  </table>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script>
$('.btn-quantity.plus').click(function() {
  $('.edit-quantity').show().find('span').text('要增加多少');
});
$('.btn-quantity.minus').click(function() {
  $('.edit-quantity').show().find('span').text('要減少多少');
});
</script>
</body>
</html>