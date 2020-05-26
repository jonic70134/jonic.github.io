<div class="row">
    <?php if($edit=="true"){ //後臺編輯區塊?>
    <section class="edit-area">
        <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
        <button class="btn-create go-popup" data-width="800" data-href="/inside/popup/modify-add-block.html"><i class="fa fa-plus"></i>新增區塊</button>
        <div class="tooltip">熱門主題廣告區：可設定5則廣告</div>     
    </section>
    <?php } //後臺編輯區塊 end ?>
    <div class="accessories">
        <?php foreach ($product_accessories as $key => $value) {if($key==5){break;}?>
        <div class="col-5">
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
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        </div>
                    </a>
                    <ul class="feature">
                        <li>ABCDEFG HIJKLMOD</li>
                        <li>wEVWV</li>
                        <li>WEWWFW</li>
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
</div>
<hr class="hidden-mobile hidden-table">