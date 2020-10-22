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
    <title>商品清單</title>
    
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
                        <img src="../c/img/sth_asap_m/86app_logo_pink.svg" class="img-logo" itemprop="logo"/>
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
                   <li>
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
                    <div class="order-chk-all">
                        <input type="checkbox" class="order-chk" id="order-chk-all" checked="checked"/>
                        <label for="order-chk-all" class="order-chk-label"></label> 
                        <p>全選</p>
                    </div>
                    <div class="order-title">商品名稱</div>
                    <div class="order-title-price">單價</div>
                </div>
                <!--購物車商品清單 列表  -->
                <div class="order-list">
                    <div class="cart-item">
                        <div class="order-chk-all red">
                            <input type="checkbox" class="order-chk" id="order-chk1" checked="checked"/>
                            <label for="order-chk1" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <div class="cart-quantity">
                                <div class="quantity-input">
                                    <button class="btn-decrease">‒</button>
                                    <input class="cart-num" type="text" value="1"/>
                                    <button class="btn-increase">﹢</button>
                                </div>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">999</span></div>
                            <button class="btn-remove">移除</button>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="order-chk-all red">
                            <input type="checkbox" class="order-chk" id="order-chk1" checked="checked"/>
                            <label for="order-chk1" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <div class="cart-quantity">
                                <div class="quantity-input">
                                    <button class="btn-decrease">‒</button>
                                    <input class="cart-num" type="text" value="1"/>
                                    <button class="btn-increase is-disabled">﹢</button>
                                </div>
                            </div>
                            <div class="cart-add">
                                <dl>
                                    <dd class="cart-add-name">贈品 - 韓國 NEOGEN DERMALOGY 擦拭面膜 -淨白高效導入擦拭面膜</dd>
                                    <dd class="cart-add-name">贈品 - 韓國 NEOGEN DERMALOGY 擦拭面膜 -淨白高效導入擦拭面膜</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">999</span></div>
                            <button class="btn-remove">移除</button>
                        </div>
                    </div>
                    <div class="cart-item">
                        <div class="order-chk-all red">
                            <input type="checkbox" class="order-chk" id="order-chk1" checked="checked"/>
                            <label for="order-chk1" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <div class="cart-quantity">
                                <div class="quantity-input">
                                    <button class="btn-decrease">‒</button>
                                    <input class="cart-num" type="text" value="1"/>
                                    <button class="btn-increase is-disabled">﹢</button>
                                </div>
                            </div>
                            <div class="cart-add">
                                <dl>
                                    <dt class="cart-add-title">包含下列商品：</dt>
                                    <dd class="cart-add-name">韓國 NEOGEN DERMALOGY 擦拭面膜 -淨白高效導入擦拭面膜</dd>
                                    <dd class="cart-add-name">韓國 NEOGEN DERMALOGY 擦拭面膜 -淨白高效導入擦拭面膜</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">999</span></div>
                            <button class="btn-remove">移除</button>
                        </div>
                    </div>
                    <!-- 以前加入的商品列表 -->
                    <div class="cart-before">您以前加入購物車的商品</div>
                    <div class="cart-item">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="order-chk2"/>
                            <label for="order-chk2" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <div class="cart-quantity">
                                <div class="quantity-input">
                                    <button class="btn-decrease">‒</button>
                                    <input class="cart-num" type="text" value="1"/>
                                    <button class="btn-increase">﹢</button>
                                </div>
                            </div>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">9999</span></div>
                            <button class="btn-remove">移除</button>
                        </div>
                    </div>
                    <!-- 補貨狀態 class加上 is-lack, checkbox元素保留 -->
                    <div class="cart-item is-lack">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="order-lack1"/>
                            <label for="order-lack1" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-img">
                            <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                            <p class="cart-lack-tag">補貨中</p>
                        </div>
                        <div class="cart-info">
                            <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                            <div class="cart-size">玫瑰素顏霜 30ml</div>
                            <div class="cart-quantity"></div>
                        </div>
                        <div class="cart-price">
                            <div class="price"><span class="currency">$</span><span class="price">99</span></div>
                            <button class="btn-remove">移除</button>
                        </div>
                    </div>

                    <!-- 推薦相關商品 -->
                    <div class="recommend-title"><i class="fa fa-heart" aria-hidden="true"></i>你可能還喜歡<i class="fa fa-heart" aria-hidden="true"></i></div>
                    <div class="recommend-list">
                        <div class="recommend-item"><!-- item1 -->
                            <div class="order-chk-all">
                                <input type="checkbox" class="order-chk" id="order-chk-rc1"/>
                                <label for="order-chk-rc1" class="order-chk-label"></label> 
                            </div>
                            <div class="cart-img">
                                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                            </div>
                            <div class="cart-info">
                                <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                                <div class="cart-quantity">
                                    <div class="quantity-input">
                                        <button class="btn-decrease">‒</button>
                                        <input class="cart-num" type="text" value="1"/>
                                        <button class="btn-increase">﹢</button>
                                    </div>
                                </div>
                                <div class="addprice">
                                    <p>加價購</p><span class="currency">$</span><span class="price">999</span>
                                </div>
                            </div>
                        </div>
                        <div class="recommend-item"><!-- item2 -->
                            <div class="order-chk-all">
                                <input type="checkbox" class="order-chk" id="order-chk-rc2"/>
                                <label for="order-chk-rc2" class="order-chk-label"></label> 
                            </div>
                            <div class="cart-img">
                                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                            </div>
                            <div class="cart-info">
                                <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                                <div class="cart-quantity">
                                    <div class="quantity-input">
                                        <button class="btn-decrease">‒</button>
                                        <input class="cart-num" type="text" value="1"/>
                                        <button class="btn-increase">﹢</button>
                                    </div>
                                </div>
                                <div class="addprice">
                                    <p>加價購</p><span class="currency">$</span><span class="price">9999</span>
                                </div>
                            </div>
                        </div>
                        <div class="recommend-item"><!-- item3 -->
                            <div class="order-chk-all">
                                <input type="checkbox" class="order-chk" id="order-chk-rc3"/>
                                <label for="order-chk-rc3" class="order-chk-label"></label> 
                            </div>
                            <div class="cart-img">
                                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                            </div>
                            <div class="cart-info">
                                <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                                <div class="cart-quantity">
                                    <div class="quantity-input">
                                        <button class="btn-decrease">‒</button>
                                        <input class="cart-num" type="text" value="1"/>
                                        <button class="btn-increase">﹢</button>
                                    </div>
                                </div>
                                <div class="addprice">
                                    <p>加價購</p><span class="currency">$</span><span class="price">99</span>
                                </div>
                            </div>
                        </div>
                        <div class="recommend-item"><!-- item4 -->
                            <div class="order-chk-all">
                                <input type="checkbox" class="order-chk" id="order-chk-rc4"/>
                                <label for="order-chk-rc4" class="order-chk-label"></label> 
                            </div>
                            <div class="cart-img">
                                <img src="../c/img/sth_asap_m/sample/img_240_07.jpg" alt="商品圖片"/>
                            </div>
                            <div class="cart-info">
                                <div class="cart-name">韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g 韓國 ETUDE HOUSE 氣墊頰彩(蕊) 3g</div>
                                <div class="cart-size">玫瑰素顏霜 30ml</div>
                                <div class="cart-quantity">
                                    <div class="quantity-input">
                                        <button class="btn-decrease">‒</button>
                                        <input class="cart-num" type="text" value="1"/>
                                        <button class="btn-increase">﹢</button>
                                    </div>
                                </div>
                                <div class="addprice">
                                    <p>加價購</p><span class="currency">$</span><span class="price">9999</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- order-list -->
            </div><!-- cart-main -->
        </div>
        
        <footer class="cart_footer">
            <div class="order-chk-all red">
                <div class="total-price">
                    小計：<span class="currency">$</span><span class="price">999,999</span>
                </div>
            </div>
            <div class="addcart">
                <button class="btn-continue">繼續選購</button>
                <button class="btn-confirm">開始結帳</button>
            </div>
        </footer>
    </div>
    
</body> 
</html>