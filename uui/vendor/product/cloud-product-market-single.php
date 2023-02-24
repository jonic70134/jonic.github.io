<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">跨境管理<span class="divider"> &gt; </span></li> <li class="active">雲端賣場列表</li></ul>
</div>
<section class="template-content">
  <button class="btn-back-prev" onclick="location.href='cloud-product-list.php'"><i class="fa fa-reply"></i>回雲端商品列表</button>
  <dl class="cloud-market-single-infr">
    <dt>商品名稱：</dt>
    <dd>reprehenderit earum error natus animi quo possimus tenetur animi atque pariatur eos</dd>
    <dt>商品ID：</dt>
    <dd>201502AG250000439</dd>
    <dt>廠商名稱：</dt>
    <dd>子逐-扯褲疲腕兒了要易暫吃</dd>
    <dt>廠商自用料號：</dt>
    <dd>201502AG250000439</dd>
    <dt>保險價值：</dt>
    <dd>99,999</dd>
  </dl>
  <div class="form-element search-filter">
    <label class="label-search"><input type="text" size="50" placeholder="商品名稱/商品ID/賣場ID/廠商自用料號/廠商自用欄位"></label>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
    <label for="checkboxAdv"><input type="checkbox" id="checkboxAdv" class="checkbox-advsearch">進階查詢</label>
  </div>
  <div class="form-element search-filter advanced-search" style="display:none;">
    <label class="label-search">分類<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <label class="label-search">賣場類型<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label>賣場新增日</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <br>
    <label class="label-search">賣場狀態<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <label class="label-search">商品/組合 可賣量<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <br>
    <label class="label-search">來源平台<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup">沒有主賣場圖的賣場</label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="pages right clearfix">
    <a class="prev-page disable">上一頁</a>
    <span class="current-page">1/255</span>
    <a href="#" class="next-page">下一頁</a>
    <select class="select-page"><option>第1頁</option></select>
    <span class="item-count">總筆數：65,535</span>
  </div>
  <div class="template-function template-button">
    <span class="cloud-location title">來源國家區域：<span class="show-location">日本 區域1</span></span>
    <button class="btn-action"><i class="fa fa-share"></i>其他國家區域</button>
  </div>
  <section class="table-container">
    <div class="table-hd double-scroll-head">
      <table class="cloud-market-table template-table">
        <thead>
          <tr>
            <th>顯示</th>
            <th>雲端賣場文案</th>
            <th>雲端售價<br>雲端進貨價<br>雲端毛利率</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="grey">OFF</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name"><span class="orange">[組合賣場] </span>soluta at commodi eligendi sint qui distinctio laborum perferendis aperiam quo at</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">年倆進算啊中隨橫圓膩人的一面聲卻水意下多厭著行亦過腕咖就下的的和鬧罵出</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">分了和在意婦捨生一來水去都們又就們歲過1地算誠還1的苦雙響i的兄一喝也因地激啊胃去</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">輸手責只兒弟各蛋啊胃不們幫吃層讓去什行掃腕咖向提</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">有兩這不捨以這開床的繁壞不勺碰也腹繁看打真不經比些吃想千鄭上了奉向打不番和我</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">了歲太著咖快閒去懼法輕倒糢行在是很他閒了手年了不媽實前下一</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">差去甘正一２橫伴和輸處何事光些著邊一運得一很一人整這該他的合歡總因明</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">不亮月事一舒贊能漏樣這滾子我戰中身用城苦割鬧錢纔看奶來自偷而撐整孩</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">包咖心一為去還的啊而日問的少這畫沒泥的雙到層輾草就頓煮鞭去雙頓正責是所這關這些切唱入阻有纔情力</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
          <tr>
            <td><span class="green">ON</span></td>
            <td class="txt">
              <img src="http://placehold.it/50x50/" width="50" height="50" class="market-img" alt="賣場名稱賣場名稱賣場名稱賣場名稱賣場名稱">
              <div class="product-detail">
                <p class="product-name">開２最憑歹紅了皮他睛要睛趁我攜少家來感爭水類和我慢去啡</p>
                <p class="product-attr"><span class="attr">顏色：紅</span><span class="attr">尺寸：--</span></p>
                <p class="product-intro">文案：<a class="go-popup" data-width="800" data-href="popup/cloud-market-detail.php">詳</a></p>
              </div>
            </td>
            <td><span class="orange">NTD$99,999</span><br>NTD$99,999<br>100%</td>
          </tr>
          
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="cloud-market-table template-table scroll-content">
          <thead>
            <tr>
              <th>商品/組合<br>可賣量<br><button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>主商品<br>可賣量<br><button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>熱賣提醒</th>
              <th>分類</th>
              <th>贈品</th>
              <th>加購品</th>
              <th>內含商品數</th>
              <th>賣場ID<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>來源國家區域</th>
              <th>來源平台</th>
              <th>新增時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
              <th>修改時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a><br><span class="highlight">超過數量</span></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/05/20 20:59</td>
              <td>2013/09/10 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/06/27 20:59</td>
              <td>2013/09/29 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/12/28 20:59</td>
              <td>2013/03/02 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/09/21 20:59</td>
              <td>2013/08/20 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/02/17 20:59</td>
              <td>2013/04/24 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/11/24 20:59</td>
              <td>2013/01/20 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/06/28 20:59</td>
              <td>2013/05/09 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/10/16 20:59</td>
              <td>2013/06/01 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/10/05 20:59</td>
              <td>2013/09/25 20:59</td>
            </tr>
            
            <tr>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-max.php">65,535</a></td>
              <td>65,535</td>
              <td><a class="icon-alert go-popup" data-width="800" data-href="popup/cloud-market-alert.php"><i class="fa fa-lightbulb-o"></i></a></td>
              <td>全部手機</td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-gift.php">65,535</a></td>
              <td><a class="go-popup" data-width="1000" data-href="popup/cloud-market-add.php">65,535</a></td>
              <td><a class="go-popup" data-width="800" data-href="popup/cloud-market-include.php">65,535</a></td>
              <td>201502AG240000244</td>
              <td>日本 區域1</td>
              <td>amazon jp</td>
              <td>2013/05/28 20:59</td>
              <td>2013/05/21 20:59</td>
            </tr>
            
          </tbody>
        </table>
      </section>
    </div>
    <div class="clearfix"></div>
  </section>
</section>
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
//date time picker
var timeOption = {
    dateFormat: 'yy/mm/dd',
    showTimepicker: false,
    minDate: -180,
    maxDate: 0
};
$('.input-datepicker').datetimepicker(timeOption);
</script>
</body>
</html>