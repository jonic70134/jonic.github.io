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
    <title>完成結帳</title>
    
    <link rel="shortcut icon" href="../c/img/favicon.ico">
    
    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../c/css/cart/common.css"/>

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
                   <li class="active">
                       <span class="step-num">3</span>
                       <span class="step-txt">填寫資料</span>
                       <span class="line">&#8594;</span>
                   </li>
                   <li class="active">
                       <span class="step-num">4</span>
                       <span class="step-txt">完成結帳</span>
                   </li>
                </ul>

                <!-- 訂單編號 -->
                <div class="cart-block complete-no">
                    <h3>您的訂單編號</h3>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="cart-block-txt main-color">201806AP31000198</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">（訂單查詢、退貨、訂單疑問請至<a href="#">訂單查詢</a>）</div>
                        </div>
                    </div>
                </div>

                <!-- 訂單金額 -->
                <div class="cart-block complete-price">
                    <h3>您的訂單金額</h3>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="cart-block-txt main-color"><div class="price"><span class="currency">$</span><span class="price">1,999</span></div></div>
                        </div>
                    </div>
                </div>


                <!-- 訂購明細 標頭-->
                <div class="cart-block">
                    <h3>訂購明細</h3>
                    <div class="order-head">
                        <div class="order-title">商品名稱</div>
                        <div class="order-title-price">單價</div>
                        <div class="order-title-count">數量</div>
                    </div>
                    <!--訂購明細 列表  -->
                    <div class="order-list">
                        <div class="cart-item">
                            <div class="cart-info">
                                <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                            </div>
                            <div class="cart-price">
                                <div class="price"><span class="currency">$</span><span class="price">999</span></div>
                            </div>
                            <div class="cart-count">x999</div>
                        </div>
                        <div class="cart-item">
                            <div class="cart-info">
                                <div class="cart-name"><span class="main-color">[加購品]</span> 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                            </div>
                            <div class="cart-price">
                                <div class="price"><span class="currency">$</span><span class="price">1,999</span></div>
                            </div>
                            <div class="cart-count">x99</div>
                        </div>
                    </div>
                </div>

                <!-- 發票說明 -->
                <div class="cart-block complete-invoice">
                    <h3>發票說明：出貨後開立電子發票</h3>
                    <small class="sub-h3">(依據「消費通路開立電子發票試辦作業要點」開立)</small>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1" checked="checked"/>
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">不捐贈發票</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">中獎會通知並寄紙本發票給您</div>
                        </div>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1">
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">捐贈（88432-財團法人喜憨兒社會福利基金會）</div>
                        </div>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1">
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">使用手機載具條碼</div>
                            <div class="discode-enter"><input type="text" class="phone-code-input" id="" placeholder="請輸入手機載具條碼" value=""/></div>
                        </div>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-chk-all">
                                <input type="checkbox" class="order-chk" id="invoice"/>
                                <label for="invoice" class="order-chk-label"></label> 
                            </div>
                            <div class="cart-block-txt">發票需要打統編</div>
                            <div class="discode-enter">
                                <input type="text" class="invoice-input" name="" id="" placeholder="請輸入統一編號"/>
                            </div>
                        </div>
                    </div>
                    <div class="cart-sub-block add-receive"></div>
                </div>

            </div><!-- cart-main -->
        </div>
        
        <footer class="cart_footer complete">
            <button class="btn-invoice">我確定要變更發票</button>
        </footer>
    </div>
    
</body> 
</html>