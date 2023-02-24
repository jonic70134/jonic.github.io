<?php
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "red";
}
$site_ad_top = "../c/img/sth_asap/sample/site_ad_top.png";

$slides = array(
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap/sample/slides_01.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap/sample/slides_02.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/600x360",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap/sample/slides_01.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap/sample/slides_02.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/600x360",
        "url"       => "item.php",
    ),

);

$items = array(
    array(
        "add_id"    => "add_01",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap/sample/item_10.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,680",
        "stock"     => true,
        "type"      => "btn-addcart", //加入購物車
        "tab"       => "廠商出貨 約2-7日",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
        "gift"   => array(
            "薯條小兔公仔",
        ),
    ),
    array(
        "add_id"    => "add_02",
        "name"      => "衣物柔軟精補充包1840cc防止衣物產生靜電&縐摺",
        "images"    => "../c/img/sth_asap/sample/item_01.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "59",
        "stock"     => true,
        "type"      => "btn-preorder", //立刻預訂
        "tab"       => "北市5h 全台24h",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
        "gift"   => array(
            "薯條小兔公仔",
        ),
    ),
    array(
        "add_id"    => "add_03",
        "name"      => "PQI 16G USB3.0 旋轉隨身碟 輕巧迷人 方便攜帶",
        "images"    => "../c/img/sth_asap/sample/item_05.jpg",
        "url"       => "../front/item.php",
        "price"     => "229",
        "stock"     => true,
        "type"      => "btn-discount", //買立折
        "tab"       => "日本直送",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_04",
        "name"      => "ASUS ZenFone 5 A500CG 雙卡雙待 (2G/16G版)",
        "images"    => "../c/img/sth_asap/sample/item_03.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-rush", //立即搶購
        "tab"       => "廠商出貨 約2-7日",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_05",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap/sample/item_09.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,880",
        "stock"     => true,
        "type"      => "btn-select", //請選擇尺寸
        "tab"       => "分開到貨",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_06",
        "name"      => "Apple iPhone6 16G 4.7吋【贈:6000mAh 行動電源】",
        "images"    => "../c/img/sth_asap/sample/item_04.jpg",
        "url"       => "../front/item.php",
        "price"     => "24,500",
        "stock"     => true,
        "type"      => "btn-rush-finish", //搶購一空
        "tab"       => "日本直送",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_07",
        "name"      => "春風 拉拉熊三層抽衛生紙 100抽70包",
        "images"    => "../c/img/sth_asap/sample/item_02.jpg", 
        "url"       => "../front/item.php",
        "price"     => "888",
        "stock"     => true,
        "type"      => "btn-preorder-finish", //預購結束
        "tab"       => "北市5h 全台24h",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_08",
        "name"      => "Bosslady嚴選-限時優惠 無鋼圈塑身背心",
        "images"    => "../c/img/sth_asap/sample/item_06.jpg",
        "url"       => "../front/item.php",
        "price"     => "690",
        "stock"     => true,
        "type"      => "btn-soldout-stock", //售完，補貨中
        "tab"       => "分開到貨",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_09",
        "name"      => "【SEIKO 】激殺3折起 巴塞隆納競速計時腕錶",
        "images"    => "../c/img/sth_asap/sample/item_07.jpg",
        "url"       => "../front/item.php",
        "price"     => "5,480",
        "stock"     => true,
        "type"      => "btn-soldout", //已售完
        "tab"       => "日本直送",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "add_id"    => "add_10",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap/sample/item_08.jpg",
        "url"       => "../front/item.php",
        "price"     => "269",
        "stock"     => true,
        "type"      => "btn-to-sale", //即將開賣
        "tab"       => "廠商出貨 約2-7日",
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
);

$pc_category_001 = "../c/img/sth_asap/sample/market_ad.jpg";
$category_items = $items;

$indexItem_seven = array(
    "../c/img/sth_asap/sample/bank_01.jpg",
    "../c/img/sth_asap/sample/bank_02.jpg",
    "../c/img/sth_asap/sample/bank_03.jpg",
    "../c/img/sth_asap/sample/bank_04.jpg",
    "../c/img/sth_asap/sample/bank_05.jpg",
    "../c/img/sth_asap/sample/bank_06.jpg",
    "../c/img/sth_asap/sample/bank_07.jpg",
);


$pc_market_001 = "../c/img/sth_asap/sample/market_ad.jpg";
$pc_market_002 = array(
    "../c/img/sth_asap/sample/market_ad_05.jpg",
    "../c/img/sth_asap/sample/market_ad_06.jpg",
    "../c/img/sth_asap/sample/market_ad_07.jpg",
    "../c/img/sth_asap/sample/market_ad_03.jpg",
    "../c/img/sth_asap/sample/market_ad_04.jpg",
);

$recommends = array(
    "熱銷電暖器",
    "綠膳纖",
    "iPhone 6",
    "冬季保暖必備",
    "rimowa",
);

$logo = array(
    "images"    => "../c/img/sth_asap/logo_asap.png",
);


















?>