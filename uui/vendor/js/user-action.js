//uitox vendor JS: Customer service pages action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
  //lightbox
  function openLightbox(obj) {
      var lightboxOption = {
          width: obj.data('width'),
          minWidth: obj.data('width'),
          height: 'auto',
          fitToView: 'false',
          href: obj.data('href'),
          type: 'iframe',
          helpers : {
            title : null            
          }
      };
      obj.fancybox(lightboxOption);
  };
  $('.go-popup').each(function() {
    openLightbox($(this));
  });
  //search filter: cancel btn
  $('.search-filter .btn-cancel').click(function() {
    $('.search-filter input').val('');
    $('.search-filter select').prop('selectedIndex',0);
  });
  //search filter: related searches
  $('.input-search').bind('keyup change', function() {
      $('.related-searches').slideDown(100);
      if ($(this).val() == '') {
          $('.related-searches').slideUp(50);
      };
  }).blur(function() {
      $('.related-searches').slideUp(50);
  });
  //table sort
  $('.table-sort').each(function() {
    $(this).click(function() {
      $(this).toggleClass('active');
    });
  });
  //permission: checkbox
  $('.checkbox-permission').click(function() {
    if($(this).prop('checked')) {
      $(this).parents('table').find('input[name="checkbox-permission"]').prop('checked',true);
    }
    else {
      $(this).parents('table').find('input[name="checkbox-permission"]').prop('checked',false);
    };
  });
  //user edit: type
  $('#userType').bind('change', function(){
    if($(this).val() == 'userTypePlanner') {
      $('.user-helper').slideDown(100);
    }
    else {
      $('.user-helper').slideUp(100);
    };
  });
  $('#userType').trigger('change');
})(jQuery);