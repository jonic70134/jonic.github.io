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
        <?php include "../module_component/_nav_breadcrumbs.php";?>
        <div class="site-body">
            <!-- <aside class="site-left">
                左欄預留空間
            </aside> -->
            <article class="site-main">
                <?php include "../module_component/_pc_site_activity.php";?>
                <?php if($act=='true'){//特賣進行中?>
                <?php include "../module_component/_pc_site_filter.php";?>
                <?php include "../module_component/_pc_site_sort.php";?>
                <?php include "../module_component/_pc_category_list.php";?>
                <?php include "../module_component/_nav_pagination.php";?>
                <?php }?>
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
    <script>
    </script>
</body>
</html>