<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-plus"></i>新增區塊類型</h1>
  <div class="modify-form clearfix">
	<div class="form-element add-block clearfix">
		<label for="addBlock1">
			<input type="radio" id="addBlock1" name="addBlockType">
			<span class="add-block-name">AD區塊 - 橫幅 (可輸入文字)</span>
			<div class="add-block-content">
				<div class="add-block-row">
					<div class="add-block-sample add-block-img">橫幅AD</div>
				</div>
			</div>
		</label>
	</div>
	<div class="form-element add-block clearfix">
		<label for="addBlock2">
			<input type="radio" id="addBlock2" name="addBlockType">
			<span class="add-block-name">AD區塊 - 2大</span>
			<div class="add-block-content">
				<div class="add-block-row">
					<div class="add-block-sample block-2 add-block-img">橫幅AD</div>
					<div class="add-block-sample block-2 add-block-img">橫幅AD</div>
				</div>
			</div>
		</label>
	</div>
	<div class="form-element add-block clearfix">
		<label for="addBlock3">
			<input type="radio" id="addBlock3" name="addBlockType">
			<span class="add-block-name">內容區塊 - 1大6小</span>
			<div class="add-block-content">
				<div class="add-block-row">
					<div class="add-block-sample block-4 block-rowspan add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
				</div>
				<div class="add-block-row">
					<div class="add-block-sample block-4 block-empty add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
				</div>
			</div>
		</label>
	</div>
	<div class="form-element add-block clearfix">
		<label for="addBlock4">
			<input type="radio" id="addBlock4" name="addBlockType">
			<span class="add-block-name">內容區塊 - 4小</span>
			<div class="add-block-content">
				<div class="add-block-row">
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
				</div>
			</div>
		</label>
	</div>
	<br>
	<div class="form-element add-block clearfix">
		<label for="addBlock5">
			<input type="radio" id="addBlock5" name="addBlockType">
			<span class="add-block-name">內容區塊 - 4小 (可填寫描述文字)</span>
			<div class="add-block-content">
				<div class="add-block-row">
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
					<div class="add-block-sample block-4 add-block-item">商品</div>
				</div>
			</div>
		</label>
	</div>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-submit" onclick="parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
</body>
</html>