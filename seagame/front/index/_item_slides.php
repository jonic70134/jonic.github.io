<div class="row">
    <div class="swiper-container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-ad.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="1"></div>
            <button class="btn-permission go-popup" data-width="800" data-href="/inside/popup/modify-permission.html"><i class="fa fa-lock"></i>版頭橫幅AD權限設定</button>
            <div class="tooltip">輪播廣告：可設定6組圖輪播</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <div class="swiper-wrapper">
        <?php foreach ($slide as $key => $value) {?>?
            <div class="swiper-slide">
                <a href="<?php echo $value['url'];?>">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                </a>
            </div>
        <?php }?>
        </div>
        <div class="pagination"></div>
    </div>
</div>