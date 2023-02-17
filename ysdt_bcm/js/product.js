// 切換字功能
$.fn.extend({
    toggleText: function(a, b){
        return this.text(this.text() == b ? a : b);
    }
});
// 打開多規格
$(".multi-chk").click( function(e){
    e.preventDefault();
    $('.form-grid-template').toggle();
    $('.multi-chk-text > i').toggleClass('fa-chevron-right','fa-chevron-down')
    $('.multi-chk-text').toggleText('展開▼', '收起▲');
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

$(".fa-circle-plus").click( function(e){
    e.preventDefault();
    
});

$(".fa-trash-can").click( function(e){
    e.preventDefault();
    
});