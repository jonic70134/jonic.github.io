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
            <!-- <aside class="site-left">
                左欄預留空間
            </aside> -->
            <section class="site-main">
                <?php include "../module_component/_pc_site_error.php";?>
            </section>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
    </div>
    <?php include "../frame/__pc_js_library.php";?>
</body>
</html>