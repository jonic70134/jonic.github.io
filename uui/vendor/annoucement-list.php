<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="css/template.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="active">重要通知</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">來源<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label>
    <label class="label-search">公告類型<select name="" id="" class="select-search"><option value="">全部</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <section class="table-container">
    <table class="template-table">
      <thead>
        <tr>
          <th>來源</th>
          <th>公告時間</th>
          <th>公告類型</th>
          <th>公告內容</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          for ($x = 0; $x <= 10; $x++) {
            echo '
              <tr>
                <td>平台名稱</td>
                <td>2013/05/05 20:59</td>
                <td>系統維護</td>
                <td class="txt"><a class="go-popup" data-width="700" data-href="data/popup/annoucement-detail.html">人窮紀上自月狗解個地出以了心忙汝易和那喝們憶人他到以啦到經狗個合進住憶忘衫早比國...</a></td>
              </tr>
            ';
          } 
        ?>
      </tbody>
    </table>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="js/lib/jquery-1.9.1.js" ></script>
<script src="js/lib/bootstrap-dropdown.js"></script>
<script src="js/nav-action.js"></script>
<script src="js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="js/template-action.js"></script>
</body>
</html>