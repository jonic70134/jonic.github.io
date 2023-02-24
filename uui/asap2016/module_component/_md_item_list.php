            <figure class="md-list-item" itemscope itemtype="http://schema.org/Product">
                <?php if($sitePage=='ontime'){//整點特惠頁?><span class="t-ontime-clock t-digital-numbers"><?php echo sprintf('%02d',$i+9); ?>:00</span><?php ;}?>
                <?php if($lazyload){//圖片lazyload?>
                <a href="item.php" itemprop="offerURL" class="photo photo-lazyload">
                    <img data-src="<?php echo $value['images-tiny'];?>" data-src-retina="<?php echo $value['images'];?>" class="img-item img-lazyload" alt="<?php echo $value['name'];?>">
                </a>
                <?php } else {//圖片不lazyload(eg. slideshow)?>
                <a href="item.php" itemprop="offerURL" class="photo">
                    <img src="<?php echo $value['images-tiny'];?>" class="img-item" alt="<?php echo $value['name'];?>">
                </a>
                <?php ;}?>
                <figcaption class="info">
                    <p class="name" itemprop="name">
                        <a href="item.php" itemprop="offerURL"><?php echo $value['name'];?></a>
                    </p>
                    <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <?php if($sitePage=='activity' && $cart){//限時特賣頁購物車?>
                            <div class="quantity">
                                <button class="btn-quantity btn-decrease">-</button>                                
                                <input type="number" class="quantity-input" value="1" min="1" max="99" inputmode="numeric" pattern="[0-9]*" placeholder="1">
                                <button class="btn-quantity btn-increase">+</button>
                            </div>
                            <button class="btn-del"><i class="fa fa-times"></i>刪除</button>
                            <?php ;} else if($sitePage=='activity' && !$cart){//限時特賣頁列表?>
                            <span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span>
                            <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span><?php echo $value['price'];?></span>
                            <button class="btn-addcart" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>
                            <?php ;} else if($sitePage=='index'||$sitePage=='ontime'){//首頁or整點特惠頁?>
                            <span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span>
                            <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span><?php echo $value['price'];?></span>
                            <button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>
                            <?php } else {?>
                            <span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span>
                            <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span><?php echo $value['price'];?></span>
                            <?php switch($key){//按鈕型態
                                default:
                                    echo '<button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>';
                                    break;
                                case 0:
                                    echo '<button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購<i class="fa fa-chevron-circle-right"></i></button>';
                                    break;
                                case 1:
                                    echo '<button class="btn-preorder" onclick="location.href=\'item.php?type=btn-preorder\'" itemprop="offerURL">立即預訂<i class="fa fa-chevron-circle-right"></i></button>';
                                    break;
                                case 2:
                                    echo '<p class="btn-preorder-finish">預購結束</p>';
                                    break;
                                case 3:
                                    echo '<button class="btn-rush" onclick="location.href=\'item.php?type=btn-rush\'" itemprop="offerURL">立即搶購<i class="fa fa-chevron-circle-right"></i></button>';
                                    break;
                                case 4:
                                    echo '<p class="btn-rush-finish">搶購一空</p>';
                                    break;
                                case 5:
                                    echo '<button class="btn-discount" onclick="location.href=\'item.php?type=btn-discount\'" itemprop="offerURL">買立折<i class="fa fa-chevron-circle-right"></i></button>';
                                    break;
                                case 6:
                                    echo '<p class="btn-soldout-stock">售完補貨中</p>';
                                    break;
                                case 7:
                                    echo '<p class="btn-soldout">已售完</p>';
                                    break;
                                case 8:
                                    echo '<p class="btn-to-sale">即將開賣</p>';
                                    break;
                            }?>
                            <?php ;}?>
                      </div>
                </figcaption>               
           </figure>