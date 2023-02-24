<div class="rwd_index_013">
    <div class="container">
        <h3 class="title-h3"><?php echo $rwd_index_006_title;?></h3>
        <div class="items">
            <?php foreach ($rwd_index_006 as $key => $value) {if($key==5){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" class="photo" itemprop="offerurl">
                    <img src="http://placehold.it/360x360" alt="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
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
            <?php }?>
        </div>
    </div>
</div>