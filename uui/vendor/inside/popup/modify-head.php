<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.colpick.css" rel="stylesheet" type="text/css">
<link href="../../css/inside-modify.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="modify-content">
  <h1 class="title"><i class="fa fa-file-image-o"></i>版面設定</h1>
  <div class="modify-form">
  	<div class="form-element clearfix">
		<label class="form-element-name">電腦版網站LOGO</label>
		<dl class="form-element-content">
			
			<dd>
				<label for="radioLogoImg1"><input type="radio" id="radioLogoImg1" class="radio-logo-img" name="logo-content1" checked>圖片</label>
				<label for="radioLogoTxt1"><input type="radio" id="radioLogoTxt1" class="radio-logo-txt" name="logo-content1">文字</label>
				<span class="highlight">*已上傳圖片寬100px，尚餘9999px空間可用</span>
				<div class="input-logo-img">
					<input type="file" accept="image/*" class="input-logo-file">
					<button class="btn-delete"><i class="fa fa-times"></i>清除圖片</button>
					<br>
					連結路徑 <input type="text" size="50" class="input-logo-url" placeholder="http://www.yoursite.com/your-page.html">
					<label for="checkbox_logo_target1"><input type="checkbox" id="checkbox_logo_target1">另開視窗</label>
				</div>
				<div class="wysieditor" style="display: none;">
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
					<textarea id="wysieditor-textarea1" class="textarea-editor" rows="5" placeholder="請輸入LOGO處文字..."></textarea>
				</div>
			</dd>
			
			<dd>
				<label for="radioLogoImg2"><input type="radio" id="radioLogoImg2" class="radio-logo-img" name="logo-content2" checked>圖片</label>
				<label for="radioLogoTxt2"><input type="radio" id="radioLogoTxt2" class="radio-logo-txt" name="logo-content2">文字</label>
				<span class="highlight">*已上傳圖片寬100px，尚餘9999px空間可用</span>
				<div class="input-logo-img">
					<input type="file" accept="image/*" class="input-logo-file">
					<button class="btn-delete"><i class="fa fa-times"></i>清除圖片</button>
					<br>
					連結路徑 <input type="text" size="50" class="input-logo-url" placeholder="http://www.yoursite.com/your-page.html">
					<label for="checkbox_logo_target2"><input type="checkbox" id="checkbox_logo_target2">另開視窗</label>
				</div>
				<div class="wysieditor" style="display: none;">
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
					<textarea id="wysieditor-textarea2" class="textarea-editor" rows="5" placeholder="請輸入LOGO處文字..."></textarea>
				</div>
			</dd>
			
			<dd>
				<label for="radioLogoImg3"><input type="radio" id="radioLogoImg3" class="radio-logo-img" name="logo-content3" checked>圖片</label>
				<label for="radioLogoTxt3"><input type="radio" id="radioLogoTxt3" class="radio-logo-txt" name="logo-content3">文字</label>
				<span class="highlight">*已上傳圖片寬100px，尚餘9999px空間可用</span>
				<div class="input-logo-img">
					<input type="file" accept="image/*" class="input-logo-file">
					<button class="btn-delete"><i class="fa fa-times"></i>清除圖片</button>
					<br>
					連結路徑 <input type="text" size="50" class="input-logo-url" placeholder="http://www.yoursite.com/your-page.html">
					<label for="checkbox_logo_target3"><input type="checkbox" id="checkbox_logo_target3">另開視窗</label>
				</div>
				<div class="wysieditor" style="display: none;">
					<div id="wysieditor-toolbar3" class="toolbar-editor" style="display: none;">
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
					<textarea id="wysieditor-textarea3" class="textarea-editor" rows="5" placeholder="請輸入LOGO處文字..."></textarea>
				</div>
			</dd>
			
			<dd>
				<label for="radioLogoImg4"><input type="radio" id="radioLogoImg4" class="radio-logo-img" name="logo-content4" checked>圖片</label>
				<label for="radioLogoTxt4"><input type="radio" id="radioLogoTxt4" class="radio-logo-txt" name="logo-content4">文字</label>
				<span class="highlight">*已上傳圖片寬100px，尚餘9999px空間可用</span>
				<div class="input-logo-img">
					<input type="file" accept="image/*" class="input-logo-file">
					<button class="btn-delete"><i class="fa fa-times"></i>清除圖片</button>
					<br>
					連結路徑 <input type="text" size="50" class="input-logo-url" placeholder="http://www.yoursite.com/your-page.html">
					<label for="checkbox_logo_target4"><input type="checkbox" id="checkbox_logo_target4">另開視窗</label>
				</div>
				<div class="wysieditor" style="display: none;">
					<div id="wysieditor-toolbar4" class="toolbar-editor" style="display: none;">
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
					<textarea id="wysieditor-textarea4" class="textarea-editor" rows="5" placeholder="請輸入LOGO處文字..."></textarea>
				</div>
			</dd>
			
		</dl>
		<div class="comment">LOGO為網站的主要精神，限JPG / JPEG / GIF / PNG格式檔案。<br>版頭LOGO區最多可上傳4個區塊圖片或文字，例：</div>
		<div class="form-element-infr"><img src="../../img/infr-logo.jpg" width="310" height="100" alt="網站LOGO說明"></div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">手機/PAD網站LOGO</label>
		<div class="form-element-content">
			<div class="input-logo-img"><input type="file" accept="image/*"><button class="btn-delete"><i class="fa fa-times"></i>清除圖片</button></div>
		</div>
		<div class="comment">大小上限50kB的JPG / JPEG / GIF / PNG格式檔案</div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">編輯版頭色系</label>
		<div class="form-element-content">
			<input type="radio" id="radioHeaderColor" class="radio-bg-color" name="selectHeaderBg"><label for="radioHeaderColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label><br>
			<input type="radio" id="radioHeaderImg" class="radio-bg-img" name="selectHeaderBg"><label for="radioHeaderImg"><input type="file" class="input-bg-img" accept="image/*"></label>
		</div>
		<div class="comment">選擇您網站版頭的色系或要放置的圖片<br>(限為1220*300px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案)</div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">編輯版面中間底色</label>
		<div class="form-element-content">
			<input type="radio" id="radioBodyColor" class="radio-bg-color" name="selectBodyBg"><label for="radioBodyColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label><br>
			<input type="radio" id="radioBodyImg" class="radio-bg-img" name="selectBodyBg"><label for="radioFooterImg"><input type="file" class="input-bg-img" accept="image/*"></label> <span class="body-img-repeat">背景圖片重覆<select name="" id="selectBodyImg"><option value="">請選擇</option><option value="">垂直水平皆重覆</option><option value="">垂直方向重覆</option><option value="">水平方向重覆</option><option value="">不重覆</option></select></span> <a href="" target="_blank"><i class="fa fa-picture-o">&nbsp;</i>預覽</a>
		</div>
		<div class="comment">選擇您版面中間的底色或要放置的背景圖片<br>(限為大小上限50KB的JPG / JPEG / GIF / PNG格式檔案)</div>
	</div>
	<div class="form-element clearfix">
		<label class="form-element-name">編輯版尾色系</label>
		<div class="form-element-content">
			<input type="radio" id="radioFooterColor" class="radio-bg-color" name="selectFooterBg"><label for="radioFooterColor">顏色代碼<input type="text" class="input-bg-color color-picker" value="#"><span class="color-picked"></span></label><br>
			<input type="radio" id="radioFooterImg" class="radio-bg-img" name="selectFooterBg"><label for="radioFooterImg"><input type="file" class="input-bg-img" accept="image/*"></label>
		</div>
		<div class="comment">選擇您網站版尾的色系或要放置的圖片<br>(限為1220*530px、大小上限500kB的JPG / JPEG / GIF / PNG格式檔案)</div>
	</div>
  </div>
  <div class="modify-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();"><i class="fa fa-times"></i>取消</button>
    <button class="btn-preview" onclick="parent.$.fancybox.close(); window.open('../demo/index.php');"><i class="fa fa-floppy-o"></i>儲存暫不發佈</button>
    <button class="btn-submit" onclick="alert('設定成功!!預覽確認完畢後請記得點選發佈'); parent.$.fancybox.close();"><i class="fa fa-check"></i>確認送出</button>
  </div>
</div><script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/wysihtml5-advanced.js"></script>
<script src="../../js/lib/wysihtml5-0.3.0.min.js"></script>
<script src="../../js/lib/jquery.colpick.js"></script>
<script src="../../js/inside-action.js"></script>
<script src="../../js/color-picker.js"></script>
<script>
$('.radio-logo-img').click(function() {
	$(this).parents('dd').find('.input-logo-img').show();
	$(this).parents('dd').find('.wysieditor').hide();
});
$('.radio-logo-txt').click(function() {
	$(this).parents('dd').find('.wysieditor').show();
	$(this).parents('dd').find('.input-logo-img').hide();
});
var editor1 = new wysihtml5.Editor("wysieditor-textarea1", {
  toolbar: "wysieditor-toolbar1",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor2 = new wysihtml5.Editor("wysieditor-textarea2", {
  toolbar: "wysieditor-toolbar2",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor3 = new wysihtml5.Editor("wysieditor-textarea3", {
  toolbar: "wysieditor-toolbar3",
  stylesheets: ["../../css/plugin/wysihtml5-editor.css"],
  parserRules:  wysihtml5ParserRules
});
var editor4 = new wysihtml5.Editor("wysieditor-textarea4", {
  toolbar: "wysieditor-toolbar4",
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