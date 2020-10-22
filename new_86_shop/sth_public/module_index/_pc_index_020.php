<div class="pc_index_020">
    <div class="container">
        <button class="fb_share"></button>
        <a href="item.php">
            <div class="discount_today"></div>
        </a>
        <div class="block">
            <div class="item-left">
                <a href="#">
                    <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <p href="#" class="photo-long">
                            <img src="https://placehold.jp/360x360.png" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                        </p>
                    </div>
                    <div class="info">
                        <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                        <div class="buy">
                            <div class="buy is-old">
                                <span class="currency">網路價</span>
                                <!--<span itemprop="price" class="currency">NT$</span> -->
                                <span itemprop="highPrice" class="price">99,999,999</span>
                            </div>
                            <div class="buy">
                                <span class="currency">購物金價</span>
                                <span itemprop="price" class="price"> 5999</span>
                                <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                            </div>
                        </div>
                        <button href='../module_component/_site_fancybox_all.php #fancybox-compare-best-price' class="bird-block best fancybox fancybox.ajax fee-c">省1000<span class="detail">詳</span></button>
                    </div>
                </a>
            </div>
            <div class="items">
                <?php foreach ($itemss as $key => $value) {if($key==2){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php">
                        <p href="item.php" class="photo" itemprop="offerurl">
                            <span class="floating"></span>
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                        </p>
                        <div class="info">
                            <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                            <div class="buy">
                                <div class="buy is-old">
                                    <span class="currency">網路價</span>
                                    <!-- <span itemprop="currency" class="currency">NT$</span> -->
                                    <span itemprop="highPrice" class="price">9,999</span>
                                </div>
                                <div class="buy">
                                    <span class="currency">購物金價</span>
                                    <span itemprop="price" class="price"> <?php echo $value['price'];?></span>
                                    <!--<span href="item.php" class="btn" itemprop="offerurl">搶購</span>-->
                                </div>
                            </div>
                            <button href='../module_component/_site_fancybox_all.php #fancybox-compare-best-price'  class="bird-block-s best fancybox fancybox.ajax fee-c">低別家1000</button>
                        </div>
                    </a>
                </div>
                <?php }?>
                <?php foreach ($itemss as $key => $value) {if($key==2){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php">
                        <p class="photo" itemprop="offerurl">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                        </p>
                        <div class="info">
                            <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                            <div class="buy">
                                <div class="buy is-old">
                                    <span class="currency">網路價</span>
                                    <!-- <span itemprop="currency" class="currency">NT$</span> -->
                                    <span itemprop="highPrice" class="price">9,999</span>
                                </div>
                                <div class="buy">
                                    <span class="currency">還可折抵購物金</span>
                                    <!--<span href="item.php" class="btn" itemprop="offerurl">搶購</span>-->
                                </div>
                            </div>
                            <button href="../module_component/_site_fancybox_all.php #fancybox-call-best-price" class="bird-block-s call fancybox fancybox.ajax fee-c">3天退差價</button>
                        </div>
                    </a>
                </div>
                <?php }?>
                <?php foreach ($itemss as $key => $value) {if($key==2){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php">
                        <p class="photo" itemprop="offerurl">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                        </p>
                        <div class="info">
                            <h3 itemprop="name" class="name"><?php echo $value['name'];?></h3>
                            <div class="buy">
                                <div class="buy is-old"></div>
                                <div class="buy">
                                    <span class="currency">網路價</span>
                                    <span itemprop="price" class="price"> <?php echo $value['price'];?></span>
                                    <!--<span href="item.php" class="btn" itemprop="offerurl">搶購</span>-->
                                </div>
                            </div>
                            <button href='../module_component/_site_fancybox_all.php #fancybox-compare-best-price'  class="bird-block-s best fancybox fancybox.ajax fee-c" class="bird-block-s best">找不到更低</button>
                        </div>
                    </a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="ps">今日下殺商品售完為止，規格與售價以銷售頁面為準</div>
</div>