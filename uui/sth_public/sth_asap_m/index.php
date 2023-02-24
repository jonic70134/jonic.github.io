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
    <div id="page" class="site-outter">
        <?php include "../module_header/_md_header_001.php";?>
        <div class="site-body" role="main">
            <article class="site-main">
                <?php include "../module_index/_md_index_001.php";?>
                <?php include "../module_index/_md_index_002.php";?>
                <?php include "../module_index/_md_index_005.php";?>
                <?php include "../module_index/_md_index_003.php";?>
                <?php include "../module_index/_md_index_006.php";?>
                <?php include "../module_index/_md_index_004.php";?>
                <?php include "../module_component/_md_nav_menu_title.php";?>
                <?php include "../module_component/_md_nav_menu.php";?>
            </article>
        </div>
        <?php include "../module_footer/_md_footer_001.php";?>
        <?php include "../module_footer/_md_footer_002.php";?>
        <?php include "../module_footer/_md_copyright_001.php";?>
        <?php include "../module_component/_md_nav_top.php";?>
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>