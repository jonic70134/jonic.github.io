// orderlist
$("#order_chk_all").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});

// confirm

$(document).ready(function() {
    $("input[name$='deliver_way']").click(function() {
        var deliverbox = $(this).val();

        $(".deliver_block").hide();
        $("#deliver_block" + deliverbox).show();
    });
});

