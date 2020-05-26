<?php
$siteMap = array(
    array(
        "name"      => "賣場/首頁",
        "url"       => "../front/index.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/首頁 - 編輯",
        "url"       => "../front/index.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "mode"      => "edit=true",
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/館頁",
        "url"       => "../front/category.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/單品頁",
        "url"       => "../front/item.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/搜尋結果頁",
        "url"       => "../front/search_result.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/活動頁 - 還沒有",
        "url"       => "../front/activity.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/活動頁 - 特賣中",
        "url"       => "../front/activity.php",
        // "state"     => "100",
        "mode"      => "act=true",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "賣場/錯誤頁",
        "url"       => "../frame/404.php",
        // "state"     => "100",
        "color"     => array(
            "white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/新客註冊",
        "url"       => "../help_center/sign_up.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/購買流程",
        "url"       => "../help_center/shop_flow.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/配送方式",
        "url"       => "../help_center/delivery.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/付款方式",
        "url"       => "../help_center/payway.php",
        "color"     => array(
            "",
        ),
        // "state"     => "100",
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/售後服務",
        "url"       => "../help_center/service.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "desc"      => "done",
    ),
    array(
        "name"      => "說明/常見問題",
        "url"       => "../help_center/faq.php",
        // "state"     => "100",
        "color"     => array(
            "",
        ),
        "desc"      => "done",
    ),
);
date_default_timezone_set("Asia/Taipei");
$filename = "../temp/sitemap.php";
if (file_exists($filename)) {
    $lastUpdate = date ("Y F d H:i:s", filemtime($filename));
}
?>
<!doctype html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Language" content="zh-TW">
    <meta name="description" content="LINE FLASH SALE SITEMAP">
	<meta name="keywords" content="LINE FLASH SALE">
    <meta property="og:site_name" content="LINE FLASH SALE"/>
    <meta property="og:title" content="LINE FLASH SALE>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:description" content="LINE FLASH SALE SITE MAP"/>
    <meta property="og:url" content="http://http://prototype-kenblue.rhcloud.com/line"/>
    <meta property="og:image" content="http://static.naver.jp/line_lp/c/img/line_icon_200.jpg"/>
	<title>001(ADI) sitemap</title>
	<link rel="shortcut icon" href="../c/img/favicon.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="../c/css/white/default/main/frame.css">
	<link rel="stylesheet" type="text/css" href="../c/css/temp/sitemap.css">
    <!--[if lt IE 9]>
        <script src="../assets/js/3rd-party/respond.js"></script>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->
</head>
<body>
	<article class="container">
		<h1><span class="brand">001(ADI)</span><span class="page">sitemap</span></h1>
		<p class="author">edit by 
		<a href="mailto:ken.huang@uitox.com" title="LINE id: ken2016">Ken Huang</a>, 
		<a href="mailto:thousnd.chen@uitox.com" title="LINE id: thousand0607">1000</a>
		</p>
		<p class="update">Last update: <?php echo $lastUpdate;?></p>
		<table class="site-table">
			<tr>
				<th>No.</th>
				<th class="name">page</th>
                <th class="colors">colors</th>
				<!-- <th class="state">state</th> -->
				<th class="desc">desc</th>
			</tr>
			<?php foreach ($siteMap as $key => $value) {?>
			<tr>
                <!-- 頁面編號 -->
				<td class="no"><?php echo $key+1;?></td>
                <!-- 頁面名稱 -->
				<td class="name">
                    <?php //combine URL
                        if(isset($value['mode'])){
                            $url = $value['url']."?".$value['mode'];
                        }else{
                        $url = $value['url']."?";
                        }
                    ?>
					<a href="<?php echo $url;?>" title="<?php echo $url;?>" class="name-link">
						<?php echo $value['name'];?>
					</a>
				</td>
                <!-- 頁面顏色 -->
                <?php if(isset($value['color'])){?>
                <td>
                    <?php foreach ($value['color'] as $item){ ?>
                    <a href="<?php echo $url."&color=".$item;?>" class="link <?php echo $item;?>"><?php echo $item;?></a>
                    <?php }?>
                </td>
                <?php }?>
                <!-- 頁面狀態 -->
				<?php if(isset($value['state'])){?>
                <td>
                    <div class="state">
                    <progress value="<?php echo $value['state'];?>" max="100" class="progress-bar run"></progress>
                    <span class="percentage"><?php echo $value['state'];?>%</span>
                    </div>
                </td>
                <?php }?>
                <!-- 頁面說明 -->
                <?php if(isset($value['desc'])){?>
                <td class="desc">
                    <?php echo $value['desc'];?>
                    <?php if(isset($value['other'])){
                        echo "<br>".$value['other'];
                    }?>
                </td>
                <?php }?>
			</tr>
			<?php }?>
		</table>
	</article>
	<footer>
		<small>uitox internal only</small>
	</footer>
	<?php include "../frame/__js_library.php";?>
	<script>
	(function($){
		$('.name-link').on('click', function(event){
			if($(this).attr('href')==""){
				event.preventDefault();
			}
		})
    })(jQuery);
	</script>
</body>
</html>