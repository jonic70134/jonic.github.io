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
        <div class="site-body">
            <div class="site-main">
                <?php include "../module_account/_order_refund_debitnote_001.php";?>
            </div>
        </div>
    </div>
    <?php include "../frame/__js_library.php";?>
</body>
</html>