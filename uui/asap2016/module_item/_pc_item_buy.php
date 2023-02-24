<div class="pc-item-buy">
    <div class="container">
        <div class="quantity">
            <span class="quantity-decrease">-</span>
            <?php //修正瀏覽器統一樣式?>
            <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
            <span class="quantity-increase">+</span>
        </div>
        <?php if(isset($_GET['type'])){ switch ($_GET['type']) {//按鈕型態
            case 'btn-preorder':
                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-preorder">立即預訂</a>';
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
                echo '<a href="../module_component/_site_fancybox_all.php #fancybox-select" class="button large btn-select fancybox fancybox.ajax">請選擇尺寸</a>';
                break;
            case 'btn-addcart':
                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                break;
            default:
                echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                break;
        }}else{?>
            <button itemprop="offerurl" class="button large orange2">立即購買</button>
            <button itemprop="offerurl" class="button large btn-addcart">加入購物車</button>
        <?php }?>
    </div>
</div>