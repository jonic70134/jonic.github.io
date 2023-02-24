<?php
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "white";
}

$slides = array(
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap_m/sample/slides_01.jpg",
        "url"       => "category.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap_m/sample/slides_02.jpg",
        "url"       => "category.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_asap_m/sample/slides_01.jpg",
        "url"       => "category.php",
    ),
);

$itemss = array(
    array(
        "name"      => "衣物柔軟精補充包1840cc防止衣物產生靜電&縐摺",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "59",
        "stock"     => true,
        "type"      => "btn-addcart", //加入購物車
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
        "name"      => "春風 拉拉熊三層抽衛生紙 100抽70包",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg", 
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "888",
        "stock"     => true,
        "type"      => "btn-preorder", //立刻預訂
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "ASUS ZenFone 5 A500CG 雙卡雙待 (2G/16G版)",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-discount", //買立折
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone6 16G 4.7吋【贈:6000mAh 行動電源】",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "24,500",
        "stock"     => true,
        "type"      => "btn-rush", //立即搶購
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
        "highlight" => true,
    ),
    array(
        "name"      => "PQI 16G USB3.0 旋轉隨身碟 輕巧迷人 方便攜帶",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "229",
        "stock"     => true,
        "type"      => "btn-select", //請選擇尺寸
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Bosslady嚴選-限時優惠 無鋼圈塑身背心",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "690",
        "stock"     => true,
        "type"      => "btn-rush-finish", //搶購一空
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【SEIKO 】激殺3折起 巴塞隆納競速計時腕錶",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "5,480",
        "stock"     => true,
        "type"      => "btn-preorder-finish", //預購結束
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "269",
        "stock"     => true,
        "type"      => "btn-soldout-stock", //售完，補貨中
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,880",
        "stock"     => true,
        "type"      => "btn-soldout", //已售完
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,680",
        "stock"     => true,
        "type"      => "btn-to-sale", //即將開賣
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "衣物柔軟精補充包1840cc防止衣物產生靜電&縐摺",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "59",
        "stock"     => true,
        "type"      => "btn-addcart", //加入購物車
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
        "name"      => "春風 拉拉熊三層抽衛生紙 100抽70包",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg", 
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "888",
        "stock"     => true,
        "type"      => "btn-preorder", //立刻預訂
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "ASUS ZenFone 5 A500CG 雙卡雙待 (2G/16G版)",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-discount", //買立折
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone6 16G 4.7吋【贈:6000mAh 行動電源】",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "24,500",
        "stock"     => true,
        "type"      => "btn-rush", //立即搶購
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
        "highlight" => true,
    ),
    array(
        "name"      => "PQI 16G USB3.0 旋轉隨身碟 輕巧迷人 方便攜帶",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "229",
        "stock"     => true,
        "type"      => "btn-select", //請選擇尺寸
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Bosslady嚴選-限時優惠 無鋼圈塑身背心",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "690",
        "stock"     => true,
        "type"      => "btn-rush-finish", //搶購一空
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【SEIKO 】激殺3折起 巴塞隆納競速計時腕錶",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "5,480",
        "stock"     => true,
        "type"      => "btn-preorder-finish", //預購結束
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "269",
        "stock"     => true,
        "type"      => "btn-soldout-stock", //售完，補貨中
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,880",
        "stock"     => true,
        "type"      => "btn-soldout", //已售完
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "【PUFII】秋季熱銷品 自訂款素面修身襯衫",
        "images"    => "../c/img/sth_asap_m/sample/item.jpg",
        "images-full"    => "../c/img/sth_asap_m/sample/item@2x.jpg",
        "images-tiny"    => "../c/img/sth_asap_m/sample/item-tiny.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,680",
        "stock"     => true,
        "type"      => "btn-to-sale", //即將開賣
        "desc"      => "5 吋斜角層疊式顯示畫面，給你清晰無邊界的視覺體驗。 精緻膠質機殼手感更輕盈，絕佳手感，經久耐用",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
);

$category_items = $itemss;

$category_pc_items = array(
    array(
        "name"      => "Apple iPhone 6 TD-LTE/TD-SCDMA/GSM 4G手机 金色",
        "images"    => "../c/img/sth_asap_m/sample/category_pc_001.jpg",
        "url"       => "../front/item.php",
        "price"     => "25,680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone 6 TD-LTE/TD-SCDMA/GSM 4G手机 金色",
        "images"    => "../c/img/sth_asap_m/sample/category_pc_002.jpg",
        "url"       => "../front/item.php",
        "price"     => "25,680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone 6 TD-LTE/TD-SCDMA/GSM 4G手机 金色",
        "images"    => "../c/img/sth_asap_m/sample/category_pc_003.jpg",
        "url"       => "../front/item.php",
        "price"     => "25,680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone 6 TD-LTE/TD-SCDMA/GSM 4G手机 金色",
        "images"    => "../c/img/sth_asap_m/sample/category_pc_001.jpg",
        "url"       => "../front/item.php",
        "price"     => "25,680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Apple iPhone 6 TD-LTE/TD-SCDMA/GSM 4G手机 金色",
        "images"    => "../c/img/sth_asap_m/sample/category_pc_001.jpg",
        "url"       => "../front/item.php",
        "price"     => "25,680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),

);

$category_food_items = array(
    array(
        "name"      => "嘉顿 香葱薄饼 225g/盒",
        "images"    => "../c/img/sth_asap_m/sample/category_food_001.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "巴拿米 蔓越莓西饼 170g/袋",
        "images"    => "../c/img/sth_asap_m/sample/category_food_002.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "雀巢 脆脆鲨 威化巧克力（巧克力味夹心）20g*24/盒",
        "images"    => "../c/img/sth_asap_m/sample/category_food_003.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Loacker莱家 粒粒装威化 提拉米苏味 220g 奥地利进口",
        "images"    => "../c/img/sth_asap_m/sample/category_food_004.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Viviga味倍加 炼乳干酪饼干 600g 菲律宾进口",
        "images"    => "../c/img/sth_asap_m/sample/category_food_005.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
);

$category_skin_items = array(
    array(
        "name"      => "Cetaphil 丝塔芙洁面乳118ml双支装套装",
        "images"    => "../c/img/sth_asap_m/sample/category_skin_001.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Lancome 兰蔻 清滢柔肤水 400ml",
        "images"    => "../c/img/sth_asap_m/sample/category_skin_002.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "L'OCCITANE 欧舒丹 蜡菊活颜精华霜 50ml 法国进口",
        "images"    => "../c/img/sth_asap_m/sample/category_skin_003.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Borghese 贝佳斯 矿物营养泥浆膜 绿泥 430ml",
        "images"    => "../c/img/sth_asap_m/sample/category_skin_004.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
    array(
        "name"      => "Mentholatum曼秀雷敦纯天然植物润唇膏 香橙 4g X 2",
        "images"    => "../c/img/sth_asap_m/sample/category_food_005.jpg",
        "url"       => "../front/item.php",
        "price"     => "680",
        "stock"     => true,
        "type"      => "",
        "desc"      => "",
        "feature"   => array(
            "新渴望8系，荣耀回归",
            "震撼视界",
            "旗舰风尚 潮我看",
        ),
    ),
);

$items_color = array(
    array(
        "name"      => "白色",
        "url"       => "../c/img/sth001/sample/color_01.jpg",
    ),
    array(
        "name"      => "粉紅色",
        "url"       => "../c/img/sth001/sample/color_02.jpg",
    ),
    array(
        "name"      => "黃色",
        "url"       => "../c/img/sth001/sample/color_03.jpg",
    ),
    array(
        "name"      => "紫色",
        "url"       => "../c/img/sth001/sample/color_04.jpg",
    ),
    array(
        "name"      => "媚綠色",
        "url"       => "../c/img/sth001/sample/color_05.jpg",
    ),
);

$recommends = array(
    "熱銷電暖器",
    "綠膳纖",
    "iPhone 6",
    "冬季保暖必備",
    "rimowa",
);
?>