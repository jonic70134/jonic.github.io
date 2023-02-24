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
<div class="popup-content">
  <h1 class="title"><i class="fa fa-pencil"></i>申請購物金</h1>
  <dl class="form-element template-popup-form">
    <dd>
      <label class="label-content-title"><span class="highlight">*</span>購物金類型：</label>
      <label for="radioCouponType1"><input type="radio" id="radioCouponType1" name="radioCouponType" checked>註冊送點</label>
      <label for="radioCouponType2"><input type="radio" id="radioCouponType2" name="radioCouponType">序號申請</label>
      <label for="radioCouponType3"><input type="radio" id="radioCouponType3" name="radioCouponType">帳號送點</label>
      <label for="radioCouponType4"><input type="radio" id="radioCouponType4" name="radioCouponType">會員送點</label>
    </dd>
    <dd>
      <label class="label-content-title">發出平台：</label>
      ASAP
    </dd>
    <dd>
      <label class="label-content-title"><span class="highlight">*</span>購物金名稱：</label>
      <input type="text" size="40" placeholder="請輸入購物金名稱">
    </dd>
    <dd>
      <label class="label-content-title"><span class="highlight">*</span>購物金點數：</label>
      <input type="text" size="3">點
    </dd>
    <div class="coupon-type coupon-type1" style="display: block;">
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>活動時間：</label>
        <input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入開始時間">00:00:00~<input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入結束時間" value="">23:59:59
        <div class="comment">(最多45天，可申請3個月內活動)</div>
      </dd>
      <dd>
        <label class="label-content-title">註冊頁文案：</label>
        <input type="text" size="40" placeholder="請輸入註冊頁顯示文字">註冊送購物金 <span class="coupon-point">999</span> 點
      </dd>
    </div>
    <div class="coupon-type coupon-type2">
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>序號組數：</label>
        <input type="text" size="6">組
        <div class="comment">(最多可申請10萬組序號)</div>
      </dd>
      <dd>
        <label class="label-content-title">購物金總計：</label>
        <span class="coupon-point">999</span>點
      </dd>
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>可兌換次數：</label>
        相同帳號可兌換 <input class="input-spinner" size="3" value="1"> 次
      </dd>
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>序號有效期限：</label>
        <input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入開始時間">00:00:00~<input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入結束時間" value="">23:59:59
        <div class="comment">(最多1年，可申請3個月內活動)</div>
      </dd>
    </div>
    <div class="coupon-type coupon-type3">
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>贈點時間：</label>
        <input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入贈點時間">00:00:00
        <div class="comment">(可申請3個月內活動)</div>
      </dd>
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>會員名單：</label>
        <input type="file" accept=".csv, .xls, .xlsx">
        <a href="" target="_blank"><i class="fa fa-download"></i> 下載匯入範本</a>
      </dd>
    </div>
    <div class="coupon-type coupon-type4">
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>贈點時間：</label>
        <input type="text" class="input-datepicker input-datepicker1" placeholder="請輸入贈點時間">00:00:00
        <div class="comment">(可申請3個月內活動)</div>
      </dd>
      <dd>
        <label class="label-content-title"><span class="highlight">*</span>贈點條件：</label>
        <dl class="list-in-form">
          <dd><label for="radioCondition1"><input type="radio" id="radioCondition1" name="radioCondition">全部會員</label></dd>
          <dd><label for="radioCondition2"><input type="radio" id="radioCondition2" name="radioCondition">已註冊，但</label><select name="" id="" class="user-condition"><option value="">從未</option><option value="">超過3個月未</option></select>下單的會員</dd>
          <dd><label for="radioCondition3"><input type="radio" id="radioCondition3" name="radioCondition"></label><input type="text" class="input-datepicker input-datepicker2 user-condition" placeholder="請輸入註冊時間">~<input type="text" class="input-datepicker input-datepicker2 user-condition" placeholder="請輸入註冊時間">註冊的會員</dd>
          <dd><label for="radioCondition4"><input type="radio" id="radioCondition4" name="radioCondition"></label></label><input type="text" class="input-datepicker input-datepicker2 user-condition" placeholder="請輸入購買時間">~<input type="text" class="input-datepicker input-datepicker2 user-condition" placeholder="請輸入購買時間">有購買<button class="btn-select"><i class="fa fa-caret-down"></i>商品分類</button>的會員 <label for="checkboxDisable"></label><br><input type="checkbox" id="checkboxDisable" checked>排除已退訂會員</label></dd>
        </dl>
      </dd>
    </div>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="reOpenPopup(600,'popup/coupon-apply-confirm.php');"><i class="fa fa-caret-right"></i>下一步</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
//date time picker
var timeOption1 = {
  dateFormat: 'yy/mm/dd',
  showTimepicker: false,
  minDate: 0,
  maxDate: 92
};
$('.input-datepicker1').datetimepicker(timeOption1);
var timeOption2 = {
  dateFormat: 'yy/mm/dd',
  showTimepicker: false
};
$('.input-datepicker2').datetimepicker(timeOption2);
//spinner
  $('.input-spinner').spinner({
      spin: function( event, ui ) {
        if (ui.value >= 3) {
          $(this).spinner('value', 3);
          return false;
        }
        else if (ui.value <= 1) {
          $(this).spinner('value',1);
          return false;
        };
      }
  });
//coupon type
$('input[name="radioCouponType"]').each(function() {
  $(this).click(function() {
    $('.coupon-type').hide();
    $('.coupon-type' + ($('input[name="radioCouponType"]').index(this) + 1)).show();
    parent.$.fancybox.update();
  });
});
//user condition
$('.user-condition').bind('change keyup', function() {
  $(this).parent('dd').find('input').prop('checked',true);
});
</script>
</body>
</html>