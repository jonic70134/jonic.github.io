//infinite scroll
var infiniteItems = $('.infinite-scroll .items');
var infiniteNav = $('.infinite-next-page');
infiniteItems.infinitescroll({
    loading: {
        img: '../c/img/sth_asap_m/loading.svg',
        msgText: '<em>' + infiniteNav.data('loading-msg') + '</em>',
        finishedMsg: '<em class=\"infinite-finished-msg\">' + infiniteNav.data('finished-msg') + '</em>'
    },
    navSelector: infiniteNav, //必要
    nextSelector: infiniteNav, //必要
    itemSelector: '.infinite-scroll .md-list-item' //必要
}, function() {
    $('.img-lazyload').unveil(200, function() {
        $(this).load(function() {
            this.style.opacity = 1;
        });
    });
});
////click to load
// infiniteItems.infinitescroll('unbind');
// infiniteNav.click(function() {
//     infiniteItems.infinitescroll('retrieve');
//     return false;
// });

//toggle filter
$('.btn-toggle-filter').on('click', function() {
    $(this).toggleClass('is-active');
    $('.site-filter').toggleClass('is-expand');
});

//toggle breadcrumbs
toggleBreadcrumbs();
function toggleBreadcrumbs() {
    var lastScrollTop = 0;
    var heightHeader = $('.site-header').height();
    $(window).scroll(function(event) {
        //when page go top, fixed breadcrumbs
        if ($(this).scrollTop() > heightHeader) {
            $('.md_nav_breadcrumbs').addClass('is-fixed');
        }
        else {
            $('.md_nav_breadcrumbs').removeClass('is-fixed');
        }
        var current = $(this).scrollTop();
        if (current > lastScrollTop) {
            //scroll down and fixed breadcrumbs
            if (current >= heightHeader) {
                $('.md_nav_breadcrumbs').addClass('is-fixed');
            }
        }
        else {
            //scroll up and unfixed breadcrumbs
            $('.md_nav_breadcrumbs').removeClass('is-fixed');
        }
        lastScrollTop = current;
    });
}