<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css"></link>
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-file-text-o"></i>修改記錄</h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>區塊</label><select class="select-search"><option>------請選擇------</option></select>
      <label>修改人</label><select class="select-search"><option>------請選擇------</option></select>
      <label>修改類型</label><select class="select-search"><option>------請選擇------</option></select><br>
	  	<label>修改時間</label><input type="text" class="input-search-time" placeholder="請輸入開始時間" value="">~<input type="text" class="input-search-time" placeholder="請輸入結束時間" value=""></label>
      <button class="btn-submit"><i class="fa fa-search"></i>搜尋</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
  	</div>
  	<table class="table-list">
      <caption>*預設顯示近7天修改記錄</caption>
  		<tr>
  			<th>區塊</th>
  			<th>修改人</th>
  			<th>修改類型</th>
  			<th>修改時間</th>
  			<th>詳細訊息</th>
  		</tr>
      
  		<tr>
  			<td>輪播廣告</td>
  			<td>汪孟良</td>
  			<td>儲存</td>
  			<td>2013/08/04 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>田豪榮</td>
  			<td>儲存</td>
  			<td>2013/04/25 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>邱中</td>
  			<td>儲存</td>
  			<td>2013/10/09 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>李秋</td>
  			<td>儲存</td>
  			<td>2013/01/20 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>餘弘</td>
  			<td>儲存</td>
  			<td>2013/04/11 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>任慶</td>
  			<td>儲存</td>
  			<td>2013/09/30 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>高仁忠</td>
  			<td>儲存</td>
  			<td>2013/12/12 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>王中子</td>
  			<td>儲存</td>
  			<td>2013/04/24 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>範銘</td>
  			<td>儲存</td>
  			<td>2013/08/17 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>輪播廣告</td>
  			<td>廖銘盈</td>
  			<td>儲存</td>
  			<td>2013/03/23 20:59:59</td>
  			<td><button class="btn-detail"><i class="fa fa-file-text-o"></i></button></td>
  		</tr>
  		
  	</table>
    <div class="pages">
      <a class="prev-page disable">上一頁</a>
      <span class="current-page">1/255</span>
      <a href="#" class="next-page">下一頁</a>
      <select class="select-page"><option>第1頁</option></select>
    </div>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/inside-action.js"></script>
<script>
//modify: date time picker
var timeOption = {
  dateFormat: 'yy/mm/dd',
  timeFormat: 'HH:mm',
  stepMinute: 10
};
$('.input-search-time').datetimepicker(timeOption);
</script>
</body>
</html>