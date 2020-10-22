
//fixHeader();
function fixHeader(){
    var lastScrollTop = 0;
    $(window).scroll(function(event){
       var current = $(this).scrollTop();
       if (current > lastScrollTop){
           // downscroll code
           $('.site-header').fadeOut('fast');
       } else {
          // upscroll code
          $('.site-header').fadeIn('fast');
       }
       lastScrollTop = current;
    });
}



//往上的按鈕
    navToTop();
    function navToTop(){
        var root = $('.nav-to-top');
        $(document).ready(function () {
            $(window).scroll(function () {
                if ($(this).scrollTop() > 200) {
                    root.fadeIn();
                } else {
                    root.fadeOut();
                }
            });
            root.on('click', function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 300);
                return false;
            });
        });
        var headerBtn = $('.site-header .title-h2');
        headerBtn.on('click', function(){
            $("html, body").animate({
                scrollTop: 0
            }, 300);
        })
    }