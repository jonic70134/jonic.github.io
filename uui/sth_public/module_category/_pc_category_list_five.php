<div class="pc_category_list_five"><!-- 後面增加 class name 'item-list' 調整為一行3個區塊 -->
    <div class="container">
        <div class="items">
            <?php foreach ($category_items as $key => $value){ ?>
            <div itemscope itemtype="http://data-vocabulary.org/Product" class="item is-border-none">
                <a href="item.php" itemprop="offerurl" class="photo">
                    <?php switch ($value['tab']) {
                        case '大材積':
                            echo '<span class="tag-status is-odd">大材積</span>';
                            break;
                        case '北市5h 全台24h':
                            echo '<span class="tag-status is-uitox-delivery">北市5h 全台24h</span>';
                            break;
                        case '廠商出貨 約2-7日':
                            echo '<span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>';
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
                    <h1 itemprop="name" class="name"><a href="item.php"><?php echo $value['name'];?></a></h1>
                    <span class="type">網路價</span>
                    <span class="currency">NT$</span>
                    <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>