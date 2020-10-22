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
            <aside class="site-left">
            <?php include "../module_left/_pc_left_015.php"; ?>
            <?php include "../module_left/_pc_left_016.php"; ?>
            <?php include "../module_left/_pc_left_017.php"; ?>
            <?php include "../module_left/_pc_left_012.php"; ?>
            </aside>
            <article class="site-main">
                <?php include "../module_component/_nav_breadcrumbs.php";?>
                
                <?php include "../module_category/_pc_category_banner_carousel.php";?>
                <?php include "../module_category/_pc_category_1big_6small_list.php";?>
                <?php include "../module_category/_pc_category_limited_sale_list.php";?>
                <?php include "../module_category/_pc_category_hot_products_3list.php";?>
                <?php include "../module_category/_pc_category_products_list.php";?>
                
                <?php include "../module_component/_nav_pagination.php";?>          
            </article>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
        <?php include "../module_component/_site_translation_03.php";?>
        <div class="nav-to-top">
            <i class="fa fa-angle-double-up"></i>
        </div>
        <?php include "../module_footer/_pc_footer_001.php";?>
        <?php include "../module_footer/_pc_copyright_001.php";?>
    </div>
    <?php include "../frame/__pc_js_library.php";?>
</body>
</html>