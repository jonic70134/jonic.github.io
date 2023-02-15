
//menu toggle
function openNav() {
    $('#nav').animate({
        width: 200,
        left: 0
    }, 200);

    $('#nav li .fa').addClass('active').animate({'font-size':'1.8rem;'},200);
    $('.nav-bg').animate({width: 200}, 100);
};
function closeNav() {
    $('#nav').animate({
        width: 45,
        left: '-10px'
    }, 100);
    $('#nav li .fa').removeClass('active').animate(100);
    
    $('.nav-bg').animate({ width: 35}, 100);
    $('#nav li ul').hide();
};

$('#nav li').bind({
    click: function() {
        openNav();
        $(this).find('ul').slideDown(100);
    },
    mouseleave: function() {
        $(this).find('ul').hide();
    }
});

$('#nav').mouseleave(function() {
    closeNav();
});
$('#nav .dis-dropdown').unbind('click');



function openLightbox(obj) {
    var lightboxOption = {
        width: obj.data('width'),
        height: 'auto',
        href: obj.data('href'),
        type: obj.data('type')
    };
    obj.fancybox(lightboxOption);
};
$('.go-popup').each(function() {
    openLightbox($(this));
});

$('.annoucement').bind({
    mouseenter: function() {
        $('.annouce-detail').slideDown(300);
    },
    mouseleave: function() {
        $('.annouce-detail').slideUp(100);
    }
});