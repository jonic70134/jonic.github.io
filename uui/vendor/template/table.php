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
<link href="../css/template.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">購物金使用報表</li></ul>
</div>
<section class="template-content">
  <div class="form-element search-filter">
    <label class="label-search">購物金活動編號<input type="text" class="input-search" placeholder="請輸入購物金活動編號"></label>
    <label class="label-search">使用平台<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label>篩選條件A</label>
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup">多選1</label>
      <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup">多選2</label>
      <label for="checkBox3"><input type="checkbox" id="checkBox3" name="checkboxGroup">多選3</label>
      <label for="checkBox4"><input type="checkbox" id="checkBox4" name="checkboxGroup">多選4</label>
      <label for="checkBox5"><input type="checkbox" id="checkBox5" name="checkboxGroup">多選5</label>
    </div>
    <div class="select-group">
      <label>篩選條件B</label>
      <label for="radio1"><input type="radio" id="radio1" name="radioGroup">單選1</label>
      <label for="radio2"><input type="radio" id="radio2" name="radioGroup">單選2</label>
      <label for="radio3"><input type="radio" id="radio3" name="radioGroup">單選3</label>
      <label for="radio4"><input type="radio" id="radio4" name="radioGroup">單選4</label>
      <label for="radio5"><input type="radio" id="radio5" name="radioGroup">單選5</label>
    </div>
    <div class="select-group">
      <label>建立時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""><span class="comment"> (查詢區間最長90天，可查詢6個月內資料)</span>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
    <label for="checkboxAdv"><input type="checkbox" id="checkboxAdv" class="checkbox-advsearch">進階查詢</label>
  </div>
  <div class="form-element search-filter advanced-search" style="display:none;">
    <label class="label-search">購物金活動編號<input type="text" class="input-search" placeholder="請輸入購物金活動編號"></label>
    <label class="label-search">使用平台<select name="" id="" class="select-search"><option value="">請選擇</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group">
      <label>篩選條件A</label>
      <label for="checkBox1"><input type="checkbox" id="checkBox1" name="checkboxGroup">多選1</label>
      <label for="checkBox2"><input type="checkbox" id="checkBox2" name="checkboxGroup">多選2</label>
      <label for="checkBox3"><input type="checkbox" id="checkBox3" name="checkboxGroup">多選3</label>
      <label for="checkBox4"><input type="checkbox" id="checkBox4" name="checkboxGroup">多選4</label>
      <label for="checkBox5"><input type="checkbox" id="checkBox5" name="checkboxGroup">多選5</label>
    </div>
    <div class="select-group">
      <label>篩選條件B</label>
      <label for="radio1"><input type="radio" id="radio1" name="radioGroup">單選1</label>
      <label for="radio2"><input type="radio" id="radio2" name="radioGroup">單選2</label>
      <label for="radio3"><input type="radio" id="radio3" name="radioGroup">單選3</label>
      <label for="radio4"><input type="radio" id="radio4" name="radioGroup">單選4</label>
      <label for="radio5"><input type="radio" id="radio5" name="radioGroup">單選5</label>
    </div>
    <div class="select-group">
      <label>建立時間</label>
      <input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value="">
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="form-element search-filter left">
    <label class="label-search"><input type="text" class="input-search" placeholder="請輸入自用料號、借貨單號、商品ID、廠商ID"></label>
    <button class="btn-submit"><i class="fa fa-search"></i>查詢</button>
  </div>
  <div class="form-element search-filter right">
    <label class="select-group"><select name="" id="" class="select-search"><option value="">申請日</option><option value="">select1</option><option value="">select2</option></select></label>
    <div class="select-group"><input type="text" class="input-datepicker" placeholder="請輸入開始時間">~<input type="text" class="input-datepicker" placeholder="請輸入結束時間" value=""></div>
    <div class="select-group" style="margin: 5px 10px; vertical-align: top;">
      <div class="select-group">
        <label>單據狀態：</label>
        <label for="checkBox1-1"><input type="checkbox" id="checkBox1-1" name="checkboxGroup1">申請中</label>
        <label for="checkBox1-2"><input type="checkbox" id="checkBox1-2" name="checkboxGroup1">已開立</label>
        <label for="checkBox1-3"><input type="checkbox" id="checkBox1-3" name="checkboxGroup1">已到貨</label>
        <label for="checkBox1-4"><input type="checkbox" id="checkBox1-4" name="checkboxGroup1">已驗貨</label>
        <label for="checkBox1-5"><input type="checkbox" id="checkBox1-5" name="checkboxGroup1">已刪除</label>
      </div>
      <div class="select-group">
        <label>庫　　別：</label>
        <label for="checkBox2-1"><input type="checkbox" id="checkBox2-1" name="checkboxGroup2">A01</label>
        <label for="checkBox2-2"><input type="checkbox" id="checkBox2-2" name="checkboxGroup2">A02</label>
      </div>
      <div class="select-group">
        <label>新&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;舊：</label>
        <label for="checkBox3-1"><input type="checkbox" id="checkBox3-1" name="checkboxGroup3">新品</label>
        <label for="checkBox3-2"><input type="checkbox" id="checkBox3-2" name="checkboxGroup3">舊品</label>
      </div>
      <label class="label-search">平　　台：<select name="" id="" class="select-search"><option value="">ASAP</option></select></label>
    </div>
    <div class="select-group">
      <button class="btn-submit"><i class="fa fa-search"></i>進階查詢</button>
      <button class="btn-cancel"><i class="fa fa-times"></i>清除</button>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="template-function template-button">
    <button class="btn-action">不另開分頁</button>
    <button class="btn-action" onclick="window.open('/template/table.php');">另開分頁</button>
    <button class="btn-action go-popup" data-width="600" data-href="popup/list.php">跳出列表資訊</button>
    <button class="btn-action go-popup" data-width="1000" data-href="popup/table.php">跳出表格資訊</button>
    <button class="btn-action go-popup" data-width="600" data-href="popup/form.php">跳出編輯表單</button>
    <button class="btn-action go-popup" data-width="1000" data-href="popup/table-print.php">跳出列印表格</button>
    <button class="btn-action go-popup" data-width="400" data-href="popup/download.php">跳出下載</button>
  </div>
  <dl class="list-summary">
    <dd>購物金點數總計 888,888,888</dd>
    <dd>消費訂單總額 $888,888,888</dd>
  </dl>
  <section class="table-container table-scroll ">
    <div class="table-hd double-scroll-head">
      <table class="template-table">
        <thead class="table-head-l">
          <tr>
            <th><input type="checkbox" class="checkbox-lists" name="checkbox-lists"></th>
            <th>建立時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>購物金活動編號</th>
            <th>購物金活動名稱</th>
          </tr>
        </thead>
        <tbody>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/10/25 20:59</td>
            <td>AG100126</td>
            <td class="txt">決明昨一答氣無苦爸去夜是是使<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/10/05 20:59</td>
            <td>AG100126</td>
            <td class="txt">有切慄爭說軟1煩非好一人添<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/12/23 20:59</td>
            <td>AG100126</td>
            <td class="txt">縷須-疑要台忽有輾要～的利<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/12/13 20:59</td>
            <td>AG100126</td>
            <td class="txt">們麼裡堪值好不好有去<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/05/13 20:59</td>
            <td>AG100126</td>
            <td class="txt">想他前已一這賺只身麵<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/06/07 20:59</td>
            <td>AG100126</td>
            <td class="txt">到心之在不紅不須了層看憊逆<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/05/28 20:59</td>
            <td>AG100126</td>
            <td class="txt">亮很出加媽燈的你明點咖命我看<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/24 20:59</td>
            <td>AG100126</td>
            <td class="txt">兩不年來作一快決在為是熱戶<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/01 20:59</td>
            <td>AG100126</td>
            <td class="txt">平看-還一的可咖死上一風-回<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/08/16 20:59</td>
            <td>AG100126</td>
            <td class="txt">山了幾在家黃顆幾疲一地來預<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr class="summary">
            <td colspan="4" class="summary-name">總計</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <section class="double-scroll-top">
        <div class="scroll-content-width"></div>
      </section>
      <section class="double-scroll-bottom">
        <table class="template-table scroll-content">
          <thead class="table-head-r">
            <tr>
              <th>發送每組點數</th>
              <th>發送組數</th>
              <th>發送總點數</th>
              <th>歸戶總點數</th>
              <th>歸戶率</th>
              <th>使用總點數</th>
              <th>使用率</th>
              <th>歸戶後使用率</th>
              <th>使用會員總數</th>
              <th>使用購物金<br>消費訂單數</th>
              <th>使用新客總數</th>
              <th>新客使用購物金<br>消費訂單總額</th>
              <th>發出平台</th>
              <th>類型</th>
              <th>說明</th>
              <th>連結</th>
              <th>詳細訊息</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox input-list-txtbox1" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-to-val"><i class="fa fa-angle-double-down"></i>以下全同</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="600" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>STAYREAL</td>
              <td>非序號</td>
              <td class="txt"><input type="text" class="input-list-txtbox" placeholder="請填寫退訂說明"><button class="btn-txt btn-green btn-copy-val"><i class="fa fa-angle-up"></i>同上</button></td>
              <td class="txt"><a href="/" target="_blank" title="連結title連結title">我是一個網頁連結</a></td>
              <td><button class="btn-red" title="下載"><i class="fa fa-download"></i></button><button class="btn-green go-popup" data-width="800" data-href="popup/form.php" title="修改"><i class="fa fa-pencil"></i></button><button class="btn-blue go-popup" data-width="800" data-href="popup/table.php" title="詳情"><i class="fa fa-search"></i></button><button class="btn-grey" title="刪除"><i class="fa fa-times"></i></button></td>
            </tr>
            
            <tr class="summary">
              <td class="num">&nbsp;</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">100.00%</td>
              <td class="num">100.00%</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">65,535</td>
              <td class="num">$65,535</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
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
<script src="../js/lib/jquery.mousewheel.js"></script>
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

<script>
    $(document).ready(function () {
        $('.double-scroll-bottom').mousewheel(function(e, delta) {
            this.scrollLeft -= (delta * 40);
            e.preventDefault();
        });
    });
</script>
</body>
</html>