$("input[name$='payway']").click(function() {
  var paydiv = $(this).val();
  console.log(paydiv)
  $(".paydiv").hide();
  $("#paydiv" + paydiv).show();
});
