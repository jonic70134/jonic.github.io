<div class="site-cart hide">
    <div class="list">
        <?php foreach ($cart_items as $key => $value) {?>
        <div class="items">
            <div class="item">
                <?php if($value['images']){?>
                <a href="../front/item.php" class="crop">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['images'];?>">
                </a>
                <?php }else{?>
                <span class="crop-no"></span>
                <?php }?>
                <div class="name"><?php echo $value['name'];?></div>
                <div class="buy">
                    <span class="currency">NT$</span>
                    <span class="price"><?php echo $value['price'];?></span>
                </div>
                <div class="quantity small">
                    <span class="quantity-decrease">-</span>
                    <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                    <span class="quantity-increase">+</span>
                </div>
                <a href="#" class="del"><?php echo $site_cart['del'];?></a>
            </div>
            <?php if($value['type']=="add"){?>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name limited"><?php echo $site_cart['limited'];?></div>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name"><?php echo $site_cart['gift_text'];?></div>
            </div>
            <div class="item">
                <?php if($value['images']){?>
                <a href="../front/item.php" class="crop">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['images'];?>">
                </a>
                <?php }else{?>
                <span class="crop-no"></span>
                <?php }?>
                <div class="name"><?php echo $site_cart['add_text'];?></div>
                <div class="buy">
                    <span class="currency">NT$</span>
                    <span class="price"><?php echo $value['price'];?></span>
                </div>
                <div class="quantity small">
                    <span class="quantity-decrease">-</span>
                    <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                    <span class="quantity-increase">+</span>
                </div>
                <a href="#" class="del"><?php echo $site_cart['del'];?></a>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name"><?php echo $site_cart['buy-discount'];?></div>
                <div class="buy">
                    <span class="currency">-NT$</span>
                    <span class="price">100</span>
                </div>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name full"><span class="tag"><?php echo $site_cart['tag1'];?></span><?php echo $site_cart['tag_text'];?></div>
            </div>
            <?php }?>
            <?php if($value['type']=="combo"){?>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name combo">
                    <p><?php echo $site_cart['combo1'];?></p>
                    <p><?php echo $site_cart['combo2'];?></p>
                    <p><?php echo $site_cart['combo3'];?></p>
                </div>
            </div>
            <?php }?>
        </div>
        <?php }?>
    </div>
    <ul class="cart-sale">
        <li>
            <span class="sale-name"><?php echo $site_cart['sale'];?></span>
            <span class="sale-discount">-NT$200</span>
        </li>
    </ul>
    <div class="cart-actions">
        <span class="total-title"><?php echo $site_cart['total'];?></span>
        <span class="total">
            <span class="currency">NT$</span>
            <span class="price">6990</span>    
        </span>
        <a href="../cart/cart.php" class="button"><?php echo $site_cart['checkOut'];?></a>
    </div>
</div>
