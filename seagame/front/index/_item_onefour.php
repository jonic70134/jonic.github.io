<div class="row">
    <?php if($edit=="true"){ //後臺編輯區塊?>
    <section class="edit-area">
        <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
        <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
        <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
        <button class="btn-create go-popup" data-width="800" data-href="/inside/popup/modify-add-block.html"><i class="fa fa-plus"></i>新增區塊</button>
        <div class="tooltip">熱門主題廣告區：可設定5則廣告</div>     
    </section>
    <h3 class="index-title">New Arrival</h3>
    <?php } //後臺編輯區塊 end ?>
    <div class="product1-4">
        <div class="col-6">
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="product-2">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <figcaption>
                    <h1 itemprop="name" class="zenfont"><?php echo $value['name'];?></h1>
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
        <div class="col-6">
            <?php foreach ($products03 as $key => $value) {if($key==4){break;}?>
            <div class="col-6">
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="product-4">
                    <a href="item.php" itemprop="offerurl" class="photo">
                        <div class="crop">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        </div>
                    </a>
                    <figcaption>
                        <h1 itemprop="name" class="zenfont"><?php echo $value['name'];?></h1>
                        <!-- 移除多餘 a & img 20140814 -->
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
</div>
<hr class="hidden-mobile hidden-table">