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
                <?php include "../module_left/_pc_left_006.php";?>
            </aside>
            <article class="site-main">
                <?php include "../module_component/_pc_site_search_answer.php";?>
                <?php include "../module_component/_pc_site_search_btn_switching.php";?>
                <?php include "../module_component/_pc_site_filter.php";?>                
                <?php include "../module_component/_pc_site_sort.php";?>
                <h1 class="result">很抱歉，搜尋不到相關的商品及資訊！</h1>
                <?php include "../module_component/_pc_category_list.php";?>
                <?php include "../module_component/_pc_nav_pagination.php";?>
                <?php include "../module_component/_pc_title.php";?>
                <?php include "../module_category/_pc_category_list_five.php";?>
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