<div class="item-main">
    <div class="container">
        <div itemscope itemtype="http://data-vocabulary.org/Product">
            <div class="subheading">                
                <img src="http://placehold.it/1000x400">
                <p></p>
            </div>           
            
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
                <div class="sale">
                    <span itemprop="priceValidUntil"><?php echo $L10n_item['sale_title'];?>05/01 20:00 ~ 05/02 20:00</span>
                    <span><?php echo $L10n_item['sale_price'];?>$4990</span>
                </div>
                <div class="sale">
                    <span itemprop="priceValidUntil"><?php echo $L10n_item['sale_title'];?>05/01 20:00 ~ 05/02 20:00</span>
                    <span><?php echo $L10n_item['sale_price'];?>$4990</span>
                </div>
                <div class="sale count">
                    <b><?php echo $L10n_item['sale_count'];?></b>
                    <div class="time">
                        23:59:59
                    </div>
                    <b class="bought">9999<?php echo $L10n_item['sale_people'];?></b>
                </div>
                <a href="javascript:void(0);" itemprop="offerurl" class="button btn-follow-list">加入追蹤清單</a>
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
                <?php if(isset($itemss[$pid]['desc'])){?>
                <!-- <div class="line">
                    <div class="key"><?php echo $L10n_item['desc'];?></div>
                    <div class="value">
                        <p class="desc" itemprop="description"><?php echo $itemss[$pid]['desc'];?></p>
                    </div>
                </div> -->
                <?php }?>
                <div class="line">
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
                <div class="line">
                    <div class="key"><?php echo $L10n_item['spec'];?></div>
                    <ul class="value">
                        <li itemprop="model" class="active"><i class="fa fa-check"></i>11</li>
                        <li itemprop="model" class="disabled" title="已售完"><i class="fa fa-times-circle"></i>12</li>
                        <li itemprop="model" >13</li>
                    </ul>
                </div>
                <div class="line">
                    <div class="key"><?php echo $L10n_item['include'];?></div>
                    <div class="value">
                        <span class="name"><?php echo $L10n_item['include_item'];?></span>
                        <select>
                            <option><?php echo $L10n_item['spec_text'];?></option>
                        </select>
                    </div>
                    <div class="value">
                        <span class="name"><?php echo $L10n_item['include_item'];?></span>
                        <select>
                            <option><?php echo $L10n_item['spec_text'];?></option>
                        </select>
                    </div>
                </div>
                <?php if(isset($itemss[$pid]['gift'])){?>
                <div class="line">
                    <div class="key"><?php echo $L10n_item['gift'];?><!-- <br>任選一件 --></div>
                    <div class="value">
                        <?php foreach ($itemss[$pid]['gift'] as $key => $items){ ?>
                        <div class="item">
                            <input type="checkbox" id="gift-<?php echo $key;?>" name="gift" class="pick">
                            <label for="gift-<?php echo $key;?>" class="label">
                                <?php //echo $items;?>
                                <?php echo $L10n_item['gift_text'];?>
                            </label>
                            <a href="../module_component/_site_fancybox_all.php #fancybox-image" class="link fancybox fancybox.ajax" title="贈品名稱"><?php echo $L10n_item['gift_photo'];?></a>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
                <div class="line">
                    <div class="key"><?php echo $L10n_item['high_price'];?></div>
                    <div class="value">
                        <del>
                            <span itemprop="currency">NT$</span>
                            <span itemprop="highPrice">99,999,999</span>
                        </del>
                    </div>
                </div>
                <div class="line">
                    <div class="key"><?php echo $L10n_item['price'];?></div>
                    <div class="buy"> 
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price">88888888</span>
                        <div class="quantity">
                            <span class="quantity-decrease">-</span>
                            <?php //修正瀏覽器統一樣式?>                            
                            <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">                            
                            <span class="quantity-increase">+</span>
                        </div>
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
                        <?php if($itemss[$pid]['type']=="btn-preorder" || $itemss[$pid]['type']=="btn-addcart" || $itemss[$pid]['type']=="btn-discount" || $itemss[$pid]['type']==""){?>
                        <div class="arrival-info-btn"><button itemprop="offerurl" class="button btn-arrival">貨到通知</button></div>
                        <div class="highlight">
                            <p><?php echo $L10n_item['highlight1'];?><span class="red-text"><?php echo $L10n_item['highlight2'];?></span></p>
                            <p class="red-text"><span>已預訂數量：90</span><span itemprop="quantity">剩餘數量：60</span></p>                        
                        </div>
                        <?php }?>
                    </div>
                </div>                                   
                <div class="line">
                    <div class="social-plugins">
                    <!-- facebook social button -->
                        <div class="facebook each_plugin">
                        <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=179989302080121&version=v2.0";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                        </div>
                    <!-- google plus social button -->
                        <div class="google each_plugin">
                            <div class="g-plusone" data-size="medium"></div>
                            <script src="https://apis.google.com/js/platform.js" async defer>
                                {lang: 'zh-TW'}
                            </script>
                        </div>
                    <!-- plurk social button -->
                        <div class="plurk each_plugin">
                            <a title="Share to Plurk" href="javascript:void(window.open('http://www.plurk.com/?qualifier=shares&status='.concat(encodeURIComponent(window.location.href)).concat(' ').concat('(').concat(encodeURIComponent(document.title)).concat()));">
                                <img title="share" src="http://s.plurk.com/2980c7bcb4eb012159e7701a61cb2e75.png" width="auto" height="20" align="absmiddle" border="0" />
                            </a>
                        </div>
                     <!-- twitter tweet button -->
                        <div class="twitter each_plugin">
                            <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>