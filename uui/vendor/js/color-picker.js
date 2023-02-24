(function($){
  $('.color-picker').colpick({
    layout: 'hex',
    submit: 0,
    onShow: function() {
      $(this).parents().eq(1).find('.radio-bg-color').prop('checked', true);
    },
    onChange: function(hsb,hex,rgb,el,bySetColor) {
      hex = '#' + hex;
      $(el).parent().find('.color-picked').css('background', hex);
      if(!bySetColor) $(el).val(hex);
    }
  }).keyup(function(){
    $(this).colpickSetColor(this.value);
  });
  $('.input-bg-img').focus(function() {
    $(this).parents().eq(1).find('.radio-bg-img').prop('checked', true);
  });
})(jQuery);