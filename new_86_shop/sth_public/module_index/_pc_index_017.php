<div class="pc_index_017">
    <div class="container">      
        <div class="block">
            <div class="item-left">
                <a href="#" class="photo-long">
                    <img src="http://img05-tw1.uitoximg.com/A/show/AW000001/2016/0803/AM0002624/201608AM030002624_14702327418995310029593.jpg!t400x400" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <div class="info">
                    <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                    <div class="buy">
                        <del>
                            <span itemprop="currency">NT$</span>
                            <span itemprop="highPrice">99,999,999</span>
                        </del>
                        <span class="currency">NT$</span>45646
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <a href="item.php" class="btn" itemprop="offerurl">立即搶購<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="items">
                <?php foreach ($itemss as $key => $value) {if($key==6){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>