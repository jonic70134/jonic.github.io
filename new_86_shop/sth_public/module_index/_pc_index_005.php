<div class="pc_index_004">
    <div class="container">
        <?php if($edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-item.html"><i class="fa fa-pencil"></i>編輯</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除區塊</button>
            <div class="edit-sort"><i class="fa fa-arrows-v"></i>排序<input class="input-sort" size="3" value="3"></div>
            <button class="btn-create go-popup" data-width="800" data-href="/inside/popup/modify-add-block.html"><i class="fa fa-plus"></i>新增區塊</button>
            <div class="tooltip">熱門主題廣告區：可設定5則廣告</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <div class="block">
            <div class="items">
                <?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/160x160" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
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
                <?php }?>
            </div>
            <a href="#" class="photo-long">
                <!-- <img src="http://placehold.it/220x500" alt=""> -->
                <img src="../c/img/sth_asap/sample/theme_long_02.jpg" alt="">
            </a>
        </div>
    </div>
</div>