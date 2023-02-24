<div class="rwd-index-002 trans-002">
    <div class="container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <div class="tooltip">熱門主題廣告區：可設定4組商品</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <h3 class="title-h3">標題</h3>
        <?php foreach ($rwd_index_002 as $key => $value) {?>
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
            <a href="item.php" class="photo" itemprop="offerurl">
                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
            </a>
        </figure>
        <?php }?>
    </div>
</div>