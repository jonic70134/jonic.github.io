<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
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
        <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li>  <li class="active">商品列表</li></ul>
      </div>


      <!-- <div class="form-element search-filter">
        <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號/廠商自用欄位"></label>
        <div class="select-group">
            <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
            <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
        </div>
      </div> 
      
      <div class="pages right clearfix">
        <a class="prev-page disable">上一頁</a>
        <span class="current-page">1/255</span>
        <a href="#" class="next-page">下一頁</a>
        <select class="select-page"><option>第1頁</option></select>
        <span class="item-count">總筆數：65,535</span>
      </div>-->

      <div class="template-function template-button">
        <button class="btn-action" onclick="location.href='create-prod.php'">新增商品</button>
      </div>

  <section class="table-container">
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="product-list-build product-list-build-v2 cloud-market-table template-table scroll-content">
			<thead>
				<tr>
					<th>檔案</th>
					<th>上/下架狀態</th>
					<th>賣場數量<i class="fa fa-chevron-down"></i></th>
					<th>商品ID<i class="fa fa-chevron-down"></i></th>
					<th class="prod-name">商品名稱<i class="fa fa-chevron-down"></i></th>
					<th>品牌<i class="fa fa-chevron-down"></i></th>
					<th class="prod-pic">商品圖</th>
					<th>售價<i class="fa fa-chevron-down"></i></th>
					<th>廠商自用料號<i class="fa fa-chevron-down"></i></th>
					<th>幾個規格</th>
					<th>可否接訂單</th>
					<th>限時可賣量餘數</th>
					<th>統倉有無量</th>
					<th>建檔人員</th>
					<th>第一次建立時間<i class="fa fa-chevron-down"></i></th>
					<th>最新修改時間<i class="fa fa-chevron-down"></i></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><button class="btn-deepblue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-files-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br/><button class="btn-blue-border go-popup" data-width="800" data-href="popup/product-build-extend.php">建立延伸賣場</button></td>
					<td>草稿中<br/><br/><button class="btn-table-green">我要上架</button></td>
					<td>0<br/><button class="btn-blue-border">管理</button></td>
					<td>201808AG130000099</td>
					<td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
					<td class="prod-brand">SONY,索尼</td>
					<td class="prod-pic"><img src="../img/sample.jpg" alt="商品主圖"/></td>
					<td class="prod-price">999,000<br/><button class="btn-blue-border">變更</button></td>
					<td class="prod-num">MCF0001</td>
					<td class="prod-price">9<br/><button class="btn-blue-border">管理</button></td>
					<td>正常接單<br/><button class="btn-blue-border">設定</button></td>
					<td>無開啟限量設定</td>
					<td>有</td>
					<td>戴莉(PM)</td>
					<td>2018/05/29 15:05</td>
					<td>2018/09/29 19:05</td>
				</tr>

				<tr>
					<td><button class="btn-deepblue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-files-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br/><button class="btn-blue-border go-popup" data-width="800" data-href="popup/product-build-extend.php">建立延伸賣場</button></td>
					<td><span class="txt-green">已上架</span><br/><br/><button class="btn-cancel">我要下架</button></td>
					<td>0<br/><button class="btn-blue-border">管理</button></td>
					<td>201808AG130000099</td>
					<td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
					<td class="prod-brand">SONY,索尼</td>
					<td class="prod-pic"><img src="../img/sample.jpg" alt="商品主圖"/></td>
					<td class="prod-price">999,000<br/><button class="btn-blue-border">變更</button></td>
					<td class="prod-num">MCF0001</td>
					<td class="prod-price">9<br/><button class="btn-blue-border">管理</button></td>
					<td>正常接單<br/><button class="btn-blue-border">設定</button></td>
					<td>無開啟限量設定</td>
					<td>有</td>
					<td>戴莉(PM)</td>
					<td>2018/05/29 15:05</td>
					<td>2018/09/29 19:05</td>
				</tr>

				<tr>
					<td><button class="btn-deepblue"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-files-o" aria-hidden="true"></i></button><button class="btn-deepblue"><i class="fa fa-trash-o" aria-hidden="true"></i></button><br/><button class="btn-blue-border go-popup" data-width="800" data-href="popup/product-build-extend.php">建立延伸賣場</button></td>
					<td><span class="txt-red">已下架</span><br/><br/><button class="btn-table-green">我要上架</button></td>
					<td>0<br/><button class="btn-blue-border">管理</button></td>
					<td>201808AG130000099</td>
					<td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
					<td class="prod-brand">SONY,索尼</td>
					<td class="prod-pic"><img src="../img/sample.jpg" alt="商品主圖"/></td>
					<td class="prod-price">999,000<br/><button class="btn-blue-border">變更</button></td>
					<td class="prod-num">MCF0001</td>
					<td class="prod-price">9<br/><button class="btn-blue-border">管理</button></td>
					<td>正常接單<br/><button class="btn-blue-border">設定</button></td>
					<td>無開啟限量設定</td>
					<td>有</td>
					<td>戴莉(PM)</td>
					<td>2018/05/29 15:05</td>
					<td>2018/09/29 19:05</td>
				</tr>
          </tbody>
        </table>
      </section>
      </div>
    <div class="clearfix"></div>
  </section>
  <div class="pages">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
  </div>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../js/template-action.js"></script>
<script src="../js/double-scroll.js"></script>
<script>
  // 打開同規格列表在下面
  $('.toggle-order-detail').each(function() {
    var trBgColor = $(this).parent('td').css('background-color');
    $(this).click(function() {
      $('#' + $(this).data('name')).toggle();
      if(!$(this).hasClass('active')) {
        $(this).addClass('active');
        $(this).parents('tr').find('td').css({
          'background-color':'#fde5e5',
          'font-weight':'bold'
        });
      }
      else {
        $(this).removeClass('active');
        $(this).parents('tr').find('td').css({
          'background-color':trBgColor,
          'font-weight':'normal'
        });
      };
    });
  });
</script>
</body>
</html>