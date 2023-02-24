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

            <aside class="site-left">
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_left/_pc_left_008.php";?>
                <?php }else{//一般?>
                <?php include "../module_left/_pc_left_002.php";?>
                <?php }?>
                <!-- ?php include "../module_left/_pc_left_004.php";? -->
                <?php include "../module_left/_pc_left_011.php";?><!-- 銷售排名 -->
            </aside>
            
            <div class="site-main">
                <?php include "../module_component/_nav_breadcrumbs.php";?>
                <?php include "../module_item/_pc_item_main.php";?>
                <?php include "../module_item/_pc_item_add.php";?>
                <?php include "../module_item/_pc_item_buy.php";?>
                <?php include "../module_item/_pc_item_detail.php";?>
                <!-- ?php include "../module_item/_pc_item_buy.php";? -->
                <!-- ?php include "../module_item/_pc_item_spec.php";? -->
                <?php include "../module_item/_pc_item_buy.php";?>
                <?php include "../module_item/_pc_item_related.php";?><!-- 相關商品 -->
                <?php include "../module_item/_pc_item_history.php";?><!-- 瀏覽過的商品 -->
            </div>
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
