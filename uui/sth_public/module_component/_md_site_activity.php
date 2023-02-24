<div class="md_site_activity">
    <div class="container">
        <div class="act-info" id="activity_info">
            <div class="act-summary">
                <?php if($act!='true'){//尚未開始?>
                <span class="act-state not">特賣即將開始</span>
                <?php }else{//限時特賣中?>
                <span class="act-state ready"><i class="fa fa-bullhorn"></i> 限時特賣中</span>
                <?php }?>
                <span class="act-title">東京著衣滿1000 折 100</span>
                <p class="act-date">2014/02/27 00:00 ~ 2014/03/08 00:00</p>
            </div>
            <div class="act-detail">
                <p class="act-content">指定商品滿$1000，立折$100</p>
                <p class="tip">*每單僅能參加1次，每個帳號不限次數，活動商品隨時更新，以下單時為準</p>
            </div>
        </div>
        <?php if($act=='true'){//限時特賣中?>
        <div class="act-cart" id="activity_cart">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php $cart=true; $lazyload=false; foreach ($itemss as $key => $value) {if($key==5){break;} ?>
                    <div class="swiper-slide">
                        <?php include "../module_component/_md_item_list.php"; ?>
                    </div>
                    <?php }?>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="current-state">
                <div id="progress-bar-static" class="progress-bar-static">
                    <div class="inner-bar" data-state="100"></div>
                    <span class="note hidden-mobile hidden-table">還差 <span class="t-red">NT$200</span></span>
                    <span class="note-finish hidden-mobile hidden-table hide">已達成條件</span>
                </div>
                <p class="tip">已選購<span class="t-red"> 4件 </span>商品</p>
                <p class="note hidden-desktop">還差 <span class="t-red">NT$200</span></p>
                <p class="note-finish hidden-desktop hide">已達成條件</p>
                <div id="actActions" class="actions">
                    <span class="current">目前累計金額：</span><span class="t-red t-price">NT$800</span>
                    <button class="btn-buy">查看購物車</button>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>