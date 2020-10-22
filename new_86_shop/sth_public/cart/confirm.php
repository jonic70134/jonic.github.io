<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <title>訂單確認</title>
    
    <link rel="shortcut icon" href="../c/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../c/css/cart/common.css"/>
    <link rel="stylesheet" type="text/css" href="../c/css/cart/confirm.css"/>

    <script src="../c/js/jquery/jquery-1.10.2.min.js"></script>
    <script src="../c/js/3rd-party/jquery.fancybox.pack.js"></script>

    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/front/account/ie8.css">
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="../c/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>

<body>
    <div class="cart-outter">
        <header class="cart-header" role="banner">
            <div class="container">
                <div class="head_con">
                    <div class="head_title">美妝嚴選。嚴格把關</div>
                    <a href="index.php" title="回到86小舖首頁" class="logo">
                        <img src="../c/img/sth_asap_m/86app_logo_pink.svg" class="img-logo" itemprop="logo">
                        <h1 itemprop="name">86 Shop</h1>
                    </a>
                </div>
            </div>
        </header>
        <div class="cart-body">
            <div class="cart-main">
                <!-- 步驟 -->
               <ul class="cart-step">
                   <li class="active">
                       <span class="step-num">1</span>
                       <span class="step-txt">商品清單</span>
                       <span class="line">&#8594;</span>
                   </li>
                   <li class="active">
                       <span class="step-num">2</span>
                       <span class="step-txt">訂單確認</span>
                       <span class="line">&#8594;</span>
                   </li>
                   <li>
                       <span class="step-num">3</span>
                       <span class="step-txt">填寫資料</span>
                       <span class="line">&#8594;</span>
                   </li>
                   <li>
                       <span class="step-num">4</span>
                       <span class="step-txt">完成結帳</span>
                   </li>
                </ul>
                <!-- 購物車商品清單 標頭-->
                <div class="order-head">
                    <div class="order-title">商品名稱</div>
                    <div class="order-title-price">單價</div>
                    <div class="order-title-count">數量</div>
                </div>
                <!--購物車商品清單 列表  -->
                <div class="order-list">
                    <div class="cart-item">
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <ul class="cart-off">
                                <li><i class="fa fa-check" aria-hidden="true"></i>已符合優惠：滿$699現折50元，夏日年中慶買一送一</li>
                                <li><i class="fa fa-check" aria-hidden="true"></i>已符合優惠：臉部保養 任2件$500</li>
                            </ul>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">999</span></div>
                        </div>
                        <div class="cart-count">x999</div>
                    </div>
                    <div class="cart-item">
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <ul class="cart-off">
                                <!-- 未滿足活動增加class=cart-off-info-->
                                <li class="cart-off-info"><i class="fa fa-info-circle" aria-hidden="true"></i>再湊一件可享：臉部保養 任2件$500</li>
                            </ul>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">1,999</span></div>
                        </div>
                        <div class="cart-count">x99</div>
                    </div>
                </div><!-- order-list -->

                <div class="cart-block discode">
                    <h3>優惠折扣</h3>
                    <div class="cart-sub-block">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="dis-chk1"/>
                            <label for="dis-chk1" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-block-txt">我有折扣碼</div>
                        <div class="discode-enter">
                            <input type="text" name="" id="" placeholder="請輸入優惠折扣碼"/><button class="btn-discode">確認</button>
                        </div>
                    </div>
                    <div class="cart-sub-block">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="dis-chk2"/>
                            <label for="dis-chk2" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-block-txt">我要使用購物金折抵<span class="currency">$</span><span class="price">999</span>元</div>
                    </div>
                </div><!-- discode -->

                <div class="cart-block logistics">
                    <h3>運送方式</h3>
                    <div class="cart-sub-block">
                        <div class="order-radio-all">
                            <input type="radio" class="radio-btn" id="radio1" name="logistics" value="1" checked="checked"/>
                            <label for="radio1" class="radio-btn-label"></label> 
                        </div>
                        <div class="cart-block-txt">全家取貨付款</div>
                        <div class="cart-block-txt">$50</div>
                        <div class="cart-block-txt">滿$399免運/還差<span class="currency main-color">$</span><span class="price main-color">999</span>元</div>
                    </div>
                    <div class="cart-sub-block">
                        <div class="order-radio-all">
                            <input type="radio" class="radio-btn" id="radio2" name="logistics" value="3"/>
                            <label for="radio2" class="radio-btn-label"></label> 
                        </div>
                        <div class="cart-block-txt">7-11超商取貨付款</div>
                        <div class="cart-block-txt">$50</div>
                        <div class="cart-block-txt">滿$399免運/還差<span class="currency main-color">$</span><span class="price main-color">999</span>元</div>
                        </label> 
                    </div>
                    <div class="cart-sub-block">
                        <div class="order-radio-all">
                            <input type="radio" class="radio-btn" id="radio3" name="logistics" value="3"/>
                            <label for="radio3" class="radio-btn-label"></label> 
                        </div>
                        <div class="cart-block-txt">宅配</div>
                        <div class="cart-block-txt">$100</div>
                        <div class="cart-block-txt">滿$399免運/還差<span class="currency main-color">$</span><span class="price main-color">999</span>元</div>
                    </div>
                </div>

                <div class="cart-block orderprice">
                    <h3>訂單金額</h3>
                    <div class="cart-sub-block">
                      
                        <div class="cart-block-txt"> 商品金額：</div>
                        <div class="cart-block-txt"><span class="currency">$</span><span class="price">9999</span></div>
                    </div>
                    <div class="cart-sub-block">
                        <div class="cart-block-txt">優惠折扣：</div>
                        <div class="cart-block-txt main-color"><span class="currency">-$</span><span class="price">999</span></div>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-block-txt">活動折扣：</div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt main-color">滿$699現折50元，夏日年中慶買一送一</div><div class="price main-color"><span class="currency">-$</span><span class="price">999</span></div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt main-color">臉部保養 任2件$500</div><div class="price main-color"><span class="currency">-$</span><span class="price">999</span></div>
                        </div>
                    </div>
                    <div class="cart-sub-block">
                        <div class="cart-block-txt">運費：</div>
                        <div class="cart-block-txt"><span class="currency">$</span><span class="price">50</span></div>
                    </div>
                    <div class="cart-sub-block red">
                        <div class="cart-block-txt">總計：</div>
                        <div class="cart-block-txt"><span class="currency">-$</span><span class="price">9925</span></div>
                    </div>
                </div>
            </div><!-- cart-main -->
        </div>
        
        <footer class="cart_footer">
            <div class="confirm">
                <button class="btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>上一步</button>
                <button class="btn-next">繼續<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </footer>
    </div>
    
</body> 
</html>