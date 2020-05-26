<div class="row">
    <?php if($edit=="true"){ //後臺編輯區塊?>
    <section class="edit-area">
        <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
        <div class="tooltip">熱門主題廣告區：可設定4組商品</div>     
    </section>
    <?php } //後臺編輯區塊 end ?>
    <h3 class="index-title">Hot Deals</h3>
    <?php foreach ($products03 as $key => $value) {if($key==4){break;}?>
    <div class="col-3">
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="product-3">
            <a href="item.php" itemprop="offerurl" class="photo hidden-table">
                <div class="crop">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                </div>
            </a>
            <figcaption>
                <h1 itemprop="name" class="zenfont"><?php echo $value['name'];?></h1>
                <a href="item.php" itemprop="offerurl" class="photo hidden-desktop hidden-mobile">
                    <div class="crop">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                    </div>
                </a>
                <ul class="feature">
                    <li>Limited Edition</li>
                </ul>
                <div class="buy-actions">
                    <span itemprop="price" class="price"><span class="currency">$</span><?php echo $value['price'];?></span>
                    <a href="category.php" itemprop="offerurl" class="button btn-rush">Buy Now</a>
                </div>
            </figcaption>
        </figure>
    </div>
    <?php }?>
</div>
<hr class="hidden-mobile hidden-table">