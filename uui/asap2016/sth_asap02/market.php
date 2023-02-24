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
        <?php include "../module_header/_pc_header_002.php";?>
        <div class="site-body">
            <?php include "../module_component/_pc_nav_menu_001.php";?><!-- meau -->
            <?php include "../module_component/_pc_nav_menu_item_001.php";?><!-- meau item -->
           
            <article class="site-main">
                <!-- <?php include "../module_component/_nav_breadcrumbs.php";?> -->
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_market/_pc_market_006.php";?>
                <?php }?>
                <?php include "../module_market/_pc_market_007.php";?>
                <?php include "../module_market/_pc_market_008.php";?>
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 -->
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 --> 
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 -->
                <!-- 
                <?php include "../module_market/_pc_market_002.php";?>
                <?php include "../module_market/_pc_market_003.php";?>
                <?php include "../module_market/_pc_market_004.php";?>
                <?php include "../module_market/_pc_market_005.php";?>
                <?php include "../module_market/_pc_market_list.php";?>
                -->
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