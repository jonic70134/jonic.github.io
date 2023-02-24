<div class="pc_left_011">
        <ul class="tabs">                     
            <li class="active" data-tab="tab-1"><a href="#">限時特賣</a></li>                      
            <li data-tab="tab-2"><a href="#">優惠活動</a></li>
            <li data-tab="tab-3"><a href="#">本日強檔</a></li>
        </ul>
        <div class="content">
            <div class="items tab-1 act-A active">
                <?php foreach ($itemss as $key => $value) {if($key==3){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="photoblock">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        </a>
                    </div>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                            <span class="currency">$</span>
                            <span itemprop="price" class="price"> 5,999</span>
                        </div>
                        <a class="btn-more" href="#">more</a>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-2 act-B">
                <?php foreach ($itemss as $key => $value) {if($key==2){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <h3 itemprop="name" class="name"><a href="#">德國Dalli 商品，任選3件折$102</a></h3>
                    <div class="photoblock">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        </a>
                    </div>
                    <div class="info">
                        <div class="buy">                        
                            <p class="point">每滿 <span itemprop="price" class="price">NT$2000</span></p>
                            <p class="point">立折 <span itemprop="price" class="price">NT$190</span></p>
                        </div>
                        <a class="btn-more" href="#">more</a>
                    </div>
                        
                </div>
                <?php }?>
            </div>
            <div class="items act-A tab-3">
                <?php foreach ($itemss as $key => $value) {if($key==3){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="photoblock">
                        <a href="item.php" class="photo" itemprop="offerurl">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        </a>
                    </div>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                            <span class="currency">$</span>
                            <span itemprop="price" class="price"> 5,999</span>
                        </div>
                        <a class="btn-more" href="#">搶購</a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
</div>