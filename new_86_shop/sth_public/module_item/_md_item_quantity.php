        <div class="quantity large">
            <button class="btn-quantity btn-decrease">-</button>
            <input type="number" class="quantity-input" value="1" min="1" max="10" inputmode="numeric" pattern="[0-9]*" placeholder="1">
            <button class="btn-quantity btn-increase">+</button>
        </div>
        <?php if(isset($_GET['type'])){ switch ($_GET['type']) {//按鈕型態
            default:
                echo '<button itemprop="offerurl" class="btn-addcart large">加入購物車</button>';
                break;
            case 'btn-preorder':
                echo '<button itemprop="offerurl" class="btn-addcart btn-preorder large">立即預訂</button>';
                break;
            case 'btn-preorder-finish':
                echo '<p class="btn-preorder-finish large">預購結束</p>';
                break;
            case 'btn-rush':
                echo '<button itemprop="offerurl" class="btn-addcart btn-rush large">立即搶購</button>';
                break;
            case 'btn-rush-finish':
                echo '<p class="btn-rush-finish large">搶購一空</p>';
                break;
            case 'btn-discount':
                echo '<button itemprop="offerurl" class="btn-discount large">買立折</button>';
                break;
            case 'btn-soldout-stock':
                echo '<p class="btn-soldout-stock large">售完補貨中</p>';
                break;
            case 'btn-soldout':
                echo '<p class="btn-soldout large">已售完</p>';
                break;
            case 'btn-to-sale':
                echo '<p class="btn-to-sale large">即將開賣</p>';
                break;
            case 'btn-addcart':
                echo '<button itemprop="offerurl" class="btn-addcart large">加入購物車</button>';
                break;
        }}else{?>
            <button itemprop="offerurl" class="btn-addcart large">加入購物車</button>
        <?php }?>
        <?php if($itemsfee){?>
        <div class="item-fee">
            <i class="fa fa-plane"></i> 處理費(配送到府)：<button class="btn-fee" onclick="$('.price-fee').show();$(this).hide();">計算</button>
            <span class="price-fee" style="display:none;"><span itemprop="priceSpecification"><span itemprop="priceCurrency" content="TWD">NT$</span>9,999</span></span>
        </div>
        <?php ;}?>
        <div class="t-common">
            <p>會員限購1個(剩餘數量：9999)</p>
            <p class="t-red">預計出貨日：2014/05/16</p>
            <p class="t-red"><span>已預訂數量：90</span><span>剩餘數量：60</span></p>
        </div>
        <div class="social-plugins">
            <div class="each_plugin">
                <a id="facebook" type="0" href="javascript:;">
                    <img src="../c/img/frame/facebook_icon.png"/>
                </a>
                <a id="twitter" type="1" name="fb_share" target="_blank" href="javascript:;">
                    <img src="../c/img/frame/twitter_icon.png"/>
                </a>
                <a id="line" type="1" name="fb_share" target="_blank" href="javascript:;">
                    <img src="../c/img/frame/line_icon.png"/>
                </a>
            </div>
        </div>