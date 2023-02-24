<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    $type="rwd";
;?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <?php include "../module_header/_rwd_header_002.php";?>
    <?php include "../module_component/_site_float_bar.php";?>
    <div class="site-body">
        <!-- <aside class="site-left">
            左欄預留空間
        </aside> -->
        <article class="site-main">
            <?php include "../module_component/_nav_breadcrumbs.php";?>
            <?php include "../module_item/_item_main.php";?>
            <?php include "../module_item/_item_add.php";?>
            <?php include "../module_item/_item_related.php";?>
            <?php include "../module_item/_item_detail.php";?>
            <?php include "../module_item/_item_spec.php";?>
            <?php include "../module_item/_item_buy.php";?>
        </article>
        <!-- <aside class="site-right">
            右欄預留空間
        </aside> -->
    </div>
    <?php include "../module_footer/_rwd_footer_001.php";?>
    <?php include "../module_footer/_rwd_copyright_001.php";?>
    <?php include "../frame/__rwd_js_library.php";?>
</body>
</html>