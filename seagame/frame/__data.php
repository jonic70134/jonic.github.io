<?php
//顯示後臺編輯區塊
if((isset($_GET['edit'])) && $_GET['edit']=="true") {
    $edit = $_GET['edit'];
}else{
    $edit = "";
}
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "gray";
}

$slide = array(
    array(
        "name"      => "slide photo",
        "images"    => "../c/img/sample/1220x550-01.jpg",
        "url"       => "../front/item.php",
    ),
    array(
        "name"      => "slide photo",
        "images"    => "../c/img/sample/1220x550-02.jpg",
        "url"       => "../front/item.php",
    ),
    array(
        "name"      => "slide photo",
        "images"    => "../c/img/sample/1220x550-01.jpg",
        "url"       => "../front/item.php",
    ),
    array(
        "name"      => "slide photo",
        "images"    => "../c/img/sample/1220x550-02.jpg",
        "url"       => "../front/item.php",
    ),
    array(
        "name"      => "slide photo",
        "images"    => "../c/img/sample/1220x550-01.jpg",
        "url"       => "../front/item.php",
    ),
);

// $slide = array(
//     array(
//         "name"      => "slide photo",
//         "images"    => "http://placehold.it/1220x550",
//         "url"       => "../front/item.php",
//     ),
//     array(
//         "name"      => "slide photo",
//         "images"    => "http://placehold.it/1220x550",
//         "url"       => "../front/item.php",
//     ),
//     array(
//         "name"      => "slide photo",
//         "images"    => "http://placehold.it/1220x550",
//         "url"       => "../front/item.php",
//     ),
//     array(
//         "name"      => "slide photo",
//         "images"    => "http://placehold.it/1220x550",
//         "url"       => "../front/item.php",
//     ),
// );

$products = array(
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/600x600/T-Shirt-White-500x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/600x600/Jersey-White-500x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,000",
        "stock"     => true,
        "type"      => "btn-addcart",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/600x600/Mugs-01-Black-500x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,200",
        "stock"     => true,
        "type"      => "to-stock",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/600x600/Jersey-White-500x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "stock"     => false,
        "type"      => "btn-discount",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/600x600/T-Shirt-White-500x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "stock"     => false,
        "type"      => "to-sale",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
);

$products01 = array(
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/350x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/350x500_2.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,000",
        "stock"     => true,
        "type"      => "btn-addcart",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
);

$products02 = array(
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/350x300.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/350x300_2.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,000",
        "stock"     => true,
        "type"      => "btn-addcart",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
);

$products03 = array(
    array(
        "name"      => "Charms - Basketball",
        "images"    => "../c/img/sample/220x220/Charms-06.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "Charms - On Target",
        "images"    => "../c/img/sample/220x220/Charms-10.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,000",
        "stock"     => true,
        "type"      => "btn-addcart",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "Charms - Soccer Ball",
        "images"    => "../c/img/sample/220x220/Charms-03.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,990",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
    array(
        "name"      => "Charms - Gloves",
        "images"    => "../c/img/sample/350x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,000",
        "stock"     => true,
        "type"      => "btn-addcart",
        "desc"      => "支援雙SIM卡‧Zen UI操作介面",
    ),
);

$product_color = array(
    array(
        "name"      => "白色",
        "url"       => "../c/img/sample/color_01.jpg",
    ),
    array(
        "name"      => "粉紅色",
        "url"       => "../c/img/sample/color_02.jpg",
    ),
    array(
        "name"      => "黃色",
        "url"       => "../c/img/sample/color_03.jpg",
    ),
    array(
        "name"      => "紫色",
        "url"       => "../c/img/sample/color_04.jpg",
    ),
    array(
        "name"      => "媚綠色",
        "url"       => "../c/img/sample/color_05.jpg",
    ),
);

$cart_products = array(
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/Charms-01.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,5000.00",
        "type"      => "add",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/Charms-02.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/Charms-03.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "combo",
    ),
    array(
        "name"      => "100-Days-to-Go Collar Pin",
        "images"    => "../c/img/sample/Charms-01.jpg",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
    ),
);

$product_accessories = array(
    array(
        "name"      => "Charms",
        "images"       => "../c/img/sample/220x220/Charms-07.jpg",
        "price"     => "1,190",
    ),
    array(
        "name"      => "Charms",
        "images"       => "../c/img/sample/220x220/Nila-500x500.jpg",
        "price"     => "690",
    ),
    array(
        "name"      => "Charms",
        "images"       => "../c/img/sample/220x220/Mugs-01-Black-500x500.jpg",
        "price"     => "990",
    ),
    array(
        "name"      => "Charms",
        "images"       => "../c/img/sample/220x220/Charms-09.jpg",
        "price"     => "399",
    ),
    array(
        "name"      => "Charms",
        "images"       => "../c/img/sample/220x220/Polo-Singapore-Red-500x500.jpg",
        "price"     => "399",
    ),
);

$store = array(
    array(
        "name"      => "SG",
        "images"       => "../c/img/sample/180x60/SG-180x60.jpg",
    ),
    array(
        "name"      => "MY",
        "images"       => "../c/img/sample/180x60/MY-180x60.jpg",
    ),
    array(
        "name"      => "PH",
        "images"       => "../c/img/sample/180x60/PH-180x60.jpg",
    ),
    array(
        "name"      => "TH",
        "images"       => "../c/img/sample/180x60/TH-180x60.jpg",
    ),
    array(
        "name"      => "VT",
        "images"       => "../c/img/sample/180x60/VT-180x60.jpg",
    ),
    array(
        "name"      => "MORE",
        "images"       => "../c/img/sample/180x60/More-180x60.jpg",
    ),
);

?>