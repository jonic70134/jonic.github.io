<?php
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "seagame";
}

$site_ad_top = "../c/img/sth_seagame/top_ad.jpg";

$rwd_index_001 = array(
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_seagame/1220x530-1.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_seagame/1220x530-2.jpg",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖1",
        "images"    => "../c/img/sth_seagame/1220x530-1.jpg",
        "url"       => "item.php",
    ),
);

$rwd_index_008_1 = array(
    array(
        "name"      => "輪播圖1",
        "images"    => "http://placehold.it/820x500",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖2",
        "images"    => "http://placehold.it/820x500",
        "url"       => "item.php",
    ),
    array(
        "name"      => "輪播圖3",
        "images"    => "http://placehold.it/820x500",
        "url"       => "item.php",
    ),
);

$rwd_index_008_2 = array(
    array(
        "name"      => "右側圖1",
        "images"    => "http://placehold.it/380x150",
        "url"       => "item.php",
    ),
    array(
        "name"      => "右側圖2",
        "images"    => "http://placehold.it/380x150",
        "url"       => "item.php",
    ),
    array(
        "name"      => "右側圖3",
        "images"    => "http://placehold.it/380x150",
        "url"       => "item.php",
    ),
);

$itemss = array(
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/230x230-1.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/230x230-2.jpg",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/230x230-1.jpg",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/230x230-2.jpg",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
);

$category_items = array(
    array(
        "name"      => "商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱",
        "images"    => "http://placehold.it/300x300",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder", //立刻預訂
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder-finish", //預購結束
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-rush", //立即搶購
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-rush-finish", //搶購一空
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-discount", //買立折
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-soldout-stock", //售完，補貨中
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-soldout", //已售完
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-to-sale", //即將開賣
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-select", //請選擇尺寸
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱9",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-addcart", //加入購物車
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
);

$rwd_index_002 = array(
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/350x300.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/350x300.jpg",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
);

$rwd_index_003 = array(
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/350x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "../c/img/sth_seagame/350x500.jpg",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
);

$rwd_index_009_title = "標題";
$rwd_index_004_title = "標題";
$rwd_index_006_title = "標題";
$rwd_index_007_title = "標題";

$rwd_index_006 = array(
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
);

$rwd_index_007 = array(
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/300x300",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
    ),
);

$rwd_index_009 = array(
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
        ),
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/220x220",
        "images-full"    => "http://placehold.it/600x600",
        "url"       => "../front/item.php",
        "price"     => "8,888",
        "stock"     => true,
        "type"      => "btn-preorder",
        "desc"      => "商品描述商品描述商品描述商品描述",
        "feature"   => array(
            "特色1特色1特色1特色1特色1",
            "特色2特色2特色2特色2特色2",
            "特色3特色3特色3特色3特色3",
        ),
        "gift"   => array(
            "贈品1",
            "贈品2",
            "贈品3",
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

$cart_items = array(
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/60x60",
        "url"       => "../front/item.php",
        "price"     => "9999999.99",
        "type"      => "add",
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/60x60",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
    ),
    array(
        "name"      => "組合商品包",
        "images"    => "http://placehold.it/60x60",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "combo",
    ),
    array(
        "name"      => "商品名稱",
        "images"    => "http://placehold.it/60x60",
        "url"       => "../front/item.php",
        "price"     => "4,500",
        "type"      => "",
    ),
);

$recommends = array(
    "goods",
    "goods",
    "goods",
);

?>