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
    <h3 class="index-title">Browser by Country</h3>
    <div class="store-area">
        <?php foreach ($store as $key => $value) {?>
        <div class="col-2">
            <a href="item.php">
                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
            </a>
        </div>
        <?php }?>
    </div>
</div>