// orderlist
$("#order_chk_all").click(function () {
    $('input:checkbox').not(this).prop('checked', this.checked);
});

// chk

$("input[name$='payway']").click(function () {
    var paydiv = $(this).val();
    $(".paydiv").hide();
    $("#paydiv" + paydiv).show();
});


$("input[name$='invo']").click(function () {
    var invo = $(this).val();
    $(".invo_credit").hide();
    $("#invo" + invo).show();
});


//看以前加入購物車的商品
$('.add_before').click(function (e) {
    e.preventDefault();
    $('.cart_item.is-before').css('display', 'flex');
    $('.add_before').hide();
    $('.before_t p').show();
});

// 選擇折價券
$(".cart_cupn_block .box_btn").click(function () {
    $(".cupn_price").fadeIn(200);
});

// 使用折扣碼
$('.cart_cupn_text').on('input', function () {
    $('.code_btn_submit').prop('disabled', !$(this).val());
});

$('.code_btn_submit').click(function () {
    $(".code_price").fadeIn(200);
    $(".code_btn_cancel").show();
});
$(".code_btn_cancel").click(function (e) {
    e.preventDefault();
    $(".code_price").hide();
    $(this).hide();
    $('.cart_cupn_text').val();

});