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
            <article class="site-main">
                <?php include "../module_component/_pc_site_ontime.php";?>            
                <?php include "../module_component/_pc_ontime_list.php";?>
                <div class="ontime-footer">
                    <div class="container">
                        本活動網頁的商品、規格、顏色、價位如與銷售網頁不符，請以銷售網頁為準；活動特價商品均限量供應，售完為止！
                    </div>
                </div>
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