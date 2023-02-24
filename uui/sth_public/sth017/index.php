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
    <?php include "../module_header/_rwd_header_003.php";?>
    <div class="site-body two_column">
        <aside class="site-left">
            <?php include "../module_left/_rwd_left_002.php";?>
            <?php include "../module_left/_rwd_left_003.php";?>
            <?php include "../module_left/_rwd_left_004.php";?>
        </aside>
        <article class="site-main">
            <?php include "../module_index/_rwd_index_011.php";?>
            <?php include "../module_index/_rwd_index_012.php";?>
            <?php include "../module_index/_rwd_index_013.php";?>
            <?php include "../module_index/_rwd_index_025.php";?>
            <?php include "../module_index/_rwd_index_024.php";?>
            <?php include "../module_index/_rwd_index_013.php";?>
            <?php include "../module_index/_rwd_index_013.php";?>
        </article>
        <!-- <aside class="site-right">
            右欄預留空間
        </aside> -->
    </div>
    <?php include "../module_footer/_rwd_footer_001.php";?>
    <?php include "../module_footer/_rwd_copyright_001.php";?>
    <?php include "../frame/__rwd_js_library.php";?>
    <script>
    (function($){
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            autoplay: 5000,
            speed: 500,
            loop: false,
            grabCursor: true,
            calculateHeight: true,
            resizeReInit: true,
            paginationClickable: true
        })
        $(window).resize(function() {
            mySwiper.reInit();
        });
    })(jQuery);
    </script>
</body>
</html>