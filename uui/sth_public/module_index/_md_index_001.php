<div class="md_index_001 md-site-sliders">
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $key => $value) {?>
                <div class="swiper-slide">
                    <a href="<?php echo $value['url'];?>" title="圖片標題圖片標題圖片標題圖片標題圖片標題">
                        <img data-src="<?php echo $value['images'];?>" class="swiper-lazy" alt="<?php echo $value['name'];?>">
                    </a>
                </div>
                <?php }?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>