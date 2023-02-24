<div class="pc_left_003">
    <h3 class="title-h3">標題</h3>
    <div class="items">
        <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
        <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/180x300" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <!-- <div class="info">
                <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                <div class="buy">
                    <span class="currency">$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    <a href="item.php" class="button" itemprop="offerurl">購買</a>
                </div>
            </div> -->
        </div>
        <?php }?>
    </div>
</div>