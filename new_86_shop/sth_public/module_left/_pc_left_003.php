<div class="pc_left_003">
    <h3 class="title-h3">熱門品牌</h3>
    <div class="items">
        <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
        <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071139_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071193_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071248_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071139_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515072030_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071193_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071248_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071139_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071193_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://img01-tw1.uitoximg.com/A/deploy/AWC001913/1515071248_201712AP2900000010.jpg" alt="<?php echo $value['name'];?>" itemprop="image">
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