<div class="md_site_search">
    <div class="container">
        <h3 class="t-title"><span class="t-ellipsis">ZENFONE</span><span class="t-count"><?php if ($result=='true') {?>(999)<?php ;} else {?>(0)<?php ;}?></span></h3>
        <?php if ($result=='true') {?>
        <!-- result -->
        <button class="btn-toggle-filter">進階篩選</button>
        <?php include "../module_component/_md_site_filter.php";?>
        <?php include "../module_component/_md_site_infinite_scroll.php";?>
        <?php ;} else {?>
        <!-- no result -->
        <p class="t-no-result">目前無相關商品</p>
        <?php ;}?>
    </div>
</div>