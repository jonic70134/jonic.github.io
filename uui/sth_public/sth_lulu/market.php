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
    <div class="site-outter">
        <?php include "../module_header/_lulu_header.php";?>
        <div class="site-body">
            <!-- <aside class="site-left">
                左欄預留空間
            </aside> -->
            <article class="site-main">
                <?php include "../module_component/_nav_breadcrumbs.php";?>
                <?php include "../module_index/_rwd_index_008.php";?>            
                <?php include "../module_index/_rwd_index_002.php";?>
                <?php include "../module_index/_rwd_index_003.php";?>
                <?php include "../module_index/_rwd_index_004.php";?>
                <?php include "../module_index/_rwd_index_005.php";?>
                <?php include "../module_index/_rwd_index_006.php";?>
                <?php include "../module_index/_rwd_index_007.php";?>
                <?php include "../module_index/_rwd_index_009.php";?>
            </article>
            <!-- <aside class="site-right">
                右欄預留空間
            </aside> -->
        </div>
        <?php include "../module_footer/_rwd_footer_001.php";?>
        <?php include "../module_footer/_rwd_copyright_001.php";?>
    </div>
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
            paginationClickable: true,
        })
        $(window).resize(function() {
            mySwiper.reInit();
        });
    })(jQuery);
    </script>
</body>
</html>