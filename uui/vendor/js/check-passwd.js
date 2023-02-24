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
    O_color = "#ddd";
    L_color = "#f00";
    M_color = "#f90";
    H_color = "#3c0";
    pwdStatus = "";
    if (pwd == null || pwd == '') {
        Lcolor = Mcolor = Hcolor = O_color;
    } else {
        S_level = checkStrong(pwd);
        switch (S_level) {
            case 0:
                Lcolor = Mcolor = Hcolor = O_color;
            case 1:
                Lcolor = L_color;
                Mcolor = Hcolor = O_color;
                pwdStatus = "弱";
                break;
            case 2:
                Lcolor = Mcolor = M_color;
                Hcolor = O_color;
                pwdStatus = "中";
                break;
            default:
                Lcolor = Mcolor = Hcolor = H_color;
                pwdStatus = "強";
        }
    }
    $("#strength_L").css('background', Lcolor);
    $("#strength_M").css('background', Mcolor);
    $("#strength_H").css('background', Hcolor);
    $("#strength_status").html(pwdStatus);
    return;
}