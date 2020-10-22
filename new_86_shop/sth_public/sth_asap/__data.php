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
        "images"    => "http://img04-tw1.uitoximg.com/A/edm/2016/11/22/201611A22000003/201611A22000003_148350241558352.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "http://img02-tw1.uitoximg.com/A/edm/2017/01/04/201701A04000001/201701A04000001_148350287388828.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/800x360",
        "url"       => "item.php",
    ),
);

$itemss = array(
    array(
        "add_id"    => "add_01",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap/sample/item_10.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,680",
        "stock"     => true,
        "type"      => "btn-addbuy", //搶購
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
        "bird_type" => "best",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_02",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫",
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
        "bird_type" => "best",
        "bird"      => "找不到更低",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_03",
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
        "bird_type" => "best",
        "bird"      => "低別家75%",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_04",
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
        "bird_type" => "call",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-call-best-price",
    ),
    array(
        "add_id"    => "add_05",
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
        "bird_type" => "call",
        "bird"      => "3天退差價",
        "bird_url"  => "#fancybox-call-best-price",
    ),
    array(
        "add_id"    => "add_06",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫",
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
        "bird_type" => "best",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_07",
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
        "bird_type" => "best",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_08",
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
        "bird_type" => "best",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
    array(
        "add_id"    => "add_09",
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
        "bird_type" => "call",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-call-best-price",
    ),
    array(
        "add_id"    => "add_10",
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
        "bird_type" => "call",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-call-best-price",
    ),
    array(
        "add_id"    => "add_11",
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 ",
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
        "bird_type" => "best",
        "bird"      => "低別家1000",
        "bird_url"  => "#fancybox-compare-best-price",
    ),
);

$pc_category_001 = "../c/img/sth_asap/sample/market_ad.jpg";
$category_items = $itemss;

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
    "../c/img/sth_asap/sample/market_ad_02.jpg",
    "../c/img/sth_asap/sample/market_ad_03.jpg",
    "../c/img/sth_asap/sample/market_ad_04.jpg",
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

$list_type = array(
    "computer" => array(
        "平板/周邊",
        "桌上電腦",
        "DIY電腦",
        "電腦螢幕",
        "零組件",
        "硬碟/卡碟",
        "耳麥/喇叭",
        "印表機/耗材",
        "鍵鼠/線材",
        "USB小物",
    ),
    "cellphone" => array(
        "熱門相機",
        "品牌手機",
        "藍牙/傳輸",
        "保貼/殼套",
        "行動電源",
        "耳機/喇叭",
        "智慧穿戴",
        "數位/類單",
        "相機週邊",
        "雲動攝影機",
    ),
    "appliances" => array(
        "季節家電",
        "廚房家電",
        "生活/小家電",
        "健康/美容",
        "電視",
        "電玩",
        "大型家電",
        "視聽影音",
        "通訊電話",
        "電源/電池",
    ),
    "daily_life" => array(
        "日用/衛生",
        "紙尿褲",
        "濕紙巾",
        "居家清潔",
        "抗菌/除濕",
        "衣物清潔",
        "洗髮/美髮",
        "沐浴/美體",
        "口腔修容",
        "醫療保健",
    ),
    "food" => array(
        "水/飲料",
        "零食/餅乾",
        "咖啡/茶飲",
        "蛋糕/甜點",
        "冷凍/生鮮",
        "米油食材",
        "罐頭/料理包",
        "保健食品",
        "人氣特產",
        "進口食品",
    ),
);


















?>