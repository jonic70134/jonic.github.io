<div class="pc-item-main">
    <div class="container">
        <div itemscope itemtype="http://data-vocabulary.org/Product">
            <div class="subheading">                
                <img src="http://placehold.it/1000x400">
                <p></p>
            </div>
            <div class="item-main-left">
                <div class="swiper-container item-slider-001">
                    <div class="swiper-wrapper">
                        <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
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
                    <?php foreach ($itemss as $key => $value) {if($key==10){break;}?>
                    <img itemprop="image" src="<?php echo $value['images'];?>" alt="">
                    <?php }?>
                </div>


                <div class="relative-word">
                    <p>看更多：</p>
                    <ul>
                        <li><a href="#">黑色</a></li>
                        <li><a href="#">Asus 華碩</a></li>
                        <li><a href="#">15"</a></li>
                        <li><a href="#">Intel Pentium</a></li>
                        <li><a href="#">雙核</a></li>
                        <li><a href="#">4G</a></li>
                        <li><a href="#">500G</a></li>
                        <li><a href="#">內建/整合顯卡</a></li>
                        <li><a href="#">DVD Super Multi</a></li>
                        <li><a href="#">Windows 8</a></li>
                    </ul>
                </div>
                <div class="other-pay">                
                    <span class="icon-seven">超商取貨</span>
                    <span class="icon-fami"></span>
                </div>
                <div class="social-plugins">
                    <div class="each_plugin">
                        <a id="facebook" type="0" href="javascript:;">
                            <img src="../c/img/frame/facebook_icon.png"/>
                        </a>
                        <a id="twitter" type="1" name="fb_share" target="_blank" href="javascript:;">
                            <img src="../c/img/frame/twitter_icon.png"/>
                        </a>
                        <a id="google" type="1" name="fb_share" target="_blank" href="javascript:;">
                            <img src="../c/img/frame/google_icon.png"/>
                        </a>
                        <a id="line" type="1" name="fb_share" target="_blank" href="javascript:;">
                            <img src="../c/img/frame/line_icon.png"/>
                        </a>
                    </div>
                    <!-- facebook social button -->
                    <!-- <div class="facebook each_plugin">
                        <div id="fb-root"></div>
                        <script>
                        (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&appId=179989302080121&version=v2.0";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                    </div> -->
                    <!-- google plus social button -->
                    <!-- <div class="google each_plugin">
                        <div class="g-plusone" data-size="medium"></div>
                        <script src="https://apis.google.com/js/platform.js" async defer>
                        {lang: 'zh-TW'}
                        </script>
                    </div> -->
                    <!-- plurk social button -->
                    <!-- <div class="plurk each_plugin">
                        <a title="Share to Plurk" href="javascript:void(window.open('http://www.plurk.com/?qualifier=shares&status='.concat(encodeURIComponent(window.location.href)).concat(' ').concat('(').concat(encodeURIComponent(document.title)).concat()));">
                            <img title="share" src="http://s.plurk.com/2980c7bcb4eb012159e7701a61cb2e75.png" width="auto" height="20" align="absmiddle" border="0" />
                        </a>
                    </div> -->
                    <!-- twitter tweet button -->
                    <!-- <div class="twitter each_plugin">
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div> -->
                </div>
            </div>
            <div class="info">
                <div class="more_2h"><a href="groupbuy.php">看更多2HR到貨商品 <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></div>
                <div class="sale">
                    <div class="type">
                        <span itemprop="priceValidUntil"><?php echo $L10n_item['sale_title'];?>05/01 20:00 ~ 05/02 20:00</span>
                        <span><?php echo $L10n_item['sale_price'];?>$4990</span>
                    </div>
                    <div class="type">
                        <b>倒數結束時間：</b>
                        <div class="time">
                            23:59:59
                        </div>
                        <b class="bought">9999人已買</b>
                        <a href="#">看更多商品></a>
                    </div>
                </div>
                <a href="javascript:void(0);" itemprop="offerurl" class="button btn-follow-list">加入追蹤清單</a>
                <h1 itemprop="name" class="name">
                    <?php echo $itemss[$pid]['name'];?>
                    <span class="tag-status is-2h-delivery"><img src="../c/img/frame/2hr04.png" alt="2小時到貨"></span>
                    <span class="tag-status is-uitox-5h-delivery">北北桃5h</span>
                    <span class="tag-status is-uitox-24h-delivery">全台24h</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨 約2-7日</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span> 
                    <span class="tag-status is-imported">日本直送</span>                   
                </h1>
                <div class="sale">
                    <div class="type">
                        <b>特賣結束時間：</b>
                        <div class="time">
                            23:59:59
                        </div>
                        <b class="bought">99999 個已販售</b>
                    </div>
                </div>
                <?php if(isset($itemss[$pid]['feature'])){?>
                           
                <div class="feature">
                    <ul>
                        <li class="remind"><p>購物金最高可折抵 <span>486點</span> <a href="http://www.asap.com.tw/custom/201503A060000030" target="_blank">(說明)</a></p></li>
                        <?php foreach ($itemss[$pid]['feature'] as $items){ ?>
                        <li>
                            <?php echo $items;?>
                        </li>
                        <?php }?>
                        <li> 滿<span class="red-text"> 1 </span>件，每件<span class="red-text"> 1000 </span>元 </li>
                        <li> 滿<span class="red-text"> 2 </span>件，每件<span class="red-text"> 950 </span>元，每件省<span class="red-text"> 50 </span>元 </li>
                        <li> 滿<span class="red-text"> 3 </span>件，每件<span class="red-text"> 900 </span>元，每件省<span class="red-text"> 100 </span>元 </li>
                        <li> 滿<span class="red-text"> 4 </span>件，每件<span class="red-text"> 800 </span>元，每件省<span class="red-text"> 200 </span>元 </li>
                        <li> 滿<span class="red-text"> 5 </span>件，每件<span class="red-text"> 750 </span>元，每件省<span class="red-text"> 250 </span>元 </li>
                    </ul>
                    <?php include "../module_component/_site_translation.php";?>
                </div>                
                <?php }?>
                <div>
                <!--<div class="hlight">-->
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
                <!--<div class="line">
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
                </div>-->
                <!--<?php if(isset($itemss[$pid]['gift'])){?>
                <div class="line">
                    <div class="key">贈品<!-- <br>任選一件 --><!--</div>
                    <div class="value">
                        <?php foreach ($itemss[$pid]['gift'] as $key => $items){ ?>
                        <div class="item">
                            <input type="checkbox" id="gift-<?php echo $key;?>" name="gift" class="checkbox"/>
                            <span class="tag-status is-odd">大材積</span>
                            <label for="gift-<?php echo $key;?>" class="label">
                                <?php echo $items;?>

                            </label>
                            <a href="../module_component/_site_fancybox_all.php #fancybox-image" class="link fancybox fancybox.ajax" title="贈品名稱">(圖)</a>
                            <div class="select-style">
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <div class="item">
                            <input type="checkbox" id="gift-<?php echo $key;?>" name="gift" class="checkbox"/>
                            <span class="tag-status is-odd">大材積</span>
                            <label for="gift-<?php echo $key;?>" class="label">
                                <?php echo $items;?>
                            </label>               
                            <a href="../module_component/_site_fancybox_all.php #fancybox-image" class="link fancybox fancybox.ajax" title="贈品名稱">(圖)</a>
                            <div class="select-style">
                                <select>
                                    <option value="volvo">Volvo</option>
                                    <option value="saab">Saab</option>
                                    <option value="mercedes">Mercedes</option>
                                    <option value="audi">Audi</option>
                                </select>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
                <?php }?>-->
                <div class="line">
                    <div class="payinfo-left">
                        <div class="credit-card">
                            <div class="row">
                                <div class="block">
                                    <span class="colee0">3</span>期<span class="colee0">0</span>利率
                                </div>
                                <div class="block">
                                    每期<span class="colee0">123,496</span>元
                                </div>
                                <div class="block more">
                                    更多分期<i class="fa fa-angle-double-down"></i>
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
                            <div class="row">
                                <div class="block">
                                    <span class="colee0">6</span>期<span class="colee0">0</span>利率
                                </div>
                                <div class="block">
                                    每期<span class="colee0">23,496</span>元
                                </div>
                                <div class="block more">
                                    更多分期<i class="fa fa-angle-double-down"></i>
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
                            <div class="row">
                                <div class="block">
                                    <span class="colee0">9</span>期<span class="colee0">0</span>利率
                                </div>
                                <div class="block">
                                    每期<span class="colee0">3,496</span>元
                                </div>
                                <div class="block more">
                                    更多分期<i class="fa fa-angle-double-down"></i>
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
                            <div class="row">
                                <div class="block">
                                    <span class="colee0">12</span>期<span class="colee0">0</span>利率
                                </div>
                                <div class="block">
                                    每期<span class="colee0">3,496</span>元
                                </div>
                                <div class="block more">
                                    更多分期<i class="fa fa-angle-double-down"></i>
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
                        <div class="pay">
                            <i class="icon-visa"></i>
                            <i class="icon-jcb"></i>
                            <i class="icon-mastercard"></i>
                            <i class="icon-atm"></i>
                            <a href="../module_component/_site_fancybox_all.php #fancybox-bonus" class="fancybox fancybox.ajax">信用卡紅利折抵刷卡金(說明)</a>
                        </div>
                    </div>
                    <div class="payinfo-right">
                        <!--<div class="remind"><p>購物金可再折抵 <span>650</span> 元</p><i class="icon-triangle"></i></div>-->
                        <!--<div class="key">建議售價</div>
                        <div class="value">
                            <del>
                                <span itemprop="currency">NT$</span>
                                <span itemprop="highPrice">99,999,999</span>
                            </del>
                        </div>-->
                        <!-- 不顯示購物金價格版面 -->
                        <div>
                            <div class="key">網路價</div>
                            <div class="value">
                                <!--<span class="discount-mark">5折</span>-->
                                <span class="currency">NT$</span>
                                <span itemprop="price" class="price">88,888,888</span>
                                <!--<span class="start">起</span>
                                <span class="pr_fee">(含處理費)</span>-->
                            </div>
                            <div class="remind">
                                <div>購物金最高可折抵 <span>486點</span> 
                                    <a href="http://www.asap.com.tw/custom/201503A060000030" target="_blank">(說明)</a>
                                </div>
                            </div>
                        </div>
                        <!-- 顯示購物金價格版面 -->
                        <!--<div class="web-price">
                            <div class="key">網路價</div>
                            <div class="value">
                                //--<span class="discount-mark">5折</span>--//
                                <span class="currency">NT$</span>
                                <span itemprop="price" class="price">88,888,888</span>
                                //--<span class="start">起</span>
                                <span class="pr_fee">(含處理費)</span>--//
                            </div>
                        </div>
                        <div class="point-price">
                            <div class="key">購物金價</div>
                            <div class="value">
                                <span class="currency">NT$</span>
                                <span itemprop="price" class="price">88,888,000</span>
                                <a href="http://www.asap.com.tw/custom/201503A060000030" target="_blank" class="point-more">說明</a>
                                //--<div class="point-more" onclick="myFunction()">詳
                                    <div class="point-list" id="myPopup">
                                        <span class="closebtn">&times;</span>
                                        <p>使用購物金最多可折抵 <a href="#">999</a> 元</p>
                                        <div class="block">
                                            <a href="http://www.asap.com.tw/custom/201503A060000030" target="_blank">購物金說明 >></a>
                                        </div>
                                    </div>
                                </div>--//
                            </div>
                        </div>-->
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
                            <button itemprop="offerurl" class="button large btn-addcart">加入購物車</button>
                            <?php }?>
                        </div>
                        <!--<button itemprop="offerurl" class="button btn-arrival">貨到通知</button>
                        <div class="item-fee">                            
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
                        </div>-->
                    </div>
                </div>      
            </div>
        </div>
    </div>
</div>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById('myPopup');
    popup.classList.toggle('show');
}
</script>