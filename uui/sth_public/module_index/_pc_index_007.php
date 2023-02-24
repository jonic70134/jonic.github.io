<div class="pc_index_007">
    <div class="container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="2"></div>
            <div class="tooltip">熱門主題廣告區：可設定5組商品或廣告</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <div class="items">
            <?php foreach ($indexItem_seven as $key => $value) {?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" class="photo" itemprop="offerurl">
                    <img src="<?php echo $value;?>" alt="活動名稱" itemprop="image">
                </a>
            </div>
            <?php }?>
        </div>
    </div>
</div>