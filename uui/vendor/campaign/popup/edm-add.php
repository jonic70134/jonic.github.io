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
  <h1 class="title"><i class="fa fa-plus"></i>新增活動網頁</h1>
  <dl class="form-element template-popup-form add-campaign">
    <dd><label class="label-content-title">活動網頁名稱：</label><input type="text" class="input-form" placeholder="請輸入活動網頁名稱"></dd>
    <dd><label class="label-content-title">活動時間：</label><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""> 天數：5天</dd>
    <dd>
      <label class="label-content-title">版頭版尾樣式：</label><select name="" id=""><option value="">請選擇</option></select>
    </dd>
    <dd>
      <label class="label-content-title">EDM編輯方式：</label>
      <div class="form-group">
        <label for="radio1"><input type="radio" id="radio1" name="radioGroup">EDM版型</label><br>
        <label for="radio4"><input type="radio" id="radio4" class="radio-file" name="radioGroup">上傳HTML的ZIP<input type="file" class="input-file" accept=".zip"></label>
      </div>
    </dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();parent.location.href='../edm-edit.php';"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/campaign-action.js"></script>
<script>
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    timeFormat: 'HH:mm',
    stepMinute: 10
};
$('.input-datepicker').datetimepicker(timeOption);
$('.input-file').click(function() {
  $(this).parent().find('.radio-file').prop('checked', true);
});
</script>
</body>
</html>