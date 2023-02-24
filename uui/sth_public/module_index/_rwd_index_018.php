<div class="rwd_index_018">
    <div class="container">
        <a href="" class="more"><i class="fa fa-arrow-circle-right"></i> 看更多商品...</a>
        <ul class="tabs">                     
            <li class="active" data-tab="tab-1">新品上市</li>                      
            <li data-tab="tab-2">熱銷商品</li>
            <li data-tab="tab-3">限時特價</li>
            <li data-tab="tab-4">館長推薦</li>
            <li data-tab="tab-5">門市熱銷款</li>
        </ul>
        <div class="content">
            <div class="items tab-1 active">
                <h3 class="title-h3">新品上市</h3>
                <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-one">
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
                <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                    <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="http://placehold.it/250x250" alt="<?php echo $value['name'];?>" itemprop="image">
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
            <div class="items tab-2">
                <h3 class="title-h3">熱銷商品</h3>
                <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-one">
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
                <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                    <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="http://placehold.it/250x250" alt="<?php echo $value['name'];?>" itemprop="image">
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
            <div class="items tab-3">
                <h3 class="title-h3">限時特價</h3>
                <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-one">
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
                    <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                    <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="http://placehold.it/250x250" alt="<?php echo $value['name'];?>" itemprop="image">
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
            <div class="items tab-4">
                <h3 class="title-h3">館長推薦</h3>
                <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-one">
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
                <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                    <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="http://placehold.it/250x250" alt="<?php echo $value['name'];?>" itemprop="image">
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
            <div class="items tab-5">
                <h3 class="title-h3">門市熱銷款</h3>
                <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item item-one">
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
                <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                    <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="http://placehold.it/250x250" alt="<?php echo $value['name'];?>" itemprop="image">
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
    </div>
</div>