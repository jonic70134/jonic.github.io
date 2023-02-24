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
  <h1 class="title"><i class="fa fa-pencil"></i>[特賣變價/買立折] 商品設定</h1>
  <dl class="cloud-market-name form-element">
    <dt>模式</dt>
    <dd><label for=""><input type="radio">特賣變價</label><label for=""><input type="radio">買立折</label><label for=""><input type="radio">原價限購</label></dd>

    <dt>賣場ID</dt>
    <dd><input type="text" size="30"/></dd>

    <dt>特賣售價</dt>
    <dd><input type="text" size="30"/>其他顏色尺寸將一同進入特賣</dd>

    <dt>再輸入一次</dt>
    <dd id="price_confirm_area" class="price_confirm_area">
                        <span>再輸入一次售價</span>
                        <input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">仟萬<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">佰萬<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1"> 拾萬<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">萬<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">千<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">百<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">拾<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">元<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">.<input type="text" name="sm_price_confirm" number_type="integer" size="1" maxlength="1">
        </dd>

    <dt>特賣成本</dt>
    <dd> 1</dd>

    <dt>贈品/配件成本</dt>
    <dd> 1</dd>

    <dt>特賣總成本</dt>
    <dd> 1</dd>
    
    <dt>限量購買</dt>
    <dd>每帳號限量<input type="text"/>個 (非必填,最大設定為999)</dd>

    <dt>特賣開始結束時間</dt>
    <dd><input type="text" value="請輸入時間"/><input type="checkbox">立即開始 <input type="text" value="請輸入時間"/></dd>

    <dt>提早打廣告時間</dt>
    <dd><input type="text" value="請輸入時間"/></dd>
  </dl>
  </div>
  <div class="template-button">
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
</body>
</html>