<?php
    include "../frame/__config.php";
    include "../frame/__data.php";

    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/frame.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/item.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/colorsize.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/color_' . $color . '.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css"/>';
?>
<!--[if lt IE 9]>
    <?php echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/ie8.css"/>'?>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"/></script>
    <script src="../c/js/3rd-party/respond.js"/></script>
<![endif]-->
<div class="site-main" id="item_main">
    <div class="item-main">
        <div class="container">
            <div itemscope itemtype="http://data-vocabulary.org/Product">
            <div class="photo">
                <!-- <img itemprop="image" src="<?php echo $itemss[$pid]['images'];?>" alt=""/> -->
                <img itemprop="image" src="../c/img/sth_asap/sample/item_10.jpg" alt="">
            </div>
            <div class="info">
                <h1 itemprop="name" class="name">
                    【PUFII】秋季熱銷品 自訂款素面修身襯衫這個名字實在有夠給他又臭又長的哈哈哈哈哈哈哈ggggggXDDDDDD
                    <span class="tag-status is-uitox-delivery">uitox運送</span>
                    <span class="tag-status is-vendor-delivery">廠商直送</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span>                   
                </h1>
                <ul class="feature"></ul>
                <div class="hlight">
                    <div class="line">
                        <div class="key">顏色</div>
                        <ul class="value">
                            <!-- 圖片大小60x60px -->
                            <li itemprop="color" class="img disabled" title="已售完"><i class="fa fa-times-circle"></i><img src="../c/img/sample/color_purple.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_white.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_red.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_green.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img active"><i class="fa fa-check"></i><img src="../c/img/sample/color_orange.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color">顏色文字</li>
                        </ul>
                    </div>
                    <div class="line">
                        <div class="key">規格</div>
                        <ul class="value">
                            <li itemprop="model" class="active"><i class="fa fa-check"></i>11</li>
                            <li itemprop="model" class="disabled" title="已售完"><i class="fa fa-times-circle"></i>12</li>
                            <li itemprop="model" >13</li>
                        </ul>
                    </div>
                </div>
                <div class="line recomand_price">
                    <div class="key">建議售價</div>
                    <div class="value">
                        <del><span itemprop="currency">NT$</span><span itemprop="highPrice">200</span></del>
                    </div>
                </div>
                <div class="line net_price">
                    <div class="key">網路價</div>
                    <div class="buy">
                        <span class="discount-mark">5折</span>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price">99999.99</span>
                    </div>
                </div>
                <!-- <div class="line buy_button">
                    <div class="quantity" id="quantity">
                        <span class="quantity-decrease" item_type="cart" kind="0">-</span>
                        <input name="car_qty" class="quantity-input" value="1" max="3" tips="0">
                        <span class="quantity-increase" item_type="cart" kind="1">+</span>
                    </div>
                    <button itemprop="offerurl" class="button large btn-addcart" id="item_add_cart">加入購物車</button>
                    <div id="tips_alert" style="display: none;">請選擇尺寸</div>
                    <div class="highlight" id="sale_tips" style="display: inline-block;"></div>
                    <p id="reason" class="button btn-to-sale" style="display: none;">即將開賣</p>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="item-buy">
    <div class="container">
            <div id="on_sale">
                <div class="quantity" id="quantity">
                    <span class="quantity-decrease" item_type="cart" kind="0">-</span>
                    <input name="car_qty" class="quantity-input" value="1" max="3" tips="0">
                    <span class="quantity-increase" item_type="cart" kind="1">+</span>
                </div>
                <button itemprop="offerurl" class="button large btn-addcart" id="item_add_cart">加入購物車</button>
            </div>
            <div id="off_sale">
                
            </div>
            <div class="highlight"></div>
    </div>
</div>
</div>