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
        <?php include "../module_header/_md_header_004.php";?>
        <div class="site-body">
            <article class="site-main">
                <?php include "../module_index/_md_index_021.php"; ?>
                <?php include "../module_index/_md_index_001.php"; ?>
                <?php include "../module_index/_md_index_020.php"; ?>
                <?php include "../module_index/_md_index_023.php"; ?>
                <div class="md_index_021">
                    <div class="container">
                        <img src="../c/img/sth_asap_m/sample/bn_720x300_02.jpg" alt="ad"/>
                    </div>
                </div>
                <?php include "../module_category/_md_category_003.php"; ?>
                <?php include "../module_index/_md_index_026.php"; ?>
            </article>
        </div>
        <?php include "../module_footer/_md_footer_001.php";?>
<!--
        include "../module_footer/_md_copyright_001.php";?>
         include "../module_component/_md_nav_top.php";?>-->
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>