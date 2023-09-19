// 宅配全選
$("#home_chk_all").click(function () {
    $('.home_cart input:checkbox').not(this).prop('checked', this.checked);
});
// 超取全選
$("#mkt_chk_all").click(function () {
    $('.mkt_cart input:checkbox').not(this).prop('checked', this.checked);
});

// 選擇完門市顯示取貨資訊
$("#mkt_box .btn_red").click(function () {
    $(".form_mkt_select").hide();
    $(".form_mkt_select.is_selected").css("display", "flex");
});

// 付款方式
$("input[name$='payway']").click(function () {
    var paydiv = $(this).val();
    $(".paydiv").hide();
    $("#paydiv" + paydiv).show();
});


$("input[name$='invo']").click(function () {
    var invo = $(this).val();
    $(".invo_credit").hide();
    $("#invo" + invo).show();
});


//看以前加入購物車的商品
$('.add_before').click(function (e) {
    e.preventDefault();
    $('.cart_item.is-before').css('display', 'flex');
    $('.add_before').hide();
    $('.before_t p').show();
});

// 選擇折價券
$(".cart_cupn_block .box_btn").click(function () {
    $(".cupn_price").fadeIn(200);
});

// 使用折扣碼
$('.cart_cupn_text').on('input', function () {
    $('.code_btn_submit').prop('disabled', !$(this).val());
});

$('.code_btn_submit').click(function () {
    $(".code_price").fadeIn(200);
    $(".code_btn_cancel").show();
});
$(".code_btn_cancel").click(function (e) {
    e.preventDefault();
    $(".code_price").hide();
    $(this).hide();
    $('.cart_cupn_text').val();

});


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

$("#happygo .btn_red").click(function () {
    $(".happygo").css("display", "flex");
    $(".happy_btn").hide();
});

$("#fetcoin .btn_red").click(function () {
    $(".fetcoin").css("display", "flex");
    $(".fet_btn").hide();
});


// 幣或點數的加減

var valueElements = [
    { input: $(".happygo .quantity-input"), output: $("#happy_price"), value: 0 },
    { input: $(".fetcoin .quantity-input"), output: $("#fet_price"), value: 0 }
];

// 更新元素的值和顯示
function updateValue(element) {
    element.output.text(element.value);
}

// 輸入框輸入事件
$(".quantity-input").on("input", function () {
    var index = $(this).data("index");
    var newValue = parseInt($(this).val()) || 0; // 確保輸入是數字，若不是則使用預設值 0
    valueElements[index].value = newValue;
    updateValue(valueElements[index]);
});

// 增加和減少按鈕點擊事件
$(".quantity-increase").on("click", function () {
    var index = $(this).data("index");
    valueElements[index].value++;
    updateValue(valueElements[index]);
    valueElements[index].input.val(valueElements[index].value);
});

$(".quantity-decrease").on("click", function () {
    var index = $(this).data("index");
    valueElements[index].value--;
    updateValue(valueElements[index]);
    valueElements[index].input.val(valueElements[index].value);
});