//uitox vendor JS: Search pages action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
  //toggle menu
  function editOpenMenu(obj) {
    obj.parents().eq(1).find('.menu-item').removeClass('active')
      .find('.menu-content').slideUp(200);
    obj.parent().addClass('active')
      .find('.menu-content').slideDown(200);
  };
  function editCloseMenu(obj) {
    obj.parent().removeClass('active')
      .find('.menu-content').slideUp(200);
  };
  $('.main-menu .menu-plate').each(function() {
    $(this).click(function() {
      if(!$(this).parent().hasClass('active')) {
        editOpenMenu($(this));
        $('.sub-menu').css('display','inline-block');
      }
      else {
        editCloseMenu($(this));
        $('.sub-menu').hide();
      };
    });
  });
  $('.sub-menu .menu-plate').each(function() {
    $(this).click(function() {
      if(!$(this).parent().hasClass('active')) {
        editOpenMenu($(this));
      }
      else {
        editCloseMenu($(this));
      }
    });
  });
})(jQuery);