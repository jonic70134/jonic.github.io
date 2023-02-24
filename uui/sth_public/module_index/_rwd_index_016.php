<div class="rwd_index_015">
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){if($key==1){break;} ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <?php if(isset($value['feature'])){?>
                    <ul class="feature">
                        <?php foreach ($value['feature'] as $items){ ?>
                        <li>
                            <?php echo $items;?>
                        </li>
                        <?php }?>
                    </ul>
                    <?php }?>
                    <div class="buy">
                        <del>
                            <span itemprop="currency">NT$</span>
                            <span itemprop="highPrice">99,999,999</span>
                        </del>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <a href="item.php" class="button" itemprop="offerurl">購買</a>
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
            <div class="item-block">
            <?php foreach ($category_items as $key => $value){if($key==6){break;} ?>            
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" itemprop="offerurl" class="photo">
                        <img src="<?php echo $value['images'];?>" alt="">
                    </a>
                    <figcaption class="info">
                        <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                        <div class="buy">
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <a href="item.php" class="button" itemprop="offerurl">購買</a>
                        </div>
                    </figcaption>
                </figure>            
            <?php } ?>
            </div>
        </div>
    </div>
</div>