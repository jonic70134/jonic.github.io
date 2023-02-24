<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    $type="pc";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_header_001.php";?>
        <?php include "../module_component/_nav_breadcrumbs.php";?>
        <div class="site-body">
            <div class="site-main">
                <?php include "../module_account/_order_refund_confirm_001.php";?>
            </div>
        </div>
        <div class="nav-to-top">
            <i class="fa fa-angle-double-up"></i>
        </div>
        <?php include "../module_footer/_copyright_001.php";?>
    </div>
    <?php include "../frame/__js_library.php";?>
</body>
</html>