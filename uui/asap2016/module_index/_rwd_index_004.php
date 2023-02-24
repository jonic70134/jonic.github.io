<div class="rwd_index_004">
    <div class="container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <div class="tooltip">熱門主題廣告區：可設定4組商品</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <h3 class="title-h3"><?php echo $rwd_index_004_title;?></h3>
        <div class="items">
            <?php foreach ($items as $key => $value) {if($key==4){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" class="photo" itemprop="offerurl">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><?php echo $value['name'];?></h1>
                    <?php if(isset($value['feature'])){?>
                    <ul class="feature">
                        <?php foreach ($value['feature'] as $item){ ?>
                        <li>
                            <?php echo $item;?>
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
                        <a href="item.php" class="button" itemprop="offerurl"><?php echo $btn['btn-buy'];?></a>
                    </div>
                </figcaption>
            </figure>
            <?php }?>
        </div>
    </div>
</div>