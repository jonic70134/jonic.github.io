<div id="pc_left_012" class="pc_left_012">
    <h3 class="title-h3">猜你喜歡</h3>
    <div class="content">
        <div class="items tab-1 act-A active">
            <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="photoblock">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <div class="img-attnum">1</div>
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                </div>
                <div class="info">
                    <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                    <div class="buy">
                        <span class="price"><del>$666</del></span>
                        <span class="discount_price"><span>$</span>499</span>
                    </div>
                    <div class="buy-actions">
                        <a class="btn link-btn" href="#">搶購</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="items tab-2 act-B">
            <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <h3 itemprop="name" class="name"><a href="#">德國Dalli 商品，任選3件折$102</a></h3>
                <div class="photoblock">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <div class="img-attnum">2</div>
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                </div>
                <div class="info">
                    <div class="buy">                        
                        <p class="point">每滿 <span itemprop="price" class="price">NT$2000</span></p>
                        <p class="point">立折 <span itemprop="price" class="price">NT$190</span></p>
                        <a class="btn-more" href="#">more</a>
                    </div>
                </div>
                    
            </div>
            <?php }?>
        </div>
        <div class="items act-A tab-3">
            <?php foreach ($itemss as $key => $value) {if($key==3){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="photoblock">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <div class="img-attnum">3</div>
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                </div>
                <div class="info">
                    <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                    <div class="buy">
                        <p>
                            <span class="currency">$</span>
                            <span itemprop="price" class="price"> 5,999</span>
                        </p>
                        <a class="btn-more" href="#">more </a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="items act-A tab-4">
            <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="photoblock">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <div class="img-attnum">4</div>
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                </div>
                <div class="info">
                    <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                    <div class="buy">
                        <p>
                            <span class="currency">$</span>
                            <span itemprop="price" class="price"> 5,999</span>
                        </p>
                        <a class="btn-more" href="#">more </a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</div>