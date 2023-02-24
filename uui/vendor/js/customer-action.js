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
  //return lightbox
  $('.btn-return').each(function() {
    var inputProduct = '#' + $(this).data('name');
    $(this).fancybox({
      width: $(this).data('width'),
      height: 'auto',
      fitToView: 'false',
      href: $(this).data('href'),
      type: 'iframe',
      helpers : {
        title : null            
      },
      afterShow: function() {
        $('.fancybox-iframe').contents().find(inputProduct).prop('checked',true);
      }
    });
  });
  //search filter: cancel btn
  $('.search-filter .btn-cancel').click(function() {
    $('.search-filter input').val('');
    $('.search-filter select').prop('selectedIndex',0);
  });
  //table sort
  $('.table-sort').each(function() {
    $(this).click(function() {
      $(this).toggleClass('active');
    });
  });
  //orders: checkbox
  $('.checkbox-orders').click(function() {
    if($(this).prop('checked')) {
      $('input[name="checkbox-orders"]').prop('checked',true);
    }
    else {
      $('input[name="checkbox-orders"]').prop('checked',false);
    };
  });
  //orders: table in tab width
  tableControlFunction();
  $('.order-detail').hide();
  $('.order-detail-content').hide();
  $('.purchase').show();
  $('.return-detail').show();
  //orders: open detail
  $('.toggle-order-detail').each(function() {
    var trBgColor = $(this).parent('td').css('background-color');
    $(this).click(function() {
      $('#' + $(this).data('name')).toggle();
      if(!$(this).hasClass('active')) {
        $(this).addClass('active');
        $(this).parents('tr').find('td').css({
          'background-color':'#fde5e5',
          'font-weight':'bold'
        });
      }
      else {
        $(this).removeClass('active');
        $(this).parents('tr').find('td').css({
          'background-color':trBgColor,
          'font-weight':'normal'
        });
      };
    });
  });
  //orders: switch tabs
  $('.order-detail-tabs dd').each(function() {
    $(this).click(function() {
      $(this).parent().find('dd').removeClass('active');
      $(this).addClass('active');
      $(this).parents('.order-detail').find('.order-detail-content').hide();
      $(this).parents('.order-detail').find('.' + $(this).data('name')).show();
      tableControlFunction();
    });
  });
  //popup: copy value
  $('.btn-copy-to-val').click(function() {
    $('.input-return').val($('.input-return1').val());
  });
  $('.btn-copy-val').click(function() {
    var indexVal = $(this).parents('tr').index();
    var valCopyVal = $(this).parents('table').find('tr').eq(indexVal).find('.input-return').val();
    $(this).parent().find('.input-return').val(valCopyVal);
  });
  //popup: sms caculate
  $('.textarea-sms').bind('keyup', function() {
    var txtLength = $(this).val().length;
    $('.txt-length').text(txtLength);
  });
})(jQuery);
//orders: table in tab width
  function controlTableWidth(obj) {
    var windowWidth = window.parent.innerWidth || window.parent.document.documentElement.clientWidth || window.parent.document.body.clientWidth;
    var tableWidth = windowWidth * 0.96 - 150;
    var fixedColWidth = obj.find('.order-hd').width();
    obj.find('.order-body').css('width',tableWidth - fixedColWidth);
  };
  $(window).resize(function() {
  tableControlFunction();
});
function tableControlFunction() {
  controlTableWidth($('.purchase'));
  controlTableWidth($('.shipping'));
  controlTableWidth($('.recipient'));
  controlTableWidth($('.payment'));
  controlTableWidth($('.invoice'));
  controlTableWidth($('.supplier'));
  controlTableWidth($('.orderinfr'));
  controlTableWidth($('.remarks'));
  controlTableWidth($('.return-detail'));
  controlTableWidth($('.return-contact'));
  controlTableWidth($('.refunds-infr'));
  controlTableWidth($('.certificate'));
  controlTableWidth($('.logistic'));
  controlTableWidth($('.refunds-log'));
};