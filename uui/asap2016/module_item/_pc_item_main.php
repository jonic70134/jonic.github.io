<div class="pc-item-main">
    <div class="container">
        <div itemscope itemtype="http://data-vocabulary.org/Product">
            <!-- <div class="subheading">                
                <img src="http://placehold.it/1000x400">
                <p></p>
            </div> -->
            <div class="item-main-left">
                <div class="swiper-container item-slider-001">
                    <div class="swiper-wrapper">
                        <?php foreach ($items as $key => $value) {if($key==10){break;}?>
                        <div class="swiper-slide">
                            <div class="photo">
                                <img itemprop="image" src="<?php echo $value['images'];?>" alt="" class="photo-main">                    
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <div class="arrow arrow-left"><i class="fa fa-angle-left"></i></div>
                    <div class="arrow arrow-right"><i class="fa fa-angle-right"></i></div>
                    <div class="pagination"></div>
                </div>
                <div class="photo-other">
                    <?php foreach ($items as $key => $value) {if($key==10){break;}?>
                    <img itemprop="image" src="<?php echo $value['images'];?>" alt="">
                    <?php }?>
                </div>

            </div>
            <div class="info">
                <a href="javascript:void(0);" itemprop="offerurl" class="button btn-follow-list">加入追蹤</a>
                <h1 itemprop="name" class="name">
                    <span class="tag-status">日本</span>
                    <?php echo $items[$pid]['name'];?>
                    <span class="tag-status is-uitox-5h-delivery">北北桃5h</span>
                    <span class="tag-status is-uitox-24h-delivery">全台24h</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span> 
                    <span class="tag-status is-imported">日本直送</span>                   
                </h1>
                <?php if(isset($items[$pid]['feature'])){?>
                
                <div class="promotions">
                    <ul>
                        <li>
                            7/12-25閃購瘋夏殺，滿千送150、2千送300、5千送750、1萬送1500、2萬送3000 <a href="#" title="更多..">更多..</a>
                        </li>
                        <li>
                            7/12-25閃購瘋夏殺，滿千送150、2千送300、5千送750、1萬送1500、2萬送3000 <a href="#" title="更多..">更多..</a>
                        </li>
                    </ul>
                </div>

                <div class="feature">
                    <ul>
                        <?php foreach ($items[$pid]['feature'] as $item){ ?>
                        <li>
                            <?php echo $item;?>
                        </li>
                        <?php }?>
                        <li> 滿<span class="red-text"> 1 </span>件，每件<span class="red-text"> 1000 </span>元 </li>
                        <li> 滿<span class="red-text"> 2 </span>件，每件<span class="red-text"> 950 </span>元，每件省<span class="red-text"> 50 </span>元 </li>
                        <li> 滿<span class="red-text"> 3 </span>件，每件<span class="red-text"> 900 </span>元，每件省<span class="red-text"> 100 </span>元 </li>
                        <li> 滿<span class="red-text"> 4 </span>件，每件<span class="red-text"> 800 </span>元，每件省<span class="red-text"> 200 </span>元 </li>
                        <li> 滿<span class="red-text"> 5 </span>件，每件<span class="red-text"> 750 </span>元，每件省<span class="red-text"> 250 </span>元 </li>
                    </ul>
                    <!-- ?php include "../module_component/_site_translation.php";? -->
                </div>                
                <?php }?>
                <div class="hlight">
                    <div class="line">
                        <div class="key">顏色</div>
                        <ul class="value">
                            <!-- 圖片大小60x60px -->
                            <li itemprop="color" class="img disabled" title="已售完"><i class="fa fa-times-circle"></i><img src="../c/img/sample/color_purple.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_white.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_red.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img"><img src="../c/img/sample/color_green.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color" class="img active"><i class="fa fa-check"></i><img src="../c/img/sample/color_orange.png" alt="顏色" title="顏色"></li>
                            <li itemprop="color">顏色文字</li>
                        </ul>
                    </div>
                    <div class="line">
                        <div class="key">規格</div>
                        <ul class="value">
                            <li itemprop="model" class="active"><i class="fa fa-check"></i>11</li>
                            <li itemprop="model" class="disabled" title="已售完"><i class="fa fa-times-circle"></i>12</li>
                            <li itemprop="model" >13</li>
                        </ul>
                    </div>
                </div>
                <div class="line" style="display:none;">
                    <div class="key">包含內容</div>                    
                    <div class="value">
                        <div class="item">
                            <span class="name">附屬商品</span>
                            <div class="select-style">
                                <select>
                                    <option value="Select Specifications">Select Specifications</option>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <span class="name">附屬商品</span>
                            <div class="select-style">
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if(isset($items[$pid]['gift'])){?>
                <div class="line gift">
                    <h4 class="title">贈品(送完為止)</h4>
                    <div class="value">
                        <?php foreach ($items[$pid]['gift'] as $key => $item){ ?>
                        <div class="item">
                            <span class="name">Sunlus三樂事 快樂羊手握式暖暖包24小時(1片)</span>
                            <span class="num">（尚餘72份）</span>
                        </div>
                        <div class="item saleout">
                            <span class="name">Sunlus三樂事 快樂羊手握式暖暖包24小時(1片)</span>
                            <span class="num">（尚餘72份）</span>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>
                <div class="line">
                    <div class="payinfo-right">
                        <div class="value">
                            <!-- <span class="discount-mark">5折</span> -->
                            <span class="discount-mark">優惠倒數99:99:99</span>
                            <span class="currency">$</span>
                            <span itemprop="price" class="price">999,999</span>
                            <span class="bought">(9999已銷售)</span>
                            <!-- <span class="start">起</span>
                            <span class="pr_fee">(含處理費)</span> -->
                        </div>
                        <div class="credit-card">
                            <div class="row">
                                <div class="block">
                                    分期 / 紅利
                                </div>
                                <div class="block">
                                    <span class="colee0">12</span>期<span class="colee0">0</span>利率 
                                    每期<span class="colee0">123,496</span>元
                                </div>
                                <div class="block more">
                                    更多..
                                    <div class="credit-card-list">
                                        <p>除不盡餘數於第一期收取</p>
                                        <div class="block">
                                            <span class="col"><span class="colee0">3</span>期<span class="colee0">0</span>利率</span>
                                            <span class="col">每期<span class="colee0">123,496</span>元</span>
                                        </div>
                                        <div class="block">
                                            <span class="col"><span class="colee0">6</span>期<span class="colee0">0</span>利率</span>
                                            <span class="col">每期<span class="colee0">23,496</span>元</span>
                                        </div>
                                        <div class="block">
                                            <span class="col"><span class="colee0">9</span>期<span class="colee0">0</span>利率</span>
                                            <span class="col">每期<span class="colee0">3,496</span>元</span>
                                        </div>
                                        <div class="block">
                                            <span class="col"><span class="colee0">12</span>期<span class="colee0">0</span>利率</span>
                                            <span class="col">每期<span class="colee0">496</span>元</span>
                                        </div>
                                        <div class="block">
                                            <a href="../module_component/_site_fancybox_all.php #fancybox-bank" class="fancybox fancybox.ajax">優惠分期說明 >></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="quantity-add">
                            <div class="quantity">
                                <span class="quantity-decrease">-</span>
                                <?php //修正瀏覽器統一樣式?>                            
                                <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">                            
                                <span class="quantity-increase">+</span>
                            </div>                    
                            <?php if(isset($_GET['type'])){ switch ($_GET['type']) {//6種按鈕型態
                                case 'btn-preorder':
                                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-preorder">立刻預訂</a>';
                                    break;
                                case 'btn-preorder-finish':
                                    echo '<p class="button large btn-preorder-finish">預購結束</p>';
                                    break;
                                case 'btn-rush':
                                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-rush">立即搶購</a>';
                                    break;
                                case 'btn-rush-finish':
                                    echo '<p class="button large btn-rush-finish">搶購一空</p>';
                                    break;
                                case 'btn-discount':
                                    echo '<a href="../module_component/_site_fancybox_all.php #fancybox-buy-discount" itemprop="offerurl" class="button large btn-discount fancybox fancybox.ajax">買立折</a>';
                                    break;
                                case 'btn-soldout-stock':
                                    echo '<p class="button large btn-soldout-stock">售完，補貨中</p>';
                                    break;
                                case 'btn-soldout':
                                    echo '<p class="button large btn-soldout">已售完</p>';
                                    break;
                                case 'btn-to-sale':
                                    echo '<p class="button large btn-to-sale">即將開賣</p>';
                                    break;
                                case 'btn-select':
                                    echo '<a href="javascript:void(0);" class="button large btn-select">加入購物車</a>';
                                    break;
                                case 'btn-addcart':
                                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                                    break;
                                default:
                                    echo '<a href="javascript:void(0);" itemprop="offerurl" class="button large btn-addcart addcart">加入購物車</a>';
                                break;
                            }}else{?>
                            <button itemprop="offerurl" class="button large orange2">立即購買</button>
                            <button itemprop="offerurl" class="button large btn-addcart">加入購物車</button>
                            <?php }?>
                        </div>
                        <button 立即購買itemprop="offerurl" class="button btn-arrival">貨到通知</button>
                        <!-- <div class="item-fee">                            
                            <span class="">購買此商品預估總價費用</span>
                            <div class="fa fa-question">
                                <div class="fee-info">商品每件處理費包含配送到府運費及商品關稅</div>
                            </div>
                            <span class="">(配送到府):</span> 
                            <a href="../module_component/_site_fancybox_all.php #fancybox-fee-calculate" class="fancybox fancybox.ajax fee-c">明細</a>
                        </div>
                        <div class="highlight">
                            <p>會員限購1個(剩餘數量：9999)</p>
                            <p class="red-text">預計出貨日：2014/05/16</p>
                            <p class="red-text"><span>已預訂數量：90</span><span itemprop="quantity">剩餘數量：60</span></p>
                        </div> -->
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>