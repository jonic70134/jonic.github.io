<div class="rwd_index_005">
    <div class="container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
            <button class="btn-create go-popup" data-width="800" data-href="/inside/popup/modify-add-block.html"><i class="fa fa-plus"></i>新增區塊</button>
            <div class="tooltip">熱門主題廣告區：可設定5則廣告</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <h3 class="title-h3">標題</h3>
        <?php foreach ($itemss as $key => $value) {if($key==1){break;}?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item-one">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="http://placehold.it/350x500" alt="" itemprop="image">
            </a>
            <figcaption class="info">
                <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                <?php if(isset($value['feature'])){?>
                <ul class="feature">
                    <?php foreach ($value['feature'] as $items){ ?>
                    <li>
                        <?php echo $items;?>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
                <div class="buy">
                    <del>
                        <span itemprop="currency">NT$</span>
                        <span itemprop="highPrice">99,999,999</span>
                    </del>
                    <span class="currency">NT$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    <a href="item.php" class="button" itemprop="offerurl">購買</a>
                </div>
            </figcaption>
        </figure>
        <?php }?>
        <div class="items">
            <?php foreach ($itemss as $key => $value) {if($key==4){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" class="photo" itemprop="offerurl">
                    <img src="http://placehold.it/160x160" alt="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                    <div class="buy">
                        <del>
                            <span itemprop="currency">NT$</span>
                            <span itemprop="highPrice">99,999,999</span>
                        </del>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <a href="item.php" class="button" itemprop="offerurl">購買</a>
                    </div>
                </figcaption>
            </figure>
            <?php }?>
        </div>
    </div>
</div>