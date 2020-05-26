<?php
    include "../frame/__data.php";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta property="og:site_name" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:image" content="../c/img/sample/mobile_hero.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <title>SEA Game 2015 Singpore</title>
    <link rel="shortcut icon" href="../c/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../c/css/<?php echo $color;?>/default/main/frame.css">
    <link rel="stylesheet" type="text/css" href="../c/css/<?php echo $color;?>/default/main/index.css">
    <?php if($edit=="true"){ //後臺編輯用CSS，前台顯示不須載入?>
    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/jquery-ui-1.10.4.custom.css">
    <link rel="stylesheet" type="text/css" href="../c/css/3rd-party/editor-btn.css">
    <?php } //後臺編輯用CSS end ?>
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/white/default/main/ie8.css">
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../c/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
    <?php if($edit=="true"){ //後臺編輯區塊?>
    <div class="container" style="height: 60px;">
        <section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-ad.html"><i class="fa fa-pencil"></i>編輯</button>
            <div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div>
        </section>
    </div>
    <?php } //後臺編輯區塊 end ?>
    <?php include "../frame/_header_inn.php";?>
    <div class="index container">
        <?php include "../front/index/_item_slides.php";?>
        <?php include "../front/index/_item_two.php";?>
        <?php include "../front/index/_item_four.php";?>
        <?php include "../front/index/_item_onefour.php";?>
        <?php include "../front/index/_item_five.php";?>
        <?php include "../front/index/_item_ad.php";?>
    </div>
    <?php include "../frame/_footer_nav.php";?>
    <?php include "../frame/_footer.php";?>
    <?php include "../frame/__js_library.php";?>
    <script>
    (function($){
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            autoplay: 5000,
            speed: 500,
            loop: false,
            grabCursor: true,
            calculateHeight: true,
            useCSS3Transorms: true,
            resizeReInit: true,
            paginationClickable: true,
        })
        // fix resize height issue 20140901
        $(window).resize(function() {
            mySwiper.reInit();
        });
    })(jQuery);
    </script>
    <?php if($edit=="true"){ //後臺編輯用JS，前台顯示不須載入?>
    <script>
        //sort spinner for 編輯畫面
        $('.input-sort').spinner();
        </script>
    <?php } //後臺編輯用JS end ?>
</body>
</html>