<div class="item-list-ontime">
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){if($key==2){break;} ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-single">
                <div class="ontime-head"><img src="../c/img/sth_asap/icon_s_saletime12.gif"></div>
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <div class="price-auto">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                    <div class="price-manual">
                        NT$4589元起
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
            <?php foreach ($category_items as $key => $value){if($key==3){break;} ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-three">
                <div class="ontime-head"><img src="../c/img/sth_asap/icon_s_saletime12.gif"></div>
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <div class="price-auto">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                    <div class="price-manual">
                        NT$4589元起
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
            <?php foreach ($category_items as $key => $value){if($key==4){break;} ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-four">
                <div class="ontime-head"><img src="../c/img/sth_asap/icon_s_saletime12.gif"></div>
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <div class="price-auto">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                    <div class="price-manual">
                        NT$4589元起
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
            <?php foreach ($category_items as $key => $value){ ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="ontime-head"><img src="../c/img/sth_asap/icon_s_saletime12.gif"></div>
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <div class="price-auto">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                    <div class="price-manual">
                        NT$4589元起
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
        </div>
    </div>
</div>