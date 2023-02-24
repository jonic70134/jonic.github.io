<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="rwd";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <?php include "../module_header/_stayreal_header.php";?>
    <div class="site-body">
        <!-- <aside class="site-left">
            左欄預留空間
        </aside> -->
        <article class="site-main">
            <?php include "../module_component/_site_error.php";?>
        </article>
        <!-- <aside class="site-right">
            右欄預留空間
        </aside> -->
    </div>
</body>
</html>