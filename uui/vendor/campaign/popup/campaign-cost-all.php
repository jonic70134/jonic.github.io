<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/campaign.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-gear"></i>設定活動成本</h1>
  <dl class="campaign-infr">
    <dd>活動名稱：一們身去痛爸終進盲鍛了</dd>
    <dd>活動促銷：滿 1000 元折100元 ；滿 2000 元折300元 ；滿 5000 元折 600元</dd>
    <dd>活動範圍：全站未做行銷活動的商品</dd>
    <dd>符合活動的商品數量：<span class="highlight">15</span>個借貨商品(請設定活動成本)，<span class="highlight">5</span>個採購商品(原商品成本)</dd>
  </dl>
	<dl class="form-element set-campaign">
    <dt class="title"><i class="fa fa-caret-right"></i>設定活動成本</dt>
    <dd>
      <label>依據購買時的售價/成本計算活動成本：</label>
      <label class="label-group" for="radioPercent"><input type="radio" id="radioPercent" name="radioCost">售價抽<input type="text" class="input-tiny input-calculate-cost">%</label>
      <label class="label-group" for="radioDiscount"><input type="radio" id="radioDiscount" name="radioCost">成本折<input type="text" class="input-tiny input-calculate-cost">元</label>
      <label class="label-group" for="radioNochange"><input type="radio" id="radioNochange" name="radioCost">不變動成本</label>
    </dd>
  </dl>
  <div class="template-button">
    <button class="btn-cancel" onclick="reOpenPopup(600,'popup/campaign-set-all.php');"><i class="fa fa-caret-left"></i>上一步</button>
    <button class="btn-submit" onclick="alert('活動新增完成');parent.location.href='campaign-detail.php'"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/campaign-action.js"></script>
<script src="../../js/update-fancybox.js"></script>
</body>
</html>