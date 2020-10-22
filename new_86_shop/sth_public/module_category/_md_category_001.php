<div class="md_category_001">
    <div class="container">
        <h3 class="t-title"><span class="t-ellipsis">素顏霜</span><?php if($sitePage=='search'){?><span class="t-count"><?php if ($result=='true') {?>(999)<?php ;} else {?>(0)<?php ;}?></span><?php ;}?></h3>
        <?php if ($sitePage=='search' && $result!='true') {} else {?>
        <!-- result -->
        <button class="btn-toggle-filter">進階篩選</button>
        <?php ;}?>
    </div>
</div>