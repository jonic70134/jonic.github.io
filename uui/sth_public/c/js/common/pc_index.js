(function($){
    pc_index_002_swipe();
    function pc_index_002_swipe(){
        var mySwiper = new Swiper('.swiper-container',{
            pagination: '.pagination',
            autoplay: 9000,
            speed: 500,
            loop: false,
            grabCursor: true,
            calculateHeight: true,
            resizeReInit: true,
            paginationClickable: true,
        })
        $(window).resize(function() {
            mySwiper.reInit();
        });
        $('.arrow-left').on('click', function(e){
            e.preventDefault()
            mySwiper.swipePrev()
        })
        $('.arrow-right').on('click', function(e){
            e.preventDefault()
            mySwiper.swipeNext()
        })
    }
    //item-hot tab

        $('ul.tabs li').mouseover(function(){
            var tab_id = $(this).attr('data-tab');
            $(this).parent().children('li').removeClass('active');
            var tab_items = $(this).parent().next().find('.items');
            tab_items.removeClass('active').css('display','none');
            tab_items.filter("."+tab_id).fadeIn().addClass('active');
            $(this).addClass('active');
        })

        //$('ul.tabs li').mouseover(function(){
        //    var tab_id = $(this).attr('data-tab');
        //    $('ul.tabs li').removeClass('active');
        //    $('.content .items').removeClass('active').css('display','none');
        //    $(this).addClass('active');
        //    $("."+tab_id).fadeIn().addClass('active');
        //})

        // $('ul.tabs-2 li').mouseover(function(){
        //     var tab_id = $(this).attr('data-tab');
        //     $('ul.tabs-2 li').removeClass('active');
        //     $('.pc_index_013 .content .items').removeClass('active').css('display','none');
        //     $(this).addClass('active');
        //     $("."+tab_id).fadeIn().addClass('active');
        // })
    

    //menu aim pc_left_001
    pc_left_001();
    function pc_left_001(){
        var $menu = $('.menu-one');
        $menu.menuAim({
            activate: activateSubmenu,
            deactivate: deactivateSubmenu,
            exitMenu: exitMenu
        });
        function activateSubmenu(row) {
            var $row = $(row),
            $submenu = $row.find('.menu-expand');
            var submenu_top = get_height(row);
            $submenu.css({
                display: 'block',
                top: submenu_top          
            });
            $row.addClass('active');
        };
        function deactivateSubmenu(row) {
            var $row = $(row),
            $submenu = $row.find('.menu-expand');
            $submenu.css('display','none');
            $row.removeClass('active');
        };

        function exitMenu() {
            return true;
        }

        //get height
        function get_height(row) {
            var tiny_down = 0;
            var submenu_top = tiny_down;
            if (typeof (row) == 'object') {
                var $row = $(row);
                var submenu = $row.find('.menu-expand');
                var submenu_height = parseInt(submenu.height());
                var scroll = $(document).scrollTop();
                var row_height = parseInt($row.height());
                var row_postion_top = parseInt($row.position().top);
                var row_top_distance = $row.offset().top;
                var window_top_distance = row_top_distance - scroll;
                var head_height = 189;
                var move_down = 36;
                //if row in view
                if (scroll < head_height) {
                    //if submenu shorter
                    if ((row_postion_top + row_height) > submenu_height) {
                        submenu_top = row_postion_top + row_height - submenu_height;
                    }
                    else {
                        submenu_top = submenu_top;
                    }
                }
                else {
                    //if submenu shorter
                    if ((row_postion_top - move_down) > submenu_height) {
                        //if row in upper location
                        if (window_top_distance < submenu_height) {
                            submenu_top = row_postion_top - window_top_distance + (move_down + tiny_down);
                        }
                        else {
                            submenu_top = row_postion_top + row_height - submenu_height;
                        }
                    }
                    else {
                        submenu_top = row_postion_top - window_top_distance + (move_down + tiny_down);
                    }
                }
            }
            return submenu_top;
        }
    }
})(jQuery);

