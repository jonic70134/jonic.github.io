<div class="item-main_002">
    <div class="container">
        <div itemscope itemtype="http://data-vocabulary.org/Product">
            <div class="item-main-left">
                <div class="swiper-container item-slider-001">
                    <div class="swiper-wrapper">
                        <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                        <div class="swiper-slide">
                            <div class="photo">
                                <img itemprop="image" src="<?php echo $value['images'];?>" alt="" class="photo-main">                    
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="arrow arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="arrow arrow-right"><i class="fa fa-angle-right"></i></div>
                    <div class="pagination"></div>
                </div>
                <div class="photo-other">
                    <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                    <img itemprop="image" src="<?php echo $value['images'];?>" alt="">
                    <?php }?>
                </div>                
            </div>

            <div class="info">                
                <h1 itemprop="name" class="name"><?php echo $itemss[$pid]['name'];?></h1>
                <?php if(isset($itemss[$pid]['feature'])){?>
                <ul class="feature">
                    <?php foreach ($itemss[$pid]['feature'] as $items){ ?>
                    <li>
                        <?php echo $items;?>
                    </li>
                    <?php }?>
                </ul>
                <?php }?>
                <div class="price-box">
                    <del>
                        <span itemprop="currency">NT$</span>
                        <span itemprop="highPrice">99,999,999</span>
                    </del>
                    <span class="currency">NT$</span>
                    <span itemprop="price" class="price">88888888</span>
                </div>
                <div class="line">
                    <div class="key">數量：</div>
                    <select name="" class="quantity-s">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                    </select>
                </div>
                <div class="line">                        
                    <div class="buy">
                        <?php if(isset($_GET['type'])){ switch ($_GET['type']) {//按鈕型態
                            case 'btn-preorder':
                                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-preorder">'.$btn['btn-preorder'].'</a>';
                                break;
                            case 'btn-preorder-finish':
                                echo '<p class="button large btn-preorder-finish">'.$btn['btn-preorder-finish'].'</p>';
                                break;
                            case 'btn-rush':
                                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-rush">'.$btn['btn-rush'].'</a>';
                                break;
                            case 'btn-rush-finish':
                                echo '<p class="button large btn-rush-finish">'.$btn['btn-rush-finish'].'</p>';
                                break;
                            case 'btn-discount':
                                echo '<a href="../module_component/_site_fancybox_all.php #fancybox-buy-discount" itemprop="offerurl" class="button large btn-discount fancybox fancybox.ajax">'.$btn['btn-discount'].'</a>';
                                break;
                            case 'btn-soldout-stock':
                                echo '<p class="button large btn-soldout-stock">'.$btn['btn-soldout-stock'].'</p>';
                                break;
                            case 'btn-soldout':
                                echo '<p class="button large btn-soldout">'.$btn['btn-soldout'].'</p>';
                                break;
                            case 'btn-to-sale':
                                echo '<p class="button large btn-to-sale">'.$btn['btn-to-sale'].'</p>';
                                break;
                            case 'btn-select':
                                echo '<a href="../module_component/_site_fancybox_all.php #fancybox-select" class="button large btn-select fancybox fancybox.ajax">'.$btn['btn-select'].'</a>';
                                break;
                            case 'btn-addcart':
                                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">'.$btn['btn-addcart'].'</a>';
                                break;
                            default:
                                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">'.$btn['btn-addcart'].'</a>';
                                break;
                        }}else{?>
                            <button itemprop="offerurl" class="button large btn-addcart"><?php echo $btn['btn-addcart'];?></button>
                        <?php }?>
                    </div>
                </div>
                <div class="line">
                    <ul class="follow-share">
                        <li>
                            <?php if($itemss[$pid]['type']=="btn-preorder" || $itemss[$pid]['type']=="btn-addcart" || $itemss[$pid]['type']=="btn-discount" || $itemss[$pid]['type']==""){?>
                            <a itemprop="offerurl" class="button btn-arrival">貨到通知</a>
                            <?php }?>
                        </li>
                        <li>
                            <a href="javascript:void(0);" itemprop="offerurl" class="button btn-follow-list">加入追蹤清單</a>
                        </li>
                        <li>
                            <div class="social-plugins">
                                <div class="twitter each_plugin">
                                    <a id="twitter" type="0" href="javascript:;">
                                        <img src="http://philips-eshop.com/c/img/frame/seagame/twitter_icon.png">
                                    </a>
                                </div>
                                <div class="facebook each_plugin">
                                    <a id="facebook" type="1" name="fb_share" target="_blank" href="javascript:;">
                                        <img src="http://philips-eshop.com/c/img/frame/seagame/facebook_icon.png">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="line i-spec">
                    <div class="key"><?php echo $L10n_item['color'];?></div>
                    <ul class="value">
                        <!-- 圖片大小60x60px -->
                        <li itemprop="color" class="img disabled" title="已售完"><i class="fa fa-times-circle"></i><img src="../c/img/sample/color_purple.png" alt="顏色" title="顏色"></li>
                        <li itemprop="color" class="img"><img src="../c/img/sample/color_white.png" alt="顏色" title="顏色"></li>
                        <li itemprop="color" class="img"><img src="../c/img/sample/color_red.png" alt="顏色" title="顏色"></li>
                        <li itemprop="color" class="img"><img src="../c/img/sample/color_green.png" alt="顏色" title="顏色"></li>
                        <li itemprop="color" class="img active"><i class="fa fa-check"></i><img src="../c/img/sample/color_orange.png" alt="顏色" title="顏色"></li>
                        <li itemprop="color">顏色文字</li>
                    </ul>
                </div>
                <div class="line i-spec">
                    <div class="key"><?php echo $L10n_item['spec'];?></div>
                    <ul class="value">
                        <li itemprop="model" class="active"><i class="fa fa-check"></i>11</li>
                        <li itemprop="model" class="disabled" title="已售完"><i class="fa fa-times-circle"></i>12</li>
                        <li itemprop="model" >13</li>
                    </ul>
                </div>
                <div class="line i-detail">
                    <ul>
                        <li>
                            <h3 class="i-d-title i-d-active">寄送與聯絡資訊</h3>
                            <div class="i-d-content i-d-active">
                                寄送時間：台北市5小時到貨，全台灣24小時到貨，週末假日照常出貨。例外說明<br>
                                送貨方式：透過宅配送達或至超商取貨<br>
                                送貨範圍：限台灣本島
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>