<div class="rwd_left_003">
    <h3 class="title-h3">我們也在這裡</h3>
    <div class="items">
        <?php foreach ($itemss as $key => $value) {if($key==4){break;}?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/80x80" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
            <figcaption class="info">                
                <h1 itemprop="name" class="name"><a href="item.php" itemprop="offerurl"><?php echo $value['name'];?></a></h1>
            </figcaption>
        </figure>
        <?php }?>
    </div>
    <ul class="events-list">
        <li><a href="#">門市 / 百貨專櫃 查詢 ></a></li>
    </ul>
</div>