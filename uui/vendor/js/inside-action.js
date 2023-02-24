//uitox vendor JS: Big inside modify action (c) 2014 by Arashis Shen @ UITOX Corp.
(function($){
  //lightbox
  function openLightbox(obj) {
      var lightboxOption = {
          width: obj.data('width'),
          height: 'auto',
          href: obj.data('href'),
          type: 'iframe'
      };
      obj.fancybox(lightboxOption);
  };
  $('.go-popup').each(function() {
    openLightbox($(this));
  });
  //theme: choose color
  $('.theme-color dd').click(function() {
    $(this).parent().find('dd').removeClass('active');
    $(this).addClass('active');
  });
  //theme: demo
  $('.demo-tabs a').each(function() {
    $(this).click(function() {
      $('.demo-tabs a').removeClass('active');
      $(this).addClass('active');
      $('.demo-content iframe').attr('src', $(this).data('href'));
    })
  });
  //modify: analytics
  $('.analytics-type input:checkbox').each(function() {
    $(this).click(function() {
      $(this).parent().find('.analytics-content').toggle();
    });
  });
  //modify: sitemap
  // var sitemapContent = '<dt class="edit-sitemap-title"><label>標題</label><input type="text" class="input-sitemap-title" placeholder="請輸入本導覽區塊的標題"><input type="text" class="input-sitemap-url" placeholder="請輸入本導覽區塊的標題連結"></dt><dd class="edit-sitemap-content"><input type="text" class="input-sitemap-title" placeholder="請輸入頁面標題"><input type="text" class="input-sitemap-url" placeholder="請輸入頁面連結"><button class="btn-delete-line"><i class="fa fa-times"></i></button></dd><dd class="edit-sitemap-content"><input type="text" class="input-sitemap-title" placeholder="請輸入頁面標題"><input type="text" class="input-sitemap-url" placeholder="請輸入頁面連結"><button class="btn-delete-line"><i class="fa fa-times"></i></button></dd><button class="btn-create-line"><i class="fa fa-angle-down"></i>新增連結...</button><button class="btn-delete-block"><i class="fa fa-times"></i>刪除導覽區塊</button>';
  // var btnCreateSitemap = '<button class="btn-create-block"><i class="fa fa-plus"></i>新增導覽區塊</button>';
  // var sitemapLine = '<dd class="edit-sitemap-content"><input type="text" class="input-sitemap-title" placeholder="請輸入頁面標題"><input type="text" class="input-sitemap-url" placeholder="請輸入頁面連結"><button class="btn-delete-line"><i class="fa fa-times"></i></button></dd>';
  // var sitemapMaxLength = '<dl class="form-element edit-sitemap clearfix">' + sitemapContent + '</dl>';
  // var sitemapNormalLength = '<dl class="form-element edit-sitemap clearfix">' + sitemapContent + btnCreateSitemap + '</dl>';
  // $('body').on('click','.edit-sitemap .btn-create-line', function() {
  //   $(this).before(sitemapLine);
  // });
  // $('body').on('click','.edit-sitemap .btn-delete-line', function() {
  //   $(this).parent().remove();
  // });
  // $('body').on('click','.edit-sitemap .btn-delete-block', function() {
  //   $(this).parent().remove();
  //   $('.edit-sitemap').last().append(btnCreateSitemap);
  // });
  // $('body').on('click','.edit-sitemap .btn-create-block', function() {   
  //   $('.edit-sitemap').last().find('.btn-create-block').remove(); 
  //   if($('.edit-sitemap').length >= 4) {
  //     $('.edit-sitemap').last().after(sitemapMaxLength);
  //   }
  //   else {
  //     $('.edit-sitemap').last().after(sitemapNormalLength);
  //   }
  // });
  //search filter
  $('.input-search').bind('keyup change', function() {
      $('.related-searches').slideDown(100);
      if ($(this).val() == '') {
          $('.related-searches').slideUp(50);
      };
  }).blur(function() {
      $('.related-searches').slideUp(50);
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
  //modify: log
  $('.search-filter .btn-cancel').click(function() {
    $('.search-filter input').val('');
    $('.search-filter select').prop('selectedIndex',0);
  });
  //modify: edit ad
  $('.edit-ad .btn-clear-ad').each(function() {
    $(this).click(function() {
      $(this).parent().find('input').val('');
    });
  });
  //modify: edit block infr toggle
  $('.btn-block-infr').mouseover(function() {
    $('.edit-block-infr').fadeIn(200);
  }).mouseleave(function() {
    $('.edit-block-infr').fadeOut(200);
  });
  //modify: menu
  ////switcher
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
    $(this).click(function() {
      switchToggle($(this));
    });
  });
  ////menu toggle
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
  ////edit menu name
  $('.menu-name-custom .btn-edit').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.menu-name-custom').hide();
      $(this).parents('dd').find('.menu-name-editor').show();
    });
  });
  $('.menu-name-editor .btn-save').each(function() {
    $(this).click(function() {
      $(this).parents('dd').find('.menu-name-editor').hide();
      $(this).parents('dd').find('.menu-name-custom').show();
    });
  });
  ////drag tooltip
  $('.main-menu .menu-plate').first().mouseenter(function(e) {
    $('.tooltip-draghint').css({
      'left': e.pageX + 5,
      'top': e.pageY + 5,
      'display': 'inline'
    }).delay(1500).fadeOut(100);
  });
  ////select list
  var nameSelected, objSelected;
  var arrSelected = [];
  var btnAddList = '<button class="btn-add"><i class="fa fa-plus"></i>加入</button>';
  var btnDelList = '<button class="btn-delete"><i class="fa fa-times"></i>刪除</button>';
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
})(jQuery);