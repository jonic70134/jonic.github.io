//uitox vendor JS: Campaign pages action (c) 2014 by Arashis Shen @ UITOX Corp.
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
  //search filter
  $('.input-search-related').bind('keyup change', function() {
      $('.related-searches').slideDown(100);
      if ($(this).val() == '') {
          $('.related-searches').slideUp(50);
      };
  }).blur(function() {
      $('.related-searches').slideUp(50);
  });
  $('.search-filter .btn-cancel').click(function() {
    $('.search-filter input:checkbox, .search-filter input:radio').prop('checked',false);
    $('.search-filter input').val('');
    $('.search-filter select').prop('selectedIndex',0);
  });
  $('#checkAdvSearch').click(function() {
    if($(this).prop('checked')) {
      $('.adv-search').show();
      parent.$.fancybox.update();
    }
    else {
      $('.adv-search').hide();
      parent.$.fancybox.update();
    };
  });
  //lists: table in tab width
  controlTableWidth($('.table-container'));
  //select list
  var nameSelected, objSelected;
  var arrSelected = [];
  var btnAddList = '<button class="btn-add"><i class="fa fa-plus"></i></button>';
  var btnDelList = '<button class="btn-delete"><i class="fa fa-times"></i></button>';
  $('body').on('click','.select-list .btn-add', function() {
    nameSelected = $(this).parent().find('.setect-list-name').text();
    objSelected = '<dd class="clearfix"><span class="setect-list-name">' + nameSelected + '</span>' + btnDelList + '</dd>';
    $(this).parent().remove();
    $('.scroll-selected .mCSB_container').prepend(objSelected);
    $('.scroll').mCustomScrollbar('update');
    $('.scroll-selected').mCustomScrollbar('update');
  });
  $('body').on('click','.select-list .btn-delete', function() {
    nameSelected = $(this).parent().find('.setect-list-name').text();
    objSelected = '<dd class="clearfix"><span class="setect-list-name">' + nameSelected + '</span>' + btnAddList + '</dd>';
    $(this).parent().remove();
    $('.scroll .mCSB_container').append(objSelected);
    $('.scroll').mCustomScrollbar('update');
    $('.scroll-selected').mCustomScrollbar('update');
  });
  $('body').on('click','.select-table .btn-add', function() {
    arrSelected = [];
    $(this).parents('.list-line').find('td').each(function() {
      arrSelected.push($(this).text());
    });
    objSelected = '<tr class="list-line"><td>' + btnDelList + '</td>';
    for(var i = 1; i < arrSelected.length; i++) {
      objSelected = objSelected + '<td>' + arrSelected[i] + '</td>';
    }
    objSelected = objSelected + '</tr>';
    $(this).parents('.list-line').remove();
    $('.scroll-selected .list-title').after(objSelected);
    $('.scroll').mCustomScrollbar('update');
    $('.scroll-selected').mCustomScrollbar('update');
  });
  $('body').on('click','.select-table .btn-delete', function() {
    arrSelected = [];
    $(this).parents('.list-line').find('td').each(function() {
      arrSelected.push($(this).text());
    });
    objSelected = '<tr class="list-line"><td>' + btnAddList + '</td>';
    for(var i = 1; i < arrSelected.length; i++) {
      objSelected = objSelected + '<td>' + arrSelected[i] + '</td>';
    }
    objSelected = objSelected + '</tr>';
    $(this).parents('.list-line').remove();
    $('.scroll .table-list').append(objSelected);
    $('.scroll').mCustomScrollbar('update');
    $('.scroll-selected').mCustomScrollbar('update');
  });
  $('body').on('click','.select-table .btn-delete-prod', function() {
    $(this).parents('tr').addClass('disabled');
    $(this).parent('td').html('<button class="btn-undo-prod" title="加入"><i class="fa fa-plus"></i></button>');
  });
  $('body').on('click','.select-table .btn-undo-prod', function() {
    $(this).parents('tr').removeClass('disabled');
    $(this).parent('td').html('<button class="btn-delete-prod" title="移除"><i class="fa fa-times"></i></button>');
  });
  //cost
  $('.input-calculate-cost').focus(function() {
    $(this).parent('label').find('input[name=radioCost]').prop('checked',true);
  })
  //editor
  $('.custom-name .btn-edit').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.custom-name').hide();
      $(this).parents('dd').find('.custom-editor').show();
      parent.$.fancybox.update();
    });
  });
  $('.custom-editor .btn-submit, .custom-editor .btn-cancel').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.custom-editor').hide();
      $(this).parents('dd').find('.custom-name').show();
      parent.$.fancybox.update();
    });
  });
  //input jumper
  $('.input-jumper-group input').each(function() {
      $(this).keyup(function() {
          var next = $('.input-jumper-group').find('input').index(this) + 1;
          autoTab($(this), $('.input-jumper-group input').eq(next));
      });
  });
  function autoTab(original, destination) {
      var limit = original.attr('maxlength');
      var text = original.val();
      if (original.val().length == limit) {
          destination.focus();
      };
  };
})(jQuery);
//lists: table in tab width
function controlTableWidth(obj) {
  var windowWidth = window.parent.innerWidth || window.parent.document.documentElement.clientWidth || window.parent.document.body.clientWidth;
  var tableWidth = windowWidth * 0.96 - 120;
  var fixedColWidth = obj.find('.table-hd').width();
  obj.find('.table-body').css('width',tableWidth - fixedColWidth);
};
$(window).resize(function() {
  controlTableWidth($('.table-container'));
});