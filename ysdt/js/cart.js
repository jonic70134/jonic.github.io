$("#order_chk_all").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});