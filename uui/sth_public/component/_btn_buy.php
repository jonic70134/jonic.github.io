<?php switch ($value['type']) {//10種按鈕型態
    case 'btn-preorder':
        echo '<a href="javascript:void(0);" itemprop="offerurl" class="button btn-preorder">立即預訂</a>';
        break;
    case 'btn-preorder-finish':
        echo '<p class="button btn-preorder-finish">預購結束</p>';
        break;
    case 'btn-rush':
        echo '<a href="javascript:void(0);" itemprop="offerurl" class="button btn-rush">立即搶購</a>';
        break;
    case 'btn-rush-finish':
        echo '<p class="button btn-rush-finish">搶購一空</p>';
        break;
    case 'btn-discount':
        echo '<a href="../module_component/_site_fancybox_all.php #fancybox-buy-discount" itemprop="offerurl" class="button btn-discount fancybox fancybox.ajax">買立折</a>';
        break;
    case 'btn-soldout-stock':
        echo '<p class="button btn-soldout-stock">售完，補貨中</p>';
        break;
    case 'btn-soldout':
        echo '<p class="button btn-soldout">已售完</p>';
        break;
    case 'btn-to-sale':
        echo '<p class="button btn-to-sale">即將開賣</p>';
        break;
    case 'btn-select':
        echo '<a href="../module_component/_md_site_fancybox_asap.php?siteName=' . $siteName . '#item_main" class="button btn-select fancybox fancybox.iframe">請選擇尺寸</a>';
        break;
    case 'btn-addcart':
        echo '<a href="javascript:void(0);" itemprop="offerurl" class="button btn-addcart">加入購物車</a>';
        break;
    default:
        echo '<a href="javascript:void(0);" itemprop="offerurl" class="button btn-addcart">加入購物車</a>';
        break;
}?>