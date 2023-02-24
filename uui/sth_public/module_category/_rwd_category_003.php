<div class="rwd-category-003">
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){if($key==1){break;} ?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <img src="<?php echo $value['images'];?>" alt="">
                </a>
                <figcaption class="info">
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <span class="currency">NT$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    <div class="buy-actions">
                        <?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){?>
                        <div class="quantity">
                            <span class="quantity-decrease">-</span>
                            <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                            <span class="quantity-increase">+</span>
                        </div>
                        <?php }?>
                        <?php switch ($value['type']) {//按鈕型態
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
                        }?>
                        <!-- <?php if($itemss[$pid]['type']=="btn-preorder" || $itemss[$pid]['type']=="btn-addcart" || $itemss[$pid]['type']=="btn-discount" || $itemss[$pid]['type']==""){?> -->
                        <div class="highlight">
                            <p><?php echo $L10n_item['highlight1'];?></p>                            
                            <p class="red-text"><?php echo $L10n_item['highlight2'];?></p>
                        </div>
                        <?php }?>
                    </div>
                </figcaption>
            </figure>
            <?php } ?>
            <div class="item-block">
            <?php foreach ($category_items as $key => $value){if($key==3){break;} ?>
            
                <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" itemprop="offerurl" class="photo">
                        <img src="<?php echo $value['images'];?>" alt="">
                    </a>
                    <figcaption class="info">
                        <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <div class="buy-actions">
                            <?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){?>
                            <div class="quantity">
                                <span class="quantity-decrease">-</span>
                                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                                <span class="quantity-increase">+</span>
                            </div>
                            <?php }?>
                            <?php switch ($value['type']) {//按鈕型態
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
                            }?>
                            <!-- <?php if($itemss[$pid]['type']=="btn-preorder" || $itemss[$pid]['type']=="btn-addcart" || $itemss[$pid]['type']=="btn-discount" || $itemss[$pid]['type']==""){?> -->
                            <div class="highlight">
                                <p><?php echo $L10n_item['highlight1'];?></p>                            
                                <p class="red-text"><?php echo $L10n_item['highlight2'];?></p>
                            </div>
                            <?php }?>
                        </div>
                    </figcaption>
                </figure>            
            <?php } ?>
            </div>
        </div>
    </div>
</div>