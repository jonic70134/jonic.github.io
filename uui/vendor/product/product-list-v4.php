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


<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="../css/jquery.fancybox.css" rel="stylesheet" type="text/css">
<link href="../css/components.min.css" rel="stylesheet" type="text/css">
<link href="../css/custom.css" rel="stylesheet" type="text/css">
<link href="../css/list_show.css" rel="stylesheet" type="text/css">
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
        <ul class="breadcrumb">
            <li><a href="https://website-tw1.uitox.com/#">首頁</a></li>
            <li class="link">商品管理</li>
            <li class="active">商品列表</li>
        </ul>
      </div>
      <div class="productlist-main">
        <div class="tab-content">
          <div class="commodity-search">
            <div class="nextinput form-inline row">
                <!--查詢條件-->
                <div class="col-md-10">
                    <input type="text" id="shStr" class="search-input" placeholder="請先輸入搜尋條件">
                    <select id="shStr_type" name="measurement_unit">
                        <option value="1">商品ID</option>
                        <option value="2">商品名稱</option>
                        <option value="3">賣場ID</option>
                        <option value="4">廠商自用料號</option>
                        <option value="5">廠商自用欄位</option>
                    </select>
                    <button id="search" class="btn-info btn-circle" type="button"><i class="fa fa-search"></i>查詢</button>
                </div>
                <!--靠右-->
                <div class="col-md-2">
                    <div class=" pull-right">
                    
                    </div>
                </div>
            </div>
        </div>

        <div class="commodity-tab">
            <div class="commodity-tabhead clearfix">
                <div class="productlist-func">
                    <button class="add_item btn-info" type="button" data-goodstype="borrow"><i class="fa fa-plus"></i>新增商品</button>
                </div>
                <div class="pages page_dropdown_div" style="">
                  <a href="javascript:pageNavLR.prev();">上一頁</a>
                  <span id="pageNow" name="pageNow">1</span>/<span id="pageCnt" name="pageCnt">69917</span>
                  <a href="javascript:pageNavLR.next();">下一頁</a>
                  <span id="pageDropdown" name="pageDropdown">
                    <select name="page">
                      <option value="1" selected="selected">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                    </select>
                  </span>
                  <span>總筆數：<span id="total" name="total">699169</span></span>
                </div>
            </div>

            <div class="tableCon" style="position: static; zoom: 1;">
                <div class="table-left">
                    <table class="table-freeze">
                        <thead>
                            <tr class="data_title">
                                <th>上架/下架</th>
                                <th>操作</th>
                                <th>商品ID</th>
                                <th class="prod-pic">主圖</th>
                                <th class="prod-name">商品名稱<span id="odbITNAME" name="odb"><i class="icon-chevron-down"></i></span></th>
                                <th>分類</th>
                                
                                <!-- <th class="prod-color">顏色</th>
                                <th class="prod-size">尺寸</th> -->
                            </tr>
                        </thead>
                        <tbody id="left_tbody">
                          <tr row_itno="201808AG220000155">
                            <td class="prod_checkbox"><button class="btn-action">上架</button></td>
                            <td class="prod_checkbox"><button class="btn-action">編輯商品</button></td>
                            <td class="prod_checkbox">201808AG130000099</td>
                            <td class="prod-pic">
                              <a id="editPic" class="colFFF" data-fancybox-type="iframe" href="#">
                                <div style="background-image: url(https://img.uitox.com/A/item/2018/0822/AG0000155/201808AG220000155_15349349355480810023332.jpg);" class="listtabpic"></div>
                                <div class="edit">EDIT</div>
                              </a>
                            </td>
                            <td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
                            <td class="prod-color"><div class="limitname"><p>洗衣精/球</p></div></td>
                          </tr>

                          <tr row_itno="201808AG220000155">
                            <td class="prod_checkbox"><button class="btn-cancel">下架</button></td>
                            <td class="prod_checkbox"><button class="btn-action">編輯商品</button><br/><br/><button class="btn-action">建立延伸賣場</button></td>
                            <td class="prod_checkbox">201808AG130000099</td>
                            <td class="prod-pic">
                              <a id="editPic" class="colFFF" data-fancybox-type="iframe" href="#">
                                <div style="background-image: url(https://img.uitox.com/A/item/2018/0822/AG0000155/201808AG220000155_15349349355480810023332.jpg);" class="listtabpic"></div>
                                <div class="edit">EDIT</div>
                              </a>
                            </td>
                            <td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
                            <td class="prod-color"><div class="limitname"><p>洗衣精/球</p></div></td>
                          </tr>
                        <?php 
                          for ($x = 0; $x <= 8; $x++) {
                            echo '
                            <tr row_itno="201808AG220000155">
                              <td class="prod_checkbox"><button class="btn-cancel">下架</button></td>
                              <td class="prod_checkbox"><button class="btn-action">編輯商品</button></td>
                              <td class="prod_checkbox">201808AG130000099</td>
                              <td class="prod-pic">
                                <a id="editPic" class="colFFF" data-fancybox-type="iframe" href="#">
                                  <div style="background-image: url(https://img.uitox.com/A/item/2018/0822/AG0000155/201808AG220000155_15349349355480810023332.jpg);" class="listtabpic"></div>
                                  <div class="edit">EDIT</div>
                                </a>
                              </td>
                              <td class="prod-name"><div class="limitname"><p>【AURA艾樂】316不鏽鋼小行星手提城市保溫杯500ml(二色可選) 香檳金/香檳粉</p></div></td>
                              <td class="prod-color"><div class="limitname"><p>洗衣精/球</p></div></td>
                            </tr>
                            ';
                          } 
                        ?>
                      </tbody>
                    </table>
                </div>

                <div class="table-right">
                    <table class="table-rightcol">
                        <thead>
                            <tr>
                                <th class="darken">預設售價</th>
                                <th class="darken">預設成本</th>
                                <th class="darken">毛利率</th>
                                <th class="darken">毛額</th>
                                <th>廠商自用料號<span><i class="icon-chevron-down"></i></span></th>
                                <th>幾個規格</th>
                                <th class="prod-color">顏色</th>
                                <th class="prod-size">尺寸</th>
                                <th class="darken">賣場數量</th>
                                <th class="darken">統倉可賣量</th>
                                <th class="darken">廠商可否轉接單</th>
                                <th>材積</th>
                                <th>備註欄位</th>
                                <th>廠商<th>
                                <th>建立人員</th>
                                <th>第一次建立時間<span><i class="icon-chevron-down"></i></span><br/>最新修改時間<span><i class="icon-chevron-down"></i></span></th>
                              </tr>
                        </thead>
                        <tbody id="right_tbody">
                            <tr>
                              <td><span class="delSm">$999,99</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">$999,99</span><br><span class="delSm">(抽%轉換)</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">10%</span></td>
                              <td><span class="delSm">$100,00</span></td>
                              <td>201808AG220000155</td>
                              <td>1<br><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">編輯</a></td>
                              <td>1號 經典黑</td>
                              <td>400 ml</td>
                              <td><span class="delSm">0</span></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">20</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">超接設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">進貨設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">還貨設定</a></td>
                              <td>可轉單且接單中<br/><button class="btn-action">暫不接單</button></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">材積</a></td>
                              <td></td>
                              <td>美合國際實業股份有限公司</td>
                              <td>戴莉(PM)</td>
                              <td>2018/05/29 15:05<br/>2018/09/29 19:05</td>
                            </tr>

                            <tr>
                              <td><span class="delSm">$999,99</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">$999,99</span><br><span class="delSm">(抽%轉換)</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">10%</span></td>
                              <td><span class="delSm">$100,00</span></td>
                              <td>201808AG220000155</td>
                              <td>1<br><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">編輯</a></td>
                              <td>1號 經典黑</td>
                              <td>400 ml</td>
                              <td><span class="delSm">0</span></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">20</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">超接設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">進貨設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">還貨設定</a></td>
                              <td><span class="delSm">可轉單但暫不接單</span><br/><button class="btn-action">恢復接單</button></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">材積</a></td>
                              <td></td>
                              <td>美合國際實業股份有限公司</td>
                              <td>戴莉(PM)</td>
                              <td>2018/05/29 15:05<br/>2018/09/29 19:05</td>
                            </tr>

                            <tr>
                              <td><span class="delSm">$999,99</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">$999,99</span><br><span class="delSm">(抽%轉換)</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">10%</span></td>
                              <td><span class="delSm">$100,00</span></td>
                              <td>201808AG220000155</td>
                              <td>1<br><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">編輯</a></td>
                              <td>1號 經典黑</td>
                              <td>400 ml</td>
                              <td><span class="delSm">0</span></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">20</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">超接設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">進貨設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">還貨設定</a></td>
                              <td><span class="delSm">不可</span><br/><button class="btn-action">開啟可轉單</button></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">材積</a></td>
                              <td></td>
                              <td>美合國際實業股份有限公司</td>
                              <td>戴莉(PM)</td>
                              <td>2018/05/29 15:05<br/>2018/09/29 19:05</td>
                            </tr>
                        <?php 
                          for ($x = 0; $x <= 10; $x++) {
                            echo '
                            <tr>
                              <td><span class="delSm">$999,99</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">$999,99</span><br><span class="delSm">(抽%轉換)</span><br><a class="fcbox col66bb" data-fancybox-type="iframe" href="show_price/get_it_cost_info/201808AG220000155">修</a></td>
                              <td><span class="delSm">10%</span></td>
                              <td><span class="delSm">$100,00</span></td>
                              <td>201808AG220000155</td>
                              <td>1<br><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">編輯</a></td>
                              <td>1號 經典黑</td>
                              <td>400 ml</td>
                              <td><span class="delSm">0</span></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">20</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">超接設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">進貨設定</a>
                                <a class="fcbox col66bb" data-fancybox-type="iframe" href="#">還貨設定</a></td>
                              <td>可轉單且接單中<br/><button class="btn-action">暫不接單</button></td>
                              <td><a class="fcbox col66bb" data-fancybox-type="iframe" href="#">材積</a></td>
                              <td></td>
                              <td>美合國際實業股份有限公司</td>
                              <td>戴莉(PM)</td>
                              <td>2018/05/29 15:05<br/>2018/09/29 19:05</td>
                            </tr>
                            ';
                          } 
                        ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- container /-->

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