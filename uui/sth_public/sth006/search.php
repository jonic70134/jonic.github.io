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
    <?php include "../module_header/_rwd_header_001.php";?>
    <div class="site-body">
        <!-- <aside class="site-left">
            左欄預留空間
        </aside> -->
        <article class="site-main">
            <?php include "../module_component/_site_search_answer.php";?>
            <?php include "../module_component/_site_filter.php";?>
            <?php include "../module_component/_site_sort.php";?>
            <h1 class="result">很抱歉，搜尋不到相關的商品及資訊！</h1>
            <?php include "../module_component/_item_list_four.php";?>
            <?php include "../module_component/_nav_pagination.php";?>
        </article>
        <!-- <aside class="site-right">
            右欄預留空間
        </aside> -->
    </div>
    <?php include "../module_footer/_rwd_footer_001.php";?>
    <?php include "../module_footer/_rwd_copyright_001.php";?>
    <?php include "../frame/__rwd_js_library.php";?>
    <script>
    </script>
</body>
</html>