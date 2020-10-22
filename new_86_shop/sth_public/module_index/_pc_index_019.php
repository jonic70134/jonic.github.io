<div class="pc_index_019">
    <div class="container">
        <ul class="tabs">                     
            <li class="active" data-tab="tab-1">熱銷排行榜</li>                      
            <li data-tab="tab-2">專櫃鞋包3折起</li>
            <li data-tab="tab-3">限時下殺 閃電團購</li>
            <li data-tab="tab-4">超省美妝 好物必搶</li>
            <li data-tab="tab-5">熱門時尚 經典推薦</li>
            <li data-tab="tab-6">顯瘦穿搭look</li>
        </ul>
        <div class="content">
            <div class="items tab-1 active">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">網路價</span>
                            <span itemprop="currency" class="currency">NT$</span>
                            <span itemprop="highPrice" class="price">99,999,999</span>
                        </div>
                        <div class="buy">
                            <span class="currency">購物金價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-2">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old"></div>
                        <div class="buy">
                            <span class="currency">網路價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-3">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old"></div>
                        <div class="buy">
                            <span class="currency">購物金價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="more-discount" itemprop="offerurl">再折扣</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-4">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">網路價</span>
                            <span itemprop="currency" class="currency">NT$</span>
                            <span itemprop="highPrice" class="price">99,999,999</span>
                        </div>
                        <div class="buy">
                            <span class="currency">購物金價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="more-discount" itemprop="offerurl">再折扣</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-5">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">網路價</span>
                            <span itemprop="currency" class="currency">NT$</span>
                            <span itemprop="highPrice" class="price">99,999,999</span>
                        </div>
                        <div class="buy">
                            <span class="currency">購物金價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-6">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">網路價</span>
                            <span itemprop="currency" class="currency">NT$</span>
                            <span itemprop="highPrice" class="price">99,999,999</span>
                        </div>
                        <div class="buy">
                            <span class="currency">購物金價</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>