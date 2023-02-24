<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../css/inside-modify-custom.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站佈置<span class="divider"> &gt; </span></li> <li class="active">自訂頁面管理</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <div class="select-group">
      <label>建立時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <label class="label-search">頁面名稱<input type="text" size="30" placeholder="頁面名稱/建立人/修改人/頁面編號"></label>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="template-function template-button">
    <button class="btn-create" onclick="location.href='modify-custom-wide.php';"><i class="fa fa-plus"></i>全頁式頁面</button>
    <button class="btn-create" onclick="location.href='modify-custom-2col.php';" style="margin-left:20px;"><i class="fa fa-plus"></i>兩欄式頁面</button>
    <button class="btn-cancel" onclick="location.href='modify-custom-sidenav.php';"><i class="fa fa-plus"></i>導航列</button>
  </div>
  <section class="table-container">
    <table class="template-table">
      <thead>
        <tr>
          <th>頁面編號</th>
          <th>頁面模式</th>
          <th>頁面名稱(title)</th>
          <th>頁面連結</th>
          <th>編輯</th>
          <th>建立人</th>
          <th>建立時間</th>
          <th>修改人</th>
          <th>最後更新時間</th>
          <th>刪除</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>00001</td>
          <td>全頁式</td>
          <td class="txt"><a href="" target="_blank">品牌故事</a></td>
          <td><button class="btn-txt btn-red" onclick="alert('「品牌故事」頁面連結已複製');"><i class="fa fa-check"></i>已複製</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-wide.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>魏怡心</td>
          <td>2013/03/01 20:59</td>
          <td>任建</td>
          <td>2013/07/18 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「品牌故事」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00002</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>龍仁忠</td>
          <td>2013/04/22 20:59</td>
          <td>孔秀倫</td>
          <td>2013/09/14 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00003</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>廖俊</td>
          <td>2013/02/04 20:59</td>
          <td>邱心</td>
          <td>2013/01/20 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00004</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>呂瑋</td>
          <td>2013/07/29 20:59</td>
          <td>武曉</td>
          <td>2013/08/30 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00005</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>萬維貞</td>
          <td>2013/08/25 20:59</td>
          <td>閻子珊</td>
          <td>2013/09/22 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00006</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>嚴元</td>
          <td>2013/12/08 20:59</td>
          <td>江如凱</td>
          <td>2013/07/03 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00007</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>李鴻琪</td>
          <td>2013/06/01 20:59</td>
          <td>韓志</td>
          <td>2013/11/01 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00008</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>沈育</td>
          <td>2013/09/09 20:59</td>
          <td>孔琪</td>
          <td>2013/02/15 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>00009</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>譚如哲</td>
          <td>2013/11/14 20:59</td>
          <td>汪宗</td>
          <td>2013/07/02 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
        <tr>
          <td>000010</td>
          <td>兩欄式</td>
          <td class="txt"><a href="" target="_blank">幫助中心-隱私權政策</a></td>
          <td><button class="btn-txt btn-blue" onclick="alert('「幫助中心-隱私權政策」頁面連結已複製');"><i class="fa fa-files-o"></i>複製連結</button></td>
          <td><button class="btn-green" onclick="location.href='modify-custom-2col.php';" title="編輯"><i class="fa fa-pencil"></i></button></td>
          <td>呂瑞育</td>
          <td>2013/09/10 20:59</td>
          <td>許民</td>
          <td>2013/07/23 20:59</td>
          <td><button class="btn-blue" onclick="confirm('確定刪除「幫助中心-隱私權政策」？');" title="刪除"><i class="fa fa-times"></i></button></td>
        </tr>
        
      </tbody>
    </table>
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
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script>
(function($){
  //date time picker
  var timeOption = {
      dateFormat: 'yy/mm/dd',
      showTimepicker: false,
      maxDate: 0
  };
  $('.input-datepicker').datetimepicker(timeOption);
})(jQuery);
</script>
</body>
</html>