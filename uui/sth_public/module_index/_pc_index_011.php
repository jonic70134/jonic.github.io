<div class="pc_index_011">
    <div class="container"> 
    	<div class="col-right">            
            <a href="#" class="photo"><img src="http://placehold.it/180x360"></a>
        </div>
        <div class="col-left">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $key => $value) {?>
                    <div class="swiper-slide">
                        <a href="<?php echo $value['url'];?>">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="actions">
                    <div class="arrow-left"><i class="fa fa-arrow-circle-left"></i></div>
                    <div class="pagination"></div>
                    <div class="arrow-right"><i class="fa fa-arrow-circle-right"></i></div>
                </div>
            </div>
        </div>        
        <div class="item-limited" style="background-image:url('../c/img/sth_asap/bg_sale.png');"><!-- 整點特賣開始-->
            <div class="clock">
                <img src="../c/img/sth_asap/icon_saletime12.gif" alt="整點特惠倒數" title="整點特惠倒數">
            </div>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a itemprop="offerurl" href="#" class="photo">
                    <img itemprop="image" src="http://img.asap.com.tw/A/web/layout/sale/ontime/2014/07/08/2014070812_140471310481232.jpg" alt="Sony">
                </a>
                <div>
                    <a href="#" itemprop="offerurl" class="name">Sony Xperia Z (C6602) 防水防塵 5吋四核智慧型手機【加碼送 QX鏡頭專用轉接外殼】</a>
                    <div class="buy">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price">59</span>
                        <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="actions">
                <a href="ontime.php">更多整點特惠商品</a>
            </div>
        </div>
    </div>
</div>