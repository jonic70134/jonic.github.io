<?php
    include "../frame/__config.php";
    include "../frame/__data.php";

    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/frame.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/item.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/colorsize.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/ie8.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $_GET['siteName'] . '/default/main/color_' . $color . '.css"/>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css"/>';
?>
<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="../c/css/front/sth_asap/default/main/ie8.css"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"/></script>
    <script src="../c/js/3rd-party/respond.js"/></script>
<![endif]-->
<div class="site-main" id="item_main">
    <div class="md-item-main">
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
                        <span class="currency">NT$</span><span itemprop="price" class="price">99999.99</span>
                    </div>
                </div>
                <div class="line buy_button">
                    <div class="quantity" id="quantity">
                        <span class="quantity-decrease" item_type="cart" kind="0">-</span>
                        <input name="car_qty" class="quantity-input" value="1" max="3" tips="0">
                        <span class="quantity-increase" item_type="cart" kind="1">+</span>
                    </div>
                    <button itemprop="offerurl" class="button large btn-addcart" id="item_add_cart">加入購物車</button>
                    <div id="tips_alert" style="display: none;">請選擇尺寸</div>
                    <div class="highlight" id="sale_tips" style="display: inline-block;"></div>
                    <p id="reason" class="button btn-to-sale" style="display: none;">即將開賣</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<?php //呼叫逼逼鳥?>
<div id="fancybox-call-best-price" class="fancybox-call-best-price">
    <h1 class="title">呼叫嗶嗶鳥省錢通知我</h1>
    <div class="block">
        <div class="line-table">
            <div class="row">
                <div class="key">比價商品：</div>
                <div class="value">
                    【CITIZEN】星辰施華洛世奇晶鑽簡約石英錶- 中金 / EU6034-55E
                </div>
            </div>
            <div class="row">
                <div class="key">Email：</div>
                <div class="value">
                    <input type="text" class="quantity-input" value="lee12458@gmail.com">
                    <p class="f-c-info">(完成比價後便宜會通知您)</p>
                </div>
            </div>
        </div>
        <div class="actions">
            <a class="button submit large" itemprop="offerurl" href="javascript:void(0);">確定</a>
        </div>
    </div>
</div>

<!-- 比價逼逼鳥 -->
<div id="fancybox-compare-best-price" class="fancybox-compare-best-price">
    <h1 class="title">比價嗶嗶鳥</h1>
    <div class="block">
        <h1>已跟台灣六家購物平台完成比價</h1>
        <div class="line-table">
            <div class="row">
                <div class="key"><span class="win-icon">勝</span></div>
                <div class="value">ASAP購物金價</div>
                <div class="value">980元</div>
            </div>
            <div class="row">
                <div class="key">&nbsp;</div>
                <div class="value">他網最低價</div>
                <div class="value">1080元</div>
            </div>
        </div>
        <p class="f-c-info">
            最新比價時間： <span class="f-c-price">20170418 12:30</span>
        </p>
        <div class="actions">
            <a class="button submit large" itemprop="offerurl" href="javascript:void(0);">確定</a>
        </div>
    </div>
</div>

<!-- 多規部分 -->
<div id="fancybox-item-size" class="fancybox-inner fancybox-item-size items">
    <!-- 多規 選擇規格-->
    <h2 class="item-size-title">選擇規格/顏色</h2>
    <div itemscope="" itemtype="http://data-vocabulary.org/Product" class="item is-multi">
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk1">
                    <label class="chk_label" for="chk1">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk2">
                    <label class="chk_label" for="chk2">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk3">
                    <label class="chk_label" for="chk3">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk4">
                    <label class="chk_label" for="chk4">選擇加入</label>
                </div>
            </div>
        </div>

        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <input class="chk_box" type="checkbox" id="chk5">
                    <label class="chk_label" for="chk5">選擇加入</label>
                </div>
            </div>
        </div>
        <div class="itembox">
            <p href="item.php" class="photo" itemprop="offerurl">
                <span class="floating"></span>
                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" title="【日本直購】Iwatani 岩古桌上超薄美型瓦斯爐" itemprop="image">
            </p>
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
                <div class="md-item-buy">
                    <p class="chk_soldout">售完補貨中</p>
                </div>
            </div>
        </div>
    </div>
    <!-- popup up 置底按鈕 -->
    <div class="additems">
        <button class="addcart">加入購物車</button>
        <button class="chkout">立即結帳</button>
    </div>
</div>


<!-- 贈品小視窗 -->
<div id="fancybox-item-gift" class="fancybox-inner fancybox-item-size fancybox-item-gift">
    <h2 class="item-size-title">贈品(999)</h2>
    <div itemscope="" itemtype="http://data-vocabulary.org/Product" class="item">
        <div class="itembox">
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
            </div>
        </div>
        <div class="itembox">
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
            </div>
        </div>
        <div class="itembox">
            <div class="info">
                <h3 itemprop="name" class="name">台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)台塩海洋鹼性離子水台塩海洋鹼性離子水 (850mlx20瓶/箱) (850mlx20瓶/箱)</h3>
            </div>
        </div>
    </div>
</div>


<!-- 選擇加購品小視窗 -->
<div id="fancybox-item-alert" class="fancybox-inner fancybox-item-alert">
    <p>請選擇您要的味道 / 顏色</p>
    <button class="btn-quantity large" onClick="$.fancybox.close();">OK</button>
</div>

<!-- 退換貨說明 -->
<div class="warranty" id="warranty">
    <div class="spec">
        <h3 class="key ga_tracking">寄送與聯絡資訊<i class="fa fa-angle-double-right"></i></h3>
        <div class="content">
            <p>配寄送時間：</p>
            <p>因商品由不同的地方發貨，請參照商品頁上備註之“預計到貨時間”或“出貨地”標籤。</p>
            <p>•「北北桃6h 全台24h」（試營運）-於週一~五上班日09:00~14:00間成立並完成付款之訂單，可享台北市、新北市、桃園市6小時快速到貨服務；其他地區則為24小時到貨。</p>
            <p>•「全台24h」- 全台灣24小時到貨，週末假日照常出貨。</p>
            <p>•「廠商出貨 約2-7日」或「分開到貨」- 付款完成日起算後7個工作天內送達（大型家電商品以廠商約定時間為準、農曆年節及特定連假期間除外）。&nbsp;&nbsp;</p>
            <p></p>
            <p>送貨範圍：限台灣本島。</p>
        </div>
    </div>
    <div class="spec">
        <h3 class="key ga_tracking">退換貨說明<i class="fa fa-angle-double-right"></i></h3>
        <div id="spec_content" class="content">&nbsp;本地商品: 商品頁上有「北北桃6h 全台24h」、「全台24h」、「廠商出貨 約2-7日」或「分開到貨」標示者，享有七天猶豫期之權益，若收到的商品有任何問題，可於七天內直接退貨。(<a rel="nofollow" target="_blank" href="https://shop-tw1.uitox.com/AW000001/member/terms_page?_ua=428eac9b291c96ed.1436368797.102.1460886087.1460883578.&amp;_ga=1.20995966.497435729.1386347922​"><span class="wysiwyg-color-blue">例外情形-請詳見</span></a><a rel="nofollow" target="_blank" href="https://shop-tw1.uitox.com/AW000001/member/terms_page?_ua=428eac9b291c96ed.1436368797.102.1460886087.1460883578.&amp;_ga=1.20995966.497435729.1386347922​"><span class="wysiwyg-color-blue">使用者條款第８條</span></a><a rel="nofollow" target="_blank" href="https://shop-tw1.uitox.com/AW000001/member/terms_page?_ua=eed7909828067e14.1436341991.167.1453371996.1453370845.&amp;_ga=1.36542560.1992698746.1431671105">)</a><br><p><span>•&nbsp;<span>&nbsp;商品退貨必須是全新且完整包裝（包括且不限於產品、附件、包裝、廠商紙箱及所有附隨文件或資料之完整性），否則將影響退貨權益的行使或需負擔部分費用。<br></span>• &nbsp;<span>恕不提供換貨服務，如需換貨，請先至網站退貨，再重新下單。<br></span>• &nbsp;<span>“ 跨境商品 ” 為本公司專為您向海外訂購之商品，該類商品恕無法提供每件商品之詳細規格，如有不清，歡迎下單前先聯繫客服確認 ； 一經下單，本公司不接受隨意取消訂單或任意退貨，若因商品本身瑕疵問題，請與本公司客服聯絡。<br></span>• &nbsp;</span>貴用戶可隨時於本網站登入會員並連結至「查訂單」查詢訂單相關資料。</p></div></div><div>
    </div>
</div>