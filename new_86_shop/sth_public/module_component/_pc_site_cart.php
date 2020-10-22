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
                <div class="name">
                    <?php echo $value['name'];?>
                </div>
                <div class="buy">
                    <span class="currency">NT$</span>
                    <span class="price"><?php echo $value['price'];?></span>
                </div>
                <div class="quantity small">
                    <span class="quantity-decrease">-</span>
                    <?php //修正瀏覽器統一樣式?>                    
                    <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">                    
                    <span class="quantity-increase">+</span>
                </div>
                <a href="#" class="del" title="刪除商品"><i class="fa fa-times-circle"></i></a>
            </div>
            <?php if($value['type']=="add"){?>
            <div class="item">
                <div class="labels">
                    <span class="tag-status is-uitox-delivery">北市5h 全台24h</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span>
                    <span class="tag-status is-max-purchase">此商品會員限購1個</span>
                </div>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name">贈品-原廠兩用立架</div>
            </div>
            <div class="item">
                <?php if($value['images']){?>
                <a href="../front/item.php" class="crop">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['images'];?>">
                </a>
                <?php }else{?>
                <span class="crop-no"></span>
                <?php }?>
                <div class="name">加購-Bumper Case 保護殼</div>
                <div class="buy">
                    <span class="currency">NT$</span>
                    <span class="price"><?php echo $value['price'];?></span>
                </div>
                <div class="quantity small">
                    <span class="quantity-decrease">-</span>
                    <?php //修正瀏覽器統一樣式?>
                    <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                    <span class="quantity-increase">+</span>
                </div>
                <a href="#" class="del" title="刪除商品"><i class="fa fa-times-circle"></i></a>
            </div>
            <div class="item">
                <div class="labels lower">
                    <span class="tag-status is-uitox-delivery">北市5h 全台24h</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span>
                    <span class="tag-status is-max-purchase">此商品會員限購1個</span>
                </div>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name">買立折</div>
                <div class="buy">
                    <span class="currency">-NT$</span>
                    <span class="price">100</span>
                </div>
            </div>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name full"><span class="tag">已符合</span>單品滿$50000立折$500</div>
            </div>
            <?php }?>
            <?php if($value['type']=="combo"){?>
            <div class="item">
                <span class="crop-no"></span>
                <div class="name combo">
                    <p>包含下列商品：</p>
                    <p>組合商品A</p>
                    <p>組合商品B</p>
                </div>
            </div>
            <?php }?>
        </div>
        <?php }?>
    </div>
    <ul class="cart-sale">
        <li>
            <span class="sale-name">活動折扣-(滿$2000折200)</span>
            <span class="sale-discount">-NT$200</span>
        </li>
    </ul>
    <div class="cart-actions">
        <span class="total-title">商品合計</span>
        <span class="total">
            <span class="currency">NT$</span>
            <span class="price">6990</span>    
        </span>
        <a href="../cart/cart.php" class="button">結帳</a>
    </div>
</div>
