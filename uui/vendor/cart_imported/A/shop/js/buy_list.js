function get_lists()
{
    $.blockUI({
        message: '<img src="/c/img/busy.gif"> loading'
    });

    $.ajax({
        url: "/" + ws_seq + "/cart_api/cart_lists_by_ajax",
        type: "get",
        dataType: "jsonp",
        data: {
            get_page: action,
            callback: 'lists_process'
        },
        error: function() {

        }
    });
}

function lists_process(data)
{
    $("#set_list").html("");
    var items = JSON.parse(JSON.stringify(data));

    var p = 1;
    var t_num = 0;
    var t_weight = 0;
    var item_weight_div = '';
    var fee_weight_div = '';
    var is_combo = false; //combo
    var content_leng = items['contents'].length; //促銷活動 by simon 2014/3/14
    var ma_name_kind2 = [];
    var ma_name2 = "";
    var ma_url = "";
    $('#act_conform').html(ma_name2);
    //End of 促銷活動 by simon
    if(items['check']['status'] == '1' || items['check']['status'] == '2')
    {
        for(i=0; i<items['check']['msg'].length; i++)
        {
            alert(items['check']['msg'][i]);
        }
        if(action == 'enterData')
        {
            location.href = back_url;
        }
    }

    $.each(items['contents'] , function(key , value){
        //var shop_country = items['shop_country'];
        var sign = items['sign'];
        var kind = items['contents'][key]['options']['kind'];
        var symbol = '';
        var top_line = '';
        var it_large = '';
        var add_item='';	//add by nancy - 2014-08-25 -購物車加購

        if(kind != '4' && kind != '9')
        {
            if(kind == '2' || kind == '7')
            {
                var dropdownlist = items['contents'][key]['qty'];
                var unit_price = sign + commafy(items['contents'][key]['price']);
                var cancel = '';
            }
            else
            {
                if(t_num >= 1 && ( kind == 1 || kind == '8'))    //modify by nancy @2014-09-01-加購品上多一條分隔線
                {
                    var top_line = '<hr class="listline"/>';
                }

                //var dropdownlist = (action == 'cartlist')?'<select id="' + items['contents'][key]['rowid'] + '" onChange="cart_update(\'' + items['contents'][key]['rowid'] +'\');" style="width:45px !important;"></select>':items['contents'][key]['qty'];
                var dropdownlist = (action == 'cartlist')?'<input type="button" class="shopcut" value="-" onclick="process_qty(\'' + items['contents'][key]['rowid'] + '\', ' + items['contents'][key]['options']['max_select'] + ', \'sub\');"/><input type="text" id="' + items['contents'][key]['rowid'] + '" onchange="process_qty(\'' + items['contents'][key]['rowid'] + '\', ' + items['contents'][key]['options']['max_select'] + ', \'keyin\');" class="shoinput" value="' + items['contents'][key]['qty'] + '"/><input type="button" class="shopsuh" value="+" onclick="process_qty(\'' + items['contents'][key]['rowid'] + '\', ' + items['contents'][key]['options']['max_select'] + ', \'add\');"/>':items['contents'][key]['qty'];
                var unit_price = sign + commafy(items['contents'][key]['price']);
                var cancel = (action == 'cartlist')?'<input type="button" class="submit"  name="cancel" value="' + items['btn_delete'] +'" onclick="cart_delete(\'' + items['contents'][key]['rowid']+ '\')">':'';
            }

            // delete ?
            //            if(items['country'] == 'sh')
            //            {
            //                var item_weight = (items['contents'][key]['options']['weight'] * items['contents'][key]['qty']);
            //                t_weight = t_weight + item_weight;
            //                item_weight = (item_weight / 1000).toFixed(2) + " kg";
            //                item_weight_div = '<div class="column2_2 ' + p_class + '">' + item_weight + '</div>';
            //            }
            // delete ?

            if(items['contents'][key]['options']['it_large'] == 1)
            {
                var it_large = '<span class="icon_big">' + items['big_item'] + '</span>';
            }
        //var item_name = '<a href="' + items['contents'][key]['options']['source_url'] + '" target="_blank">' + items['contents'][key]['name'] + '</a>'; prepare remove combo
        }
        else
        {
            var dropdownlist = '';
            var unit_price = '';
            var cancel = '';

            if(kind == '9')
            {
                var symbol = '- ';
                var p_class = 'colff0';
            }
        //var item_name = items['contents'][key]['name']; prepare remove combo
        }

        var item_name = items['contents'][key]['name']; //combo
        var ma_name = "";   //促銷活動 by simon 2014/3/11
        if (typeof(items['contents'][key]['options']['ma'])!='undefined')
        {
            var ma_content = items['contents'][key]['options']['ma'];
            var ma_exist = 1 ;  // ma存在
        }
        else
        {
            var ma_exist = 0 ;  // ma不存在
        }
        // end

        var limit_goods_msg = "";
        if(typeof(items['contents'][key]['options']['limit']['limit_goods_msg']) != "undefined" && items['contents'][key]['options']['limit']['limit_goods_msg'] != "" && kind == '1')
        {
            limit_goods_msg = items['contents'][key]['options']['limit']['limit_goods_msg'];
        }

        // add@2014-01-16 by Shengeih
        if(items['contents'][key]['options']['master_id'] == '')
        {
            // 判斷是不是組合商品的主商品 , 如果是的話則加上去一行 div
            if(items['contents'][key]['options']['k6_s'] == '1')
            {
                if(items['country'] != 'tw')
                {
                    var f = 2;
                }
                else
                {
                    var f = 0;
                }

                is_combo = true; // combo

                var combo_div = '<div id="tr_' + items['contents'][key]['id'] + '" class="listr center clearfix">' +
                '<div class="column1 col888fotb ' + p_class + '"><a class="col888B" href="' + items['contents'][key]['options']['source_url'] + '" target="_blank">' + items['contents'][key]['options']['sell_name'] + '，包含以下商品：</a></div>' + //combo
                '<div class="column2 ' + p_class + '">' + dropdownlist + '</div>' + item_weight_div +
                '<div class="column3 ' + p_class + '">' + symbol + sign + number_format(items['contents'][key]['options']['k6_s_total'] , f) + '</div>' +
                '<div class="column4 ' + p_class + '">'+ symbol + sign + number_format(items['contents'][key]['options']['k6_s_total'] * items['contents'][key]['qty'], f) + '</div>' +
                '<div class="column5">' + cancel + '</div>' +
                '</div>';

                // 使其其他欄位空白
                dropdownlist = '';
                item_weight_div = '';
                unit_price = '';
                cancel = '';
                symbol = '';
                sign = '';
                items['contents'][key]['subtotal'] = '';
            }
            else
            {
                var combo_div = '';

                if(items['contents'][key]['options']['kind'] != '8')
                {
                    item_name = '<a href="' + items['contents'][key]['options']['source_url'] + '" target="_blank">' + item_name + '</a>'; // combo
                }
                else
                {
                    item_name = '<span>' + item_name + '</span>'; // 購物車加購
                    var add_item= '購物車加購 - ';
                }

                //預購商品,標示紅字 @20140403 by PJ
                if(items['contents'][key]['options']['is_pre_ord'] == '1')
                {
                    item_name+='<p class="colff0">'+items['pre_order_item']+'</p>';
                }

                is_combo = false; // combo
                if(ma_exist ==1)                         //促銷活動顯示內容 by Simon 2014/3/11
                {
                    for(var makey=0;makey<=ma_content.length-1;makey++)
                    {
                        if(ma_content[makey]['camp_seq'] != null && kind==1 && ma_content[makey]['camp_type']!= null)
                        {
                            if(ma_content[makey]['reach'] != 1)                            //是否達成活動門檻(1:是 0:否)
                            {
                                if(ma_content[makey]['camp_range']!=0)
                                {
                                    ma_url = '<a class="actadlink" href="'+ ma_content[makey]['source_url'] +'" target="_blank">' + ma_content[makey]['camp_name'] + '</a>';
                                }
                                else
                                {
                                    ma_url = '<span class="actadlink">' + ma_content[makey]['camp_name'] + '</span>';
                                }

                                if(action == "cartlist")
                                {
                                    ma_name = ma_name + '<div class="listr actlist clearfix"><div class="column0"></div><div class="shopok"><span class="shopadtxt">再湊NT$' + ma_content[makey]['lacks'] + '可享有</span> ' + ma_url + '</div></div>';
                                }
                            }
                            else
                            {
                                if(ma_content[makey]['camp_range']!=0)
                                {
                                    ma_url = '<a class="actoklink" href="'+ ma_content[makey]['source_url'] +'" target="_blank">' + ma_content[makey]['camp_name'] + '</a>';
                                }
                                else
                                {
                                    ma_url = '<span class="actoklink">' + ma_content[makey]['camp_name'] + '</span>';
                                }
                                ma_name =  ma_name + '<div class="listr actlist clearfix"><div class="column0"></div><div class="shopok"><span class="shopoktxt">已符合</span> ' + ma_url + '</div></div>';
                                if(ma_content[makey]['camp_type'] == 1)
                                {
                                    var ma_name_kind2_content = [];
                                    ma_name_kind2_content={
                                        'camp_name' : ma_content[makey]['camp_name'],
                                        'discount' : ma_content[makey]['discount'] ,
                                        'coupon_date' : ma_content[makey]['coupon_date']
                                    };
                                    ma_name_kind2[ma_content[makey]['camp_seq']]=ma_name_kind2_content ;
                                }
                            }
                        }
                    }
                }

            }



            $('#set_list').append(
                top_line + combo_div + '<div id="tr_' + items['contents'][key]['id'] + '" class="listr center clearfix">' +
                '<div class="column1 ' + p_class + '">' + add_item + it_large + item_name + '<p class="colff0">' + limit_goods_msg + '</p></div>' +
                '<div class="column2 ' + p_class + '">' + dropdownlist + '</div>' + item_weight_div +
                '<div class="column3 ' + p_class + '">' + unit_price + '</div>' +
                '<div class="column4 ' + p_class + '" id="subtotal_'+ items['contents'][key]['rowid'] +'">'+ symbol + sign + commafy(items['contents'][key]['subtotal']) + '</div>' +
                '<div class="column5">' + cancel + '</div>' +
                '</div>' + ma_name);
        }
        else
        {
            if(items['contents'][key]['options']['kind'] != '6')
            {
                var show_price = symbol + sign + commafy(items['contents'][key]['subtotal']);
                if(!is_combo) // combo
                {
                    // 買立折僅有折扣名稱,無連結 @2014-08-08 by Alan
                    if(items['contents'][key]['options']['source_url'])    // typeof items['contents'][key]['options']['source_url'] != 'undefined'    modify@20140918 by steve
                    {
                        item_name = '<a href="' + items['contents'][key]['options']['source_url'] + '" target="_blank">' + item_name + '</a>';
                    }
                    else
                    {
                        item_name = '<a href="#">' + item_name + '</a>';
                    }

                    if(ma_exist ==1)                         //促銷活動顯示內容 by Simon 2014/3/11
                    {
                        for(var makey=0;makey <= ma_content.length-1;makey++)
                        {
                            if(ma_content[makey]['camp_seq'] != null && kind==1 && ma_content[makey]['camp_type']!= null)
                            {
                                if(ma_content[makey]['reach'] != 1)                            //是否達成活動門檻(1:是 0:否)
                                {
                                    if(ma_content[makey]['camp_range']!=0)
                                    {
                                        ma_url = '<a class="actadlink" href="'+ ma_content[makey]['source_url'] +'" target="_blank">' + ma_content[makey]['camp_name'] + '</a>';
                                    }
                                    else
                                    {
                                        ma_url ='<span class="actadlink">' + ma_content[makey]['camp_name'] + '</span>';
                                    }

                                    if(action == "cartlist")
                                    {
                                        ma_name = ma_name + '<div class="listr actlist clearfix"><div class="column0"></div><div class="shopok"><span class="shopadtxt">再湊NT$' + ma_content[makey]['lacks'] + '可享有</span> ' + ma_url + '</div></div>';
                                    }
                                }
                                else
                                {
                                    if(ma_content[makey]['camp_range']!=0)
                                    {
                                        ma_url = '<a class="actoklink" href="'+ ma_content[makey]['source_url'] +'" target="_blank">' + ma_content[makey]['camp_name'] + '</a>';
                                    }
                                    else
                                    {
                                        ma_url = '<span class="ctoklink">' + ma_content[makey]['camp_name'] + '</span>';
                                    }
                                    ma_name = ma_name + '<div class="listr actlist clearfix"><div class="column0"></div><div class="shopok"><span class="shopoktxt">已符合</span> ' + ma_url + '</div></div>';
                                    if(ma_content[makey]['camp_type'] == 1)
                                    {
                                        var ma_name_kind2_content = [];
                                        ma_name_kind2_content={
                                            'camp_name' : ma_content[makey]['camp_name'],
                                            'discount' : ma_content[makey]['discount'] ,
                                            'coupon_date' : ma_content[makey]['coupon_date']
                                        };
                                        ma_name_kind2[ma_content[makey]['camp_seq']]=ma_name_kind2_content ;
                                    }
                                }
                            }
                        }
                    }
                }
            }
            else
            {
                var show_price = '';
                var dropdownlist = '';
                var unit_price = '';
                var cancel = '';
            }


            $('#set_list').append(
                top_line + '<div id="tr_' + items['contents'][key]['id'] + '" class="listr center clearfix">' +
                '<div class="column1 ' + p_class + '">' + add_item + it_large + item_name + '<p class="colff0">' + limit_goods_msg + '</p></div>' +
                '<div class="column2 ' + p_class + '">' + dropdownlist + '</div>' +
                '<div class="column3 ' + p_class + '">' + unit_price + '</div>' +
                '<div class="column4 ' + p_class + '" id="subtotal_'+ items['contents'][key]['rowid'] +'">'+ show_price + '</div>' +
                '<div class="column5">' + cancel + '</div>' +
                '</div>' + ma_name);
        }

        if(action == "cartlist")
        {
            var myOption = [];
            for(var i = 1 ; i<=items['contents'][key]['options']['max_select'] ; i++)
            {
                myOption[i] = i;
            }

            $('#'+items['contents'][key]['rowid']).addOption(myOption , false);
            $('#'+items['contents'][key]['rowid']).selectOptions(items['contents'][key]['qty'] , true);
        }
        t_num++;
        if(t_num==(content_leng))
        {
            for(var makey2 in ma_name_kind2)
            {
                var date_forma_ori=new Date(Date.parse(ma_name_kind2[makey2].coupon_date));
                var date_forma_year=date_forma_ori.getFullYear();
                var date_forma_month=date_forma_ori.getMonth()+1;
                var date_forma_day=date_forma_ori.getDate();
                var date_forma_full=date_forma_year + '年' + date_forma_month + '月' +  date_forma_day + '日';
                ma_name2 = ma_name2 + '<div class="talactok"><p><span class="shopoktxt">已符合</span><span class="acttxt">'+ma_name_kind2[makey2].camp_name+'，將贈送給您</span><span class="colred">購物金<span class="actunm">'+ma_name_kind2[makey2].discount+'點</span></span></p><p class="actexpl">購物金贈送說明：贈送點數將於'+date_forma_full+'給點，商品退貨未達門檻將取消給點。</p></div>';
            }
            $('#act_conform').html(ma_name2);
        }
    });

    // delete ?
    //    if(items['country'] == 'sh')
    //    {
    //        fee_weight_div = ' <span class="expltxt">(满95元，重量小于10公斤免运费 <a href="http://' + items['WWW_VIEW_DOMAIN'] + '/help_center/yunfei" target="_blank" class="expl">说明</a>) </span>';
    //        if(t_weight > 0){
    //            t_weight = (t_weight/ 1000).toFixed(2) + ' kg';
    //            jQuery('#weight_list > .column2_2').text(t_weight);
    //        }else{
    //            jQuery('#weight_list').hide();
    //        }
    //    }
    // delete ?

    var act_list = '';
    var act_discount = 0;
    for(var i = 0 ; i <=items['activity'].length -1 ; i++)
    {
        act_list += '<div class="listr center clearfix">' +
        '<div class="column1 col888">' + activity_name + '(' + items['activity'][i]['name'] + ')</div>' +
        '<div class="column2">&nbsp;</div>' +
        '<div class="column3">&nbsp;</div>' +
        '<div id="act_discount" class="column4"> - ' + items['sign'] + commafy(items['activity'][i]['discount'])+'</div>' +
        '<div class="column5">&nbsp;</div>' +
        '</div>';
    }
    $('#act_list').html(act_list);

    if(items['point']['deduct_price'] > 0)
    {
        $(".goldtxt").html('<span class="text12 colff0">Please click on the checkbox if you want to use your Shopping Credits for your purchase.</span>');

        if(items['point']['use1'] == '1')
        {
            $("#checkbox_bonus1").attr("checked",true);
            $("span[name='point_title_val'],span[name='point_val']").html(items['point']['deduct_price_show']);
            $("#show_use_p1").show();
            items['cart_total'] = items['point']['total_show'];
            $("#point").removeClass("hide");
        }
        else
        {
            $("span[name='point_title_val']").html(items['point']['deduct_price_show']);
            $("#show_use_p1").hide();
            if(action == "cartlist")
            {
                $("#point").removeClass("hide");
            }
        }
    }
    else
    {
        $(".goldtxt").html('<span class="text12 colff0"></span>');
        $('#point').addClass("hide");
    }

    if(items['point']['deduct_price2'] > 0)
    {
        if(items['point']['use2'] == '1')
        {
            $("#checkbox_bonus2").attr("checked",true);
            $("span[name='point2_title_val'],span[name='point2_val']").html(items['point']['deduct_price2_show']);
            $("#show_use_p2").show();
            items['cart_total'] = items['point']['total_show'];
            $("#point2").removeClass("hide");
        }
        else
        {
            $("span[name='point2_title_val']").html(items['point']['deduct_price2_show']);
            $("#show_use_p2").hide();
            if(action == "cartlist")
            {
                $("#point2").removeClass("hide");
            }
        }
        $("#point2_total_val").html(items['point']['all_point_2']);
    }
    else
    {
        $('#point2').addClass("hide");
    }

    if(items['point']['use2'] == '1' && items['point']['total'] == 0)
    {
        $("#btn_14").removeClass("hide");
        $("#pay_1, #pay_2, #pay_3, #pay_4, #pay_5, #pay_6, #pay_7").addClass("hide");
    }
    $("#btn_block").removeClass("hide");

    if(items['fee']['status'] == 'Y')
    {
        $("#fee_list_name").html(items['fee']['name'] + fee_weight_div);
        $("#fee_list_val").html(commafy(items['fee']['price_show']));
        $('#fee_list').show();
    }
    else
    {
        $('#fee_list').hide();
    }

    $('#total_price, span.pricenum').text(commafy(items['cart_total']));
    $("#total_price_banner").removeClass("hide");

    if(items['fee']['fee_info'] != '' && items['fee']['fee_info'] != null)
    {
        $("#inside_fee_list_val").html(items['fee']['fee_info']);
        $('#inside_fee_list').show();
        fee_show_info = true;
        fee_1_pass = items['fee']['fee_1_pass'];
        fee_2_pass = items['fee']['fee_2_pass'];
    }
    else
    {
        $("#inside_fee_list_val").html('');
        $('#inside_fee_list').hide();
        fee_show_info = false;
        fee_1_pass = false;
        fee_2_pass = false;
    }


    if(items['btn_5'] == 'N')
    {
        $('#btn_5').addClass('submitdisp');
        $('#btn_5').attr('disabled' , true);
    }
    else
    {
        $('#btn_5').removeClass('submitdisp');
        $('#btn_5').attr('disabled' , false);
    }

    if(items['btn_6'] == 'N')
    {
        $('#btn_6').addClass('submitdisp');
        $('#btn_6').hide();
        $('#btn_6_class').addClass('btn_notxt');
        $('#cod_txt').html(items['cod_txt']);
    }
    else
    {
        $('#btn_6').removeClass('submitdisp');
        $('#btn_6').show();
        $('#btn_6_class').removeClass('btn_notxt');
        $('#cod_txt').html(items['cod_txt']);
    }

    if(items['btn_7'] == 'N')
    {
        $('#btn_7').addClass('submitdisp');
        $('#btn_7').hide();
        //$('#btn_7').attr('disabled' , true);
        $('#btn_7_class').addClass('btn_notxt');
        $('#cvs_txt').html(items['cvs_txt']);
    }
    else
    {
        $('#btn_7').removeClass('submitdisp');
        $('#btn_7').show();
        //$('#btn_7').attr('disabled' , false);
        $('#btn_7_class').removeClass('btn_notxt');
        $('#cvs_txt').html(items['cvs_txt']);
    }

    if(items['total_items'] == 0)
    {
        noitems = true;
    }
    else
    {
        noitems = false;
    }

    // $.unblockUI();
}

function cart_update(rowid)
{
    $.blockUI({
        message: '<img src="/c/img/busy.gif"> loading'
    });

    var qty = $('#'+rowid).val();
    $.ajax({
        // url: "/" + shop_country + "/cart_api/cart_update_by_ajax",
        url: "/" + ws_seq + "/cart_api/cart_update_by_ajax",
        type: "get",
        dataType: "jsonp",
        data: {
            rowid: rowid,
            qty: qty,
            callback: 'lists_process'
        },
        error: function() {

        }
    });
}

//function cart_update_process(data)
//{
//    $('#tr_fee').remove();
//    get_lists(shop_country);
//}

function cart_delete(rowid)
{
    $.blockUI({
        message: '<img src="/c/img/busy.gif"> loading'
    });

    $.ajax({
        // url: "/" + shop_country + "/cart_api/cart_delete_by_ajax",
        url: "/" + ws_seq + "/cart_api/cart_delete_by_ajax",
        type: "get",
        dataType: "jsonp",
        data: {
            rowid: rowid,
            callback: 'lists_process'
        },
        error: function() {

        }
    });
}

//function cart_delete_process(data)
//{
//    $('#tr_fee').remove();
//    get_lists(shop_country);
//}

function add_fee(name , price , sign)
{
    $('#fee_list').append('<li class="itemlist discount clearfix" id="tr_fee">' +
        '<div class="column1 col000 text13">' + '<span class="itemname">' + name + '</span> ' + '</div>' +
        '<div class="column2 col000 text13"></div>' +
        '<div class="column3 col000 text13"></div>' +
        '<div class="column4 col000 text13">'+ sign +' ' + price + '</div>' +
        '</li>');
}

function commafy(num)
{
    num = num + "";
    var re = /(-?\d+)(\d{3})/
    while(re.test(num))
    {
        num = num.replace(re,"$1,$2")
    }
    return num;
}

function myclose()
{
    TINY.box.hide();
}

function do_point()
{
    $.blockUI({
        message: '<img src="/c/img/busy.gif"> loading'
    });

    $.ajax({
        // url: "/" + shop_country + "/cart_api/do_point",
        url: "/" + ws_seq + "/cart_api/do_point",
        type: "get",
        dataType: "jsonp",
        data: {
            bonus1:$("#checkbox_bonus1").prop("checked"),
            bonus2:$("#checkbox_bonus2").prop("checked"),
            callback: 'do_point_process'
        },
        error: function() {

        }
    });
}

function do_point_process(data)
{
    var items = JSON.parse(JSON.stringify(data));

    if(items['deduct_price'] != '')
    {
        $("span[name='point_title_val'], span[name='point_val']").html(items['deduct_price_show']);
        if(items['use1'] == "1")
        {
            $("#show_use_p1").show();
        }
        else
        {
            $("#show_use_p1").hide();
        }
    }
    else
    {
        $("span[name='point_val']").html("");
        $('#show_use_p1').hide();
    }

    if(items['deduct_price2'] != '')
    {
        $("span[name='point2_title_val'], span[name='point2_val']").html(items['deduct_price2_show']);
        if(items['use2'] == "1")
        {
            $("#show_use_p2").show();
        }
        else
        {
            $("#show_use_p2").hide();
        }
    }
    else
    {
        $("span[name='point2_val']").html("");
        $('#show_use_p2').hide();
    }

    $('#total_price').html(items['total_show']);

    if(items['use2'] == '1' && items['total'] == 0)
    {
        $("#btn_14").removeClass("hide");
        $("#pay_1, #pay_2, #pay_3, #pay_4, #pay_5, #pay_6, #pay_7").addClass("hide");
    }
    else
    {
        $("#btn_14").addClass("hide");
        $("#pay_1, #pay_2, #pay_3, #pay_4, #pay_5, #pay_6, #pay_7").removeClass("hide");
    }
    $.unblockUI();
}


function number_format(number, decimals, dec_point, thousands_sep)
{
    number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
        var k = Math.pow(10, prec);
        return '' + Math.round(n * k) / k;
    };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3)
    {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec)
    {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}

/*
 * 所有AJAX執行結束，才關閉Loading message @2014-07-09 by Alan
 */
$(function() {
    $(document).ajaxStop(function(){
        $.unblockUI();
    });
});
