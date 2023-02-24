<div class="rwd_index_019">
    <div class="container">
        <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-left">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/360x360" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <figcaption class="info">
                <h1 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h1>
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
        <?php }?>
        <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-right">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/360x360" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <figcaption class="info">
                <h1 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h1>
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
        <?php }?>
        <div class="items-small">
        <?php foreach ($itemss as $key => $value) {if($key==4){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" class="photo" itemprop="offerurl">
                    <img src="http://placehold.it/360x360" alt="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h1>
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