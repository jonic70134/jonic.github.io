<div class="pc_market_list_002">
    <div class="container">
        <h3 class="title-h3">標題</h3>
        <div class="items">
            <?php foreach ($category_items as $key => $value) {if($key==1){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php">
                    <p href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </p>
                    <div class="info">
                        <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                        <div class="buy">
                            <del class="buy is-old">
                                <span class="currency">網路價</span>
                                <span itemprop="currency" class="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <div class="buy">
                                <span class="currency">購物金價</span>
                                <span itemprop="price" class="price"> $<?php echo $value['price'];?></span>
                                <span href="item.php" class="btn" itemprop="offerurl">搶購</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php foreach ($category_items as $key => $value) {if($key==1){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php">
                    <p href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </p>
                    <div class="info">
                        <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                        <div class="buy">
                            <del class="buy is-old">
                                <span class="currency">網路價</span>
                                <span itemprop="currency" class="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <div class="buy">
                                <span class="currency">還可折抵購物金</span>
                                <span href="item.php" class="btn" itemprop="offerurl">搶購</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php foreach ($category_items as $key => $value) {if($key==1){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php">
                    <p href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </p>
                    <div class="info">
                        <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                        <div class="buy">                               
                            <del class="buy is-old"></del>
                            <div class="buy">
                                <span class="currency">網路價</span>
                                <span itemprop="price" class="price"> $<?php echo $value['price'];?></span>
                                <span href="item.php" class="btn" itemprop="offerurl">搶購</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
            <?php foreach ($category_items as $key => $value){ ?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php">
                    <p href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </p>
                    <div class="info">
                        <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                        <div class="buy">
                            <del class="buy is-old">
                                <span class="currency">網路價</span>
                                <span itemprop="currency" class="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <div class="buy">
                                <span class="currency">購物金價</span>
                                <span itemprop="price" class="price"> $<?php echo $value['price'];?></span>
                                <span href="item.php" class="btn" itemprop="offerurl">搶購</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>