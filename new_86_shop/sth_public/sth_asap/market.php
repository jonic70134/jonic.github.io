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
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_left/_pc_left_008.php";?>
                <?php }else{//一般?>
                <?php include "../module_left/_pc_left_014.php";?>
                <?php }?>
                <?php include "../module_left/_pc_left_004.php";?>
            </aside>
            
            <article class="site-main">
                <?php include "../module_component/_nav_breadcrumbs.php";?>
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_market/_pc_market_006.php";?>
                <?php }?>
                <?php include "../module_market/_pc_market_001.php";?>
                <?php include "../module_market/_pc_market_002.php";?>
                <?php include "../module_market/_pc_market_003.php";?>
                <?php include "../module_market/_pc_market_004.php";?>
                <?php include "../module_market/_pc_market_005.php";?>
                <?php include "../module_market/_pc_market_list.php";?>
                <?php include "../module_market/_pc_market_list_002.php";?>
            </article>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
        <div class="nav-to-top">
            <i class="fa fa-angle-double-up"></i>
        </div>
        <?php include "../module_footer/_pc_footer_001.php";?>
        <?php include "../module_footer/_pc_copyright_001.php";?>
    </div>
    <?php include "../frame/__pc_js_library.php";?>
</body>
</html>