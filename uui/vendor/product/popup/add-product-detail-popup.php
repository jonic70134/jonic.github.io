<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.fancybox.css?v=2.1.4" rel="stylesheet" type="text/css" media="screen" />
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div id="wrapper">
    <!-- container -->
    <div id="container">
      <div class="breadcrumb_top">
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li> <li class="link">商品管理<span class="divider"> &gt; </span></li> <li><a href="/product/add-product.html">新增商品 (單筆/大量)</a><span class="divider"> &gt; </span></li> <li class="active">新增單筆商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product-detail">
    <dl class="form-element add-product-detail-form">
      <dt class="form-label"><span class="highlight">*</span>&nbsp;商品名稱&nbsp;<a class="fa fa-question-circle link-question go-popup" data-width="750" data-href="/product/popup/product-edit-name-infr.html" title="說明"></a></dt>
      <dd class="form-content">
        有人受上了了市啡番知什能啦議醉拚又少將失空本了他害爸他環疲雙&nbsp;&nbsp;<a href="/product/add-product-vendor.html" class="link-tiny">修改</a>
      </dd>
      <dt class="form-label"><span class="highlight">*</span>&nbsp;商品分類</dt>
      <dd class="form-content">
        <span class="t-grey">分類1&nbsp;&gt;&nbsp;分類2&nbsp;&gt;&nbsp;分類3</span>&nbsp;(電腦選配的分類)&nbsp;&nbsp;
        <a class="link-tiny go-open-catagory">修改</a>
      </dd>
      <dd class="form-content edit-catagory hide">
        <select name="" id=""><option value="">分類1</option></select>&gt;
        <select name="" id=""><option value="">分類2</option></select>&gt;
        <select name="" id=""><option value="">分類3</option></select>&nbsp;&nbsp;
        <span class="link-tiny go-latest-catagory">
          最近10個
          <div class="latest-catagory">
            
            <label for="latest_catagory1"><input type="radio" id="latest_catagory1" class="radio-latest-catagory" name="latest_catagory">分類1</label>
            
            <label for="latest_catagory2"><input type="radio" id="latest_catagory2" class="radio-latest-catagory" name="latest_catagory">分類2</label>
            
            <label for="latest_catagory3"><input type="radio" id="latest_catagory3" class="radio-latest-catagory" name="latest_catagory">分類3</label>
            
            <label for="latest_catagory4"><input type="radio" id="latest_catagory4" class="radio-latest-catagory" name="latest_catagory">分類4</label>
            
            <label for="latest_catagory5"><input type="radio" id="latest_catagory5" class="radio-latest-catagory" name="latest_catagory">分類5</label>
            
            <label for="latest_catagory6"><input type="radio" id="latest_catagory6" class="radio-latest-catagory" name="latest_catagory">分類6</label>
            
            <label for="latest_catagory7"><input type="radio" id="latest_catagory7" class="radio-latest-catagory" name="latest_catagory">分類7</label>
            
            <label for="latest_catagory8"><input type="radio" id="latest_catagory8" class="radio-latest-catagory" name="latest_catagory">分類8</label>
            
            <label for="latest_catagory9"><input type="radio" id="latest_catagory9" class="radio-latest-catagory" name="latest_catagory">分類9</label>
            
            <label for="latest_catagory10"><input type="radio" id="latest_catagory10" class="radio-latest-catagory" name="latest_catagory">分類10</label>
            
          </div>
        </span>
      </dd>
      <dt class="form-label"><span class="highlight">*</span>&nbsp;供貨廠商</dt>
      <dd class="form-content">
        <input type="text" class="input-search" placeholder="請輸入廠商名稱或編號">
        <dl class="related-searches" style="top: 24px; left: 3px;">
          
          <dd>賀琪 (ipsa)</dd>
          
          <dd>蕭琪霖 (et)</dd>
          
          <dd>廖德 (exercitationem)</dd>
          
        </dl>
      </dd>
      <div class="clearfix"></div>
      <div class="product-img-bloc">
        <div class="img-product img-product-large">
          <!-- img -->
          <!--input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/360x360/999999/ffffff">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
          <!-- no img -->
          <input type="file" class="input-img-file" accept="image/*">
          <p class="t-img-file-comment">
            <span class="link-tiny"><i class="fa fa-plus"></i>&nbsp;商品圖片</span>
            <br>
            <span class="t-grey">建議比例1:1&nbsp;/&nbsp;寬不可小於360px&nbsp;/&nbsp;大小不超過2MB<br>最多上傳10張</span>
          </p>
        </div>
        <p class="comment">商品主圖預覽(點小圖可切換)</p>
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x30/999999/ffffff">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <img src="http://placehold.it/65x65/999999/cccccc">
          <span class="t-edit-img">Edit</span>
          <button class="btn-delete-image" title="刪除"><i class="fa fa-times-circle"></i></button>
        </div>       
        
        <div class="img-product img-product-small">
          <input type="file" class="input-img-file" accept="image/*">
          <p class="t-img-file-comment">
            <span class="link-tiny"><i class="fa fa-plus"></i><br>圖片</span>
          </p>
        </div>
      </div>
      <div class="product-right-bloc">
        <dt class="form-label"><span class="highlight">*</span>&nbsp;銷售用名稱</dt>
        <dd class="form-content">
          <input type="text" size="60" value="-雨陣蛋憊和看信頭象倒頓行進時追始喜被一易行作去這兄老兄的錢">
          <a class="fa fa-question-circle link-question go-popup" data-width="750" data-href="/product/popup/product-edit-sell-name-infr.html" title="說明"></a>
        </dd>
        <dt class="form-label tight">賣點</dt>
        <dd class="form-content tight">
          <input type="text" size="60" placeholder="賣點1">
        </dd>
        <dt class="form-label tight"></dt>
        <dd class="form-content tight">
          <input type="text" size="60" placeholder="賣點2">
        </dd>
        <dt class="form-label"></dt>
        <dd class="form-content">
          <input type="text" size="60" placeholder="賣點3">
          <button class="btn-white" title="新增"><i class="fa fa-plus"></i></button>
        </dd>
        <dt class="form-label"><span class="t-grey t-crossline">市價</span></dt>
        <dd class="form-content">
          <input type="number" size="10" class="input-price t-crossline">
        </dd>
        <dt class="form-label"><span class="highlight">*</span>&nbsp;<span class="t-bold">售價</span></dt>
        <dd class="form-content" style="width:150px;">
          <input type="number" class="input-price input-sale-price t-bold">
          <span class="comment">(含稅)</span>
        </dd>
        <!--A1-->
        <!--dt class="form-label" style="width:80px;"><span class="highlight">*</span>&nbsp;<span class="t-bold">進貨價</span></dt>
        <dd class="form-content short edit-cost hide">
          <input type="number" size="10" class="input-price input-cost t-bold">
          <span class="comment">(含稅)</span>
        </dd>
        <!--S/B-->
        <!--dt class="form-label" style="width:80px;"><span class="highlight">*</span>&nbsp;<span class="t-bold">進貨價</span></dt>
        <dd class="form-content short edit-cost hide">
          <span class="t-bold">65,535</span>
          <span class="comment">(含稅)</span>
        </dd>
        <!--AN-->
        <dt class="form-label" style="width:80px;"><span class="highlight">*</span>&nbsp;<span class="t-bold">進貨價</span></dt>
        <dd class="form-content medium edit-cost hide">
          <span class="cost-bloc">
            <span class="t-bold">65,535</span>
            <a class="link-tiny go-edit-cost">修改</a>
          </span>
          <input type="number" size="10" class="input-price input-cost t-bold hide" value="65535">
          <span class="comment">(含稅)&nbsp;毛利率99%</span>
        </dd>
        <dd class="form-content confirm-price hide">
          再輸入一次售價&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">仟萬&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">佰萬&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">拾萬&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">萬&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">仟&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">佰&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">拾&nbsp;
          <input type="text" class="input-single-number" maxlength="1" pattern="[0-9]">元
        </dd>
        <br>
        <dt class="form-label"><span class="highlight">*</span>&nbsp;進項稅率</dt>
        <dd class="form-content">
          <input type="radio" id="radio-income-tax" checked>
          <label for="radio-income-tax">5%</label>
        </dd>
        <dt class="form-label"><span class="highlight">*</span>&nbsp;銷項稅率</dt>
        <dd class="form-content">
          <input type="radio" id="radio-outcome-tax1" name="radio-outcome-tax">
          <label for="radio-outcome-tax1">5%</label>&nbsp;&nbsp;
          <input type="radio" id="radio-outcome-tax2" name="radio-outcome-tax">
          <label for="radio-outcome-tax2">18%</label>
        </dd>
        <dt class="form-label"></dt>
        <dd class="form-content tight">
          <a class="link-tiny go-popup" data-width="600" data-href="/product/popup/product-edit-color.html" data-with-close="false"><i class="fa fa-plus"></i>&nbsp;顏色</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="link-tiny go-popup" data-width="400" data-href="/product/popup/product-edit-size.html" data-with-close="false"><i class="fa fa-plus"></i>&nbsp;尺寸</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="link-tiny go-popup" data-width="600" data-href="/product/popup/product-edit-color.html" data-with-close="false">編輯顏色/尺寸</a>
        </dd>
        <dt class="form-label"></dt>
        <dd class="form-content">
          <div class="product-color-size">
            <!--color+size-->
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            <div class="product-size-bloc">
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
              <span class="spec product-size">S</span>
              
            </div>
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            <div class="product-size-bloc">
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
              <span class="spec product-size">XXXXS</span>
              
            </div>
            <div class="clearfix"></div>
            <!--only size-->
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <span class="spec product-size">S</span>
            
            <div class="clearfix"></div>
            <!--only color-->
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <span class="spec product-color"><img src="http://placehold.it/40x40/999999/ffffff"></span>
            
            <div class="clearfix"></div>
          </div>
        </dd>
      </div>
      <div class="clearfix"></div>
      <dt class="form-label-full">
        商品說明&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn-transparent"><i class="fa fa-file-text-o"></i>&nbsp;新增文</button>
        <span class="btn-transparent"><i class="fa fa-picture-o"></i>&nbsp;新增圖<input type="file" class="input-img-file" accept="image/*"></span>
        <button class="btn-transparent"><i class="fa fa-picture-o"></i><i class="fa fa-align-left"></i>&nbsp;左圖右文</button>
        <button class="btn-transparent"><i class="fa fa-align-right"></i><i class="fa fa-picture-o"></i>&nbsp;右圖左文</button>
        <button class="btn-transparent go-popup" data-width="500" data-href="/product/popup/product-edit-video.html"><i class="fa fa-youtube-play"></i>&nbsp;新增影片</button>
      </dt>
      <dd class="product-editor">
        <div class="wysieditor">
          <div id="wysieditor-toolbar" class="toolbar-editor" style="display: none;">
                      <a data-wysihtml5-command="bold" title="Make text bold"><i class="fa fa-bold"></i></a>
          <a data-wysihtml5-command="italic" title="Italic" title="Make text italic"><i class="fa fa-italic"></i></a>
          <a data-wysihtml5-command="underline" title="Make text underline"><i class="fa fa-underline"></i></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller"><i class="fa fa-font"></i><span class="sup">-</span></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger"><i class="fa fa-font"></i><span class="sup">+</span></a>
          <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
          <div class="toolbar-function forecolor" style="display: none;">
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;"></a>
          </div>
          <a data-wysihtml5-command="insertOrderedList" title="Insert an ordered list"><i class="fa fa-list-ol"></i></a>
          <a data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list"><i class="fa fa-list-ul"></i></a>
          <a data-wysihtml5-command="insertImage" title="Insert an image"><i class="fa fa-picture-o"></i></a>
          <div data-wysihtml5-dialog="insertImage" class="toolbar-function" style="display: none;">
            <label>
              Image:
              <input type="file" data-wysihtml5-dialog-field="src">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a>
            <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          <a data-wysihtml5-command="createLink" title="Insert a link"><i class="fa fa-link"></i></a>
          <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
            <label>
              Link:
              <input data-wysihtml5-dialog-field="href" value="http://" class="text">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          </div>
          <textarea id="wysieditor-textarea" class="textarea-editor" rows="5" placeholder="請輸入商品說明..."></textarea>
        </div> 
        <div class="product-editor-order">
          排序
          <input type="number" class="input-tiny-number">
          <button class="btn-white" title="刪除"><i class="fa fa-times"></i></button>
        </div>       
      </dd>
      <!--dd class="product-editor">
        <div class="wysieditor width-half">
          <div id="wysieditor-toolbar1" class="toolbar-editor" style="display: none;">
                      <a data-wysihtml5-command="bold" title="Make text bold"><i class="fa fa-bold"></i></a>
          <a data-wysihtml5-command="italic" title="Italic" title="Make text italic"><i class="fa fa-italic"></i></a>
          <a data-wysihtml5-command="underline" title="Make text underline"><i class="fa fa-underline"></i></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller"><i class="fa fa-font"></i><span class="sup">-</span></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger"><i class="fa fa-font"></i><span class="sup">+</span></a>
          <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
          <div class="toolbar-function forecolor" style="display: none;">
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;"></a>
          </div>
          <a data-wysihtml5-command="insertOrderedList" title="Insert an ordered list"><i class="fa fa-list-ol"></i></a>
          <a data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list"><i class="fa fa-list-ul"></i></a>
          <a data-wysihtml5-command="insertImage" title="Insert an image"><i class="fa fa-picture-o"></i></a>
          <div data-wysihtml5-dialog="insertImage" class="toolbar-function" style="display: none;">
            <label>
              Image:
              <input type="file" data-wysihtml5-dialog-field="src">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a>
            <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          <a data-wysihtml5-command="createLink" title="Insert a link"><i class="fa fa-link"></i></a>
          <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
            <label>
              Link:
              <input data-wysihtml5-dialog-field="href" value="http://" class="text">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          </div>
          <textarea id="wysieditor-textarea1" class="textarea-editor" rows="5" placeholder="請輸入商品說明..."></textarea>
        </div>
        <div class="wysieditor width-half">
          <div id="wysieditor-toolbar2" class="toolbar-editor" style="display: none;">
                      <a data-wysihtml5-command="bold" title="Make text bold"><i class="fa fa-bold"></i></a>
          <a data-wysihtml5-command="italic" title="Italic" title="Make text italic"><i class="fa fa-italic"></i></a>
          <a data-wysihtml5-command="underline" title="Make text underline"><i class="fa fa-underline"></i></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller"><i class="fa fa-font"></i><span class="sup">-</span></a>
          <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger"><i class="fa fa-font"></i><span class="sup">+</span></a>
          <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
          <div class="toolbar-function forecolor" style="display: none;">
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;"></a>
            <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;"></a>
          </div>
          <a data-wysihtml5-command="insertOrderedList" title="Insert an ordered list"><i class="fa fa-list-ol"></i></a>
          <a data-wysihtml5-command="insertUnorderedList" title="Insert an unordered list"><i class="fa fa-list-ul"></i></a>
          <a data-wysihtml5-command="insertImage" title="Insert an image"><i class="fa fa-picture-o"></i></a>
          <div data-wysihtml5-dialog="insertImage" class="toolbar-function" style="display: none;">
            <label>
              Image:
              <input type="file" data-wysihtml5-dialog-field="src">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a>
            <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          <a data-wysihtml5-command="createLink" title="Insert a link"><i class="fa fa-link"></i></a>
          <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
            <label>
              Link:
              <input data-wysihtml5-dialog-field="href" value="http://" class="text">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          </div>
          <textarea id="wysieditor-textarea2" class="textarea-editor" rows="5" placeholder="請輸入商品說明..."></textarea>
        </div>
        <div class="product-editor-order">
          排序
          <input type="number" class="input-tiny-number">
          <button class="btn-white" title="刪除"><i class="fa fa-times"></i></button>
        </div>
        <div class="clearfix"></div>
      </dd>
      <dd class="product-editor">
        <div class="product-editor-image-preview">
          <img src="http://placehold.it/1000x150/ffffff/cccccc">
        </div>
        <div class="product-editor-order">
          排序
          <input type="number" class="input-tiny-number">
          <button class="btn-white" title="刪除"><i class="fa fa-times"></i></button>
          <br><br>
          <label for="checkbox_image_no_space"><input type="checkbox" id="checkbox_image_no_space">與下方圖片不要有間隙</label>
        </div>       
      </dd-->
      <dd>
        <button class="btn-transparent"><i class="fa fa-file-text-o"></i>&nbsp;新增文</button>
        <span class="btn-transparent"><i class="fa fa-picture-o"></i>&nbsp;新增圖<input type="file" class="input-img-file" accept="image/*"></span>
        <button class="btn-transparent"><i class="fa fa-picture-o"></i><i class="fa fa-align-left"></i>&nbsp;左圖右文</button>
        <button class="btn-transparent"><i class="fa fa-align-right"></i><i class="fa fa-picture-o"></i>&nbsp;右圖左文</button>
        <button class="btn-transparent go-popup" data-width="500" data-href="/product/popup/product-edit-video.html"><i class="fa fa-youtube-play"></i>&nbsp;新增影片</button>
      </dd>
      <dt class="form-label-full">
        商品規格&nbsp;<a class="fa fa-question-circle link-question go-popup" data-width="500" data-href="/product/popup/product-edit-spec-infr.html" title="說明"></a>&nbsp;&nbsp;&nbsp;&nbsp;
        <span class="btn-transparent"><i class="fa fa-picture-o"></i>&nbsp;新增圖<input type="file" class="input-img-file" accept="image/*"></span>
      </dt>
      <dd class="product-editor">
        <textarea class="textarea-editor" rows="5" placeholder="描述商品的性能、支援環境 (電腦：螢幕尺寸 / 記憶體  / CPU...等)"></textarea>  
      </dd>
      <!--dd class="product-editor">
        <div class="product-editor-image-preview">
          <img src="http://placehold.it/1000x150/ffffff/cccccc">
        </div>
        <div class="product-editor-order">
          <button class="btn-white" title="刪除"><i class="fa fa-times"></i></button>
        </div>       
      </dd-->
      <dt class="form-label-full">商品標準配備&nbsp;<a class="fa fa-question-circle link-question go-popup" data-width="500" data-href="/product/popup/product-edit-equip-infr.html" title="說明"></a></dt>
      <dd class="product-editor">
        <textarea class="textarea-editor" rows="5" placeholder="商品隨附的配件、零件、贈品或說明書 (電腦：電源線 / 滑鼠 / 鍵盤...等)"></textarea>      
      </dd>
      <dd><a class="link-tiny go-edit-warranty">建立保固資訊</a></dd>
      <dt class="edit-warranty hide">保固資訊&nbsp;&nbsp;<a class="link-tiny go-hide-warranty">取消</a></dt>
      <dt class="form-label edit-warranty hide">保固期</dt>
      <dd class="form-content edit-warranty hide">
        <input type="number" class="input-tiny-number">年<input type="number" class="input-tiny-number">個月
      </dd>
      <dd><a class="link-tiny go-edit-repair">建立維修資訊</a></dd>
      <dt class="edit-repair hide">維修資訊&nbsp;&nbsp;<a class="link-tiny go-hide-repair">取消</a></dt>
      <dt class="form-label edit-repair hide">維修網址</dt>
      <dd class="form-content edit-repair hide">
        <input type="url" size="50" placeholder="維修資訊網站頁面">
        <a class="link-tiny go-latest-repair-info">
          使用常用資訊
          <div class="latest-repair-info">
            
            <ul class="latest-repair-info-content">
              <input type="radio" id="radio_repair_info" class="radio-repair-info" name="radio-repair-info">
              <label for="radio_repair_info">
                <li>http://www.asap.com.tw/1234567890</li>
                <li>0912345678</li>
                <li>桃園市龜山區中興路一段21號</li>
              </label>
            </ul>
            
            <ul class="latest-repair-info-content">
              <input type="radio" id="radio_repair_info" class="radio-repair-info" name="radio-repair-info">
              <label for="radio_repair_info">
                <li>http://www.asap.com.tw/1234567890</li>
                <li>0912345678</li>
                <li>桃園市龜山區中興路一段21號</li>
              </label>
            </ul>
            
            <ul class="latest-repair-info-content">
              <input type="radio" id="radio_repair_info" class="radio-repair-info" name="radio-repair-info">
              <label for="radio_repair_info">
                <li>http://www.asap.com.tw/1234567890</li>
                <li>0912345678</li>
                <li>桃園市龜山區中興路一段21號</li>
              </label>
            </ul>
            
          </div>
        </a>
      </dd>
      <dt class="form-label edit-repair hide">維修電話</dt>
      <dd class="form-content edit-repair hide">
        <input type="tel" size="20" placeholder="維修聯絡電話">
      </dd>
      <dt class="form-label edit-repair hide">維修地址</dt>
      <dd class="form-content edit-repair hide">
        <input type="text" size="50" placeholder="維修服務地址">
      </dd>
      <hr>
      <dd><a class="comment go-edit-comment">我要填寫備註</a></dt>
      <dt class="edit-comment hide">填寫備註&nbsp;&nbsp;<a class="link-tiny go-hide-comment">取消</a></dt>
      <dt class="form-label edit-comment hide">
        <label for="radio_product_comment1"><input type="radio" id="radio_product_comment1" name="radio_product_comment">文字備註</label>
      </dt>
      <dd class="form-content edit-comment hide">
        <div class="edit-comment-content hide">
          <input type="text" size="50" placeholder="填寫文字備註">
          <br>
        <span class="comment">* 將顯示於「前端銷售網頁」右上方。</span>
        </div>
      </dd>
      <dt class="form-label edit-comment hide">
        <label for="radio_product_comment2"><input type="radio" id="radio_product_comment2" name="radio_product_comment">圖片備註</label>
      </dt>
      <dd class="form-content edit-comment hide">
        <div class="edit-comment-content hide">
          <span class="btn-transparent"><i class="fa fa-picture-o"></i>&nbsp;新增圖<input type="file" class="input-img-file" accept="image/*"></span>
          <br>
          <span class="comment">* 將顯示於「前端銷售網頁」右上方。寬度限制1000px&nbsp;/&nbsp;高度不可超過400px&nbsp;/&nbsp;大小不可超過300KB</span>
          <div class="product-editor">
            <div class="product-editor-image-preview">
              <img src="http://placehold.it/1000x150/ffffff/cccccc">
            </div>
            <div class="product-editor-order">
              <button class="btn-white" title="刪除"><i class="fa fa-times"></i></button>
            </div>
          </div>
        </div>
      </dd>
    </dl>
    <div class="template-button">
      <button class="btn-cancel" onclick="location.href='/product/add-product-vendor.html'"><i class="fa fa-caret-left"></i>上一步</button>
      <button class="btn-submit" onclick="location.href='/product/add-product-upload.html'">下一步&nbsp;&nbsp;<i class="fa fa-caret-right"></i></button>
    </div>
  </div>
</section>
    </div>
    <!-- container /-->
<!--%= render :partial => "footer" %-->
</div><!-- wrapper /-->
<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/lib/wysihtml5-advanced.js"></script>
<script src="../../js/lib/wysihtml5-0.3.0.min.js"></script>
<script src="../../js/template-action.js"></script>
<script>
//修改分類
$('.go-open-catagory').click(function() {
  $(this).parent('.form-content').addClass('hide').next('.edit-catagory').removeClass('hide');
});
//廠商下拉
$('.input-search').bind('keyup change',function(){
    $(this).next('.related-searches').slideDown(100);
    if ($(this).val() == '') {
        $(this).next('.related-searches').slideUp(50);
    };
}).blur(function() {
    $(this).next('.related-searches').slideUp(50);
});
//售價,進貨價
$('.input-sale-price').blur(function(){
  $('.edit-cost').removeClass('hide');
  $('.confirm-price').removeClass('hide');
});
$('.input-confirm-price').bind('keyup change',function(){
  $(this).val(this.value.match(/[0-9]*/));
  if($(this).val().length >= $(this).attr('maxlength')){
    $(this).next('.input-confirm-price').focus();
  };
});
$('.go-edit-cost').click(function() {
  $(this).parent('.cost-bloc').addClass('hide').next('.input-cost').removeClass('hide');
});
//保固, 維修, 備註
$('.go-edit-warranty').click(function() {
  $(this).parent('dd').addClass('hide');
  $('.edit-warranty').removeClass('hide');
});
$('.go-hide-warranty').click(function() {
  $('.go-edit-warranty').parent('dd').removeClass('hide');
  $('.edit-warranty').addClass('hide');
});
$('.go-edit-repair').click(function() {
  $(this).parent('dd').addClass('hide');
  $('.edit-repair').removeClass('hide');
});
$('.go-hide-repair').click(function() {
  $('.go-edit-repair').parent('dd').removeClass('hide');
  $('.edit-repair').addClass('hide');
});
//備註
$('.go-edit-comment').click(function (){
  $('.go-edit-comment').parent('dd').addClass('hide');
  $('.edit-comment').removeClass('hide');
});
$('.go-hide-comment').click(function (){
  $('.go-edit-comment').parent('dd').removeClass('hide');
  $('.edit-comment').addClass('hide');
});
$('input[name="radio_product_comment"]').click(function() {
  $('.edit-comment-content').addClass('hide');
  $(this).parents('.form-label').next('.form-content').find('.edit-comment-content').removeClass('hide');
});
//editor
var editor = new wysihtml5.Editor("wysieditor-textarea", {
  toolbar: "wysieditor-toolbar",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor = new wysihtml5.Editor("wysieditor-textarea1", {
  toolbar: "wysieditor-toolbar1",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor = new wysihtml5.Editor("wysieditor-textarea2", {
  toolbar: "wysieditor-toolbar2",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
$('.toolbar-forecolor').click(function() {
  $('.toolbar-function.forecolor').toggle();
});
$('.toolbar-color').click(function() {
  $('.toolbar-function.forecolor').hide();
});
</script>
</body>
</html>