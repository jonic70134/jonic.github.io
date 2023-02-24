<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>uitox vendor</title>
<link href="../../css/plugin/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="../../css/layout.css" rel="stylesheet" type="text/css">
<link href="../../css/product.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="../../js/lib/html5.js"></script>
<link rel="stylesheet" type="text/css" href="../../css/ie.css">
<![endif]--></head>
<body>
<div class="popup-content">
  <h1 class="title"><i class="fa fa-search"></i>看同規格</h1>
  <dl class="build-popup-title">
    <dt>【華信】韓國 Apieu 黑頭粉刺去角質清潔墊</dt>
    <dd>201808AG123455999</dd>
  </dl>
  <table class="build-popup-list cloud-product-popup-table template-table">
    <thead>
      <tr>
        <th>商品ID</th>
        <th>主圖</th>
        <th><span class="highlight">*</span>次規格<br/>(如尺寸)</th>
        <th><span class="highlight">*</span>次規格<br/>(如尺寸)</th>
        <th><span class="highlight">*</span>售價<br/><span class="highlight">*</span>成本</th>
        <th>毛利率</th>
        <th>毛額</th>
        <th>廠商自用料號</th>
        <th>EAN或<br/>ISBN碼</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>201808AG240000291</td>
        <td><img src="../../img/sample.jpg" alt="商品圖"/></td>
        <td>1號經典紅<br/><a href="#">修改</a></td>
        <td>粗<br/><a href="#">修改</a></td>
        <td>$690<br/>$634</td>
        <td>8.11%</td>
        <td></td>
        <td>
          <div class="edit-done">6922384799032<br/><button class="btn-blue btn-edit"><i class="fa fa-pencil"></i></button></div>
          <div class="edit-save" style="display:none;"><input type="text" name="" id="" value="6922384799032" size="14"/><br/><button class="btn-red btn-save"><i class="fa fa-floppy-o"></i></button></div>
      </td>
        <td><a href="#">修改</a></td>
        <td><button class="btn-red remove-prod"><i class="fa fa-times"></i></button></td>
      </tr>
    </tbody>
  </table>

  <div class="build-popup-colorsize-add">
    <span>將現有商品ID加入或<a href="#" class="add-same-prod">建立同規格商品</a></span><br/>
    <textarea cols="50" rows="5"></textarea>    
    <div class="build-popup-colorsize-addbtn">
      <span>請使用逗號(,)或換行</span><br/>
      <button type="button" class="btn-txt btn-blue"  onclick="">加入</button>     
    </div> 
  </div>


  <table class="build-popup-list build-popup-colorsize-addtable cloud-product-popup-table template-table" style="display:none;">
    <thead>
      <tr>
        <th>主圖</th>
        <th><span class="highlight">*</span>主規格</th>
        <th>次規格</th>
        <th><span class="highlight">*</span>售價</th>
        <th><span class="highlight">*</span>成本</th>
        <th>廠商自用料號</th>
        <th>EAN或<br/>ISBN碼</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><img src="../../img/sample.jpg" alt="商品圖"/></td>
        <td><input type="number" value=""></td>
        <td><input type="number" value=""></td>
        <td><input type="number" name="" id="" value="690"/></td>
        <td>
          <input type="radio" name="price_radio1" id="1">進貨價<input type="number" value="634"/><br/><br/>
          <input type="radio" name="price_radio1" id="2">售價抽<input type="number"  value=""/>％換算
        </td>
        <td><input type="number" value=""></td>
        <td><input type="number" value=""></td>
        <td><button class="btn-blue add-colorsize-prod"><i class="fa fa-plus"></i></button><button class="btn-red remove-prod"><i class="fa fa-minus"></i></button></td>
      </tr>
    </tbody>
  </table>

  <div class="template-button">
    <button class="btn-cancel" onclick="parent.$.fancybox.close();">關閉</button>
  </div>
</div>
<script src="../../js/lib/jquery-1.9.1.js" ></script>
<script src="../../js/lib/bootstrap-dropdown.js"></script>
<script src="../../js/nav-action.js"></script>
<script src="../../js/template-action.js"></script>
<script src="../../js/lib/jquery.fancybox.pack.js?v=2.1.4"></script>
<script src="../../js/update-fancybox.js"></script>
<script>
// add new block
$('.add_newblock').click(function() {
  $('#desc_area').append();
});

$(".remove-prod").click(function(){
  $(this).parent().parent().remove();
})

$('.add-same-prod').click(function() {
  $('.build-popup-colorsize-addtable').show();
});

$(".add-colorsize-prod").click(function(){
  var addhtml='<tr><td><img src="../../img/sample.jpg" alt="商品圖"/></td><td><input type="number" value=""></td><td><input type="number" value=""></td><td><input type="number" name="" id="" value="690"/></td><td><input type="radio" name="price_radio1" id="1">進貨價<input type="number" value="634"/><br/><br/><input type="radio" name="price_radio1" id="2">售價抽<input type="number"  value=""/>％換算</td><td><input type="number" value=""></td><td><input type="number" value=""></td><td><button class="btn-red remove-prod"><i class="fa fa-minus"></i></button></td></tr>';
  $('.build-popup-colorsize-addtable tr:last').parent().append(addhtml);
});

$('.btn-edit').each(function() {
  $(this).click(function() {
    $(this).parents().find('.edit-done').hide();
    $(this).parents().find('.edit-save').show();
  });
});
$('.btn-save').each(function() {
  $(this).click(function() {
    $(this).parents().find('.edit-save').hide();
    $(this).parents().find('.edit-done').show();
  });
});
</script>
</body>
</html>