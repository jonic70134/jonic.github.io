<?php include "../frame/__data.php";
    if((isset($_GET['act'])) && $_GET['act']=="true") {
        $act = $_GET['act'];
    }else{
        $act = "";
    }
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="SEA Game 2015 Singpore">
    <meta name="keywords" content="SEA Game 2015 Singpore">
    <meta property="og:site_name" content="ASUS"/>
    <meta property="og:title" content="SEA Game 2015 Singpore"/>
    <meta property="og:type" content="product"/>
    <meta property="og:description" content="SEA Game 2015 Singpore"/>
    <meta property="og:url" content="http://www.feiniu.com/products.php"/>
    <meta property="og:image" content="../c/img/sample/mobile_hero.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <title>SEA Game 2015 Singpore</title>
    <link rel="shortcut icon" href="../c/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../c/css/<?php echo $color;?>/default/main/frame.css">
    <link rel="stylesheet" type="text/css" href="../c/css/<?php echo $color;?>/default/main/category.css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/white/default/main/ie8.css">
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../c/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
    <?php include "../frame/_header_inn.php";?>
    <div class="container">
        <div class="activity">
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
                <span class="ready">Limited Time Sale</span>
                <span class="act-title">東京著衣滿1000 折 100</span>
                <hr>
                <p class="date">2014/02/27 00:00 ~ 2014/03/08 00:00</p>
            </h3>
            <div class="desc">
                <p class="act-content">指定商品滿$1000，立折$100</p>
                <p class="tip">*每單僅能參加1次，每個帳號不限次數，活動商品隨時更新，以下單時為準</p>
            </div>
            <div class="act-cart">
                <p class="tip">已選購<span class="red-text"> 4件 </span>商品：</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                    <?php foreach ($products as $key => $value) {?>
                        <div class="swiper-slide">
                            <a href="#" class="crop">
                                <img src="<?php echo $value['images'];?>" alt="">
                            </a>
                            <div class="content">
                                <h1 class="name"><?php echo $value['name'];?> <?php echo $value['name'];?></h1>
                                <div class="line">
                                    <span class="currency">$</span>
                                    <span class="price"><?php echo $value['price'];?></span>
                                </div>
                                <ul class="quantity">
                                    <li><a href="javascript:void(0);" class="type">-</a></li>
                                    <li><input itemprop="offerCount" class="type" value="1" max="99"></li>
                                    <li><a href="javascript:void(0);" class="type">+</a></li>
                                </ul>
                                <a href="#" class="btn-del">刪除</a>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                    <a class="swiper-left icon-arrow-gray-left" href="#"></a>
                    <a class="swiper-right icon-arrow-gray-right" href="#"></a>
                </div>
                <div class="state">
                    <div id="progress-bar-static" class="progress-bar-static">
                        <div class="inner-bar" data-state="100"></div>
                        <span class="note hidden-mobile hidden-table">還差 <span class="price">$200</span></span>
                        <span class="note-finish hidden-mobile hidden-table hide">已達成條件</span>
                    </div>
                    <p class="note hidden-desktop">還差 <span class="price">$200</span></p>
                    <p class="note-finish hidden-desktop hide">已達成條件</p>
                    <div id="actActions" class="actions">
                        <span class="current">目前累計金額：</span><span class="price">$800</span>
                        <a href="#" class="button large">查看購物車</a>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
    <?php include "../frame/_filter.php";?>
    <?php include "../frame/_sort.php";?>
    <?php if($act=='true'){//尚特賣進行中未開始?>
    <?php include "../frame/_products_list.php";?>
    <?php include "../frame/_bottom_pagination.php";?>
    <?php }?>
    <?php include "../frame/_footer_nav.php";?>
    <?php include "../frame/_footer.php";?>
    <?php include "../frame/_fancybox_all.php";?>
    <?php include "../frame/__js_library.php";?>
    <script>
    var mediaWidth = Math.max( $(window).width(), window.innerWidth);
    $(window).resize(function(){
        mediaWidth = Math.max( $(window).width(), window.innerWidth);
    });
    var mySwiper = new Swiper('.swiper-container',{
        speed: 500,
        loop: false,
        grabCursor: true,
        slidesPerView: 3,
        calculateHeight: true,
        roundLengths: true,
        resizeReInit: true,
    });
    if(mediaWidth <= 600){
        mySwiper.params.slidesPerView=1;
    }
    console.log()

    $('.swiper-left').on('click', function(e){
        e.preventDefault()
        mySwiper.swipePrev()
    })
    $('.swiper-right').on('click', function(e){
        e.preventDefault()
        mySwiper.swipeNext()
    })
    progressBar();
    function progressBar(){
        var node = {};
        node.root = $("#progress-bar-static");
        node.bar = node.root.find($(".inner-bar"));
        node.barValue = 0;
        node.barState = node.bar.data('state');
        node.barTime = (1000/node.barState)*5;
        node.tip = $(".note");
        node.tipFinish = $(".note-finish");
        node.actionFinish = $("#actActions");
        function loading(){
            node.barValue += 5;
            node.bar.width(node.barValue + "%");
            node.tip.css({
                "left": node.barValue - 16 + "%"
            })
            node.tipFinish.css({
                "left": node.barValue - 16 + "%"
            })
            if(node.barValue == '100'){
                node.bar.addClass('finish');
                node.tip.addClass('hide');
                node.actionFinish.addClass('finish');
                node.tipFinish.removeClass('hide');
            }
            if(node.barValue == node.barState){
                clearInterval(animate);
            }
        }
        var animate = setInterval(function(){
            loading();
        }, node.barTime);
    }
    </script>
</body>
</html>