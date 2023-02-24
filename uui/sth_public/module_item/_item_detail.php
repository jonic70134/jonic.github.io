<div class="item-detail">
    <div class="container">
        <h3 class="title-h3"><?php echo $L10n_item['h3_intro'];?></h3>
<!-- wysiwyg 開始 -->
        <!-- 左圖右文 -->
        <div class="pic_txt">
            <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處 -->
                <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
            </div>
            <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處 -->
                <?php echo $itemss[$pid]['desc'];?>
            </div>
        </div>
        <!-- 右圖左文 -->
        <div class="pic_txt">
            <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處 -->
                <?php echo $itemss[$pid]['desc'];?>
            </div>
            <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處 -->
                <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
            </div>
        </div>
<!-- wysiwyg 結束 -->
        <p class="desc"><?php echo $itemss[$pid]['desc'];?></p>
        <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt="">
        <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt="">
        <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt="">
        <p class="desc"><?php echo $itemss[$pid]['desc'];?></p>
        <p class="desc"><?php echo $itemss[$pid]['desc'];?></p>
        <p class="desc"><?php echo $itemss[$pid]['desc'];?></p>
    </div>
</div>