<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="pc";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_component/_site_ad_top.php";?>
        <?php include "../module_header/_pc_header_002.php";?>
        <div class="site-body">
            <div class="groupbuy-top-banner"><img src="../c/img/frame/1200x200.jpg" alt=""/></div>
            <aside class="site-left">
                <?php include "../module_left/_pc_left_001.php";?>
                <?php include "../module_left/_pc_left_012.php";?>
            </aside>
            <article class="site-main">
                <div class="nav-breadcrumbs" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <div class="container">
                        <div class="cate" itemprop="child" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                            <a href="index.php" itemprop="url">
                                <span itemprop="title">首頁</span>
                            </a>
                            &gt; 
                            <span itemprop="title" class="bread-item-name">限時特賣</span>
                        </div>
                    </div>
                </div>
                <div class="site-sort">
                    <div class="container">
                        <ul class="sort">
                            <li><a href="#" class="active">價差最大</a></li>
                            <li><a href="#">即將結束</a></li>
                            <li><a href="#">熱賣暢銷</a></li>
                            <li><a href="#">最新上架</a></li>
                        </ul>
                    </div>
                </div>

                <?php include "../module_category/_pc_groupbuy_products_2list.php";?>
                <?php include "../module_category/_pc_category_products_list.php";?>

             
                <?php include "../module_component/_pc_nav_pagination.php";?>
            </article>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
        <div class="nav-to-top">
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <?php include "../frame/__pc_js_library.php";?>
</body>
</html>