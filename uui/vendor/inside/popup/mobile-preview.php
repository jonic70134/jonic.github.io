<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-tamplate-demo.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="demo-mobile">
	<div class="scroll">
		<iframe src="../demo/mobile.php" id="insideTamplate" scrolling="no"></iframe>
	</div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="../../js/inside-action.js"></script>
<script>
(function($){
  //scroll
  function initScrollbar(obj) {
    obj.mCustomScrollbar({
      scrollInertia: 100,
      autoHideScrollbar:true,
      advanced: {
          autoExpandScrollbar: true
      }
    });
  };
  initScrollbar($('.scroll'));
  $('#insideTamplate').load(function(){
    $('.scroll').mCustomScrollbar('update');
  });
})(jQuery);
</script>
</body>
</html>