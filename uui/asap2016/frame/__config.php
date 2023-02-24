<?php

/*
    Anthor      Ken.huang
    Mail        ken.huang@uitox.com
    Create date 2014/11/19 11:30 Ken Huang
    Last update 2015/05/29 11:30 Arashis Shen
    Note        seprate md_meta rwd_meta pc_meta
*/

//判斷頁面引用
$sitePage = basename($_SERVER["SCRIPT_FILENAME"], '.php');

//判斷主題資料夾來源
$siteName = explode("/", $_SERVER["SCRIPT_FILENAME"]);
$siteName = $siteName[count($siteName) - 2];

//網站描述
$siteDesc = "The web template of uitox inside.";

//顯示後臺編輯區塊
if((isset($_GET['edit'])) && $_GET['edit']=="true") {
    $edit = $_GET['edit'];
}else{
    $edit = "";
}
//全站切換顏色變數
if(isset($_GET['color'])){
    $color = $_GET['color'];
}else{
    $color = "white";
}

//單品頁測試變數
if($sitePage == "item"){
    if(isset($_GET['pid'])){
        $pid = $_GET['pid'];
    }else{
        $pid = "0";
    }
    if(isset($_GET['type']))
    {
        $value['type']=$_GET['type'] ; //測試用
    }
    if((isset($_GET['imp'])) && $_GET['imp']=="true") {
        $imp = $_GET['imp'];
    }else{
        $imp = "";
    }
    if((isset($_GET['sale'])) && $_GET['sale']=="true") {
        $sale = $_GET['sale'];
    }else{
        $sale = "";
    }
}

//活動頁測試變數
if($sitePage == "activity"){
    if((isset($_GET['act'])) && $_GET['act']=="true") {
        $act = $_GET['act'];
    }else{
        $act = "";
    }
    if((isset($_GET['imp'])) && $_GET['imp']=="true") {
        $imp = $_GET['imp'];
    }else{
        $imp = "";
    }
}

//活動頁測試變數
if($sitePage == "activity_group"){
    if((isset($_GET['act'])) && $_GET['act']=="true") {
        $act = $_GET['act'];
    }else{
        $act = "";
    }
    if((isset($_GET['imp'])) && $_GET['imp']=="true") {
        $imp = $_GET['imp'];
    }else{
        $imp = "";
    }
}

//首頁 區頁 館頁測試變數
if($sitePage == "index" || $sitePage == "market" || $sitePage == "market_mid" || $sitePage == "category"){
    if((isset($_GET['imp'])) && $_GET['imp']=="true") {
        $imp = $_GET['imp'];
    }else{
        $imp = "";
    }
}

//首頁
if($sitePage == "index"){
    if((isset($_GET['index_m'])) && $_GET['index_m']=="true") {
        $index_m = $_GET['index_m'];
    }else{
        $index_m = "";
    }
}

//圖片是否lazyload變數 for md
$lazyload = true;

//活動頁商品是否在購物車內 for md
$cart = false;

//搜尋測試變數 for md
if($sitePage == "search"){
    if((isset($_GET['result'])) && $_GET['result']=="true") {
        $result = $_GET['result'];
    }else{
        $result = "";
    }
}


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
    echo '<title>' . $siteName . ' - ' . $sitePage . '</title>';
    echo '<link rel="shortcut icon" href="../c/img/favicon.ico" />';
    //純桌機板，viewport條不使用rwd條件
    if($type=='pc' || $type=='sosoon'){
        echo '<meta name="viewport" content="">';
    }else if($type=='md' && $sitePage=='item'){//手機版單品頁可縮放
        echo '<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">';
    }else{
        echo '<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1.0, user-scalable=yes">';
    }
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/default/main/frame.css">';
    if($sitePage=='index' && $type =='pc'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_002.css">';//上方廣告＋輪播廣告
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_016.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_017.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_010.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_012.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_013.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_015.css">';//頁面選單欄
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_002.css">';
    }
    if($sitePage=='market' && $type =='pc'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_015.css">';//頁面選單欄
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_016.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_017.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_006.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_list.css">';
    }
    if($sitePage=='market_mid' && $type =='pc'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_003.css">';
        // echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_011.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_009.css">';// 輪播
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_010.css">';// 頁籤6page
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/pc_market_011.css">';// 其他推薦商品
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_015.css">';//頁面選單欄
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_list.css">';
    }

    if($sitePage=='category' && $type =='pc'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_011.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_006.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/pc_category_list.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_015.css">';//頁面選單欄
    }
    if($sitePage=='index' && $type =='sosoon'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/sosoon_index_010.css">';
    }
    if($sitePage=='market' && $type =='sosoon'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_list.css">';
    }
    if($sitePage=='category' && $type =='sosoon'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/sosoon_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/sosoon_category_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/sosoon_category_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/sosoon_category_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/sosoon_category_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/sosoon_category_list.css">';
    }
     if($sitePage=='groupbuy' && $type =='pc'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/pc_left_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_010.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_011.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_012.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_013.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/pc_index_014.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_market/sosoon_market_list.css">';
    }
    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/default/main/' . $sitePage . '.css">';
    //rwd版型，依據後臺設定選擇index module
    if($sitePage=='index' && $type =='rwd'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_000.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_006.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_010.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/rwd_category_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_011.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_012.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_013.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_014.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_015.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_017.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_018.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_019.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_020.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_021.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_022.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_023.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_024.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_025.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_026.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_027.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_028.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_029.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_030.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_031.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_032.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_033.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_034.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_035.css">';
    }
    if($sitePage=='market' && $type =='rwd'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_000.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_005.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_006.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_007.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_008.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_009.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_index/rwd_index_010.css">';
    }
    if($sitePage=='category' && $type =='rwd'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_004.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/rwd_category_001.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/rwd_category_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/rwd_category_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_category/rwd_category_004.css">';
    }
    if($sitePage=='item' && $type =='rwd'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_002.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_003.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/module_left/rwd_left_004.css">';
    }


    echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/default/main/color_' . $color . '.css">';
    echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/font-awesome.min.css">';
    //首頁布置的按鈕
    if($edit=='true' && $sitePage='index'){
        echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/jquery-ui-1.10.4.custom.css">';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/3rd-party/editor-btn.css">';
    }
    if($type=='pc' || $type=='rwd' || $type=='sosoon'){
        echo '<!--[if lt IE 9]>';
        echo '<link rel="stylesheet" type="text/css" href="../c/css/front/' . $siteName . '/default/main/ie8.css">';
        echo '<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
        echo '<script src="../c/js/3rd-party/respond.js"></script>';
        echo '<![endif]-->';
    }
}
?>