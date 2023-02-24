<div class="pc-item-add">
    <div class="container">
        <h3 class="title-h3">加購商品</h3>
        <div class="items">
            <?php foreach ($itemss as $key => $value) {if($key==4){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="checkbox">
                    <input class="input-checkbox" type="checkbox" value="" check="0" id="<?php echo $value['add_id'];?>">
                </div>
                <label for="<?php echo $value['add_id'];?>" class="photo" title="商品圖預覽">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                </label>
                <figcaption class="info">
                    <h1 itemprop="name" class="name">
                        <label for="<?php echo $value['add_id'];?>" title="商品圖預覽">
                            <?php echo $value['name'];?>
                        </label>
                    </h1>
                    <select name="" id="" class="spec">
                        <option value="">請選擇規格</option>
                    </select>
                    <div class="quantity small">
                        <span class="quantity-decrease">-</span>
                        <?php //修正瀏覽器統一樣式?>
                        <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                        <span class="quantity-increase">+</span>
                    </div>
                    <div class="buy">
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                </figcaption>
            </figure>
            <?php }?>
        </div>
        <div class="add-actions">
            <div class="quantity">
                <span class="quantity-decrease">-</span>
                <?php //修正瀏覽器統一樣式?>
                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                <span class="quantity-increase">+</span>
            </div>
            <!--<?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){?>
            <div class="quantity">
                <span class="quantity-decrease">-</span>
                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                <span class="quantity-increase">+</span>
            </div>
            <?php }?>-->
            <?php if(isset($_GET['type'])){ switch ($_GET['type']) {//6種按鈕型態
                case 'btn-preorder':
                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-preorder">立刻預訂</a>';
                    break;
                case 'btn-preorder-finish':
                    echo '<p class="button large btn-preorder-finish">預購結束</p>';
                    break;
                case 'btn-rush':
                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-rush">立即搶購</a>';
                    break;
                case 'btn-rush-finish':
                    echo '<p class="button large btn-rush-finish">搶購一空</p>';
                    break;
                case 'btn-discount':
                    echo '<a href="../module_component/_site_fancybox_all.php #fancybox-buy-discount" itemprop="offerurl" class="button large btn-discount fancybox fancybox.ajax">買立折</a>';
                    break;
                case 'btn-soldout-stock':
                    echo '<p class="button large btn-soldout-stock">售完，補貨中</p>';
                    break;
                case 'btn-soldout':
                    echo '<p class="button large btn-soldout">已售完</p>';
                    break;
                case 'btn-to-sale':
                    echo '<p class="button large btn-to-sale">即將開賣</p>';
                    break;
                case 'btn-select':
                    echo '<a href="javascript:void(0);" class="button large btn-select">加入購物車</a>';
                    break;
                case 'btn-addcart':
                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                    break;
                default:
                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                    break;
            }}else{?>
                <button itemprop="offerurl" class="button large btn-addcart">加入購物車</button>
            <?php }?>
            <div class="highlight">
                <p>每個會員限購1個(剩餘數量：9999)</p>
                <p class="red-text">預計出貨日：2014/05/16</p>
                <p class="red-text"><span>已預訂數量：90</span><span>剩餘數量：60</span></p>
            </div>
            <!--<?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount" || $value['type']==""){?>
            <div class="highlight">
                <p>每個會員限購1個(剩餘數量：9999)</p>
                <p class="red-text">預計出貨日：2014/05/16</p>
            </div>
            <?php }?>-->
        </div>
    </div>
</div>