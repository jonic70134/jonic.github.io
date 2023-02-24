<div class="site-activity">
    <div class="container">
        <div class="act-info" id="activity_info">
            <?php if($act!='true'){//尚未開始?>
            <h3>
                <span class="not">特賣即將開始</span>
                <span class="act-title">筆記型電腦加贈購物金</span>
                <!-- hr -->
                <span class="date">(2016/07/01 00:00 ~ 2016/07/15 23:59)</span>
            </h3>
            <div class="desc">
                <p class="act-content">滿 NT$5000 送 500 點購物金；滿 NT$10000 送 1000點購物金；滿 NT$20000 送 2000點購物金；NT$20000 送 2000點購物金；NT$20000 送 2000點購物金；</p>
                <p class="tip">*每單不累積贈送，每個帳號不限次數，活動商品隨時更新，以下單時為準。贈送點數將於 <em class="t-red">2016/07/25</em> 給點，若商品退貨未達門檻將取消給點。</p>
            </div>
            <?php }else{//限時特賣中?>
            <h3>
                <span class="ready">限時特賣中</span>
                <span class="act-title">筆記型電腦加贈購物金</span>
                <!-- hr -->
                <span class="date">(2016/07/01 00:00 ~ 2016/07/15 23:59)</span>
            </h3>
            <div class="desc">
                <p class="act-content">滿 NT$5000 送 500 點購物金；滿 NT$10000 送 1000點購物金；滿 NT$20000 送 2000點購物金；NT$20000 送 2000點購物金；NT$20000 送 2000點購物金；</p>
                <p class="tip">*每單不累積贈送，每個帳號不限次數，活動商品隨時更新，以下單時為準。贈送點數將於 <em class="t-red">2016/07/25</em> 給點，若商品退貨未達門檻將取消給點。</p>
            </div>
        </div>
        <div class="act-cart" id="activity_cart">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                <?php foreach ($itemss as $key => $value) {?>
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
                    <span class="note">還差 <span class="price">NT$200</span></span>
                    <span class="note-finish hide">已達成條件</span>
                </div>
                <p class="tip">已選購<span class="red-text"> 4件 </span>商品：</p>
                <div id="actActions" class="actions">
                    <span class="current">目前累計金額：</span><span class="price">NT$800</span>
                    <a href="#" class="button">查看購物車</a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>