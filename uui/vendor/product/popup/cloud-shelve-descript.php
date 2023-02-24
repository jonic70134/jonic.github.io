<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery-ui-timepicker-addon.css" rel="stylesheet" type="text/css">
<link href="../../css/plugin/jquery.fancybox.css" rel="stylesheet" type="text/css">
<link href="../../css/jquery.fileupload.css" rel="stylesheet" type="text/css">
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<link href="../../css/productlist.css" rel="stylesheet" type="text/css">
<link href="../../css/productlist_popup.css" rel="stylesheet" type="text/css">


<!-- <script type="text/javascript" src="../../js/lib/wysihtml5-advanced.js"></script>
<script type="text/javascript" src="../../js/lib/wysihtml5-0.3.0.min.js"></script> -->
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="cloud-shelve-btn" style="text-align:right;">
  <button class="btn-blue btn-txt" type="button" onclick="rollBack()"/>
      恢復原文案
  </button>
</div>
<div class="add-product-data">

    <div class="add-product-con clearfix">
        <div class="add-product-pic clearfix">
            <!-- 上傳圖片 -->
            <div class="add-pic">
                <!-- 上傳圖片 -->
                <div class="Bigpic" style="min-height: 360px; height: 360px;">
                    <a id="edit_main_pic" image_type="main" href="javascript:;">
                        <img id="main_pic" class="item_main_pic" file_name="/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" pic_width="360" pic_height="360" border="0">
                    </a>
                    <a id="edit_main_pic" image_type="main" style="display: none;">
                        <img id="main_pic" class="item_main_pic" file_name="/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" pic_width="" pic_height="" border="0">
                        <div class="addpicok">
                            <span class="fileinput-button edit">
                                       <span>Edit</span>
                            <input type="file" class="fileupload" accept="image/*" name="userfile" data-url="show_main/upload_pic">
                            </span>
                        </div>
                    </a>
                </div>
                <!-- end  上傳圖片 -->
                <!-- 多張商品主圖 -->
                <div class="add-other-pic">
                    <span class="active main_pic_small"><img src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" alt="">
                                 <input type="hidden" name="main_small_pic[]" value="/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg">
                                                              </span>
                </div>
                <!-- 多張商品主圖 -->
            </div>
            <!-- 銷售口號，賣點 -->
            <div class="commodity_Name">
                <p><a id="smname_tip" class="fcbox col66bb" data-fancybox-type="iframe" href="show/popup/market"><i class="fa fa-question-circle"></i></a> 賣場名稱:</p>
                <input type="text" size="60" id="sm_name" value="solr 多顏多尺 20151207" maxlength="85" placeholder="請輸入賣場名稱">
                <br>
                <p>賣點:</p>
                <input type="text" id="slogan_item_1" value="賣點1" size="60" maxlength="85" placeholder="賣點一">
                <br>
                <input type="text" id="slogan_item_2" value="賣點2" size="60" maxlength="85" placeholder="賣點二">
                <br>
                <input type="text" id="slogan_item_3" value="賣點3" size="60" maxlength="85" placeholder="賣點三">
                <br>
                <input type="text" id="slogan_item_4" value="賣點4" size="60" maxlength="85" placeholder="賣點四">
                <br>
                <input type="text" id="slogan_item_5" value="賣點5" size="60" maxlength="85" placeholder="賣點五">
                <button type="button" id="add_slogan" class="btn btn-info"><i class="fa fa-plus"></i></button>
                <p><span id="color_title">顏色/尺寸</span> : </p>
                <div class="addcolors item_color_pic"></div>
                <div class="addcolors clearfix" id="color_size_blocks">
                    <div class="colorblock">
                        <div class="color">
                            <a href="#" class="colorbox go-popup" data-href="cloud-shelve-colorsize.php"> <img src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/c201512AM070003127_14494710031345780036459.jpg" border="0">
                                <p class="edit">Edit</p>
                                <p class="colorname">灰熊厲害</p>
                            </a>
                            <div class="size">
                                <h3>尺寸</h3>
                                <div class="sizelist">
                                    <div class="colorblock"><a href="javascript:;" class="sizebox">大了點</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="colorsize clearfix" style="display: none;">
                            <div class="colorblock">
                                <a href="#addcolorsize_area" id="addcolorsize" class="addsize">
                                    <p>+</p><span>顏色/尺寸</span> </a>
                            </div>
                        </div>
                    </div>
                    <div class="colorsize clearfix" style="display: none;">
                        <div class="colorblock">
                            <div class="color">
                                <a href="javascript:;" class="colorbox"> <img src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/c201512AM070003127_14494710031345780036459.jpg" border="0">
                                    <p class="edit">Edit</p>
                                    <p class="colorname">灰熊厲害</p>
                                </a>
                                <div class="size">
                                    <h3>尺寸</h3>
                                    <div class="sizelist">
                                        <div class="colorblock"><a href="javascript:;" class="sizebox">大了點</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="colorsize clearfix" style="display: none;">
                                <div class="colorblock">
                                    <a href="#addcolorsize_area" id="addcolorsize" class="addsize">
                                        <p>+</p><span>顏色/尺寸</span> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="addcolorsize_area" class="commodity_fancyBox" style="width: 400px; display: none;">
                        <ol class="title font13">
                            <li class="left">圖片</li>
                            <li class="right">顏色</li>
                            <li class="rightB">尺寸</li>
                        </ol>
                        <ol id="color_size_item_1" color_size_id="1" main_pic="/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" main_pic_url="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/201512AM070003127_14494710031099050030833.jpg" main_pic_width="360" main_pic_height="360" color_pic="/A/show/AW000029/2015/1207/AM0003127/c201512AM070003127_14494710031345780036459.jpg" color_pic_url="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/c201512AM070003127_14494710031345780036459.jpg" class="center font13">
                            <li class="left"><a id="color_size_add_pic_1" is_upload="1" image_type="main" class="col66bb" href="javascript:;">修改</a></li>
                            <li class="right">
                                <input type="text" id="color_size_text_1" size="8" value="灰熊厲害" maxlength="20" disabled="">
                            </li>
                            <li class="rightB">
                                <input type="text" name="color_size_info_1" size="1" value="大了點" maxlength="20" disabled="">
                            </li>
                        </ol>
                        <ol class="center font13">
                            <li class="left">&nbsp;</li>
                            <li class="right">&nbsp;</li>
                            <li class="rightB">
                                <input type="button" value="取消" class="btn btnB" onclick="color_data_confirm();">
                                <input type="button" value="確認" class="btn btnB btn-primary" onclick="color_data_confirm();"> </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- end  銷售口號，賣點 -->
        </div>
        <!-- 商品說明 -->
        <div class="comm_bot comm_buttom">
            <h3>
                        本商品說明                        <button id="add_desc_text" class="btn btn-info" type="button">
                            <i class="fa fa-plus"></i> 新增文                        </button>
                        <a id="add_desc_pic" image_type="desc" class="linkbtn">
                            <span class="fileinput-button">
                            <i class="fa fa-plus"></i> 新增圖
                            </span>
                        </a>
                        <a id="add_desc_left_pic" image_type="desc_left_pic" class="linkbtn">
                            <span class="fileinput-button">
                            <i class="fa fa-plus"></i> 新增左圖右文                            
                            </span>
                        </a>
                        <a id="add_desc_right_pic" image_type="desc_right_pic" class="linkbtn">
                            <span class="fileinput-button">
                            <i class="fa fa-plus"></i> 新增右圖左文                          
                            </span>
                        </a>
                        <a id="add_youtube" class="linkbtn" href="#add_youtube_area">
                            <i class="fa fa-plus"></i> 新增影片                        </a>

                        <div id="add_youtube_area" class="commodity_fancyBox" style="width: 400px; display: none;">
                            <h2>請輸入影片內嵌程式碼</h2>
                            <div>
                                <textarea id="youtube_iframe" style="width: 380px; height: 150px"></textarea>
                            </div>
                            <p>操作說明:<br>請至youtube上傳影片，至 「分享 → 嵌入」 貼上內嵌程式碼即可</p>
                            <div style="margin-top: 5px; text-align: center">
                                <button type="button" class="btn btn-save-only" id="cancel_youtube_button">取消</button>
                                <button type="button" class="btn btn-submit" id="add_youtube_button">確認</button>
                            </div>
                        </div>
                    </h3>
            <!-- start -->
            <div id="desc_area" class="ui-sortable" style="overflow:auto">
                <div id="desc_item_0" desc_id="0" desc_type="text" class="desc_item clearfix wysieditor" style="cursor: move; background-color: rgb(255, 255, 255);">
                    <ol class="explAddtext">
                        <li class="Addblock">
                            <!-- 編輯器 start -->
                            <div id="wysieditor-toolbar-0" class="toolbar-editor">
                                <a data-wysihtml5-command="bold" title="Make text bold" href="javascript:;" unselectable="on"><i class="fa fa-bold"></i></a>
                                <a data-wysihtml5-command="italic" title="Italic" href="javascript:;" unselectable="on"><i class="fa fa-italic"></i></a>
                                <a data-wysihtml5-command="underline" title="Make text underline" href="javascript:;" unselectable="on"><i class="fa fa-underline"></i></a>
                                <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">-</span></a>
                                <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">+</span></a>
                                <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
                                <div class="toolbar-function forecolor" style="display: none;">
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;" href="javascript:;" unselectable="on"></a>
                                    <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;" href="javascript:;" unselectable="on"></a>
                                </div>
                                <a data-wysihtml5-command="createLink" title="Insert a link" href="javascript:;" unselectable="on"><i class="fa fa-link"></i></a>
                                <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                                <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
                                    <label>
                                        Link:
                                        <input data-wysihtml5-dialog-field="href" value="http://" class="text">
                                    </label>
                                    <a data-wysihtml5-dialog-action="save">確定</a>
                                    <a data-wysihtml5-dialog-action="cancel">取消</a>
                                </div>
                            </div>
                            <!-- 編輯器 end -->
                            <textarea id="desc_text_0" rows="5" maxlength="4000" style="display: none;">說明威</textarea>
                            <input type="hidden" name="_wysihtml5_mode" value="1">
                            <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 720px; height: 100px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                        </li>
                    </ol>
                    <ol class="explSeq font13">
                        <li>排序
                            <input type="text" id="desc_sort_0" value="1" maxlength="3"> </li>
                        <li class="del">
                            <button class="btn btn-cancel" data-id="0" type="button">
                                <i class="fa fa-times"></i>刪除 </button>
                        </li>
                    </ol>
                </div>
                <div id="desc_item_1" desc_id="1" desc_type="pic" class="desc_item clearfix wysieditor" style="cursor: move; background-color: rgb(255, 255, 255);">
                    <ol class="explAddtext">
                        <li class="Addpic">
                            <div id="wysieditor-toolbar-1" class="toolbar-editor">
                                <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                            </div>
                            <textarea name="" id="desc_text_pic_1" rows="10" class="textarea-editor" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031511210063716.jpg" placeholder="" style="display: none;"> &lt;div&gt; &lt;img id="desc_pic_1" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031511210063716.jpg" src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031511210063716.jpg" border="0" /&gt; &lt;/div&gt;
                            </textarea>
                            <input type="hidden" name="_wysihtml5_mode" value="1">
                            <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 720px; height: 200px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                        </li>
                    </ol>
                    <ol class="explSeq font13">
                        <li>排序
                            <input type="text" id="desc_sort_1" value="5" maxlength="3"> </li>
                        <li class="del">
                            <button class="btn btn-cancel" data-id="1" type="button">
                                <i class="fa fa-times"></i>刪除 </button>
                        </li>
                        <li>
                            <input type="checkbox" id="desc_pic_pos_1">
                            <label for="desc_pic_pos_1">讓圖片跟下方圖片無間隙
                                <br>(新增後再預覽可見)</label>
                        </li>
                    </ol>
                </div>
                <div id="desc_item_2" desc_id="2" desc_type="left_pic" class="desc_item clearfix wysieditor" style="cursor: move; background-color: rgb(255, 255, 255);">
                    <ol class="explAddtext">
                        <li class="Addblocknpic">
                            <div class="desc_left">
                                <div id="wysieditor-toolbar-l2" class="toolbar-editor">
                                    <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                    <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                    <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                                </div>
                                <textarea name="" id="desc_leftpic_2" rows="10" maxlength="4000" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031561810032947.jpg" style="display: none;"> &lt;div&gt; &lt;img id="desc_pic_2" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031561810032947.jpg" src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031561810032947.jpg" border="0" /&gt; &lt;/div&gt;
                                </textarea>
                                <input type="hidden" name="_wysihtml5_mode" value="1">
                                <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 353px; height: 200px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                            </div>
                            <div class="desc_right">
                                <div id="wysieditor-toolbar-r2" class="toolbar-editor">
                                    <a data-wysihtml5-command="bold" title="Make text bold" href="javascript:;" unselectable="on"><i class="fa fa-bold"></i></a>
                                    <a data-wysihtml5-command="italic" title="Italic" href="javascript:;" unselectable="on"><i class="fa fa-italic"></i></a>
                                    <a data-wysihtml5-command="underline" title="Make text underline" href="javascript:;" unselectable="on"><i class="fa fa-underline"></i></a>
                                    <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">-</span></a>
                                    <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">+</span></a>
                                    <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
                                    <div class="toolbar-function forecolor" style="display: none;">
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;" href="javascript:;" unselectable="on"></a>
                                    </div>
                                    <a data-wysihtml5-command="createLink" title="Insert a link" href="javascript:;" unselectable="on"><i class="fa fa-link"></i></a>
                                    <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                    <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                    <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                                    <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
                                        <label>
                                            Link:
                                            <input data-wysihtml5-dialog-field="href" value="http://" class="text">
                                        </label>
                                        <a data-wysihtml5-dialog-action="save">確定</a>
                                        <a data-wysihtml5-dialog-action="cancel">取消</a>
                                    </div>
                                </div>
                                <textarea name="" id="desc_righttext_2" rows="10" maxlength="4000" style="display: none;">右文</textarea>
                                <input type="hidden" name="_wysihtml5_mode" value="1">
                                <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 353px; height: 200px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                            </div>
                        </li>
                    </ol>
                    <ol class="explSeq font13">
                        <li>排序
                            <input type="text" id="desc_sort_2" value="10" maxlength="3"> </li>
                        <li class="del">
                            <button class="btn btn-cancel" data-id="2" type="button">
                                <i class="fa fa-times"></i>刪除 </button>
                        </li>
                    </ol>
                </div>
                <div id="desc_item_3" desc_id="3" desc_type="right_pic" class="desc_item clearfix wysieditor" style="cursor: move; background-color: rgb(255, 255, 255);">
                    <ol class="explAddtext">
                        <li class="Addblocknpic">
                            <div class="desc_left">
                                <div id="wysieditor-toolbar-l3" class="toolbar-editor">
                                    <a data-wysihtml5-command="bold" title="Make text bold" href="javascript:;" unselectable="on"><i class="fa fa-bold"></i></a>
                                    <a data-wysihtml5-command="italic" title="Italic" href="javascript:;" unselectable="on"><i class="fa fa-italic"></i></a>
                                    <a data-wysihtml5-command="underline" title="Make text underline" href="javascript:;" unselectable="on"><i class="fa fa-underline"></i></a>
                                    <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="small" title="Make text smaller" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">-</span></a>
                                    <a data-wysihtml5-command="fontSize" data-wysihtml5-command-value="large" title="Make text larger" href="javascript:;" unselectable="on"><i class="fa fa-font"></i><span class="sup">+</span></a>
                                    <a data-wysihtml5-command-group="foreColor" class="toolbar-forecolor" title="Color the selected text"><i class="fa fa-tachometer"></i></a>
                                    <div class="toolbar-function forecolor" style="display: none;">
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="white" class="toolbar-color" style="background-color: white;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="gray" class="toolbar-color" style="background-color: gray;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="silver" class="toolbar-color" style="background-color: silver;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="black" class="toolbar-color" style="background-color: black;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="maroon" class="toolbar-color" style="background-color: maroon;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="red" class="toolbar-color" style="background-color: red;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="yellow" class="toolbar-color" style="background-color: yellow;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="lime" class="toolbar-color" style="background-color: lime;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="green" class="toolbar-color" style="background-color: green;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="olive" class="toolbar-color" style="background-color: olive;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="teal" class="toolbar-color" style="background-color: teal;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" class="toolbar-color" style="background-color: blue;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="aqua" class="toolbar-color" style="background-color: aqua;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="navy" class="toolbar-color" style="background-color: navy;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="purple" class="toolbar-color" style="background-color: purple;" href="javascript:;" unselectable="on"></a>
                                        <a data-wysihtml5-command="foreColor" data-wysihtml5-command-value="fuchsia" class="toolbar-color" style="background-color: fuchsia;" href="javascript:;" unselectable="on"></a>
                                    </div>
                                    <a data-wysihtml5-command="createLink" title="Insert a link" href="javascript:;" unselectable="on"><i class="fa fa-link"></i></a>
                                    <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                    <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                    <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                                    <div data-wysihtml5-dialog="createLink" class="toolbar-function" style="display: none;">
                                        <label>
                                            Link:
                                            <input data-wysihtml5-dialog-field="href" value="http://" class="text">
                                        </label>
                                        <a data-wysihtml5-dialog-action="save">確定</a>
                                        <a data-wysihtml5-dialog-action="cancel">取消</a>
                                    </div>
                                </div>
                                <textarea name="" id="desc_lefttext_3" rows="10" maxlength="4000" style="display: none;"> 左文 </textarea>
                                <input type="hidden" name="_wysihtml5_mode" value="1">
                                <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 353px; height: 200px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                            </div>
                            <div class="desc_right">
                                <div id="wysieditor-toolbar-r3" class="toolbar-editor">
                                    <a data-wysihtml5-command="justifyLeft" title="Align left" class="wysihtml5-command-active" href="javascript:;" unselectable="on"><i class="fa fa-align-left"></i></a>
                                    <a data-wysihtml5-command="justifyCenter" title="Align center" href="javascript:;" unselectable="on"><i class="fa fa-align-justify"></i></a>
                                    <a data-wysihtml5-command="justifyRight" title="Align right" href="javascript:;" unselectable="on"><i class="fa fa-align-right"></i></a>
                                </div>
                                <textarea name="" id="desc_rightpic_3" rows="10" maxlength="4000" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031609330031525.jpg" style="display: none;"> &lt;div&gt; &lt;img id="desc_pic_3" file_name="/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031609330031525.jpg" src="https://img.uitox.com/A/show/AW000029/2015/1207/AM0003127/i201512AM070003127_14494710031609330031525.jpg" border="0" /&gt; &lt;/div&gt;
                                </textarea>
                                <input type="hidden" name="_wysihtml5_mode" value="1">
                                <iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="border-collapse: separate; border: 1px solid rgb(204, 204, 204); clear: none; display: inline-block; float: none; margin: 0px; outline: rgb(85, 85, 85) none 0px; outline-offset: 0px; padding: 5px; position: static; z-index: auto; vertical-align: middle; text-align: start; box-sizing: content-box; box-shadow: none; border-radius: 3px; width: 353px; height: 200px; top: auto; left: auto; right: auto; bottom: auto; background-color: rgb(255, 255, 255);"></iframe>
                            </div>
                        </li>
                    </ol>
                    <ol class="explSeq font13">
                        <li>排序
                            <input type="text" id="desc_sort_3" value="15" maxlength="3"> </li>
                        <li class="del">
                            <button class="btn btn-cancel" data-id="3" type="button">
                                <i class="fa fa-times"></i>刪除 </button>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- end 商品說明 -->
        <!-- 賣場副標題 -->
        <div class="comm_bot">
            <p>
                產品型號/聲明:
                <input type="radio" name="sm_sub_title_type" id="sub_title_text" class="radio" value="1" checked="checked">
                <label for="sub_title_text">輸入文字</label>
                <input type="radio" name="sm_sub_title_type" id="sub_title_pic" class="radio" value="2">
                <label for="sub_title_pic">新增圖 ( 限寬1000 高400內 )</label>
                <a id="add_sub_title_pic" image_type="sub_title" class="linkbtn" style="display: none;">
                    <span class="fileinput-button">
                            <i class="fa fa-plus"></i> 請選擇圖片                            <input type="file" class="fileupload" accept="image/*" name="userfile" data-url="show_main/upload_pic">
                            </span>
                </a>
            </p>
            <div id="sub_title_text_area" style="display: block;">
                <input type="text" id="sm_sub_title_text" style="width: 450px;" maxlength="100" value="型號威" class="limit_length" limit="100" limit-message="產品型號/聲明不得超過100字元"> 本段文字會出現在商品頁右上方 </div>
            <div id="sub_title_pic_area" class="desc_item clearfix" style="display: none;">
                <ol class="explAddtext">
                    <li class="Addpic">
                        <img id="sm_sub_title_pic" file_name="" src="" border="0">
                    </li>
                </ol>
                <ol class="explSeq">
                    <li class="del">
                        <button class="btn btn-cancel" type="button" onclick="del_sub_title_pic();">
                            <i class="fa fa-times"></i>刪除 </button>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="comm_BTN send">
        <button type="button" class="btn btn-cancel" onclick="javascript:parent.$.fancybox.close();">取消</button>
        <button type="button" class="btn btn-submit" onclick="set_show();">儲存</button>
    </div>
</div>

<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/lib/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../../js/lib/jquery-ui-timepicker-addon.js"></script>
<script src="../../js/lib/jquery-ui-sliderAccess.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/lib/jquery-ui-timepicker-zh-TW.js"></script>
<script src="../../js/template-action.js"></script>

<script>
function rollBack() {
    window.confirm("其他相關規格品，也將同步恢復原文案，確定恢復原文案?");
}
</script>

</body>
</html>