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
        <?php include "../module_component/_pc_nav_menu_001.php";?><!-- meau -->
        <?php include "../module_index/_pc_index_002.php";?><!-- 輪播廣告 -->
        <div class="site-body">
            <article class="site-main">
                <!-- ?php include "../module_index/_pc_index_013.php";? -->
                <!-- <?php include "../module_index/_pc_index_012.php";?> -->
                <?php include "../module_index/_pc_index_003.php";?><!-- 頁籤 8page -->
                <!-- <?php include "../module_index/_pc_index_012.php";?>
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_index/_pc_index_010.php";?>                
                <?php }else if($index_m=='true'){//模組11?>
                <?php include "../module_index/_pc_index_011.php";?>
                <?php }else{//一般?>
                -->
                
                <?php }?>
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 --> 
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 -->
                <?php include "../module_index/_pc_index_016.php";?><!-- 只有title -->
                <?php include "../module_index/_pc_index_017.php";?><!-- 016 的內容 --> 
                <?php include "../module_index/_pc_index_007.php";?>
                <!-- <?php include "../module_index/_pc_index_006.php";?> --><!-- 廣告 -->
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