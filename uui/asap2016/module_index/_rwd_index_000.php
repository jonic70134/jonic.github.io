<div class="rwd_index_000">
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){ ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="http://placehold.it/210x210" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <del>
                        <span itemprop="currency">NT$</span>
                        <span itemprop="highPrice">99,999,999</span>
                    </del>
                    <span class="type">網路價</span>
                    <span class="currency">NT$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                </figcaption>
            </figure>
            <?php } ?>
        </div>
        <a href="#" class="more">看更多商品...</a>
    </div>
</div>