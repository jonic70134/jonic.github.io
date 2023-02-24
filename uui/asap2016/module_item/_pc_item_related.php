<div class="pc-item-related">
    <div class="container">
        <h3 class="subject-title">
            其他推薦商品
        </h3>
        <div class="items active">
            <div class="swiper-container item-slider-002">
                <div class="swiper-wrapper">                    
                    <?php foreach ($items as $key => $value) {if($key==10){break;}?>
                    <div class="swiper-slide">
                        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                            <a href="item.php" itemprop="offerurl" class="photo">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                            </a>                
                            
                        </figure>
                    </div>
                    <?php }?>
                </div>
                
            </div>
            <div class="arrow arrow-c-left a-l-1"><i class="fa fa-angle-left"></i></div>
            <div class="arrow arrow-c-right a-r-1"><i class="fa fa-angle-right"></i></div>
        </div>
    </div>
</div>