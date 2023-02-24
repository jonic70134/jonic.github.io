<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
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
      <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li></ul>
    </div>
    <div class="coupon-list extend-theme">
      <h1 class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>折價券</h1>
      <div class="extend-table-bg form-element clearfix">
        <div class="select-group coupon-list-filter">
          <div class="select-group">
            <label>領取期限：</label>
            <label for="radio-1"><input type="radio" id="radio-1" name="radioGroup1">尚未開始</label>
            <label for="radio-2"><input type="radio" id="radio-2" name="radioGroup1">進行中</label>
            <label for="radio-3"><input type="radio" id="radio-3" name="radioGroup1">已結束</label>
            <label for="radio-4"><input type="radio" id="radio-4" name="radioGroup1">自訂區間&nbsp;<input type="text" name="" id=""/>&nbsp;---&nbsp;<input type="text" name="" id=""/></label>
          </div>
          <div class="select-group">
            <label>使用期限：</label>
            <label for="radio-5"><input type="radio" id="radio-5" name="radioGroup2">尚未開始</label>
            <label for="radio-6"><input type="radio" id="radio-6" name="radioGroup2">進行中</label>
            <label for="radio-7"><input type="radio" id="radio-7" name="radioGroup2">已結束</label>
            <label for="radio-8"><input type="radio" id="radio-8" name="radioGroup2">自訂區間&nbsp;<input type="text" name="" id=""/>&nbsp;---&nbsp;<input type="text" name="" id=""/></label>
          </div>
          <div class="select-group">
            <label>審核狀態：</label>
            <label for="checkBox3-1"><input type="checkbox" id="checkBox3-1" name="checkboxGroup3">待審核</label>
            <label for="checkBox3-2"><input type="checkbox" id="checkBox3-2" name="checkboxGroup3">通過</label>
            <label for="checkBox3-3"><input type="checkbox" id="checkBox3-3" name="checkboxGroup3">不通過</label>
            <label for="checkBox3-4"><input type="checkbox" id="checkBox3-4" name="checkboxGroup3">未審核已過期</label>
          </div>
          <div class="select-group">
            <label for="checkBox4-1"><input type="checkbox" id="checkBox4-1" name="checkboxGroup4">只看我自己的</label>
          </div>
          <div class="pages right clearfix">
          <button class="btn-action" onclick="location.href='./'"><i class="fa fa-search"></i>查詢</button>
          </div>
        </div>
      </div>
      
      <div class="template-function template-button">
        <button class="btn-action btn-add-coupon" onclick="location.href='coupon-add.php'">新增折價券</button>
        <span class="highlight">折價券採預約排程，領取期限前1小時，將不得編輯設定</span>
      </div>
      <section class="double-scroll-bottom table-container">  
      <table class="coupon-list cloud-market-table template-table scroll-content">
          <thead>
            <tr>
              <th>審核狀態</th>
              <th>操作</th>
              <th>折價券ID</th>
              <th class="prod-name">活動名稱</th>
              <th>可執行狀態</th>
              <th>折價券序號</th>
              <th>面額</th>
              <th>折抵範圍</th>
              <th>排除<br/>低毛賣場</th>
              <th>購物車<br/>滿額門檻</th>
              <th>獲得方式</th>
              <th>可領券對象</th>
              <th>領取期限</th>
              <th>使用期限</th>
              <th>發放張數</th>
              <th>已歸戶張數</th>
              <th>已使用張數</th>
              <th>第一次<br/>建立人員</th>
              <th>最後<br/>修改人員</th>
              <th>第一次建立時間<i class="fa fa-chevron-down"></i><br/>最新修改時間<i class="fa fa-chevron-down"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>待審核<br/><button class="btn-table-red" type="button">審核處理</button></td>
              <td><button class="btn-blue-border" onclick="location.href='coupon-edit.php'">編輯設定</button><br/><p class="highlight">刪除折價券&nbsp;<i class="fa fa-times"></i></p></td>
              <td>Coupon004</td>
              <td>雙12加碼領券結帳現抵</td>
              <td>---</td>
              <td>RECXPVBF</td>
              <td>折抵200元</td>
              <td>全館</td>
              <td>---</td>
              <td>---</td>
              <td>輸入序號領取<br/>手機自動歸戶</td>
              <td>VIP+VVIP</td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>9,000,000</td>
              <td>9,000,000</td>
              <td>8,000,000<br/><a href="#">下載看會員</a></td>
              <td>戴莉<br/>(PM)</td>
              <td>戴莉<br/>(PM)</td>
              <td>2018/09/20&nbsp;11:30<br/>2018/09/21&nbsp;00:00</td>
            </tr>

            <tr>
              <td class="blue-txt">通過</td>
              <td><button class="btn-grey-border">查看設定</button></td>
              <td>Coupon003</td>
              <td>雙12加碼領券結帳現抵</td>
              <td>可執行<br/><button class="btn-table-red" type="button">暫停執行</button></td>
              <td>---</td>
              <td>65折</td>
              <td>指定  條件賣場<br/><a href="#">查看</a></td>
              <td>3%</td>
              <td>1288元</td>
              <td>直接發放<br/>系統自動歸戶</td>
              <td>自訂名單<br/><a href="#">查看</a></td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>不限</td>
              <td>---<br/><a href="#">下載看會員</a></td>
              <td>300<br/><a href="#">下載看會員</a></td>
              <td>戴莉<br/>(PM)</td>
              <td>戴莉<br/>(PM)</td>
              <td>2018/09/20&nbsp;11:30<br/>2018/09/21&nbsp;00:00</td>
            </tr>

            <tr>
              <td class="blue-txt">通過</td>
              <td><button class="btn-grey-border">查看設定</button></td>
              <td>Coupon002</td>
              <td>雙12加碼領券結帳現抵</td>
              <td>---</td>
              <td>LGAPSCK9</td>
              <td>85折</td>
              <td>指定條件賣場<br/><a href="#">查看</a></td>
              <td>---</td>
              <td>588元</td>
              <td>輸入序號領取<br/>會員手動歸戶</td>
              <td>全站會員</td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>2018/09/20&nbsp;11:30起<br/>2018/09/21&nbsp;00:00止</td>
              <td>2,888</td>
              <td>1,598</td>
              <td>1,300<br/><a href="#">下載看會員</a></td>
              <td>戴莉<br/>(PM)</td>
              <td>戴莉<br/>(PM)</td>
              <td>2018/09/20&nbsp;11:30<br/>2018/09/21&nbsp;00:00</td>
            </tr>

            <tr>
              <td><span class="highlight">不通過</span></td>
              <td><button class="btn-blue-border" onclick="location.href='coupon-edit.php'">編輯設定</button><br/><p class="highlight">刪除折價券&nbsp;<i class="fa fa-times"></i></p></td>
              <td>Coupon001</td>
              <td>雙12加碼領券結帳現抵</td>
              <td>暫停執行<br/><button class="btn-table-green" type="button">恢復執行</button></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
      </table>
      </section>
  </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
</body>
</html>