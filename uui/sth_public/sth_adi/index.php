<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    $type="rwd";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <?php include "../module_component/_site_ad_top.php";?>
    <?php include "../module_header/_adi_header.php";?>    
    <div class="site-body">
        <!-- <aside class="site-left">
            左欄預留空間
        </aside> -->
        <article class="site-main">
            <?php include "../module_index/_rwd_index_001.php";?>
            <?php include "../module_index/_rwd_index_027.php";?>            
            <?php include "../module_index/_rwd_index_029.php";?> 
            <?php include "../module_index/_rwd_index_030.php";?>
            <?php include "../module_index/_rwd_index_031.php";?>
            <?php include "../module_index/_rwd_index_032.php";?>
            <?php include "../module_index/_rwd_index_033.php";?>
            <?php include "../module_index/_rwd_index_034.php";?>
            <?php include "../module_index/_rwd_index_028.php";?>            
            <?php include "../module_index/_rwd_index_003.php";?>
            <?php include "../module_index/_rwd_index_002.php";?>
            <?php include "../module_index/_rwd_index_004.php";?>
            <?php include "../module_index/_rwd_index_005.php";?>
            <?php include "../module_index/_rwd_index_006.php";?>
            <?php include "../module_index/_rwd_index_010.php";?>
            <?php include "../module_index/_rwd_index_009.php";?>
            <?php include "../module_index/_rwd_index_007.php";?>
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