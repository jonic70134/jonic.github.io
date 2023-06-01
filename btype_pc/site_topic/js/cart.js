// orderlist
$("#order_chk_all").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});

// chk

$("input[name$='payway']").click(function() {
    var paydiv = $(this).val();
    $(".paydiv").hide();
    $("#paydiv" + paydiv).show();
});
  
  
$("input[name$='invo']").click(function() {
    var invo = $(this).val();
    $(".invo_credit").hide();
    $("#invo" + invo).show();
});


//看以前加入購物車的商品
$('.add_before').click(function(e) {
    e.preventDefault();
    $('.cart_item.is-before').css('display','flex');
    $('.add_before').hide();
    $('.before_t p').show();
});