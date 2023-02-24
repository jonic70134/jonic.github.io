<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<section class="popup-content">
  <h1 class="title"><i class="fa fa-plus"></i>新增活動</h1>
  <dl class="form-element template-popup-form add-campaign">
    <dd>
      <label class="label-content-title">請選擇販售平台：</label><select name="" id=""><option value="">請選擇</option></select>
    </dd>
    <dd>
      <label class="label-content-title">請選擇活動類型：</label>滿額送購物金
      </select>
    </dd>
    <dd>
      <label class="label-content-title">請選擇活動模式：</label><select name="" id="campaignModule">
        <option value="campaignAddup">可累計</option>
        <option value="campaignNoAddup">不可累計</option>
      </select>
    </dd>
    <dd><label class="label-content-title">活動名稱：</label><input type="text" class="input-form" placeholder="請輸入活動名稱"></dd>
    <dl class="col-after-select col-coupon">
      <dd class="col-addup"><label class="label-content-title">活動促銷：</label>每滿<input type="text" class="input-tiny">元，送購物金<input type="text" class="input-tiny">點</dd>
      <dd class="col-noaddup"><label class="label-content-title">活動促銷：</label>
        滿<input type="text" class="input-tiny">元，送購物金<input type="text" class="input-tiny">點
        <span class="add-condition">滿<input type="text" class="input-tiny">元，送購物金<input type="text" class="input-tiny">點</span>
        <span class="add-condition">滿<input type="text" class="input-tiny">元，送購物金<input type="text" class="input-tiny">點<button class="btn-add-condition" title="增加門檻"><i class="fa fa-plus"></i></button></span>
        <span class="comment"> (最多可設定5個門檻，至少填寫1個門檻)</span>
      </dd>
      <dd><label class="label-content-title">活動時間：</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""><span class="comment"> (最多45天，可設定3個月後活動)</span></dd>
      <dd><label class="label-content-title">購物金給點日：</label>2014/12/25 + <input type="text" class="input-tiny">日 (系統將於 <span class="date">2014/02/16 00:00</span> 贈點)<span class="comment">* 避免客人於鑑賞期內退貨，建議購物金給點日設定「大於鑑賞期+1日」。<br>* 贈點時，檢查客人訂單是否符合條件，若商品退貨未達門檻將取消給點。<br>* 贈點後，取消訂單 /退貨將不會取消給點。</dd>
    </dl>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="reOpenPopup(400,'popup/campaign-set-campaign.php');"><i class="fa fa-caret-right"></i>下一步</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    timeFormat: 'HH:mm',
    stepMinute: 10,
    minDate: 0,
    maxDate: +90
};
$('.input-datepicker').datetimepicker(timeOption);
//camapign module select change
$('#campaignModule').click(function() {
  if($(this).val() == 'campaignAddup') {
    $('.col-addup').show();
    $('.col-noaddup').hide();
    parent.$.fancybox.update();
  }
  else if ($(this).val() == 'campaignNoAddup') {
    $('.col-noaddup').show();
    $('.col-addup').hide();
    parent.$.fancybox.update();
  }
});
</script>
</body>
</html>