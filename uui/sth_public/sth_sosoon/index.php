<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    include "__config.php";
    $type="sosoon";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter animsition">
        <?php include "../module_component/_site_ad_top.php";?>
        <?php include "../module_header/_pc_header_001.php";?>
        <div class="site-body">
            <aside class="site-left">
                <?php include "../module_left/_pc_left_001.php";?>
                <?php include "../module_left/_pc_left_003.php";?>
                <?php include "../module_left/_pc_left_005.php";?>
            </aside>
            <article class="site-main">
                <?php include "../module_index/_pc_index_001.php";?>
                <?php include "../module_index/_pc_index_008.php";?>
                <?php include "../module_index/_pc_index_003.php";?>
                <?php include "../module_index/_pc_index_009.php";?>
                <?php include "../module_index/_pc_index_004.php";?>
                <?php include "../module_index/_pc_index_009.php";?>
                <?php include "../module_index/_pc_index_005.php";?>
                <?php include "../module_index/_pc_index_009.php";?>
                <?php include "../module_index/_pc_index_004.php";?>
                <?php include "../module_index/_pc_index_009.php";?>
                <?php include "../module_index/_pc_index_005.php";?>
                <?php include "../module_index/_pc_index_009.php";?>
                <?php include "../module_index/_pc_index_007.php";?>
                <?php include "../module_index/_pc_index_006.php";?>
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