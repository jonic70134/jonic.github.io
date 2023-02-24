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
        <div class="site-body">
            <article class="site-main">
                <?php include "../module_component/_md_site_infinite_scroll.php";?>
            </article>
        </div>
    </div>
</body>
</html>