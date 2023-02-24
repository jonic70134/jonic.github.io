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
    <?php include "../module_header/_md_header_001.php";?>
    <div class="site-body">
        <section class="site-main">
            <?php include "../module_component/_md_site_error.php";?>
        </section>
    </div>
    <?php include "../module_footer/_md_copyright_001.php";?>
    <?php include "../module_component/_md_nav_top.php";?>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>