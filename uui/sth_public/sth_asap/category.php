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
        <?php include "../module_header/_pc_header_001.php";?>        
        <div class="site-body">
            <aside class="site-left">
                <?php if($imp=='true'){//跨境?>
                <?php include "../module_left/_pc_left_008.php";?>
                <?php }else{//一般?>
                <?php include "../module_left/_pc_left_002.php";?>
                <?php }?>
                <?php include "../module_left/_pc_left_004.php";?>
            </aside>
            <article class="site-main">
                <?php include "../module_component/_nav_breadcrumbs.php";?>
                <?php include "../module_category/_pc_category_001.php";?>
                <?php include "../module_component/_pc_site_filter.php";?>
                <?php include "../module_component/_pc_site_sort.php";?>
                <?php include "../module_category/_pc_category_002.php";?>
                <?php include "../module_category/_pc_category_003.php";?>
                <?php include "../module_category/_pc_category_004.php";?>
                <?php include "../module_category/_pc_category_005.php";?>
                <?php include "../module_component/_pc_category_list.php";?>
                <?php include "../module_component/_pc_category_list_item_list.php";?>
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