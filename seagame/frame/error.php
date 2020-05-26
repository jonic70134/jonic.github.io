<?php include "../frame/__data.php";?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="商品介紹">
    <meta name="keywords" content="商品介紹">
    <meta property="og:site_name" content="ASUS"/>
    <meta property="og:title" content="商品名稱 - <?php echo $h1_title;?>"/>
    <meta property="og:type" content="product"/>
    <meta property="og:description" content="商品介紹"/>
    <meta property="og:url" content="http://www.feiniu.com/products.php"/>
    <meta property="og:image" content="../c/img/sample/mobile_hero.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
    <title>ASUS STORE 館頁</title>
    <link rel="shortcut icon" href="../c/img/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="../c/css/<?php echo $color;?>/default/main/frame.css">
    <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="../c/css/white/default/main/ie8.css">
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../assets/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
    <?php include "../frame/_header_inn.php";?>
    <div class="container">
        <div class="error">
            <h1>抱歉，找不到網頁了</h1>
            <ul>
                <li>商品目前已下架或暫不販售，歡迎選購其他商品</li>
                <li>此網頁可能暫時出現故障</li>
                <li>暫時沒有網路訊號或者行動網路連線</li>
            </ul>
            <div class="actions">
                <a href="#" class="button large">回首頁</a>
            </div>
        </div>
    </div>
    <?php include "../frame/_footer.php";?>
    <?php include "../frame/__js_library.php";?>
    <script>
    </script>
</body>
</html>