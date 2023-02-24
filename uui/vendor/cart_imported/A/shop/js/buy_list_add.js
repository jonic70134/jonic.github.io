function get_lists_prod()
{
    $.ajax({
        url: "/" + ws_seq + "/cart/get_buy_more_list",
        dataType: "json",
        success: function(res) {
            if((res['data'].length > 0 ))
            {
                lists_process_2(res['data']);
                $('#additional').show();
            }
            else
            {
                $('#additional').hide();
            }
        },
        error: function() {

        }
    });

}


function lists_process_2(data2)
{
    var items2 = JSON.parse(JSON.stringify(data2));
    data=new Array();
    var myOption = [];

    $.each(items2 , function(key , value){
        var SB_SEQ = items2[key]['SB_SEQ'];
        //var SM_SEQ = items2[key]['SM_SEQ'];
        var photo = items2[key]['photo'];
        var name = items2[key]['itname'];
        var alt_name = items2[key]['alt_name'];
        var saleqty = true;

        //var arrayspeclist = (action == 'cartlist')?'<select id="cartadd' + key + '" onChange="chang_img($(this).val());"></select>':''



        /*if(action == "cartlist")
        {
            for(var i = 0 ; i<items2[key]['spec'].length; i++)
            {
                myOption[key] = items2[key]['spec'][i]['color_size'];
                var SM_SEQ = items2[key]['spec'][i]['sm_seq'];
                var  min_saleqty = items2[key]['spec'][i]['min_saleqty'];

            }
        }*/

        if(action == "cartlist")
        {
            for(var i = 0 ; i<items2[key]['spec'].length; i++)
            {
                myOption[key] = items2[key]['spec'][i]['color_size'];
                var SM_SEQ = items2[key]['spec'][i]['sm_seq'];
                var  min_saleqty = items2[key]['spec'][i]['min_saleqty'];
                var col_size =items2[key]['spec'][i]['color_size'];
                var photo = items2[key]['spec'][i]['photo'];        //圖片
                if(col_size!='')
                {
                    var conn = ' - ';
                }
                else
                {
                    var conn = '';
                }
            }
            if( items2[key]['spec'].length > 1)
            {
                var arrayspeclist = '<select id="cartadd' + key + '" onChange="chang_img($(this).val());" style="max-width: 120px;"></select>';
                var alt_name = items2[key]['alt_name'];
            }
            else if(items2[key]['spec'].length <= 0 )
            {
                var saleqty = false ;
                var arrayspeclist ='';
                var name = items2[key]['itname'];
                var alt_name = items2[key]['alt_name'];
            }
            else
            {
                var arrayspeclist ='';
                var name = items2[key]['itname']+ conn +col_size;
                var alt_name = items2[key]['alt_name']+ conn + col_size;
                if(min_saleqty <=0)
                {
                    var saleqty = false ;

                }
            }

        }
        /*if(items2[key]['color']!=null)
        {
            name = name+'-'+items2[key]['color'];
            alt_name = alt_name+'-'+items2[key]['color'];
        }
        if(items2[key]['it_size']!=null)
        {
            name = name+'-'+items2[key]['it_size'];
            alt_name = alt_name+'-'+items2[key]['it_size'];
        }*/

        //alert(items2[key]['spec'][key]['color_size']);

        var sm_price = items2[key]['sm_price'];
        var it_mprice = items2[key]['it_mprice'];

        var link = items2[key]['link'];
        // var name =alt_name.substr(0,19);
        var name =alt_name;

        var url =  'set_sdata?source='+link+'&send_data=%7B%22s%22%3A%22'+SM_SEQ+'%22%2C%22t%22%3A%221%22%2C%22q%22%3A1%2C%22g%22%3A%5B%5D%2C%22p%22%3A%5B%5D%2C%22m%22%3A%5B%5D%2C%22c%22%3A%22%22%2C%22a%22%3A%22%22%2C%22cp%22%3A%221%22%7D&_=1397808468851&ws_seq='+ws_seq;
        var data3={
            "SM_TITLE":name,
            "ALT_TITLE":alt_name,
            'SM_PRICE': sm_price,
            'IT_MPRICE': it_mprice,
            'SM_PIC': photo,
            'LINK':link,
            'SET_SDATA' : url,
            'SM_SEQ' : SM_SEQ,
            'SALEQTY' : saleqty,
            'SPEC' : arrayspeclist,
        };
        data.push(data3);


    });

    var prod_lists = '';

    for(var i = 0 ; i <data.length ; i++)
    {
        /*if(data[i].SM_PRICE.length > 6)
        {
            data[i].IT_MPRICE = '';
        }
        else
        {
            if(parseFloat(data[i].IT_MPRICE) > parseFloat(data[i].SM_PRICE))
            {
                data[i].IT_MPRICE = '<span itemprop="highPrice" class="origin-price"><b itemprop="currency">$</b>'+ data[i].IT_MPRICE+ '</span>';
            }
            else
            {
                data[i].IT_MPRICE = '';
            }
        }*/
        if(data[i].IT_MPRICE.length < 9 && data[i].IT_MPRICE != '0')
        {
            data[i].IT_MPRICE = '<span itemprop="highPrice" class="origin-price"><b itemprop="currency">$</b>'+ data[i].IT_MPRICE+ '</span>';

        }
        else
        {
            data[i].IT_MPRICE = '';
        }

        
        if(data[i].SALEQTY == true )
        {
            data[i].SALEQTY = '<button id="cartadd_url_'+ i + '" class="btn-buy" onmouseover="eneter=false" onclick="go_setdata2(\''+data[i].SM_SEQ+'\',\'' + data[i].SET_SDATA +'\', \'cartadd'+ i + '\')">加入購物車</button><p id="button_msg' + i +'" class="sold-out" style="display:none">-售完</p>';
        }
        else
        {
            data[i].SALEQTY = '<p class="sold-out">-售完</p>';
        }


        prod_lists += '<dd itemscope itemtype="http://data-vocabulary.org/Product" class="clearfix">'+
        '<a itemprop="offerURL" href="javascript:void(0)" title="'+ data[i].ALT_TITLE + '"><img id="cartadd_photo_'+ i +'" class="lazy" itemprop="image" data-original="'+ data[i].SM_PIC +'" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" width="60" height="60" alt="' + data[i].ALT_TITLE + '"></a>'+
        '<div class="prod-content">'+
        '<a itemprop="offerURL" href="javascript:void(0)" title="'+ data[i].ALT_TITLE + '"><span itemprop="name" class="sale-name">'+ data[i].SM_TITLE + '</span></a>'+
        '<p class="price">'+
        '<span itemprop="lowPrice" class="sale-price"><b itemprop="currency">$</b>'+ data[i].SM_PRICE + '</span>'+ data[i].IT_MPRICE +
        '</p>'+
        data[i].SPEC +
        /*'<button id="cartadd_url_'+ i + '" class="btn-buy" onclick="go_setdata2(\''+data[i].SM_SEQ+'\',\'' + data[i].SET_SDATA +'\', \'cartadd'+ i + '\')">加入購物車</button>'*/
        data[i].SALEQTY +
        '</div>'+
        '</dd>';
    }
    $('#prod_list').html(prod_lists);

    $.each(myOption , function(key , value){

        myOption = [ ];

        if(items2[key]['spec'].length >1 )
        {
            for(var i = 0 ; i<items2[key]['spec'].length; i++)
            {
                optionval = '';
                myOption[0] = '請選擇規格';

                optionval = key + ',' + items2[key]['spec'][i]['sm_seq'] + ',' + items2[key]['spec'][i]['photo'] + ',' + items2[key]['spec'][i]['spec_link'] + ',' + items2[key]['spec'][i]['min_saleqty'];
                myOption[optionval] = items2[key]['spec'][i]['color_size'];
            }

            $('#cartadd'+key).addOption(myOption , false);
        }
        else
        {

        }
    })
}

function chang_img(value)
{
    //alert(value);
    val = value.split(',');
    var key = val[0];
    var sm_seq = val[1];
    var pic_path = val[2];
    var spec_link = val[3];
    var min_saleqty = val[4];

    var url =  'set_sdata?source='+spec_link+'&send_data=%7B%22s%22%3A%22'+sm_seq+'%22%2C%22t%22%3A%221%22%2C%22q%22%3A1%2C%22g%22%3A%5B%5D%2C%22p%22%3A%5B%5D%2C%22m%22%3A%5B%5D%2C%22c%22%3A%22%22%2C%22a%22%3A%22%22%2C%22cp%22%3A%221%22%7D&_=1397808468851&ws_seq='+ws_seq;
    var select = 'cartadd'+key ;

    $("#cartadd_photo_" + key).attr("src", pic_path);
	$("#cartadd_url_" + key).attr("onclick", "go_setdata2('" +  sm_seq +"','" + url+ "','" + select + "')");

    $("#cartadd_url_" + key).attr("value", key);

    if(min_saleqty <= 0)
    {
        $("#cartadd_url_" + key).hide();
        $("#button_msg"+key).show();
    }
    else
    {
        $("#button_msg"+key).hide();
        $("#cartadd_url_" + key).show();
    }
}

function go_setdata2(sm_seq,site_url,select_list)
{

    if(enter==true)
        {
            enter = false;
            return;
        }

    var select_value = $("#" + select_list).find(":selected").val();
    if (typeof(select_value)!='undefined')
    {
        if(select_value == '0')
        {
            alert('請選擇規格');
            return;
        }
    }

    $.ajax({
        url: "/" + ws_seq + "/cart_api/" + site_url,
        type:"GET",
        dataType: "jsonp",
        success: function(msg) {
            var items = JSON.parse(JSON.stringify(msg));
            if(!items.status)
            {
                if(items.doc=='無主商品，無法加入購物車加購品')
                {
                    alert('無主商品，無法加入購物車加購品!');
                }
                else if(items.doc !='OK')
                {
                    alert('您的手慢了,最後一件商品剛\n被搶走,請快搶購其他商品吧!');
                }
            }
            get_lists(bccode);
        } ,
        error: function() {

        }
    });


}
