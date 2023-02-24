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
<body cz-shortcut-listen="true">
    <div class="productlist-main productlist-popup attribute" id="attribute_list">
        <h1 class="title"> <i class="fa fa-pencil"></i>商品屬性</h1>
        <div id="color_list" style="width: 100%;height: auto;">
            <ul style="display:inline-block">
                <li class="attrlist attributebox" at_seq="600001" spec_id="0">
                    <span>品牌</span>
                    <input type="checkbox" value=""/>待新增<br>
                    <ul class="attrblock attblock clearfix" id="600001"></ul> 
                    <input id="600001" value="" type="hidden" style="border:1px solid red;" readonly="" is_match="1" at_name="顏色" at_type="color" chk_av_seq="-1">         <button type="button" class="btn btn-info" spec_id="0" id="attr_val_option" is_match="1" onclick="attr_val_option_func(&#39;600001&#39;, $(this).parent());">選</button>     
                </li>
            </ul>
        </div>
        <hr>
        <div>
            <p>商品屬性(多)</p>
            <ul id="list_not_match" class="clearfix" style="display: inline-block;"></ul>
        </div>

        <div class="send">
            <button type="button" class="btn-cancel" onclick="javascript:parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
            <button type="button" id="attribute_chirm_btn" class="btn-submit" onclick="modify_item_attr();"><i class="fa fa-check"></i>確認</button>
        </div>
    </div>
</body>
</html>