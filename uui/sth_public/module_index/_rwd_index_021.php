<div class="rwd_index_021">
    <div class="container">
        <div class="items">
            <?php foreach ($itemss as $key => $value) {if($key==6){break;}?>
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