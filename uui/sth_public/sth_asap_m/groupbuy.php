<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="md";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_md_header_001.php";?>
        <div class="site-body">
            <article class="site-main">
                <div class="md-groupbuy-top-banner"><img src="../c/img/frame/1200x400.jpg" alt=""></div>
                <div class="md-top-menu">
                    <ul>
                        <li class="top">
                            <a href="#">團購分類</a>
                            <ul class="sec-menu">
                                    <li><a href="#">手機(9999)</a></li>
                                    <li><a href="#">電腦</a></li>
                                    <li><a href="#">筆電</a></li>
                                    <li><a href="#">手機(9999)</a></li>
                                    <li><a href="#">電腦</a></li>
                                    <li><a href="#">筆電</a></li>
                                    <li><a href="#">手機(9999)</a></li>
                                    <li><a href="#">電腦</a></li>
                                    <li><a href="#">筆電</a></li>
                                    <li><a href="#">手機(9999)</a></li>
                                    <li><a href="#">電腦</a></li>
                                    <li><a href="#">筆電</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="sec active">價差最大</a></li>
                        <li><a href="#" class="sec">即將結束</a></li>
                        <li><a href="#" class="sec">熱賣暢銷</a></li>
                        <li><a href="#" class="sec">最新上架</a></li>
                    </ul>
                </div>

                <div class="infinite-scroll">
                    <div class="items">
                            <figure class="md-list-item" itemscope="" itemtype="http://schema.org/Product">
                                <a href="item.php" itemprop="offerURL" class="photo photo-lazyload">
                                    <div class="groupbuy is-hot">熱銷破千</div>
                                    <img data-src="../c/img/sth_asap_m/sample/item-tiny.jpg" data-src-retina="../c/img/sth_asap_m/sample/item.jpg" class="img-item img-lazyload" alt="衣物柔軟精補充包1840cc防止衣物產生靜電&amp;縐摺" src="../c/img/sth_asap_m/sample/item.jpg" style="opacity: 1;">
                                    <div class="discount_tip"></div>
                                </a>

                                <figcaption class="info">
                                    <p class="name" itemprop="name">
                                        <a href="item.php" itemprop="offerURL">衣物柔軟精補充包1840cc防止衣物產生靜電&amp;縐摺</a>
                                    </p>
                                    <div class="sale">
                                        <p><b>倒數：</b><span class="time">23:59:59</span></p>
                                    </div>
                                    <div class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span>
                                        <span itemprop="lowPrice" content="59" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>59<span class="start">起</span></span>
                                        <button class="btn-buy" onclick="location.href='item.php'" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>
                                    </div>
                                </figcaption>               
                           </figure>

                           <figure class="md-list-item" itemscope="" itemtype="http://schema.org/Product">
                                <a href="item.php" itemprop="offerURL" class="photo photo-lazyload">
                                    <div class="groupbuy is-fast">2hr 火速到貨</div>
                                    <img data-src="../c/img/sth_asap_m/sample/item-tiny.jpg" data-src-retina="../c/img/sth_asap_m/sample/item.jpg" class="img-item img-lazyload" alt="衣物柔軟精補充包1840cc防止衣物產生靜電&amp;縐摺" src="../c/img/sth_asap_m/sample/item.jpg" style="opacity: 1;">
                                    <div class="discount_tip"></div>
                                </a>

                                <figcaption class="info">
                                    <p class="name" itemprop="name">
                                        <a href="item.php" itemprop="offerURL">衣物柔軟精補充包1840cc防止衣物產生靜電&amp;縐摺</a>
                                    </p>
                                    <div class="sale">
                                        <p><b>即將結束</b></p>
                                    </div>
                                    <div class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                        <span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span>
                                        <span itemprop="lowPrice" content="59" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>59</span>
                                        <button class="btn-buy" onclick="location.href='item.php'" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>
                                    </div>
                                </figcaption>               
                           </figure>
                    </div>
                    <a href="category2.php" data-loading-msg="讀取更多商品..." data-finished-msg="沒有商品了" class="infinite-next-page"></a>
                </div>
            </article>
        <?php include "../module_footer/_md_footer_001.php";?>
        <?php include "../module_footer/_md_copyright_001.php";?>
        <?php include "../module_component/_md_nav_top.php";?>
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>