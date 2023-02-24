<div class="rwd_left_004">
    <h3 class="title-h3">銷售排行榜</h3>
    <div class="items">
        <?php foreach ($items as $key => $value) {if($key==4){break;}?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/80x80" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <figcaption class="info">                
                <h1 itemprop="name" class="name"><a href="item.php" itemprop="offerurl"><?php echo $value['name'];?></a></h1>
                <div class="buy">
                    <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                    </del>
                    <span class="currency">$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                </div>
            </figcaption>
        </figure>
        <?php }?>
    </div>
</div>