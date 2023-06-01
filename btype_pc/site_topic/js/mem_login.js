

$(".toggle-pass").click(function() {
    $(this).toggleClass("icon-eye icon-eye-b");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});
