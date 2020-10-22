<div class="item-list big">
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){ ?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" itemprop="offerurl" class="photo ga_tracking" data-category="<?php echo $sitePage;?>" data-action="image" data-label="<?php echo $value['name'];?> - 圖片">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <div class="info">
                    <h1 itemprop="name" class="name"><a href="item.php" class="ga_tracking"><?php echo $value['name'];?></a></h1>
                    <div class="tprice">
                        <span class="type">網路價</span>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <div class="buy-actions">
                            <?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){
                                include "../component/_quantity.php";
                            }?>
                            <?php include "../component/_btn_buy.php";?>
                            <?php if($value['type']=="btn-preorder"){?>
                            <div class="highlight">
                                <p>會員限購1個(剩餘數量：9999)</p>
                                <p class="red-text">預計出貨日：2014/05/16</p>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>