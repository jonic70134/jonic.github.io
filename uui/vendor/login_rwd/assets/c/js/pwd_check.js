//判斷輸入密碼的類型
function CharMode(iN) {
    if (iN >= 48 && iN <= 57) //數字
        return 1;
    if (iN >= 65 && iN <= 90) //大寫
        return 2;
    if (iN >= 97 && iN <= 122) //小寫
        return 4;
    else return 8;
} //bitTotal函數
//計算密碼模式
function bitTotal(num) {
    modes = 0;
    for (i = 0; i < 4; i++) {
        if (num & 1) modes++;
        num >>>= 1;
    }
    return modes;
} //返回強度級別
function checkStrong(sPW) {
    if (sPW.length <= 4) return 0; //密碼太短
    Modes = 0;
    for (i = 0; i < sPW.length; i++) { //密碼模式
        Modes |= CharMode(sPW.charCodeAt(i));
    }
    return bitTotal(Modes);
} //顯示顏色
function pwStrength(pwd) {
    var pwdStatus = "";
    if (pwd == null || pwd == '') {
        $('.md-pwd-bar').removeClass('is-light is-medium is-hard');
    } else {
        S_level = checkStrong(pwd);
        switch (S_level) {
            case 0:
                $('.md-pwd-bar').removeClass('is-light is-medium is-hard');
            case 1:
                $('.md-pwd-bar').removeClass('is-light is-medium is-hard');
                $('.md-bar-light').addClass('is-light');
                pwdStatus = $('.md-bar-light').data('text');
                break;
            case 2:
                $('.md-pwd-bar').removeClass('is-light is-medium is-hard');
                $('.md-bar-light, .md-bar-medium').addClass('is-medium');
                pwdStatus = $('.md-bar-medium').data('text');
                break;
            default:
                $('.md-pwd-bar').removeClass('is-light is-medium').addClass('is-hard');
                pwdStatus = $('.md-bar-hard').data('text');
        }
    }
    $('.t-status').html(pwdStatus);
    return;
}