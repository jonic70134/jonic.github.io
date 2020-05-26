<?php include "../frame/__data.php";?>
<!doctype html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="SEA Game 2015 Singpore">
    <meta name="keywords" content="SEA Game 2015 Singpore">
    <meta property="og:site_name" content="ASUS"/>
    <meta property="og:title" content="商品名稱 - <?php echo $h1_title;?>"/>
    <meta property="og:type" content="product"/>
    <meta property="og:description" content="SEA Game 2015 Singpore"/>
    <meta property="og:url" content="http://www.feiniu.com/products.php"/>
    <meta property="og:image" content="../assets/c/img/sample/mobile_hero.png"/>
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
    <div class="answer container">
        <h1>目前顯示的搜尋結果：<span class="red">PadPone</span>共計<span class="red">71</span>筆</h1>
        <p>您是不是想找：<a href="">PadPone</a>，<a href="">ZenFone</a>，<a href="">PadPone配件</a></p>
    </div>
    <?php include "../frame/_filter.php";?>
    <?php include "../frame/_sort.php";?>
    <h1 class="result">很抱歉，搜尋不到相關的商品及資訊！</h1>
    <?php include "../frame/_products_list.php";?>
    <?php include "../frame/_bottom_pagination.php";?>
    <?php include "../frame/_footer_nav.php";?>
    <?php include "../frame/_footer.php";?>
    <?php include "../frame/__js_library.php";?>
    <script>
    </script>
</body>
</html>