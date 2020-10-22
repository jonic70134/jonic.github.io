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
    <title>填寫資料</title>
    
    <link rel="shortcut icon" href="../c/img/favicon.ico">

    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../c/css/cart/common.css"/>
    <link rel="stylesheet" type="text/css" href="../c/css/cart/data.css"/>

    <script src="../c/js/jquery/jquery-1.10.2.min.js"></script>
    <script src="../c/js/3rd-party/jquery.fancybox.pack.js"></script>
    
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/front/account/ie8.css"/>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="../c/js/3rd-party/respond.js"></script>
    <![endif]-->
    <script>
        $(".fancybox").fancybox({
            width:"100%",
            height:'auto',
            padding:0,
            margin: 0,
            autoSize: false,
            closeBtn: false,
            wrapCSS:'fancybox-bottom',
            helpers: {
                overlay: {
                    locked: true,
                    css:{
                        'background' : 'rgba(0, 0, 0, 0.8)'
                    }
                }
            }
        });
    </script>
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
                <!-- 步驟 當前頁面增加class="active" 就會呈現綠色-->
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
                   <li>
                       <span class="step-num">4</span>
                       <span class="step-txt">完成結帳</span>
                   </li>
                </ul>
                <!--填寫資料 -->
                <div class="cart-block fill">
                    <h3>付款方式&nbsp;<span class="currency main-color">$</span><span class="price main-color">9,999</span></h3>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="radio1" name="logistics" value="1" checked="checked"/>
                                <label for="radio1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt"> 信用卡一次付清</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">部分信用卡可使用紅利折抵<a href="#">說明<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                        <button class="btn-change">變更</button>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="radio1" name="logistics" value="1"/>
                                <label for="radio1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt"> 信用卡分期 - NT$69 x 3期0利率</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">除不盡餘數於第一期收取<a href="#">說明<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="radio1" name="logistics" value="1"/>
                                <label for="radio1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">貨到付款</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">送貨人員將與您聯繫，請保持電話暢通<a href="#">說明<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
                <!-- 信用卡資訊  -->
                <div class="cart-block credit">
                    <h3>信用卡資訊</h3>
                    <div class="cart-sub-block">
                        <input type="text" class="credit-input-txt" id="" placeholder="請輸入姓名" value="台北金城武"/>
                    </div>
                    <div class="cart-sub-block">
                        <input type="tel" class="credit-input-num" id="" placeholder="輸入信用卡號" value="" pattern="[0-9]{13,16}" maxlength="16"/>
                    </div>
                    <div class="cart-sub-block select">
                        <div class="credit-input-select">
                            <select name="" id="credit-month" >
                                <option value="1">1月</option>
                                <option value="2">2月</option>
                                <option value="3">3月</option>
                                <option value="4">4月</option>
                                <option value="5">5月</option>
                                <option value="6">6月</option>
                                <option value="7">7月</option>
                                <option value="8">8月</option>
                                <option value="9">9月</option>
                                <option value="10">10月</option>
                                <option value="11">11月</option>
                                <option value="12">12月</option>
                            </select>
                        </div>
                        <div class="credit-input-select">
                            <select name="" id="credit-year">
                                <option value="1">2018年</option>
                                <option value="2">2019年</option>
                                <option value="3">2020年</option>
                                <option value="4">2021年</option>
                                <option value="5">2022年</option>
                                <option value="6">2023年</option>
                            </select>
                        </div>
                    </div>
                    <div class="cart-sub-block">
                        <input type="num" class="credit-input-num" id="" placeholder="輸入信用卡後三碼" value="" pattern="\d*" maxlength="19"/>
                    </div>
                    <div class="cart-sub-block">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="dis-chk2"/>
                            <label for="dis-chk2" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-block-txt main-color">我要使用紅利點數折抵刷卡金<span class="currency">$</span><span class="price">999</span>元<a href="#">說明<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a></div>
                    </div>
                </div>

                <!-- 收貨資訊 -->
                <div class="cart-block receive">
                    <h3>收貨資訊</h3>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1"/>
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">Holyshit/0900123456</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">台北市信義區忠孝東路100巷20弄300之1號8F</div>
                        </div>
                        <button class="btn-change">變更</button>
                    </div>

                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1"/>
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">Holyshit/0900123456</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">台北市信義區忠孝東路100巷20弄300之1號8F</div>
                        </div>
                        <button class="btn-edit">編輯</button>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1"/>
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">Holyshit/0900123456</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">台北市信義區忠孝東路100巷20弄300之1號8F</div>
                        </div>
                        <button class="btn-edit">編輯</button>
                    </div>
                    <div class="cart-sub-block multi-line">
                        <div class="cart-sub-block">
                            <div class="order-radio-all">
                                <input type="radio" class="radio-btn" id="receive1" name="receive" value="1"/>
                                <label for="receive1" class="radio-btn-label"></label> 
                            </div>
                            <div class="cart-block-txt">Holyshit/0900123456</div>
                        </div>
                        <div class="cart-sub-block">
                            <div class="cart-block-txt-sub">台北市信義區忠孝東路100巷20弄300之1號8F</div>
                        </div>
                        <button class="btn-edit">編輯</button>
                    </div>
                    <div class="cart-sub-block add-receive">
                        <a href="#add-new-receive" class="fancybox">新增收貨地址<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                    </div>
                </div>

                <!-- 發票 -->
                <div class="cart-block invoice">
                    <h3>發票是否需要打統編</h3>
                    <div class="cart-sub-block">
                        <div class="order-chk-all">
                            <input type="checkbox" class="order-chk" id="invoice"/>
                            <label for="invoice" class="order-chk-label"></label> 
                        </div>
                        <div class="cart-block-txt">需要</div>
                        <div class="discode-enter">
                            <input type="text" name="" id="" placeholder="請輸入統一編號"/>
                        </div>
                    </div>
                </div>

            </div><!-- cart-main -->
        </div>
        
        <footer class="cart_footer">
            <div class="confirm">
                <button class="btn-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>上一步</button>
                <button class="btn-complete">完成結帳<i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            </div>
        </footer>
    </div>
    

    <div class="facybox add-new-receive hide" id="add-new-receive">
        <div class="cart-block credit">
            <h3>收貨資訊</h3>
            <div class="cart-sub-block">
                <input type="text" class="credit-input-txt" id="" placeholder="收貨人姓名" value=""/>
            </div>
            <div class="cart-sub-block">
                <input type="tel" class="credit-input-num" id="" placeholder="收貨人手機" value="" maxlength="10"/>
            </div>
            <div class="cart-sub-block select">
                <div class="credit-input-select">
                    <select name="" id="credit-month" >
                        <option value="1">縣市</option>
                    </select>
                </div>
                <div class="credit-input-select">
                    <select name="" id="credit-year">
                        <option value="1">區域</option>
                    </select>
                </div>
            </div>
            <div class="cart-sub-block">
                <input type="text" class="credit-input-num" id="" placeholder="收貨地址" value="" />
            </div>
            <div class="add-new-receive-btn">
                <button class="btn-cancel">取消</button>
                <button class="btn-receive">確認並配送至此地址</button>
            </div>
        </div>
    </div>
</body> 
</html>