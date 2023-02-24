//uitox vendor JS: Customer service pages action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
  //lightbox
  function openLightbox(obj) {
      var lightboxOption = {

          height: 'auto',
          fitToView: 'false',
          href: obj.data('href'),
          closeBtn: obj.data('with-close'),
          type: 'iframe',
          autoScale: true,
          helpers: {
            title: null,
            overlay: {
              closeClick: obj.data('with-close')
            }       
          }
      };
      obj.fancybox(lightboxOption);
  };
  $('.go-popup').each(function() {
    openLightbox($(this));
  });
  //search filter: cancel btn
  $('.search-filter .btn-cancel').click(function() {
    $('.search-filter input:checkbox, .search-filter input:radio').prop('checked',false);
    $('.search-filter input').val('');
    $('.search-filter select').prop('selectedIndex',0);
  });
  //search filter: adv search
  $('.checkbox-advsearch').click(function() {
    if($(this).prop('checked')) {
      $('.advanced-search').slideDown(300);
    }
    else {
      $('.advanced-search').slideUp(300);
    };
  });
  //table sort
  $('.table-sort').each(function() {
    $(this).click(function() {
      $(this).toggleClass('active');
    });
  });
  //lists: checkbox
  $('.checkbox-lists').click(function() {
    if($(this).prop('checked')) {
      $('input[name="checkbox-lists"]').prop('checked',true);
    }
    else {
      $('input[name="checkbox-lists"]').prop('checked',false);
    };
  });
  //lists: table width
  controlTableWidth($('.table-container'));
  controlTableWidthTab($('.table-container-tab'));
  //toggle
  var showArrow = '<i class="fa fa-caret-right"></i>';
  var hideArrow = '<i class="fa fa-caret-left"></i>';
  $('.hide-toggle').click(function() {
    $(this).parents('table').find('.hide').toggle();
    if ($(this).html() == showArrow){
      $(this).html(hideArrow);
    }
    else {
      $(this).html(showArrow);
    };
  });
  //lists: copy value
  $('.btn-copy-to-val').click(function() {
    $('.input-list-txtbox').val($('.input-list-txtbox1').val());
  });
  $('.btn-copy-val').click(function() {
    var indexVal = $(this).parents('tr').index();
    var valCopyVal = $(this).parents('table').find('tr').eq(indexVal).find('.input-list-txtbox').val();
    $(this).parent().find('.input-list-txtbox').val(valCopyVal);
  });
  //switcher
  var switcher = '<div class="switch-wrapper"><span class="switch-on">ON</span><span class="switch-controller"></span><span class="switch-off">OFF</span></div>'
  function switchToggle(obj) {
    if(obj.prop('checked')) {
      obj.parent().find('.switch-wrapper').animate({
        'margin-left': 0
      },200);
      obj.parent().find('.switch-controller').animate({
        'left': 30
      },200);
    }
    else {
      obj.parent().find('.switch-wrapper').animate({
        'margin-left': '-30px'
      },200);
      obj.parent().find('.switch-controller').animate({
        'left': '-1px'
      },200);
    };
  };
  $('.switch-toggle .input-switch').before(switcher);
  $('.switch-toggle .input-switch').each(function() {
    switchToggle($(this));
    if(!$(this).parents('.switch-toggle').hasClass('disable')) {
      $(this).click(function() {
        switchToggle($(this));
      });
    }
    else {
      $(this).prop({
        'checked': false,
        'disable': true
      });
    };
  });
  //editor
  $('.custom-name .btn-edit').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.custom-name').hide();
      $(this).parents('dd').find('.custom-editor').show();
      parent.$.fancybox.update();
    });
  });
  $('.custom-editor .btn-cancel').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.custom-editor').hide();
      $(this).parents('dd').find('.custom-name').show();
      parent.$.fancybox.update();
    });
  });
  //txt caculate
  $('.textarea-calculated').bind('keyup', function() {
    var txtLength = $(this).val().length;
    $('.txt-length').text(txtLength);
  });
})(jQuery);

//lists: table width
function controlTableWidth(obj) {
  var windowWidth = window.parent.innerWidth || window.parent.document.documentElement.clientWidth || window.parent.document.body.clientWidth;
  var tableWidth = windowWidth * 0.96 - 120;
  var fixedColWidth = obj.find('.table-hd').width();
  obj.find('.table-body').css('width',tableWidth - fixedColWidth);
};
function controlTableWidthTab(obj) {
  var windowWidth = window.parent.innerWidth || window.parent.document.documentElement.clientWidth || window.parent.document.body.clientWidth;
  var tableWidth = windowWidth * 0.96 - 180;
  var fixedColWidth = obj.find('.table-hd').width();
  obj.find('.table-body').css('width',tableWidth - fixedColWidth);
};
$(window).resize(function() {
  controlTableWidth($('.table-container'));
  controlTableWidthTab($('.table-container-tab'));
});

