<?php include 'temp/temp-list-data.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>UBase</title>
	<link rel="stylesheet" type="text/css" href="../sth_public/c/css/temp/sitemap.css">
<!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="../sth_public/c/css/temp/ie8.css">
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="../c/js/3rd-party/respond.js"></script>
<![endif]-->
</head>
<body>
	<div class="container">
        <header><h1>Templates Sitemap</h1></header>
        <section>
            <!--<h2>Templates Sitemap</h2>-->
            <div class="columns">
                <?php foreach ($siteMap as $key => $value) {
                    //combine URL
                    if(isset($value['mode'])){
                        $url = $value['url']."?".$value['mode'];
                    }else{
                    $url = $value['url'];
                    }
                ?>
                <figure>
                    <img src="c/img/temp/<?php echo $value['name'];?>.png">
                    <figcaption>
                      <a href="<?php echo $url;?>"><h2><?php echo $value['name'];?></h2></a>
                      <div>
                        <p>color</p>
                        <p>
                        <?php if(isset($value['color'])){?>
                            <?php foreach ($value['color'] as $items){ ?>
                            <a href="<?php echo $url."?&color=".$items;?>" class="link <?php echo $items;?>"><?/*php echo $items;*/?></a>
                            <?php }?>
                        <?php }?>
                      </p></div>
                    </figcaption>
                </figure>
                <?php } ?>
            </div>
        </section>
	</div>
</body>
</html>