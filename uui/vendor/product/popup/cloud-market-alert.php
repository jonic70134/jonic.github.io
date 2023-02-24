<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-search"></i>區間銷售量熱賣提醒</h1>
  <dl class="cloud-market-name">
    <dt>賣場名稱</dt>
    <dd>就媽的害表的感應子看身們呢悽閒</dd>
    <dt>賣場售價</dt>
    <dd><span class="highlight">99,999</span></dd>
  </dl>
  <div class="cloud-alert-pre">
    <table class="cloud-alert-infr template-table">
      <caption>時間：2013/08/26 20:59</caption>
      <tr>
        <td>10分鐘內，賣出 <span class="highlight">25</span> 個</td>
      </tr>
      <tr>
        <td>一天內，賣出 <span class="highlight">50</span> 個</td>
      </tr>
      <tr>
        <td>一小時內，賣出 <span class="highlight">75</span> 個</td>
      </tr>
    </table>
    <!--p class="cloud-alert-option"><span class="highlight">超過以上限制，系統將發送mail通知。</span></p-->
  </div>
  <div class="cloud-alert-detail clearfix" style="display: none;">
    <div class="form-element search-filter">
      <div class="select-group">
        <label>提醒(停賣)時間</label>
        <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
        <span class="comment">(最多可查詢3個月內紀錄)</span>
      </div>
      <div class="select-group">
        超過
        <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup" checked>10分鐘內</label>
        <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup" checked>1小時內</label>
        <label for="checkBox3"><input type="checkbox" id="checkBox3" name="checkboxGroup" checked>1天內</label>
        區間銷售量紀錄
      </div>
      <div class="select-group">
        <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
        <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
      </div>
    </div>
    <table class="cloud-product-popup-table template-table">
      <thead>
        <tr>
          <th>提醒(停賣)時間</th>
          <th>當時售價</th>
          <th>時間區間</th>
          <th>賣出數量</th>
          <th>誰解除提醒停賣</th>
          <th>解除提醒停賣時間</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="6">目前沒有超過數量，點more看曾經超量紀錄</td>
        </tr>
        
        <tr>
          <td>2013/10/17 20:59</td>
          <td>9999</td>
          <td>2013/07/11 20:59 <br>~ 2013/09/16 20:59</td>
          <td>65,535</td>
          <td>賈宏哲</td>
          <td>2013/11/19 20:59</td>
        </tr>
        
        <tr>
          <td>2013/03/28 20:59</td>
          <td>9999</td>
          <td>2013/08/08 20:59 <br>~ 2013/12/30 20:59</td>
          <td>65,535</td>
          <td>方瑜</td>
          <td>2013/04/26 20:59</td>
        </tr>
        
        <tr>
          <td>2013/10/29 20:59</td>
          <td>9999</td>
          <td>2013/08/20 20:59 <br>~ 2013/12/09 20:59</td>
          <td>65,535</td>
          <td>洪芳士</td>
          <td>2013/05/13 20:59</td>
        </tr>
        
        <tr>
          <td>2013/10/14 20:59</td>
          <td>9999</td>
          <td>2013/07/29 20:59 <br>~ 2013/02/11 20:59</td>
          <td>65,535</td>
          <td>林萍華</td>
          <td>2013/10/13 20:59</td>
        </tr>
        
        <tr>
          <td>2013/01/19 20:59</td>
          <td>9999</td>
          <td>2013/12/25 20:59 <br>~ 2013/01/04 20:59</td>
          <td>65,535</td>
          <td>孫曉</td>
          <td>2013/03/28 20:59</td>
        </tr>
        
      </tbody>
    </table>
    <button class="btn-more-alert"><i class="fa fa-angle-down"></i>more</button>
  </div>
  <div class="template-button">
    <button class="btn-submit go-detail"><i class="fa fa-search"></i>看超過紀錄</button>
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>關閉</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/template-action.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -180,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);
$('.go-detail').click(function() {
  $('.cloud-alert-detail').show();
  $('.cloud-alert-pre').hide();
  parent.$.fancybox.update();
  $(this).hide();
});
</script>
</body>
</html>