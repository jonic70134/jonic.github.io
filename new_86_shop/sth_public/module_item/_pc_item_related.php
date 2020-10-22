<div class="pc-item-related">
    <div class="container">
        <div class="item-related-tabs">
            <ul>
                <li class="tab-1 active" data-tab="tab-content-1">相關商品</li>
                <li class="tab-2" data-tab="tab-content-2">海外相關商品</li>
                <li class="tab-3" data-tab="tab-content-3">買此商品的人也買了...</li>
            </ul>                
        </div>        
        <div class="items tab-content-1 active">
            <div class="swiper-container item-slider-002">
                <div class="swiper-wrapper">                    
                    <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                    <div class="swiper-slide">
                        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                            <a href="item.php" itemprop="offerurl" class="photo">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                            </a>                
                            <figcaption class="info">
                                <h2 itemprop="name" class="name">
                                    <a href="item.php"><?php echo $value['name'];?></a>
                                </h2>
                                <div class="buy">
                                    <span class="currency">NT$</span>
                                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                </div>
                <div class="arrow arrow-c-left a-l-1"><i class="fa fa-angle-left"></i></div>
                <div class="arrow arrow-c-right a-r-1"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
        <div class="items tab-content-2">
            <div class="swiper-container item-slider-003">
                <div class="swiper-wrapper">                    
                    <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                    <div class="swiper-slide">
                        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                            <a href="item.php" itemprop="offerurl" class="photo">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                            </a>                
                            <figcaption class="info">
                                <h2 itemprop="name" class="name">
                                    <a href="item.php"><?php echo $value['name'];?></a>
                                </h2>
                                <div class="buy">
                                    <span class="currency">NT$</span>
                                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                </div>
                <div class="arrow arrow-c-left a-l-2"><i class="fa fa-angle-left"></i></div>
                <div class="arrow arrow-c-right a-r-2"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
        <div class="items tab-content-3">
            <div class="swiper-container item-slider-004">
                <div class="swiper-wrapper">                    
                    <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                    <div class="swiper-slide">
                        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                            <a href="item.php" itemprop="offerurl" class="photo">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                            </a>                
                            <figcaption class="info">
                                <h2 itemprop="name" class="name">
                                    <a href="item.php"><?php echo $value['name'];?></a>
                                </h2>
                                <div class="buy">
                                    <span class="currency">NT$</span>
                                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                </div>
                <div class="arrow arrow-c-left a-l-3"><i class="fa fa-angle-left"></i></div>
                <div class="arrow arrow-c-right a-r-3"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>