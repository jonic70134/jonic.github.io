<div class="pc_index_003">
    <div class="container">
        <ul class="tabs">                     
            <li class="active" data-tab="tab-1">熱銷排行榜</li>                      
            <li data-tab="tab-2">專櫃鞋包3折起</li>
            <li data-tab="tab-3">限時下殺 閃電團購</li>
            <li data-tab="tab-4">超省美妝 好物必搶</li>
            <li data-tab="tab-5">熱門時尚 經典推薦</li>
            <li data-tab="tab-6">顯瘦穿搭look</li>
        </ul>
        <div class="content">
            <div class="items tab-1 active">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time"><b>特賣結束時間：</b>23:59:59</div>
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image"> -->
                        <?php switch ($value['tab']) {
                            case '大材積':
                                echo '<span class="tag-status is-odd">大材積</span>';
                                break;
                            case '北市5h 全台24h':
                                echo '<span class="tag-status is-uitox-5h-delivery">北北桃5h 全台24h</span>';
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price">459999</span>
                        </div>
                         <!--
                        <div class="buy">
                           <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                        </div> -->
                        <div class="buy">
                            <span class="currency">價差↓</span>
                            <span itemprop="price" class="price"> $5999</span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-2">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <div class="time is-come-end"><b>特賣即將結束</b></div>
                    <a href="item.php" class="photo" itemprop="offerurl">
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
                        <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy is-old">
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price">459999</span>
                        </div>
                        <div class="buy">
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                        </div>
                        <div class="buy">
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-3">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <div class="buy">
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                            <span class="currency">NT$</span>
                            <span itemprop="price" class="price"><?php echo $value['price'];?><span class="start">起</span></span>
                            <a href="item.php" class="btn" itemprop="offerurl">搶購<i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="items tab-4">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#">tab4<?php echo $value['name'];?></a></h3>
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
            <div class="items tab-5">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#">tab5<?php echo $value['name'];?></a></h3>
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
            <div class="items tab-6">
                <?php foreach ($itemss as $key => $value) {if($key==5){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <!-- <img src="http://placehold.it/180x180" alt="<?php echo $value['name'];?>" itemprop="image"> -->
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
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                        <div class="discount_tip"></div>
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
        </div>
    </div>
</div>