<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/layout.css" rel="stylesheet" type="text/css"/>
<link href="../../css/plugin/cropper.min.css" rel="stylesheet" type="text/css"/>
<link href="../../css/product.css" rel="stylesheet" type="text/css"/    >
<link href="../../css/productlist.css" rel="stylesheet" type="text/css"/>
<link href="../../css/productlist_popup.css" rel="stylesheet" type="text/css"/>
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body style="overflow-x: hidden;">
 <form name="frmI" id="frmI">
        <!-- container -->
        <div id="container">
            <div class="productlist-main productlist-popup">
                <h1 class="title"><i class="fa fa-pencil"></i>商品資訊</h1>
                <div class="add-product-data">
                    <div class="show-main">

                        <!-- 商品名稱-->
                        <div class="commodityTr">
                            <span><a id="itname_tip" class="fcbox col66bb" data-fancybox-type="iframe" href="https://vendor-tw1.uitox.com/show/popup/product"><i class="fa fa-question-circle"></i></a> 商品名稱：</span>
                            <span id="show_item_name" class="span-text-left" style="text-align: left;"> 
                              cleo 底線商品-3<a id="edit_item_name" href="javascript:;">修改</a>
                            </span>
                        </div>
                        <!-- 分類 -->
                        <div class="commodityTr">
                            <span>分類：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <div id="category_area"> 流行服飾、內睡衣 &gt; 流行女裝 &gt; 上衣、T恤 <a id="edit_category" href="javascript:;">可修改</a></div>
                                <div id="category_select" style="display: none;">
                                    <span id="cate_area" class="cate_area"></span>
                                    <a id="favorite_link" href="javascript:;">最近10個</a>
                                </div>
                            </span>
                        </div>

                        <!-- sup name -->
                        <!-- 顏色 -->
                        <div class="commodityTr">
                            <span>顏色：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input class="limit_length" type="text" id="color" size="8" limit="20" limit-message="[顏色]字數超過限制" value="" maxlength="20">
                            </span>
                        </div>
                        <!-- 尺寸 -->
                        <div class="commodityTr">
                            <span>尺寸：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="size" size="1" value="M" maxlength="20">
                            </span>
                        </div>
                        <!-- 市價 -->
                        <div class="commodityTr">
                            <span>市價：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="it_mprice" name="it_mprice" value="" maxlength="11">
                            </span>
                        </div>
                        <!-- 廠商自用料號 -->
                        <div class="commodityTr">
                            <span>廠商自用料號：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="sern" name="sern" value="" maxlength="40">
                            </span>
                        </div>
                        <!-- 廠商自用欄位 -->
                        <div class="commodityTr">
                            <span>廠商自用欄位：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="sern2" name="sern2" value="" maxlength="40">
                            </span>
                        </div>
                        <!-- EAN -->
                        <div class="commodityTr">
                            <span>EAN：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="ean" name="ean" value="" maxlength="30">
                            </span>
                        </div>
                        <!-- ISBN -->
                        <div class="commodityTr">
                            <span>ISBN：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="isbn" name="isbn" value="" maxlength="30">
                            </span>
                        </div>
                        <!-- 當商品剩下幾個通知我 -->
                        <div class="commodityTr">
                            <span>當商品剩下幾個通知我：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="it_salyqty_limit" name="it_salyqty_limit" value="2" maxlength="7">
                            </span>
                        </div>
                        <!-- 可消耗天數低於幾天通知我 -->
                        <div class="commodityTr">
                            <span></span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="checkbox" id="consumable_days_checkbox">
                                可消耗天數低於
                                <input type="text" id="consumable_days" name="consumable_days" value="" maxlength="7" style="width: 40px" disabled="">
                                天也通知我
                            </span>
                        </div>
                        <!-- 箱入數 -->
                        <div class="commodityTr">
                            <span><b>*</b>箱入數：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="boxqty" maxlength="3" value="1">
                            </span>
                        </div>
                        <!-- 最小進貨量 -->
                        <div class="commodityTr">
                            <span><b>*</b>最小進貨量：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="text" id="min_pr_qty" maxlength="3" value="1">
                            </span>
                        </div>
                        <!-- 大材積 -->
                        <div class="commodity_Name_large">
                            <div class="commodityTr">
                                <span>大材積商品：</span>
                                <span class="span-text-left" style="text-align: left;">
                                    <input type="checkbox" id="is_large_main"> <label for="is_large_main">是;我知道我的商品是大材積(長+寬+高 大於150cm)(電視機、箱裝衛生紙、箱裝水等)</label>
                                </span>
                            </div>
                            <div class="commodityTr">
                                <span></span>
                                <span class="span-text-left" style="text-align: left;">
                                    <input type="checkbox" id="is_large_accessory"> <label for="is_large_accessory">大材積商品的配件</label>
                                </span>
                            </div>
                            <div class="commodityTr" id="recycle_area" style="display: none;">
                                <span>四機商品：</span>
                                <span class="span-text-left" style="text-align: left;">
                                    <input type="checkbox" id="is_recycle">
                                    <label for="is_recycle">是</label>
                                    <select id="recycle_list">
                                        <option value="">請選擇</option>
                                        <option value="1">電視機</option>
                                        <option value="2">電冰箱</option>
                                        <option value="3">洗衣機</option>
                                        <option value="4">冷暖氣機</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <!-- 本商品規格 -->
                        <div class="commodityTr">
                            <span>本商品規格：</span>
                            <span class="span-text-left span-textarea" style="text-align: left;">
                                <textarea name="ii_spec" rows="5" maxlength="4000" style="width: 600px;">完全蓄電需時:</textarea>
                            </span>
                        </div>
                        <!-- 本商品標準配備 -->
                        <div class="commodityTr">
                            <span>本商品標準配備：</span>
                            <span class="span-text-left span-textarea" style="text-align: left;">
                                <textarea name="ii_equip" rows="5" maxlength="4000" style="width: 600px;"></textarea>
                            </span>
                        </div>
                        <!-- 是否有保固 -->
                        <div class="commodityTr">
                            <span>是否有保固：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="radio" id="warranty_y" name="warranty" value="1" class="radio"> <label for="warranty_y"><font class="yeswarranty">有</font></label>
                                <span id="warranty_area" style="display: none;">
                                    <input type="text" id="warranty_year" class="input" value="" maxlength="2"> <font class="year">年</font>
                                    <input type="text" id="warranty_month" class="input" value="" maxlength="2"> <font class="month">月</font>
                                </span>
                                <input type="radio" id="warranty_n" name="warranty" value="0" class="radio" checked="checked"> <label for="warranty_n"><font class="nowarranty">沒有</font></label>
                            </span>
                        </div>
                        <!-- 維修連絡資訊 -->
                        <div class="commodityTr">
                            <span>維修聯絡資訊：</span>
                            <span class="span-text-left" style="text-align: left;">
                                <input type="radio" id="maintain_y" name="maintain" value="1" class="radio"> <label for="maintain_y"><font class="yeswarranty">有</font></label>
                                <input type="radio" id="maintain_n" name="maintain" value="0" class="radio" checked="checked"> <label for="maintain_n"><font class="nowarranty">沒有</font></label>
                                <div id="maintain_area" class="phoweb" style="display: none; margin: 0 0;">
                                    <div class="test"><font class="address">維修網址 : </font><input type="text" id="maintain_url" class="inputadd" value="" maxlength="85"></div>
                                    <div class="test"><font class="phone">維修電話 : </font><input type="text" id="maintain_phone" class="inputpho" value="" maxlength="85"></div>
                                    <div class="test"><font class="address">維修地址 : </font><input type="text" id="maintain_address" class="inputadd" value="" maxlength="85"></div>
                                </div>
                            </span>
                        </div>

                        <div class="comm_BTN send">
                            <button type="button" class="btn-cancel" onclick="javascript:parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
                            <button type="button" class="btn-submit" onclick="set_item_data();"><i class="fa fa-check"></i>儲存</button>
                        </div>
                    </div><!-- end class show-main -->
                </div><!-- end class add-product-data -->
            </div><!-- end productlist-main -->
        </div><!-- end id container -->
        <!-- end container -->
    </form>
</body>
</html>