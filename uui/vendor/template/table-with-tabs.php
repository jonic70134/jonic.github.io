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
  <ul class="breadcrumb"><li><a href="../">首頁</a><span class="divider"> &gt; </span></li> <li class="link">行銷活動<span class="divider"> &gt; </span></li> <li class="active">購物金使用報表</li></ul>
</div>
<dl class="template-tabs">
  <dd><a href="/template/table-with-tabs.php" class="active">列表A</a></dd>
  <dd><a href="/template/table.php">列表B</a></dd>
</dl>
<section class="template-content template-content-tab">
  <button class="btn-back-prev" onclick="location.href='table.php'"><i class="fa fa-reply"></i>回上一頁</button>
  <div class="template-function template-button">
    <button class="btn-action">不另開分頁</button>
    <button class="btn-action" onclick="window.open('/template/table.php');">另開分頁</button>
    <button class="btn-action go-popup" data-width="600" data-href="popup/list.php">跳出列表資訊</button>
    <button class="btn-action go-popup" data-width="1000" data-href="popup/table.php">跳出表格資訊</button>
    <button class="btn-action go-popup" data-width="600" data-href="popup/form.php">跳出編輯表單</button>
  </div>
  <section class="table-container table-container-tab">
    <div class="table-hd">
      <table class="template-table table-colorful">
        <thead>
          <tr class="row-red">
            <th><input type="checkbox" class="checkbox-lists" name="checkbox-lists"></th>
            <th>建立時間<button class="table-sort" title="排序"><i class="fa fa-chevron-down"></i></button></th>
            <th>購物金活動編號</th>
            <th>購物金活動名稱</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/09/27 20:59</td>
            <td>AG100126</td>
            <td width="200" class="txt break-all">爭的這什在來到２罵我<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          <tr class="row-blue">
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/03/26 20:59</td>
            <td>AG100126</td>
            <td class="txt">懷使事易較茶0然有碌氣所慄失<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          <tr class="row-red">
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/05/11 20:59</td>
            <td>AG100126</td>
            <td class="txt">短是碰糖.了以鬧停個進棄揪既<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          <tr class="row-red highlight">
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/09 20:59</td>
            <td>AG100126</td>
            <td class="txt">是罵不住放甘卻用來人群又這<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/05/25 20:59</td>
            <td>AG100126</td>
            <td class="txt">問雖地時有進著將有什<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/10 20:59</td>
            <td>AG100126</td>
            <td class="txt">兄的去興很在你可腕啦為數拚誘<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/06/11 20:59</td>
            <td>AG100126</td>
            <td class="txt">他較不因盲四間泰說水純<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/03/30 20:59</td>
            <td>AG100126</td>
            <td class="txt">蹶☆街開這況輸快中十麼<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/12 20:59</td>
            <td>AG100126</td>
            <td class="txt">趕連為利憑刻佈月疑興卻在問<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr>
            <td><input type="checkbox" name="checkbox-lists"></td>
            <td>2013/02/22 20:59</td>
            <td>AG100126</td>
            <td class="txt">值程那行現子生有憊不台正鑼<button class="btn-white go-popup" data-width="600" data-href="popup/list.php" title="訂購人資訊"><i class="fa fa-user"></i></button></td>
          </tr>
          
          <tr class="summary">
            <td colspan="4" class="summary-name">總計</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="table-body">
      <table class="template-table table-colorful">
        <thead>
          <tr>
            <th>要請否</th>
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
            <th class="hide-toggle"></th>
            
            <th class="hide">隱藏的格子1</th>
            
            <th class="hide">隱藏的格子2</th>
            
            <th class="hide">隱藏的格子3</th>
            
            <th class="hide">隱藏的格子4</th>
            
            <th class="hide">隱藏的格子5</th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
            <td class="num"><span class="txt-yellow">65,535</span></td>
            <td class="num"><span class="txt-green">65,535</span></td>
            <td class="num"><span class="txt-blue">65,535</span></td>
            <td class="num"><span class="txt-red">100.00%</span></td>
            <td class="num">65,535</td>
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
            <td class="hide-toggle" rowspan="11"><i class="fa fa-caret-right"></i></td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          <tr class="row-blue">
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          <tr class="row-red">
            <td><span class="check check-no"><i class="fa fa-times"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          <tr class="row-red highlight">
            <td><span class="check check-no"><i class="fa fa-times"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr>
            <td><span class="check check-yes"><i class="fa fa-check"></i></span></td>
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
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
            <td class="hide">看不見但是依舊存在</td>
            
          </tr>
          
          <tr class="summary">
            <td>&nbsp;</td>
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
            
            <td class="hide">&nbsp;</td>
            
            <td class="hide">&nbsp;</td>
            
            <td class="hide">&nbsp;</td>
            
            <td class="hide">&nbsp;</td>
            
            <td class="hide">&nbsp;</td>
            
          </tr>
        </tbody>
      </table>
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
<section class="cover">
  <dl class="plateforms">
    <dt class="title">請選擇要進入編輯的網站：</dt>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
  </dl>
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
<script>
(function($){
  $('body').css('overflow','hidden');
})(jQuery);
//cover
function closeCover() {
  $('.cover').fadeOut(100);
  $('body').css('overflow','auto');
  $('.select-site').show();
};
function openCover() {
  $('.cover').fadeIn(100);
  $('body').css('overflow','hidden');
  $('.select-site').hide();
};
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