<div class="pc_market_list">
    <div class="container">
        <h3 class="title-h3">標題</h3>
        <div class="items">
            <?php foreach ($category_items as $key => $value){ ?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <?php switch ($value['tab']) {
                        case '大材積':
                            echo '<span class="tag-status is-odd">大材積</span>';
                            break;
                        case 'uitox出貨':
                            echo '<span class="tag-status is-uitox-delivery">uitox出貨</span>';
                            break;
                        case '廠商出貨':
                            echo '<span class="tag-status is-vendor-delivery">廠商出貨</span>';
                            break;
                        case '分開到貨':
                            echo '<span class="tag-status is-separate-delivery">分開到貨</span>';
                            break;
                        case '日本直送':
                            echo '<span class="tag-status is-imported">日本直送</span>';
                            break;
                        default:
                            # code...
                            break;
                    }?>
                    <img src="<?php echo $value['images'];?>" alt="">
                    <div class="discount_tip"></div>
                </a>
                <div class="info">
                    <h1 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h1>
                    <div class="buy">
                        <del>
                            <span itemprop="currency">NT$</span>
                            <span itemprop="highPrice">99,999,999</span>
                        </del>
                        <span class="currency">NT$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                        <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>