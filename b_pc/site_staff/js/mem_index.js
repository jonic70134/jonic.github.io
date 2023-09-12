// 驗證碼
function generateRandomCode(length) {
    let code = '';
    const characters = '0123456789';
    for (let i = 0; i < length; i++) {
        const randomIndex = Math.floor(Math.random() * characters.length);
        code += characters.charAt(randomIndex);
    }
    return code;
}

function refreshCaptcha(captchaContainer) {
    const newCode = generateRandomCode(6);
    captchaContainer.text(newCode);
    captchaContainer.siblings('.inputCode').val('');
    captchaContainer.parents().find('.space_btn~.red').empty();
}

function validateCaptcha(input, captchaCode) {
    return input === captchaCode;
}

$(document).ready(function () {
    $('.icon_refresh').click(function () {
        const captchaContainer = $(this).siblings('.showcode');
        refreshCaptcha(captchaContainer);
    });

    $('.inputCode').on('input', function () {
        const input = $(this).val();
        const captchaCode = $(this).siblings('.showcode').text();
        const errorMessage = $(this).parents().find('.space_btn~.red');

        if (validateCaptcha(input, captchaCode)) {
            errorMessage.empty();
        } else {
            errorMessage.text('驗證碼錯誤');
        }
    });

    // Initialize captcha containers
    $('.showcode').each(function () {
        refreshCaptcha($(this));
    });
});


// 顯示點數
$("#happygo_phone .btn_red").click(function () {
    $(".mem_exp .red").show();
});
// 顯示遠傳幣餘額
$("#fetcoin .btn_red").click(function () {
    $(".mem_coin .red").show();
});