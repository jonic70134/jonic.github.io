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
  <h1 class="title"><i class="fa fa-lock"></i>區塊佈置權限<span class="comment">您正在設定 {帶出設定區塊名稱} 區塊內的所有權限。</span></h1>
  <div class="modify-form">
  	<div class="form-element search-filter">
	  	<label>請輸入帳號 / 姓名</label>
	  	<input type="text" class="input-search" placeholder="使用者帳號或姓名"><button class="btn-submit"><i class="fa fa-plus"></i>新增</button>
	  	<span class="error-msg"><i class="fa fa-times-circle"></i>查無此帳號資料！</span>
	  	<dl class="related-searches">
	  		
	  		<dd>何佳成 (reprehenderit)</dd>
	  		
	  		<dd>邱憲怡 (repellendus)</dd>
	  		
	  		<dd>龔冠 (incidunt)</dd>
	  		
	  	</dl>
  	</div>
  	<table class="table-list">
  		<tr>
  			<th>序號</th>
  			<th>帳號</th>
  			<th>姓名</th>
  			<th>新增人</th>
  			<th>新增時間</th>
  			<th>刪除</th>
  		</tr>
  		<tr>
  			<td>1</td>
  			<td>ab</td>
  			<td>戴穎珊</td>
  			<td>蘇儀菁</td>
  			<td>2013/05/01 20:59</td>
  			<td>&nbsp;</td>
  		</tr>
  		
  		<tr>
  			<td>2</td>
  			<td>et</td>
  			<td>楊青</td>
  			<td>鄭瑩</td>
  			<td>2013/03/07 20:59</td>
  			<td><button class="btn-delete"><i class="fa fa-times"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>2</td>
  			<td>id</td>
  			<td>曾雅蓉</td>
  			<td>蕭惠</td>
  			<td>2013/08/22 20:59</td>
  			<td><button class="btn-delete"><i class="fa fa-times"></i></button></td>
  		</tr>
  		
  		<tr>
  			<td>2</td>
  			<td>dolores</td>
  			<td>毛芬</td>
  			<td>謝凱</td>
  			<td>2013/10/16 20:59</td>
  			<td><button class="btn-delete"><i class="fa fa-times"></i></button></td>
  		</tr>
  		
  	</table>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/inside-action.js"></script>
<script>
(function($){
  //delete user
  $('.table-list .btn-delete').each(function() {
    $(this).click(function() {
      confirm('確定要刪除「userName (userName)」嗎？');
    });
  });
})(jQuery);
</script>
</body>
</html>