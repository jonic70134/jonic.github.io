<article class="md-item-detail">
    <div class="container">        
        <div class="spec">            
            <div class="content">
 <!-- wysiwyg 開始 
        <!-- 左圖右文 
                <div class="pic_txt">
                    <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處 
                        <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
                    </div>
                    <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處
                        <?php echo $itemss[$pid]['desc'];?>
                    </div>
                </div>
                <!-- 右圖左文
                <div class="pic_txt">
                    <div class="pic_txt_col wysiwyg-text-align-center wysiwyg-color-red"><!-- 圖文對齊及顏色class塞入此處 
                        <?php echo $itemss[$pid]['desc'];?>
                    </div>
                    <div class="pic_txt_col wysiwyg-text-align-center"><!-- 圖文對齊及顏色class塞入此處
                        <img itemprop="image" src="http://placehold.it/360x360" alt=""/>
                    </div>
                </div>
<!-- wysiwyg 結束 
                 <?php include "../module_component/_site_translation.php";?> -->
                <?php echo $itemss[$pid]['desc'];?>
                <img itemprop="image" data-src="../c/img/sth_asap_m/sample/item-detail.jpg" data-src-retina="../c/img/sth_asap_m/sample/img_420_01.jpg" class="img-lazyload" alt="">
                <img itemprop="image" data-src="../c/img/sth_asap_m/sample/item-detail.jpg" data-src-retina="../c/img/sth_asap_m/sample/img_420_02.jpg" class="img-lazyload" alt="">
            </div>
        </div>
        <!--<div class="spec">
            <h3 class="key">本商品規格<i class="fa fa-angle-double-right"></i></h3>
            <div class="content hide">
                <?php include "../module_component/_site_translation.php";?>
                <?php echo $itemss[$pid]['desc'];?>
            </div>
        </div>-->
    </div>
</article>