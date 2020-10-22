<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="md";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_md_header_001.php";?>
        <div class="site-body">
            <section class="site-main">
                <?php include "../module_component/_md_nav_breadcrumbs.php";?>
                <?php include "../module_item/_md_item_main.php";?>
                <?php include "../module_item/_md_item_detail.php";?>
                <?php include "../module_item/_md_item_buy.php";?>
                <?php if(isset($_GET['type'])=='btn-discount'){?>
                <?php include "../module_item/_md_item_discount_dialog.php";?>
                <?php ;}?>
            </section>
        </div>
        <?php include "../module_footer/_md_footer_001.php";?>
        <?php include "../module_footer/_md_copyright_001.php";?>
        <?php include "../module_component/_md_nav_top.php";?>
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>