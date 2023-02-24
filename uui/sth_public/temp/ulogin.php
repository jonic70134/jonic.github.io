<?php
session_unset();
session_start();
$msg ='';
if(isset($_POST['submit'])){
	if($_POST['password'] == 'adi2014'){
		$_SESSION['isLogin'] = 'true';
		header('Location: ../front/index.php');
		$msg = '';
	}else{
		session_destroy();
		$msg = 'The password is incorrect.';
	}
}
?>
<!doctype html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<title>登入</title>
	<link rel="shortcut icon" href="../c/img/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--[if lt IE 9]>
        <script src="../assets/js/3rd-party/respond.js"></script>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
	<link rel="stylesheet" type="text/css" href="../c/css/white/default/main/frame.css">
	<style>
	.layout{
		padding: 40px 20px;
		max-width: 800px;
		margin: 0 auto;
	}
	.msg-alert{
		line-height: 140%;
		margin: 10px 0;
		color: red;
	}
	h1{
		margin-bottom: 20px;
	}
	input[type='password']{
		width: 100%;
		margin-bottom: 10px;
		padding: 12px 10px;
		box-sizing:border-box;
		font-family: Arial;
	}
	.button{
		width: 100%;
		height: 45px;
		line-height: 45px;
	}
	.email:hover{
		color: #00a8ff;
		text-decoration: underline;
	}
	</style>
</head>
<body>
    <div class="layout">
    	<h1>Prototype of ADI Website</h1>
		<form action="ulogin.php" method="post" id="form-signin" class="block">
			<input type="password" name="password" placeholder="password">
			<input type="submit" name="submit" class="button" value="login"></input>
			<p class="msg-alert"><?php echo $msg;?></p>
			<a href="mailto:ken.huang@uitox.com" class="email">uitox-Ken</a>
		</form>
	</div>
	<script src="../assets/js/jquery/jquery-1.10.2.min.js"></script>
	<script src="//cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
	<script>
	(function($){

	})(jQuery);
	</script>
</body>
</html>