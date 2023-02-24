(function($){
    $('#invite_plus').on('click',function(){
        var plus_num = 4;
        var plus_html;

        for(var i=0; i<plus_num; i++){
            plus_html = '<div class="form-block">';
            plus_html += '<span class="md-input-item">';          
            plus_html += '<input type="name" tabindex="6" class="input-id input-text" id="input_name" name="account" size="29" value="阿信" data-empty="請輸入好朋友姓名!" placeholder="好朋友姓名">';
            plus_html += '<label for="input_name" class="place-label"></label>';
            plus_html += '</span>';
            plus_html += ' <span class="md-input-item">';
            plus_html += '<input type="email" tabindex="16" class="input-id input-text" id="input_add_email" name="account" size="29" data-error="輸入格式有誤!" data-empty="請輸入好朋友的 E-mail!" placeholder="好朋友的 E-mail">';
            plus_html += '<label for="input_add_email" class="place-label"></label>';
            plus_html += '</span>';
            plus_html += '</div>';
            $('#friend_list').append(plus_html);
        };
    });
})(jQuery);