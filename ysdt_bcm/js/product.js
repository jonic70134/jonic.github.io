// 打開多規格
$("#multi-chk").click( function(){
    if($('#multi-chk').is(':checked')) 
    {
     $('.form-grid').css('display','grid');
    }
    else 
    {
      $('.form-grid').hide();
    }
});

// 彈出訊息
$('.btn-grey').click(function(){
    $('.add-save-success').show();
});
$('.btn-red').click(function(){
    $('.add-prod-success').show();
});
// 關閉訊息
$('.msg-close').click(function(){
    $('.form-alert-msg').hide();
});