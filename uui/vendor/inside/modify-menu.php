<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- Header  -->
    <?php include("../frame/header.php");?>
    <!--Header /-->    

    <!-- BEGIN Menu -->
    <?php include("../frame/menu.php");?>
    <!-- END Menu -->
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">網站管理<span class="divider"> &gt; </span></li> <li class="active">選單管理</li></ul>
</div>
<div class="select-site">
  <button class="btn-switch" onclick="openCover();"><i class="fa fa-share"></i>切換至我的其他網站</button>
</div>
<dl class="modify-tabs">
  <dd><a href="modify-menu.html" class="active">選單管理</a></dd>
  <dd><a href="#" class="go-popup" data-width="800" data-href="popup/modify-filter.php">設定進階篩選</a></dd>
  <dd><a href="#" class="go-popup" data-width="800" data-href="popup/modify-log.php">修改記錄</a></dd>
</dl>
<div class="modify-content modify-menu-container clearfix">
  <div class="modify-button button-right">
    <button class="btn-save-only"><i class="fa fa-refresh"></i>同步物理性分類</button>
  </div>
  <!-- main menu -->
  <div class="modify-menu">
    <div class="title"><i class="fa fa-list"></i>第一層選單</div>
    <div class="modify-button">
      <button class="btn-submit"><i class="fa fa-check"></i>發佈第一層選單</button>
      <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-menu.php"><i class="fa fa-plus"></i>新增第一層選單</button>
    </div>
    <dl class="modify-menu-content main-menu">
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">所有商品</span>
          <span class="menu-type">全站</span>
        </div>
        <dl class="menu-content clearfix">
          <dd>群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" value="on" checked></div>
            <button class="btn-tiny btn-txt"><i class="fa fa-search"></i>查看選單</button>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" value="on" checked></div>
                <span class="recommend-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" value="on" checked></div>
                <span class="recommend-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible unvisible"><i class="fa fa-eye-slash"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny"><i class="fa fa-times btn-delete"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-submit" onclick="confirm('確認要發佈家電、視聽？\n(包含以下所有層級)');"><i class="fa fa-check"></i>發佈選單</button>
            <button class="btn-permission go-popup" data-width="800" data-href="popup/modify-permission.php"><i class="fa fa-lock"></i>權限</button>
            <button class="btn-edit go-popup" data-width="500" data-href="popup/modify-menu-ad.php"><i class="fa fa-file-image-o"></i>設定廣告圖</button>
            <button class="btn-edit" onclick="window.open('../inside/modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
    </dl>
  </div>
  <!-- submenu -->
  <div class="modify-menu sub-menu">
    <div class="title"><i class="fa fa-list"></i>第二層選單</div>
    <div class="modify-button">
      <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-menu.php"><i class="fa fa-plus"></i>新增第二層選單</button>
    </div>
    <dl class="modify-menu-content">
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit go-popup" data-width="450" data-href="popup/modify-menu-url.php"><i class="fa fa-pencil"></i>設定</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
    </dl>
  </div>
  <div class="modify-menu sub-menu">
    <div class="title"><i class="fa fa-list"></i>第三層選單</div>
    <div class="modify-button">
      <button class="btn-create go-popup" data-width="450" data-href="popup/modify-add-menu.php"><i class="fa fa-plus"></i>新增第三層選單</button>
    </div>
    <dl class="modify-menu-content">
      
      <dd class="menu-item">
        <div class="menu-plate">
          <span class="menu-visible"><i class="fa fa-eye"></i></span>
          <span class="menu-name">上衣類</span>
          <span class="menu-type">佈置</span>
        </div>
        <dl class="menu-content clearfix">
          <dd class="menu-catagory">群組：家電、視聽</dd>
          <dd>名稱：
            <span class="menu-name-custom">家電<button class="btn-tiny btn-edit"><i class="fa fa-pencil"></i></button></span>
            <span class="menu-name-editor"><input type="text" class="input-menu-name" value="家電"><button class="btn-tiny btn-save"><i class="fa fa-floppy-o"></i></button></span>
          </dd>
          <dd>顯示：
            <div class="switch-toggle"><input type="checkbox" class="input-switch" checked></div>
          </dd>
          <dd>推薦：
            <button class="btn-tiny go-popup" data-width="450" data-href="popup/modify-add-recommend.php"><i class="fa fa-plus"></i></button>
            <dl class="menu-recomment-list">
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
              <dd>
                <div class="switch-toggle"><input type="checkbox" class="input-switch"></div>
                <span class="recomment-name">日式迷你防潮除濕機</span>
                <button class="btn-tiny go-popup" data-width="500" data-href="popup/modify-recomm-condition.php"><i class="fa fa-pencil"></i></button><button class="btn-tiny btn-delete"><i class="fa fa-times"></i></button>
              </dd>
              
            </dl>
          </dd>
          <dd>重要屬性：品牌、顏色</dd>
          <dd class="menu-content-button">
            <button class="btn-edit" onclick="window.open('modify-homepage.php');"><i class="fa fa-th-large"></i>佈置</button>
            <button class="btn-delete"><i class="fa fa-times"></i>刪除</button>
          </dd>
        </dl>
      </dd>
      
    </dl>
  </div>
  <div class="tooltip-draghint">拖曳選單排序</div>
</div>
<!--section class="cover">
  <dl class="plateforms">
    <dt class="title">請選擇要進入編輯的網站：</dt>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
    <dd onclick="closeCover();">
      <h2>平台名稱平台名稱平台名稱</h2>
    </dd>
  </dl>
</section-->
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/inside-action.js"></script>
<script>
(function($){
  //$('body').css('overflow','hidden');
  //menu drag sort
  $('.modify-menu-content').sortable();
  //$('.modify-menu-content').disableSelection();
  //dialog
  $('.modify-button .btn-submit').each(function() {
    $(this).click(function() {
      confirm('確認要儲存並發佈第一層選單？\n(不包含以下所有層級)');
    });
  });
  $('.menu-content-button .btn-delete').each(function() {
    $(this).click(function() {
      confirm('確定刪除選單？\n所屬分類將會一併刪除');
    });
  });
  $('.menu-recomment-list .btn-delete').each(function() {
    $(this).click(function() {
      confirm('確定已設定的自訂推薦？');
    });
  });
})(jQuery);
//cover
// function closeCover() {
//   $('.cover').fadeOut(100);
//   $('body').css('overflow','auto');
//   $('.select-site').show();
// };
// function openCover() {
//   $('.cover').fadeIn(100);
//   $('body').css('overflow','hidden');
//   $('.select-site').hide();
// };
</script>
</body>
</html>