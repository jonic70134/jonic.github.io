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
      <label class="label-content-title">請選擇活動類型：</label>滿額折Y元
      </select>
    </dd>
    <dd>
      <label class="label-content-title">請選擇活動模式：</label><select name="" id="campaignModule">
        <option value="campaignAddup">可累計</option>
        <option value="campaignNoAddup">不可累計</option>
      </select>
    </dd>
    <dd><label class="label-content-title">活動名稱：</label><input type="text" class="input-form" placeholder="請輸入活動名稱"></dd>
    <dl class="col-after-select col-discount">
      <dd class="col-addup"><label class="label-content-title">活動促銷：</label>每滿<input type="text" class="input-tiny">元，可折抵<input type="text" class="input-tiny">元 (<span class="discount">80</span>% OFF)</dd>
      <dd class="col-noaddup"><label class="label-content-title">活動促銷：</label>
        滿<input type="text" class="input-tiny">元，可折抵<input type="text" class="input-tiny">元 (<span class="discount">80</span>% OFF)
        <span class="add-condition">滿<input type="text" class="input-tiny">元，可折抵<input type="text" class="input-tiny">元 (<span class="discount">80</span>% OFF)</span>
        <span class="add-condition">滿<input type="text" class="input-tiny">元，可折抵<input type="text" class="input-tiny">元 (<span class="discount">80</span>% OFF)<button class="btn-add-condition" title="增加門檻"><i class="fa fa-plus"></i></button></span>
        <span class="comment"> (最多可設定5個門檻，至少填寫1個門檻)</span>
      </dd>
      <dd><label class="label-content-title">活動時間：</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""><span class="comment"> (最多45天，可設定3個月後活動)</span></dd>
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
//camapign type select change
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