<div class="site-cart">
    <div class="container">
        <h3 class="title">您選購的商品</h3>
        <div class="items">
        <?php foreach ($cart_items as $key => $value) {?>
            <div class="item">
                <div class="main">
                    <a href="item.php" class="photo ga_tracking" data-category="<?php echo $sitePage;?>" data-action="image" data-label="<?php echo $value['name'];?> - 圖片">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                    </a>
                    <p class="name"><?php echo $value['name'];?></p>
                    <p class="attr">藍色 / XL</p>
                    <i class="fa fa-times ga_tracking" data-category="<?php echo $sitePage;?>" data-action="del" data-label="<?php echo $value['name'];?> - 移除"></i>
                </div>
                <div class="info">
                    <?php include "../component/_quantity.php";?>
                    <div class="line">
                        <div class="key">單價：</div>
                        <div class="value">NT$<?php echo $value['price'];?></div>
                    </div>
                    <div class="line red-text">
                        <div class="key">小計：</div>
                        <div class="value price">NT$<?php echo $value['price'];?></div>
                    </div>
                    <?php if($value['type']=="gift"){?>
                    <div class="line">
                        <div class="key">贈品：</div>
                        <div class="value">原廠兩用立架</div>
                    </div>
                    <?php }?>
                    <?php if($value['type']=="combo"){?>
                    <div class="line combo">

                        <div class="key">包含以下組合商品：</div>
                        <div class="value">組合商品A</div>
                        <div class="value">組合商品B</div>
                    </div>
                    <?php }?>
                    <?php if(isset($value['tab'])){?>
                    <div class="line">
                        <div class="labels">
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
                                case '限購':
                                    echo '<span class="tag-status is-max-purchase">此商品會員限購1個</span>';
                                    break;
                                default:
                                    # code...
                                    break;
                            }?>
                        </div>
                    </div>
                    <?php }?>
                    <?php if(isset($value['sale'])){?>
                    <div class="line act">
                        <div class="key">單品滿NT$50000立折NT$500</div>
                        <div class="value price">-NT$500</div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php //如果有加購品?>
            <?php if($value['type']=="add"){?>
            <div class="item add">
                <div class="main">
                    <a href="item.php" class="photo ga_tracking" data-category="<?php echo $sitePage;?>" data-action="image" data-label="<?php echo $value['name'];?> - 圖片">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                    </a>
                    <p class="name">加購商品</p>
                    <i class="fa fa-times ga_tracking" data-category="<?php echo $sitePage;?>" data-action="del" data-label="<?php echo $value['name'];?> - 移除"></i>
                </div>
                <div class="info">
                    <?php include "../component/_quantity.php";?>
                    <div class="line">
                        <div class="key">單價：</div>
                        <div class="value">NT$<?php echo $value['price'];?></div>
                    </div>
                    <div class="line red-text">
                        <div class="key">小計：</div>
                        <div class="value price">NT$<?php echo $value['price'];?></div>
                    </div>
                    <?php if($value['type']=="gift"){?>
                    <div class="line">
                        <div class="key">贈品：</div>
                        <div class="value">原廠兩用立架</div>
                    </div>
                    <?php }?>
                    <?php if(isset($value['tab'])){?>
                    <div class="line">
                        <div class="labels">
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
                                case '限購':
                                    echo '<span class="tag-status is-max-purchase">此商品會員限購1個</span>';
                                    break;
                                default:
                                    # code...
                                    break;
                            }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php }?>
            <?php //如果是組合商品?>
        <?php }?>
        </div>
        <div class="block">
            <div class="end">
                <div class="line">
                    <div class="key"><?php echo $site_cart['sale'];?></div>
                    <div class="value">-NT$200</div>
                </div>
                <div class="line">
                    <div class="key">運費(滿NT$490免運)</div>
                    <div class="value">NT$80</div>
                </div>
                <div class="line red-text">
                    <div class="key">商品合計：</div>
                    <div class="value">NT$<?php echo $value['price'];?></div>
                </div>
            </div>
            <div class="actions">
                <a href="#" class="button large ga_tracking" data-category="<?php echo $sitePage;?>" data-action="checkout" data-label="結帳">結帳</a>
            </div>
        </div>
        
    </div>
</div>

<div class="site-cart-empty hide">
    <div class="container">
        您的購物車還沒有商品<br>歡迎選購！
        <button class="button large ga_tracking" data-category="<?php echo $sitePage;?>" data-action="buymore" data-label="繼續選購">繼續選購</button>
    </div>
</div>