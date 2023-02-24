<div class="pc_index_003 pc-item-detail">
    <div class="container tab-box">
        <ul class="tabs">
            <li class="active" data-tab="tab-1">商品資訊</li>
            <li data-tab="tab-2">寄送聯絡資訊</li>
            <li data-tab="tab-3">退換貨說明</li>
        </ul>
        <div class="content">
            <!-- tab-1 商品資訊 -->
            <div class="items tab-1 active">
                <!-- ?php include "../module_component/_site_translation.php";? -->
                <!-- wysiwyg 開始 -->
                <!-- 左圖右文 -->
                <div class="pic_txt">
                    <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處 -->
                        <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
                    </div>
                    <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處 -->
                        <?php echo $items[$pid]['desc'];?>
                    </div>
                </div>
                <!-- 右圖左文 -->
                <div class="pic_txt">
                    <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處 -->
                        <?php echo $items[$pid]['desc'];?>
                    </div>
                    <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處 -->
                        <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
                    </div>
                </div>
                <!-- wysiwyg 結束 -->
                <p class="desc"><?php echo $items[$pid]['desc'];?></p>
                <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt=""/>
                <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt=""/>
                <img class="img-spacing" itemprop="image" src="http://placehold.it/1220x600" alt=""/>
                <p class="desc"><?php echo $items[$pid]['desc'];?></p>
                <p class="desc"><?php echo $items[$pid]['desc'];?></p>
                <p class="desc"><?php echo $items[$pid]['desc'];?></p>
            </div>
            <!-- tab-2 寄送聯絡資訊 -->
            <div class="items tab-2">
                <?php include "../module_item/_pc_item_spec.php";?>
            </div>
            <!-- tab-3 退換貨說明 -->
            <div class="items tab-3">
                
            </div>
        </div>
        
    </div>
</div>