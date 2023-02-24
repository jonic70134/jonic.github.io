<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="rwd";
;?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <?php include "../module_header/_seagame_header.php";?>
    <div class="site-body">
        <!-- <aside class="site-left">
            左欄預留空間
        </aside> -->
        <article class="site-main">
            <?php include "../module_component/_nav_breadcrumbs.php";?>
            <?php include "../module_component/_site_filter.php";?>
            <?php include "../module_component/_site_sort.php";?>
            <?php include "../module_component/_item_list_four.php";?>
            <?php include "../module_component/_nav_pagination.php";?>
        </article>
        <!-- <aside class="site-right">
            右欄預留空間
        </aside> -->
    </div>
    <?php include "../module_footer/_rwd_footer_001.php";?>
    <footer class="contact_info">
        <div class="container">
            <small>&copy;2014 SEA Games Signapore</small>
            <ul>
                <li><a href="#">RSS</a></li>
                <li><a href="#">Term of Use</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Sitemap</a></li>
            </ul>
        </div>
    </footer>
    <?php include "../module_footer/_rwd_copyright_001.php";?>
    <?php include "../frame/__rwd_js_library.php";?>
    <script>
    </script>
</body>
</html>