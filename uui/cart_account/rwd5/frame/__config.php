<?php
//判斷頁面引用
$sitePage = basename($_SERVER["SCRIPT_FILENAME"], '.php');

//判斷主題資料夾來源
$siteName = explode("/", $_SERVER["SCRIPT_FILENAME"]);
$siteName = $siteName[count($siteName) - 2];

//網站描述
$siteDesc = "my account";

$siteUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
function meta(){
    global $edit;
    global $color;
    global $siteName;
    global $siteDesc;
    global $siteUrl;
    global $sitePage;
    global $type; //pc, md, rwd
    echo '<meta charset="UTF-8">';
    echo '<meta http-equiv="Content-Language" content="zh-TW">';
    echo '<meta name="description" content="'. $siteDesc . '">';
    echo '<meta name="keywords" content="">';
    echo '<meta property="og:site_name" content="'. $siteName . '"/>';
    echo '<meta property="og:title" content="' . $siteName . '"/>';
    echo '<meta property="og:type" content="product"/>';
    echo '<meta property="og:description" content="' . $siteDesc . '"/>';
    echo '<meta property="og:url" content="' . $siteUrl . '"/>';
    echo '<meta property="og:image" content="../c/img/front/' . $siteName . '/ogimage.jpg"/>';
    echo '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >';
    echo '<meta name="renderer" content="webkit|ie-comp|ie-stand" />';
    echo '<meta name="format-detection" content="telephone=no">';
    echo '<title>' . $siteName . ' - ' . $sitePage . '</title>';
    echo '<link rel="shortcut icon" href="../c/img/favicon.ico" />';    

    echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">';

    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/frame.css">';    
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/' . $sitePage . '.css">';    
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/color_' . $color . '.css">';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/common.css">';  

    echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css">';

    
    echo '<!--[if lt IE 9]>';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/ie8.css">';
    echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
    echo '<script src="../c/js/3rd-party/selectivizr.js"></script>';
    echo '<script src="../c/js/3rd-party/respond.js"></script>';
    echo '<![endif]-->';
}
?>