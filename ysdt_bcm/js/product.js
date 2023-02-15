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
