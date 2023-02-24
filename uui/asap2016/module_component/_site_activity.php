<div class="site-activity">
    <div class="container">
        <div class="act-info" id="activity_info">
            <?php if($act!='true'){//尚未開始?>
            <h3>
                <span class="not">特賣即將開始</span>
                <span class="act-title">東京著衣滿1000 折 100</span>
                <hr>
                <p class="date">2014/02/27 00:00 ~ 2014/03/08 00:00</p>
            </h3>
            <div class="desc">
                <p class="act-content">指定商品滿$1000，立折$100</p>
                <p class="tip">*每單僅能參加1次，每個帳號不限次數，活動商品隨時更新，以下單時為準</p>
            </div>
            <?php }else{//限時特賣中?>
            <h3>
                <span class="ready">限時特賣中</span>
                <span class="act-title">東京著衣滿1000 折 100</span>
                <hr>
                <p class="date">2014/02/27 00:00 ~ 2014/03/08 00:00</p>
            </h3>
            <div class="desc">
                <p class="act-content">指定商品滿$1000，立折$100</p>
                <p class="tip">*每單僅能參加1次，每個帳號不限次數，活動商品隨時更新，以下單時為準</p>
            </div>
        </div>
        <div class="act-cart" id="activity_cart">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php foreach ($items as $key => $value) {?>
                    <div class="swiper-slide">
                        <a href="#" class="photo">
                            <img src="<?php echo $value['images'];?>" alt="">
                        </a>
                        <div class="info">
                            <h1 class="name"><?php echo $value['name'];?> <?php echo $value['name'];?></h1>
                            <div class="line">
                                <span class="currency">NT$</span>
                                <span class="price"><?php echo $value['price'];?></span>
                            </div>
                            <div class="quantity small">
                                <span class="quantity-decrease">-</span>
                                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                                <span class="quantity-increase">+</span>
                            </div>
                            <a href="#" class="btn-del">刪除</a>
                        </div>
                    </div>
                <?php }?>
                </div>
                <a class="swiper-left" href="#"><</a>
                <a class="swiper-right" href="#">></a>
            </div>
            <div class="state">
                <div id="progress-bar-static" class="progress-bar-static">
                    <div class="inner-bar" data-state="100"></div>
                    <span class="note hidden-mobile hidden-table">還差 <span class="price">NT$200</span></span>
                    <span class="note-finish hidden-mobile hidden-table hide">已達成條件</span>
                </div>
                <p class="tip">已選購<span class="red-text"> 4件 </span>商品：</p>
                <p class="note hidden-desktop">還差 <span class="price">NT$200</span></p>
                <p class="note-finish hidden-desktop hide">已達成條件</p>
                <div id="actActions" class="actions">
                    <span class="current">目前累計金額：</span><span class="price">NT$800</span>
                    <a href="#" class="button">查看購物車</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>