<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../css/plugin/wysihtml5-editor.css" rel="stylesheet" type="text/css">
<link href="../css/layout.css" rel="stylesheet" type="text/css">
<link href="../css/product.css" rel="stylesheet" type="text/css">
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
  <ul class="breadcrumb"><li><a href="/">首頁</a><span class="divider"> &gt; </span></li><li class="active">新增商品</li></ul>
</div>
<section class="template-content">
  <div class="add-product clearfix">
    <h1 class="title"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>基本資訊</h1>
    <!-- 修改商品名稱 -->
    <div class="prod-edit-line clearfix">
      <h2 class="sub-title"><span class="highlight">*</span>商品名稱</h2>
      <div class="prod-name-edit">
        <span class="prod-name">【華信】韓國 Apieu 黑頭粉刺去角質清潔墊</span>
        <a href="#">修改</a>
      </div>
    </div>
    <!-- 修改分類 -->
    <div class="prod-edit-line clearfix">
      <h2 class="sub-title"><span class="highlight">*</span>分類</h2>
      <div class="prod-name-edit">
        <span class="prod-name">居家生活&gt;文具用品</span>
        <a href="#">修改</a>
      </div>
    </div>
    <!-- 修改品牌 -->
    <div class="prod-edit-line clearfix">
      <h2 class="sub-title">品牌</h2>
      <div class="prod-brand-edit">
        <select name="" id="">
          <option value="">ANDALOU 安德魯</option>
          <option value="">ANDALOU 安德魯</option>
          <option value="">ANDALOU 安德魯</option>
          <option value="">ANDALOU 安德魯</option>
        </select>
        <a href="#">增加</a>
      </div>
    </div>
    <!-- 修改價格 -->
    <div class="prod-edit-line clearfix">
      <h2 class="sub-title"><span class="highlight">*</span>價格</h2>
      <div class="prod-price-edit">
        <table class="prod-price-edit-table is-edit create-prod-form-list template-table form-element">
          <thead>
            <tr>
              <th class="col-grey">售價</th>
              <th class="col-grey">成本</th>
              <th class="col-grey">毛利率</th>
              <th class="col-grey">毛額</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>$690<br/><br/><a href="#">變更</a></td>
              <td>$621<br/><span class="highlight">(抽%轉換)</span><br/><br/><a href="#">變更</a></td>
              <td>10%</td>
              <td>$69</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  

    <div class="prod-edit edit-pic template-table clearfix ">
      <h2 class="sub-title">商品圖及文案</h2>
      <div class="main-pic">
        <h2 class="sub-title"><span class="highlight">*</span>商品主圖</h2>
        <ul class="main-pic-des">
          <li>建議圖片寬度為1200(最小600)，且比例大小為1:1</li>
          <li> 建議背景為白底</li>
          <li>最多上傳10張</li>
        </ul>
        <a href="#" class="fileinput-href">
            <span class="fileinput-button" >
              <i class="fa fa-plus"></i>
            </span>
            <input type="file" class="fileupload" name="userfile" multiple="">
        </a>
      </div>
      
      <div class="main-pic">
        <h2 class="sub-title"><span class="highlight">*</span>商品賣點</h2>
        <ul class="main-pic-summary">
          <li><input type="text" name="" id=""/><a class="add-summary">增加賣點</a></li>
        </ul>
      </div>

      <div class="main-pic main-pic-copy">
        <h2 class="sub-title"><span class="highlight">*</span>商品文案</h2>
      <div class="product-editor template-table">
        <div class="wysieditor">
          <div id="wysieditor-toolbar" class="toolbar-editor">
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
          <a data-wysihtml5-command="createLink" title="Insert a link"><i class="fa fa-link"></i></a>
          <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
            <label>
              Link:
              <input data-wysihtml5-dialog-field="href" value="http://" class="text">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a> <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div>
          <a data-wysihtml5-command="justifyLeft" title="Align left"><i class="fa fa-align-left"></i></a>
          <a data-wysihtml5-command="justifyCenter" title="Align center"><i class="fa fa-align-justify"></i></a>
          <a data-wysihtml5-command="justifyRight" title="Align right"><i class="fa fa-align-right"></i></a>
          <!-- <a data-wysihtml5-command="insertImage" title="Insert an image"><i class="fa fa-picture-o"></i></a>
          <div data-wysihtml5-dialog="insertImage" class="toolbar-function" style="display: none;">
            <label>
              Image:
              <input type="file" data-wysihtml5-dialog-field="src">
            </label>
            <a data-wysihtml5-dialog-action="save">OK</a>
            <a data-wysihtml5-dialog-action="cancel">Cancel</a>
          </div> -->
          
          </div>
          <textarea id="wysieditor-textarea" class="textarea-editor" rows="5" placeholder="請輸入商品說明..."></textarea>
        </div> 
        <div class="product-editor-order">
          排序
          <input type="number" class="input-tiny-number"><br/>
          <button class="btn-transparent" title="刪除"><i class="fa fa-times"></i>刪除</button>
        </div>       
      </div>
      <div class="wysieditor-btn">
        <button class="btn-transparent"><i class="fa fa-plus"></i>新增文</button>
        <button class="btn-transparent"><i class="fa fa-plus"></i>新增圖</button>
        <button class="btn-transparent"><i class="fa fa-plus"></i>左圖右文</button>
        <button class="btn-transparent"><i class="fa fa-plus"></i>右圖左文</button>
        <button class="btn-transparent go-popup" data-width="500" data-href="popup/product-edit-video.php"><i class="fa fa-plus"></i>新增影片</button>
      </div>
      </div>
      <!-- 規格資訊 -->
      <div class="prod-edit-line clearfix">
      <h2 class="sub-title">本商品其它規格資訊</h2>
        <div class="prod-price-edit">
          <table class="build-popup-edit-addtable create-prod-form-list template-table form-element">
            <thead>
              <tr>
                <th class="col-grey">主規格<small> (如顏色)</small></th>
                <th class="col-grey">次規格<small> (如尺寸)</small></th>
                <th class="col-grey">廠商自用料號</th>
                <th class="col-grey">EAN條碼或ISBN碼</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="text" class="input-exlarge input-product-name" size="15" value="01xxxxx"></td>
                <td><input type="text" class="input-exlarge input-product-name" size="15"></td>
                <td><input type="text" class="input-exlarge input-product-name" size="15" value="01xxxxx"></td>
                <td><input type="text" class="input-exlarge input-product-name" size="15"></td>
              </tr>
            </tbody>
          </table>
          <label for="chk1" class="prod-price-edit-chk"><input type="checkbox" name="" id="chk1" class="add-same-prod"/>我要建立其它規格商品</label>
        </div>

        <div class="build-popup-colorsize-addtable is-edit clearfix" style="display:none;">
          <table class="build-popup-list build-popup-colorsize-addtable is-edit template-table form-element">
            <thead>
              <tr>
                <th class="col-green">商品ID</th>
                <th class="col-green">主圖</th>
                <th class="col-green"><span class="highlight">*</span>主規格</th>
                <th class="col-green">次規格</th>
                <th class="col-green"><span class="highlight">*</span>售價</th>
                <th class="col-green"><span class="highlight">*</span>成本</th>
                <th class="col-green">廠商自用料號</th>
                <th class="col-green">EAN或<br>ISBN碼</th>
                <th class="col-green"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>2018AG01000039</td>
                  <td><img src="../img/sample.jpg" alt="商品主圖"></td>
                  <td><input type="text" value="" size="5"></td>
                  <td><input type="text" value="" size="5"></td>
                  <td>$690<br/><br/><a href="#">變更</a></td>
                  <td>$621<br/><br/><a href="#">變更</a></td>
                  <td><input type="text" value="" size="15"></td><td><input type="text" value="" size="15"></td>
                  <td>
                    <div class="btn-field">
                      <button class="btn-cancel remove-prod"><i class="fa fa-times"></i></button><br/>刪除
                    </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="add-colorsize-btn">
            <button class="btn-add-green" type="button">增加規格商品</button>
          </div>
        </div>
        

      </div>
    </div>

    <div class="template-button clearfix">
      <div class="fl">
        <button class="btn-action" onclick="location.href='create-prod.php'"><i class="fa fa-angle-left" aria-hidden="true"></i>上一步</button>
      </div>
      <div class="fr">
        <button class="btn-draft" onclick="location.href='product-list-build.php'">儲存為草稿</button>
        <button class="btn-action" onclick="location.href='product-list-build.php'">儲存且上架</button>
      </div>
    </div>
  </div>
</section>
</div>
    <!-- container /-->
</div><!-- wrapper /-->
<script src="../js/lib/jquery-1.9.1.js" ></script>
<script src="../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../js/lib/bootstrap-dropdown.js"></script>
<script src="../js/nav-action.js"></script>
<script src="../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../js/lib/wysihtml5-0.3.0.min.js"></script>
<script src="../js/lib/wysihtml5-advanced.js"></script>

<script src="../js/lib/wysihtml.js"></script>
<script src="../js/lib/wysihtml.all-commands.js"></script>
<script src="../js/lib/wysihtml.table_editing.js"></script>
<script src="../js/lib/wysihtml.toolbar.js"></script>
<script src="../js/lib/advanced_unwrap.js"></script>

<script src="../js/update-fancybox.js"></script>
<script src="../js/template-action.js"></script>

<script>  
  

// 增加賣點
$(".add-summary").click(function(){
  var addhtml='<li><input type="text" name="" id=""/></li>';
  $('.main-pic-summary li:last').parent().append(addhtml);
})

// 打開增加同規格品表格
$('.add-same-prod').change(function () {                
    $('.build-popup-colorsize-addtable').toggle(this.checked);
}).change(); 

// 增加同規格品
$(".add-colorsize-prod").click(function(){
  var addhtml='<tr><td><img src="../img/sample.jpg" alt="商品圖"/></td><td><input type="text" value="" size="5"></td><td><input type="text" value="" size="5"></td><td><input type="number" name="" id="" value="690"/></td><td><input type="radio" name="price_radio1" id="1">進貨價<input type="number" value="634"/><br/><br/><input type="radio" name="price_radio1" id="2">售價抽<input type="number"  value=""/>％換算</td><td><input type="text" value="" size="15"></td><td><input type="text" value="" size="15"></td><td><button class="btn-red remove-prod"><i class="fa fa-minus"></i></button></td></tr>';
  $('.build-popup-colorsize-addtable tr:last').parent().append(addhtml);
});

// 刪除增加的同規格品
$(".remove-prod").click(function(){
  $(this).parent().parent().remove();
});

// 商品資料區塊開合
$('.edit-pic .title').click(function() {
  $('.main-pic').slideToggle(200);
});

//editor
var editor = new wysihtml5.Editor("wysieditor-textarea", {
  toolbar: "wysieditor-toolbar",
  stylesheets: ["../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor = new wysihtml5.Editor("wysieditor-textarea1", {
  toolbar: "wysieditor-toolbar1",
  stylesheets: ["../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor = new wysihtml5.Editor("wysieditor-textarea2", {
  toolbar: "wysieditor-toolbar2",
  stylesheets: ["../css/plugin/wysihtml5-editor.css"],
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