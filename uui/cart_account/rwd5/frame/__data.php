<?php
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "account";
}
$site_ad_top = "../c/img/frame/sample/site_ad_top.png";

$logo = array(
    "images"    => "../c/img/frame/logo_asap.png",
);

$recommends = array(
    "熱銷電暖器",
    "綠膳纖",
    "iPhone 6",
    "冬季保暖必備",
    "rimowa",
);

$nav_breadcrumbs = array(
    "home"      =>  "首頁",
    "locate"    =>  "目前位置：",
    "now"       =>  "我的帳戶",
);

$pagination = array(
    "first"         => "最前",
    "last"          => "最後",
    "next"          => "下一頁",
    "prev"          => "上一頁",
    "total"         => "共11頁，132筆",
);

$site_cart = array(
    "del"           => "刪除",
    "limited"       => "此商品會員限購1個",
    "gift_text"     => "贈品-原廠兩用立架",
    "add_text"      => "加購-Bumper Case 保護殼",
    "buy-discount"  => "買立折",
    "tag1"          => "已符合",
    "tag_text"      => "單品滿$50000立折$500",
    "combo1"        => "包含下列商品：",
    "combo2"        => "組合商品A",
    "combo3"        => "組合商品B",
    "sale"          => "活動折扣-(滿$2000折200)",
    "total"         => "商品合計",
    "checkOut"      => "結帳",
);

$L10n_item = array(
    "sale_title"     =>  "優惠期間：",
    "sale_price"     =>  "優惠價：",
    "sale_count"     =>  "倒數結束時間：",
    "sale_people"    =>  "人已買",
    "desc"          => "描述：",
    "color"         => "顏色：",
    "color_text"    => "顏色",
    "spec"          => "規格：",
    "include"       => "包含內容：",
    "include_item"  => "附屬商品",
    "spec_text"     => "請選擇規格",
    "gift"          => "贈品：",
    "gift_text"     => "這是贈品",
    "gift_photo"    => "(圖)",
    "high_price"    => "建議售價：",
    "price"         => "網路價：",
    "highlight1"    => "會員限購1個(剩餘數量：9999)",
    "highlight2"    => "預計出貨日：2014/05/16",
    "h3_add"        => "加購商品：",
    "h3_intro"      => "商品說明",
);

$L10n_search = array(
    "placeholder"   => "搜尋商品",
);

$btn = array(
    "btn-buy"               => "購買",
    "btn-preorder"          => "立即預訂",
    "btn-preorder-finish"   => "預購結束",
    "btn-rush"              => "立即搶購",
    "btn-rush-finish"       => "搶購一空",
    "btn-discount"          => "買立折",
    "btn-soldout-stock"     => "售完，補貨中",
    "btn-soldout"           => "已售完",
    "btn-to-sale"           => "即將開賣",
    "btn-select"            => "請選擇尺寸",
    "btn-addcart"           => "加入購物車",
);

$order_items = array(
    array(
        "name"          => "商品名稱",
        "images"        => "../c/img/sth_asap/sample/item_01.jpg",
        "url"           => "../front/item.php",        
        "type"          => "red",
        "tab"           => "uitox運送",
        "quantity"      => "2",
        "price"         => "599",        
        "shipping"      => "出貨進度：已出貨",
        "company_info"  => "廠商聯絡資訊",
    ),
    array(
        "name"          => "商品名稱",
        "images"        => "../c/img/sth_asap/sample/item_01.jpg",
        "url"           => "../front/item.php",        
        "type"          => "gray",
        "tab"           => "廠商直送",
        "quantity"      => "1",
        "price"         => "5599",        
        "shipping"      => "出貨進度：已出貨",
        "company_info"  => "廠商聯絡資訊",
    ),
    array(
        "name"          => "商品名稱",
        "images"        => "../c/img/sth_asap/sample/item_01.jpg",
        "url"           => "../front/item.php",        
        "type"          => "red",
        "tab"           => "uitox運送",
        "quantity"      => "1",
        "price"         => "4,500",        
        "shipping"      => "出貨進度",
        "company_info"  => "廠商聯絡資訊",
    ),
    array(
        "name"          => "商品名稱",
        "images"        => "../c/img/sth_asap/sample/item_01.jpg",
        "url"           => "../front/item.php",        
        "type"          => "gray",
        "tab"           => "廠商直送",
        "quantity"      => "2",
        "price"         => "1599",        
        "shipping"      => "出貨進度",
        "company_info"  => "廠商聯絡資訊",
    ),
);

$cart_items = array(
    array(
        "name"      => "商品名稱-帶加購品",
        "images"    => "../c/img/sth_asap/sample/item_01.jpg",
        "url"       => "../front/item.php",
        "price"     => "599",
        "type"      => "add",
        "tab"       => "大材積",
        "sale"      => true,
    ),
    array(
        "name"      => "商品名稱-帶贈品",
        "images"    => "../c/img/sth_asap/sample/item_02.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "gift",
        "tab"       => "uitox運送",
    ),
    array(
        "name"      => "組合商品包",
        "images"    => "../c/img/sth_asap/sample/item_03.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "combo",
        "tab"       => "廠商直送",
    ),
    array(
        "name"      => "商品名稱-分開到貨(不懂@_@)",
        "images"    => "../c/img/sth_asap/sample/item_04.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
        "tab"       => "分開到貨",
    ),
    array(
        "name"      => "商品名稱-限購",
        "images"    => "../c/img/sth_asap/sample/item_05.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
        "tab"       => "限購",
    ),
);

?>