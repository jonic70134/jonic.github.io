function process_qty(id, sell_qty, method){
    if(id != "")
    {
        var obj = $("#"+id);
        if(obj.val() == "")
        {
            alert(err_emptyqty);
            obj.focus();
            obj.val(1);
            cart_update(id);
        }
        else
        {
            data = check_qty(obj.val(), sell_qty, method);
            if(data.isint == true)
            {
                if(parseInt(data.num_value) > 0)
                {
                    ajaxing = true;
                    obj.val(data.num_value);
                    clearTimeout(timeout);
                    timeout = setTimeout(function(){ if(data.num_value > 0)cart_update(id); }, 1000);
                }
                else
                {
                    alert(err_lowersellqty);
                    obj.val(1);
                    cart_update(id);
                }
            }
            else
            {
                alert(err_qty);
                obj.focus();
                obj.val(1);
                cart_update(id);
            }
        }
    }
}

function check_qty(num, sell_qty, method){
    var data = {isint:false, num_value:0};
    if(isNaN(num) == true)
    {
        return data;
    }
    else
    {
        data.isint = true;
        num = parseInt(num);

        if(method == "add")
        {
            if((num + 1) <= max_qty)
            {
                if((num + 1) <= sell_qty)
                {
                    data.num_value = num + 1;
                }
                else
                {
                    alert(err_oversellqty);
                    data.num_value = sell_qty;
                }
            }
            else
            {
                alert(err_overqty);
                data.num_value = sell_qty;
            }
        }
        else if(method == "sub")
        {
            if(num > 0)
                data.num_value = num - 1;
            else
                data.num_value = 0;
        }
        else if(method == "keyin")
        {
            if(num == 0)
            {
                data.num_value = 0;
            }
            else
            {
                if(num <= max_qty)
                {
                    if(num <= sell_qty)
                    {
                        data.num_value = num;
                    }
                    else
                    {
                        alert(err_oversellqty);
                        data.num_value = sell_qty;
                    }
                }
                else
                {
                	 var checknum = /^[0-9]+$/;   //更新keyin時輸入非數字之問題 by Simon 2014/5/9
                	 if(!checknum.test(num))
                	 {
                	 	alert(err_notnumberqty);
                	 	data.num_value = 1;
                	 }
                	 else
                	 {		
                    alert(err_overqty);
                    data.num_value = sell_qty;
                   }
                }
            }
        }
        return data;
    }
}
