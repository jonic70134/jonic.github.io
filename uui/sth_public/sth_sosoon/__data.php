<?php
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "white";
}
$site_ad_top = "../c/img/sth_sosoon/sample/site_ad_top.png";

$slides = array(
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/800x360",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/800x360",
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
        "name"      => "[Heynature] Moist Tightening BB Cream Black Diamond - 40g(FD)",
        "images"    => "../c/img/sth_asap/sample/item_01.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "59",
        "stock"     => true,
        "type"      => "btn-preorder", //立刻預訂
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
        "gift"   => array(
            "Yadah Twin Angel BB Cream SPF35PA++",
        ),
    ),
    array(
        "name"      => "Wenko Laundry Bag Trio Brown 3 compartments",
        "images"    => "../c/img/sth_sosoon/sample/item_02.jpg", 
        "url"       => "../front/item.php",
        "price"     => "888",
        "stock"     => true,
        "type"      => "btn-preorder-finish", //預購結束
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "[The Body Shop] Tea Tree Oil Care for blemished skin",
        "images"    => "../c/img/sth_sosoon/sample/item_03.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-rush", //立即搶購
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "Sony Micro Vault™ Classic 16GB USB",
        "images"    => "../c/img/sth_sosoon/sample/item_04.jpg",
        "url"       => "../front/item.php",
        "price"     => "24,500",
        "stock"     => true,
        "type"      => "btn-rush-finish", //搶購一空
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "[Sophie la Girafe] Sophie the Giraffe Bathtime Visor",
        "images"    => "../c/img/sth_sosoon/sample/item_05.jpg",
        "url"       => "../front/item.php",
        "price"     => "229",
        "stock"     => true,
        "type"      => "btn-discount", //買立折
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "Adorable Baby Shoes - Pretty Pink Bows",
        "images"    => "../c/img/sth_sosoon/sample/item_06.jpg",
        "url"       => "../front/item.php",
        "price"     => "690",
        "stock"     => true,
        "type"      => "btn-soldout-stock", //售完，補貨中
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "[Bruder] 20060 Roadmax Skid Steer Loader",
        "images"    => "../c/img/sth_sosoon/sample/item_07.jpg",
        "url"       => "../front/item.php",
        "price"     => "5,480",
        "stock"     => true,
        "type"      => "btn-soldout", //已售完
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "Mustela Foam Shampoo for Newborns -150ml",
        "images"    => "../c/img/sth_sosoon/sample/item_08.jpg",
        "url"       => "../front/item.php",
        "price"     => "269",
        "stock"     => true,
        "type"      => "btn-to-sale", //即將開賣
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "[Allo Cotton] Ensiah Lace Peplum Top with Ribbon",
        "images"    => "../c/img/sth_sosoon/sample/item_09.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,880",
        "stock"     => true,
        "type"      => "btn-select", //請選擇尺寸
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
    ),
    array(
        "name"      => "Nivea Deodorant Spray for Women - 150ml -Dry Comfort",
        "images"    => "../c/img/sth_sosoon/sample/item_10.jpg",
        "url"       => "../front/item.php",
        "price"     => "3,680",
        "stock"     => true,
        "type"      => "btn-addcart", //加入購物車
        "desc"      => "Helps fight skin dullness and sagging due to aging ",
        "feature"   => array(
            "Effectively conceals any imperfections on face",
            "Moiturizing, pore tightening and evens out skin tone ",
            "Effectiveness in UV protection",
        ),
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
    "../c/img/sth_sosoon/sample/market_ad_02.jpg",
    "../c/img/sth_sosoon/sample/market_ad_03.jpg",
    "../c/img/sth_sosoon/sample/market_ad_04.jpg",
    "../c/img/sth_sosoon/sample/market_ad_03.jpg",
    "../c/img/sth_sosoon/sample/market_ad_04.jpg",
);

$recommends = array(
    "SD Card",
    "power bank",
    "iPhone 6",
    "BB cream",
    "rimowa",
);

$logo = array(
    "images"    => "../c/img/sth_sosoon/logo_sosoon.png",
)

?>