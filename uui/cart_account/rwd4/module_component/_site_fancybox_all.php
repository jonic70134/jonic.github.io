<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
?>

<?php //聯繫客服?>
<div id="fancybox-order-contact" class="f-order fancybox-order-contact">
<form>
    <h1 class="title">聯繫客服</h1>
    <div class="block">
        <h3>客服上班時間：每日09:00～18:00</h3>
        <div class="line">
            <div class="key">您的 E-MAIL：</div>
            <input type="email" placeholder="您的 Email" value="">
            <p>請填真實 Email，客服信將回覆於該信箱 (建議不要用 yahoo 信箱以免漏信)</p>
        </div>
        <div class="line">
            <div class="key">請描述您的問題：</div>
            <textarea name="Text1" rows="5" placeholder="請描述您的問題"></textarea>
        </div>        

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-contact-msg" class="button large light-blue fancybox fancybox.ajax contact-submit">送出</a>
        </div>
    </div>
</form>
</div>

<?php //聯繫客服 提醒?>
<div id="fancybox-order-contact-msg" class="f-order fancybox-order-contact-msg">
    <div class="block">
        <p>
            已收到您的問題，將儘快在上班時間回覆您<br>
            客服上班時間：每日09:00～18:00
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>

<?php //發票?>
<div id="fancybox-order-invoice" class="f-order fancybox-order-invoice">
    <h1 class="title">發票</h1>
    <div class="block">
        <h3>紙本發票將隨貨寄送給您</h3>
        <div class="line">
            <input type="button" name="" value="列印本頁" class="button large light-blue">
            <p class="invoice-tip">( 發票電子檔為副本僅供參考，不可直接兌獎，若中獎會主動掛號寄出 )</p>
        </div>
        <div class="invoice-content">
            <img src="http://placehold.it/242x670" alt="">
        </div>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //廠商連絡資訊?>
<div id="fancybox-order-vendor" class="f-order fancybox-order-vendor">
    <h1 class="title">廠商連絡資訊</h1>
    <div class="block">
        <h3>PQI 勁永 U822V 16G USB3.0 旋轉隨身碟 - 紫羅蘭色PQI</h3>
        <div class="line">
            <dl>
                <dt>廠商名稱：</dt>
                <dd>威斯麥國際有限公司威斯麥國際有限公威斯麥國際有限公</dd>
            </dl>
            <dl>
                <dt>聯絡電話：</dt>
                <dd>(02)2763-4812</dd>
            </dl>
            <dl>
                <dt>Email：</dt>
                <dd>weimy@pqi.com.tw</dd>
            </dl>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //出貨進度?>
<div id="fancybox-order-shipping" class="f-order fancybox-order-shipping">
    <h1 class="title">出貨進度</h1>
    <div class="block">        
        <div class="line">
            <h2>宅配單號：uitox 車隊 100079812</h2>            
            <ul class="order-item">
                <li class="s-sn">01</li>
                <li class="s-name"><h3>PQI 勁永 U822V 16G USB3.0 旋轉隨身碟 - 紫羅蘭色轉隨身轉隨身轉隨身轉隨身</h3></li>
                <li class="s-quantity">99件</li>
            </ul>
            <div class="order-state">
                <ul class="header">
                    <li class="o-s-time">時間</li>
                    <li class="o-s-place">地點</li>
                    <li class="o-s-state">狀態</li>
                </ul>
                <ul>
                    <li class="o-s-time"><span>11/05</span><span>14:12:50</span></li>
                    <li class="o-s-place">uitox 倉庫</li>
                    <li class="o-s-state">收到訂單</li>
                </ul>
                <ul>
                    <li class="o-s-time"><span>11/05</span><span>14:12:50</span></li>
                    <li class="o-s-place">uitox 倉庫</li>
                    <li class="o-s-state">揀貨</li>
                </ul>
            </div>
                
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //更改收貨地址?>
<div id="fancybox-order-address-change" class="f-order fancybox-order-address-change">
<form>
    <h1 class="title">更改收貨地址</h1>
    <div class="block">
        <div class="line">
            <dl>
                <dt><label for="input_recipient">收貨人</label></dt>
                <dd><input type="text" placeholder="收貨人姓名" id="input_recipient" value=""></dd>
            </dl>
            <dl>
                <dt><label for="input_recipient_mobile">手機</label></dt>
                <dd><input type="text" placeholder="手機號碼" id="input_recipient_mobile" value=""></dd>
            </dl>
            <dl>
                <dt><label for="input_recipient_phone">市話</label></dt>
                <dd><input type="text" placeholder="市話號碼" id="input_recipient_phone" value=""></dd>
            </dl>
            <dl class="o-address">
                <dt>收貨地址</dt>
                <dd>
                    <select name="" id="">
                        <option value="">台北市</option>
                        <option value="">新北市</option>
                        <option value="">桃園縣</option>
                        <option value="">新竹市</option>
                    </select>
                </dd>
                <dd>
                    <select name="" id="">
                        <option value="">110 信義區</option>
                        <option value="">114 內湖區</option>
                        <option value="">106 大安區</option>
                        <option value="">111 士林區</option>
                    </select>
                </dd>
                <dd class='o-address-detail'>
                    <input type="text" placeholder="收貨地址" value="">                    
                </dd>
            </dl>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">確認</a>
        </div>
    </div>
</form>
</div>

<?php //活動說明?>
<div id="fancybox-order-event" class="f-order fancybox-order-event">
    <h1 class="title">活動說明</h1>
    <div class="block">
        <h3>XXXX開館慶 ( 指定商品每滿NT$500送購物金10點 )</h3>
        <div class="line">
            <p>
                每單可累計贈送，每個帳號不限次數，活動商品隨時更新，以下單時為準<br>                       
                購物金贈送說明：贈送點數將於2015/03/03給點，商品退貨未達門檻將取消給點。<br>                           
                活動時間：2015/01/14 11:00 ~ 2015/01/14 21:00
            </p>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //ATM 轉帳帳號?>
<div id="fancybox-order-atm" class="f-order fancybox-order-atm">
    <h1 class="title">ATM 轉帳帳號</h1>
    <div class="block">
        <div class="line">
            <dl>
                <dt>銀行：</dt>
                <dd>國泰世華 013</dd>
            </dl>
            <dl>
                <dt>帳號：</dt>
                <dd>2911150218883640</dd>
            </dl>
            <dl>
                <dt>金額：</dt>
                <dd>NT$1,590</dd>
            </dl>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //貨到有缺/損壞/送錯?>
<div id="fancybox-order-product-problem" class="f-order fancybox-order-product-problem">
    <h1 class="title">貨到有缺/損壞/送錯</h1>
    <div class="block">
        <p>
            若商品仍在 7 天猶豫期內您可以直接退貨           
        </p>
        <a href="javascript:void(0);" class="button">按此退貨</a>
        <a href="../module_component/_site_fancybox_all.php #fancybox-order-contact" class="fancybox fancybox.ajax button">聯絡客服</a>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
            
        </div>
    </div>
</div>

<?php //維修保固資訊?>
<div id="fancybox-order-warranty" class="f-order fancybox-order-warranty">
<form>
    <h1 class="title">維修保固資訊</h1>
    <div class="block">        
        <div class="line">
            <h3>請選擇要查詢的商品：</h3>           
            <ul class="order-state header">
                <li class="radio"></li>
                <li class="sn"></li>
                <li class="order-name">商品名稱</li>
                <li class="order-price">單價</li>
            </ul>
            <label>
                <ul class="order-state">
                    <li class="radio"><input type="radio" name="order-items" value=""></li>
                    <li class="sn">01</li>
                    <li class="order-name">UNI STAR USB3.0 2A公-Micro10P Y型高速傳輸線 50CM(US-3MY0.5)</li>
                    <li class="order-price">NT$27,900,000</li>
                </ul>
            </label>
            <label>
                <ul class="order-state">
                    <li class="radio"><input type="radio" name="order-items" value=""></li>
                    <li class="sn">02</li>
                    <li class="order-name">CLINIQUE 倩碧 超水感新一代水磁場保濕凝膠</li>
                    <li class="order-price">NT$719</li>
                </ul>
            </label>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-warranty-detail" class="fancybox fancybox.ajax button large light-blue contact-submit">送出</a>   
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-warranty-msg" class="fancybox fancybox.ajax button large light-blue contact-submit">送出</a>    
        </div>
    </div>
</form>
</div>

<?php //維修保固資訊 訊息?>
<div id="fancybox-order-warranty-msg" class="f-order fancybox-order-warranty-msg">
    <h1 class="title">維修保固資訊</h1>
    <div class="block">
        <p>
            本商品無提供維修保固，<br>
若商品仍在 7 天猶豫期內您可以直接退貨           
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //維修保固資訊 細節?>
<div id="fancybox-order-warranty-detail" class="f-order fancybox-order-warranty-detail">
    <h1 class="title">維修保固資訊</h1>
    <div class="block">
        <h3>UNI STAR USB3.0 2A公-Micro10P Y型高速傳輸線 50CM(US-3MY0.5)</h3>
        <div class="line">
            <dl>
                <dt>保固期：</dt>
                <dd>1 年</dd>
            </dl>
            <dl>
                <dt>網址：</dt>
                <dd>www.asap.com.tw</dd>
            </dl>
            <dl>
                <dt>聯絡電話：</dt>
                <dd>(02)2763-4812</dd>
            </dl>
            <dl>
                <dt>地址：</dt>
                <dd>11161 台北市士林區承德路四段220號3樓(維修部)</dd>
            </dl>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>            
        </div>
    </div>
</div>

<?php //發票問題?>
<div id="fancybox-order-invoice-q" class="f-order fancybox-order-invoice-q">
<form>
    <h1 class="title">發票問題</h1>
    <div class="block">        
        <div class="line">
            <h3>請選擇您的問題：</h3>           

            <ul class="order-state">
                <li class="radio"><input type="radio" id="invoice_q1" name="invoice-state" value=""></li>
                <li class="invoice-q"><label for="invoice_q1">沒收到發票</label></li>
            </ul>
            <ul class="order-state">
                <li class="radio"><input type="radio" id="invoice_q2" name="invoice-state" value=""></li>
                <li class="invoice-q"><label for="invoice_q2">更改發票收件地址</label></li>
            </ul>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-invoice-msg" class="fancybox fancybox.ajax button large light-blue contact-submit">下一步</a>       
        </div>
    </div>
</form>
</div>

<?php //發票問題 訊息?>
<div id="fancybox-order-invoice-msg" class="f-order fancybox-order-invoice-msg">
    <h1 class="title">發票問題</h1>
    <div class="block">
        <p>
            依據「消費通路開立電子發票試辦作業要點」，您購買時無索取，
事後不再提供索取發票，若發票中獎會主動通知您。                
        </p>
        <p class="tip">( 已歸戶發票，若中獎電子發票平台會通知您 )</p>
        <a href="../module_component/_site_fancybox_all.php #fancybox-order-contact" class="fancybox fancybox.ajax button contact">聯絡客服</a>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
            
        </div>
    </div>
</div>

<?php //輸入退款帳號?>
<div id="fancybox-refund-account" class="f-order fancybox-refund-account">
<form>
    <h1 class="title">輸入退款帳號</h1>
    <div class="block">
        <div class="line">
            <dl class="">
                <dt>銀行類型</dt>
                <dd>
                    <select name="" id="">
                        <option value="">銀行</option>
                        <option value="">銀行</option>
                        <option value="">銀行</option>
                        <option value="">銀行</option>
                    </select>
                </dd>                
            </dl>
            <dl class="r-bank-name">
                <dt>銀行名稱</dt>
                <dd>
                    <select name="" id="">
                        <option value="">銀行名稱</option>
                        <option value="">銀行名稱</option>
                        <option value="">銀行名稱</option>
                        <option value="">銀行名稱稱</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="input_account">帳號</label></dt>
                <dd><input type="text" placeholder="銀行帳號" value="" id="input_account"></dd>
            </dl>
            <dl>
                <dt><label for="input_account_name">戶名</label></dt>
                <dd><input type="text" placeholder="開戶戶名" value="" id="input_account_name"></dd>
            </dl>            
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-success" class="fancybox fancybox.ajax button large light-blue contact-submit">送出</a>
        </div>
    </div>
</form>
</div>

<?php //輸入成功?>
<div id="fancybox-order-success" class="f-order fancybox-order-success">
    <div class="block">
        <p>
            輸入成功！
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>

<?php //刪除?>
<div id="fancybox-order-delete" class="f-order fancybox-order-delete">
    <div class="block">
        <p>
            請再次確認是否要刪除
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">確認</a>
        </div>
    </div>
</div>

<?php //新增地址?>
<div id="fancybox-address-add" class="f-order fancybox-address-add">
<form>
    <h1 class="title">新增收貨資訊</h1>
    <div class="block">
        <div id="add_address" class="md-add-address md-dialog">
            <dl class="md-form md-local-address is-show">
                <dd>
                    <label for="input_recipient" class="label-title">收貨人姓名</label>
                    <input type="text" tabindex="51" id="input_recipient" size="20" placeholder="收貨人姓名">
                </dd>
                <dd>
                    <label class="label-title">收貨地址</label>
                    <select tabindex="52" name="" id="" class="width-half"><option value="">請選擇縣市</option></select>
                    <select tabindex="53" name="" id="" class="width-half"><option value="">請選擇鄉鎮市區</option></select>
                </dd>
                <dd>
                    <label for="input_shipping_address1" class="label-title"></label>
                    <input type="text" tabindex="54" id="input_shipping_address1" class="input-address" size="50" placeholder="收貨地址">
                </dd>       
                <dd>
                    <label for="input_recipient_mobile" class="label-title">手機</label>
                    <input type="tel" tabindex="55" id="input_recipient_mobile" size="30" placeholder="收貨人手機">
                </dd>
                <dd>
                    <label for="input_recipient_phone" class="label-title">市話 (可不填)</label>
                    <input type="tel" tabindex="56" id="input_recipient_phone" class="not-required" size="30" placeholder="收貨人市話 (可不填)">
                </dd>
            </dl>

            <dl class="md-form md-foreign-address is-show">
                <dd>
                    <label for="input_recipient" class="label-title">Full name</label>
                    <input type="text" tabindex="51" id="input_recipient" size="20" placeholder="Full name">
                </dd>
                <dd>
                    <label for="input_shipping_address1" class="label-title">Address line 1</label>
                    <input type="text" tabindex="52" id="input_shipping_address1" class="input-address" size="70" placeholder="Street address, P.O. box, company name, c/o">
                </dd>
                <dd>
                    <label for="input_shipping_address2" class="label-title">Address line 2</label>
                    <input type="text" tabindex="53" id="input_shipping_address2" class="input-address" size="70" placeholder="Apartment, suite, unit, building, floor, etc.">
                </dd>
                <dd>
                    <label for="input_shipping_address3" class="label-title">Address line 3</label>
                    <input type="text" tabindex="54" id="input_shipping_address3" class="input-address" size="70" placeholder="Address line 3">
                </dd>
                <dd>
                    <label class="label-title">State / counties / town</label>
                    <select tabindex="55" name="" id="" class="width-half"><option value="">Select state</option></select>
                    <select tabindex="56" name="" id="" class="width-half"><option value="">Select counties</option></select>
                    <select tabindex="57" name="" id="" class="width-half"><option value="">Select town</option></select>
                </dd>
                <dd>
                    <label class="label-title">Country</label>
                    <select name="" id="" tabindex="58"><option value="">Select country</option></select>
                </dd>
                <dd>
                    <label for="input_zip" class="label-title">ZIP code</label>
                    <input type="number" tabindex="59" id="input_zip" class="input-zip width-half" size="10" min="0" inputmode="numeric" pattern="[0-9]*" placeholder="ZIP code">
                </dd>
                <dd>
                    <label for="input_recipient_phone" class="label-title">Phone Number</label>
                    <input type="tel" tabindex="60" id="input_recipient_phone" class="input-intl-phone" size="30" placeholder="Phone Number">
                </dd>
                <dd>
                    <label for="input_recipient_mobile" class="label-title">Mobile phone (optional)</label>
                    <input type="tel" tabindex="61" id="input_recipient_mobile" class="input-intl-phone not-required" size="30" placeholder="Mobile phone (optional)">
                </dd>
            </dl>
        </div>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">確認</a>
        </div>
    </div>
</form>
</div>

<?php //修改收貨地址?>
<div id="fancybox-address-edit" class="f-order fancybox-address-edit">
<form>
    <h1 class="title">編輯收貨資訊</h1>
    <div class="block">
        <div id="edit_local_address" class="md-add-address md-dialog">
            <dl class="md-form md-local-address is-show">
                <dd>
                    <label for="input_recipient" class="label-title">收貨人姓名</label>
                    <input type="text" tabindex="51" id="input_recipient" size="20" placeholder="收貨人姓名">
                </dd>
                <dd>
                    <label class="label-title">收貨地址</label>
                    <select tabindex="52" name="" id="" class="width-half"><option value="">請選擇縣市</option></select>
                    <select tabindex="53" name="" id="" class="width-half"><option value="">請選擇鄉鎮市區</option></select>
                </dd>
                <dd>
                    <label for="input_shipping_address1" class="label-title"></label>
                    <input type="text" tabindex="54" id="input_shipping_address1" class="input-address" size="50" placeholder="收貨地址">
                </dd>       
                <dd>
                    <label for="input_recipient_mobile" class="label-title">手機</label>
                    <input type="tel" tabindex="55" id="input_recipient_mobile" size="30" placeholder="收貨人手機">
                </dd>
                <dd>
                    <label for="input_recipient_phone" class="label-title">市話 (可不填)</label>
                    <input type="tel" tabindex="56" id="input_recipient_phone" class="not-required" size="30" placeholder="收貨人市話 (可不填)">
                </dd>
            </dl>

            <dl class="md-form md-foreign-address is-show">
                <dd>
                    <label for="input_recipient" class="label-title">Full name</label>
                    <input type="text" tabindex="51" id="input_recipient" size="20" placeholder="Full name">
                </dd>
                <dd>
                    <label for="input_shipping_address1" class="label-title">Address line 1</label>
                    <input type="text" tabindex="52" id="input_shipping_address1" class="input-address" size="70" placeholder="Street address, P.O. box, company name, c/o">
                </dd>
                <dd>
                    <label for="input_shipping_address2" class="label-title">Address line 2</label>
                    <input type="text" tabindex="53" id="input_shipping_address2" class="input-address" size="70" placeholder="Apartment, suite, unit, building, floor, etc.">
                </dd>
                <dd>
                    <label for="input_shipping_address3" class="label-title">Address line 3</label>
                    <input type="text" tabindex="54" id="input_shipping_address3" class="input-address" size="70" placeholder="Address line 3">
                </dd>
                <dd>
                    <label class="label-title">State / counties / town</label>
                    <select tabindex="55" name="" id="" class="width-half"><option value="">Select state</option></select>
                    <select tabindex="56" name="" id="" class="width-half"><option value="">Select counties</option></select>
                    <select tabindex="57" name="" id="" class="width-half"><option value="">Select town</option></select>
                </dd>
                <dd>
                    <label class="label-title">Country</label>
                    <select name="" id="" tabindex="58"><option value="">Select country</option></select>
                </dd>
                <dd>
                    <label for="input_zip" class="label-title">ZIP code</label>
                    <input type="number" tabindex="59" id="input_zip" class="input-zip width-half" size="10" min="0" inputmode="numeric" pattern="[0-9]*" placeholder="ZIP code">
                </dd>
                <dd>
                    <label for="input_recipient_phone" class="label-title">Phone Number</label>
                    <input type="tel" tabindex="60" id="input_recipient_phone" class="input-intl-phone" size="30" placeholder="Phone Number">
                </dd>
                <dd>
                    <label for="input_recipient_mobile" class="label-title">Mobile phone (optional)</label>
                    <input type="tel" tabindex="61" id="input_recipient_mobile" class="input-intl-phone not-required" size="30" placeholder="Mobile phone (optional)">
                </dd>
            </dl>
        </div>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">確認</a>
        </div>
    </div>
</form>
</div>

<?php //新增取貨門市?>
<div id="fancybox-cvs-add" class="f-order fancybox-cvs-add">
<form>
    <h1 class="title">新增取貨資訊</h1>
    <div class="block">
        <div id="add_cvs" class="md-add-cvs md-dialog">
            <dl class="md-form">
                <dd>
                    <label for="input_recipient" class="label-title">取貨人姓名</label>
                    <input type="text" tabindex="3" id="input_recipient" size="20" placeholder="取貨人姓名">
                </dd>
                <dd>
                    <label for="input_recipient_mobile" class="label-title">取貨人手機</label>
                    <input type="tel" tabindex="4" id="input_recipient_mobile" size="20" placeholder="取貨人手機">
                </dd>
            </dl>
        </div>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">選擇門市</a>
        </div>
    </div>
</form>
</div>

<?php //修改取貨門市?>
<div id="fancybox-cvs-edit" class="f-order fancybox-cvs-edit">
<form>
    <h1 class="title">編輯取貨資訊</h1>
    <div class="block">
        <div id="edit_cvs" class="md-add-cvs md-dialog">
            <dl class="md-form">
                <dd>
                    <label for="input_recipient" class="label-title">取貨人姓名</label>
                    <input type="text" tabindex="5" id="input_recipient" size="20" placeholder="取貨人姓名">
                </dd>
                <dd>
                    <label for="input_recipient_mobile" class="label-title">取貨人手機</label>
                    <input type="tel" tabindex="6" id="input_recipient_mobile" size="20" placeholder="取貨人手機">
                </dd>
                <dd>
                    <label class="label-title is-show">取貨門市</label><span class="cvs-info">宏禧門市 (地址：新北市中和區景平路429號1樓)</span>
                </dd>
                <dd>
                    <label class="label-title"></label>
                    <button class="button gray">重選門市</button>
                </dd>
            </dl>
        </div>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">確認</a>
        </div>
    </div>
</form>
</div>

<?php //兌換購物金?>
<div id="fancybox-exchange-bonus" class="f-order fancybox-exchange-bonus">
<form>
    <h1 class="title">兌換購物金</h1>
    <div class="block">
        <div class="line">            
            <dl>
                <dt><label for="events_sn">輸入活動序號</label></dt>
                <dd><input type="text" placeholder="活動序號" value="" id="events_sn"></dd>
            </dl>
            <dl>
                <dt><label for="security_code">請輸入右方數字</label></dt>
                <dd><input type="text" placeholder="驗證碼" value="" id="security_code"></dd>
                <dd><img src="../c/img/frame/showrandimg.png" height="20" width="60" class="r-img"></dd>
                <dd><a href="javascript:void(0);" class="replay">重新產生</a></dd>
            </dl>            
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">兌換購物金</a>
        </div>
    </div>
</form>
</div>

<?php //確認付款?>
<div id="fancybox-confirm-payment" class="f-order fancybox-confirm-payment">
<form>
    <h1 class="title">Konfirmasi Pembayaran</h1>
    <div class="block">
        <div class="line">                       
            <dl>
                <dt><label for="input_account">Nama Pemilik Rekening</label></dt>
                <dd><input type="text" placeholder="Nama Pemilik Rekening" value="" id="input_account"></dd>
            </dl>
            <dl>
                <dt>Nomor Rekening Pemilik</dt>
                <dd>
                    <select name="" id="">
                        <option value="">Silahkan pilih</option>
                    </select>
                    <select name="" id="">
                        <option value="">Silahkan pilih</option>
                        <option value="">Silahkan pilihSilahkan pilihSilahkan pilihSilahkan pilihSilahkan pilih</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Bank</dt>
                <dd>
                    <select name="" id="">
                        <option value="">Silahkan pilih</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt>Pembayaran Dilakukan Ke Rekening</dt>
                <dd>
                    <select name="" id="">
                        <option value="">Silahkan pilih</option>
                    </select>
                </dd>
            </dl>
            <dl>
                <dt><label for="input_pay_way">Metode pembayaran</label></dt>
                <dd><input type="text" placeholder="Metode pembayaran" value="" id="input_pay_way"></dd>
            </dl>
            <dl>
                <dt><label for="input_pay_amount">Total Transfer</label></dt>
                <dd><input type="text" placeholder="Total Transfer" value="" id="input_pay_amount"></dd>
            </dl>
            <dl class="">
                <dt>Tanggal Pembayaran</dt>
                <dd>
                    <select name="" id="">
                        <option value="">2015</option>
                    </select>
                    <select name="" id="">
                        <option value="">06</option>
                    </select>
                    <select name="" id="">
                        <option value="">05</option>
                    </select>
                </dd>                
            </dl>
            <dl>
                <dt><label for="input_remark">Berita/Ketegrangan</label></dt>
                <dd><input type="text" placeholder="Berita/Ketegrangan" value="" id="input_remark"></dd>
            </dl>          
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">Tutup</a>
            <a href="javascript:void(0);" class="button large light-blue contact-submit">Kirim</a>
        </div>
    </div>
</form>
</div>

<?php //確認付款 項目已填狀態?>
<div id="fancybox-confirm-payment-finish" class="f-order fancybox-confirm-payment-finish">
<form>
    <h1 class="title">Konfirmasi Pembayaran</h1>
    <div class="block">
        <div class="line">                       
            <dl>
                <dt><label for="input_account">Nama Pemilik Rekening</label></dt>
                <dd>HELENH</dd>
            </dl>
            <dl>
                <dt>Nomor Rekening Pemilik</dt>
                <dd>12354</dd>
            </dl>
            <dl>
                <dt>Bank</dt>
                <dd>Bank Central Asiaank Central Asiaank Ce</dd>
            </dl>
            <dl>
                <dt>Pembayaran Dilakukan Ke Rekening</dt>
                <dd>Bank BNI</dd>
            </dl>
            <dl>
                <dt><label for="input_pay_way">Metode pembayaran</label></dt>
                <dd>Counter Bank</dd>
            </dl>
            <dl>
                <dt><label for="input_pay_amount">Total Transfer</label></dt>
                <dd>4564</dd>
            </dl>
            <dl class="">
                <dt>Tanggal Pembayaran</dt>
                <dd>2015-6-3</dd>                
            </dl>
            <dl>
                <dt><label for="input_remark">Berita/Ketegrangan</label></dt>
                <dd>AS</dd>
            </dl>          
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">Tutup</a>

        </div>
    </div>
</form>
</div>

<?php //填中獎發票地址?>
<div id="fancybox-invoice-winning" class="f-order fancybox-invoice-winning">
<form>
    <h1 class="title">統一發票中獎</h1>    
    <div class="block">
        <div class="line">
            <h3>恭喜您，統一發票中獎！</h3>
            <p class="tip">請輸入以下資訊，我們將會把發票寄送給您！</p>
            <dl>
                <dt><label for="input_recipient">收件人</label></dt>
                <dd><input type="text" placeholder="收件人姓名" id="input_recipient" value=""></dd>
            </dl>
            <dl class="o-address">
                <dt>收件地址</dt>
                <dd>
                    <select name="" id="">
                        <option value="">台北市</option>
                        <option value="">新北市</option>
                        <option value="">桃園縣</option>
                        <option value="">新竹市</option>
                    </select>
                </dd>
                <dd>
                    <select name="" id="">
                        <option value="">110 信義區</option>
                        <option value="">114 內湖區</option>
                        <option value="">106 大安區</option>
                        <option value="">111 士林區</option>
                    </select>
                </dd>
                <dd class='o-address-detail'>
                    <input type="text" placeholder="收件地址" value="">                    
                </dd>
            </dl>
        </div>

        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">取消</a>
            <a href="../module_component/_site_fancybox_all.php #fancybox-order-success" class="fancybox fancybox.ajax button large light-blue contact-submit">送出</a>
        </div>
    </div>
</form>
</div>

<!-- 退訂狀態 -->

<?php //確認退訂?>
<div id="fancybox-refund-confirm" class="f-order fancybox-refund-confirm">
    <div class="block">
        <p>
            已收到您的退訂，我們會儘快處理退訂相關事宜，也歡迎您再次上網選購其他商品。
        </p>
        <div class="actions">
            <a href="order_detail.php" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>
<?php //超取?>
<div id="fancybox-refund-cvs" class="f-order fancybox-refund-cvs">
    <div class="block">
        <p>
            您的商品已進入出貨程序，<br>                             
如您確認無需商品，請不必前往超商取件，<br>待商品抵超商擺放七天後將自動退回。<br>                           
若您仍收到門市取貨通知請直接忽略毋須取貨。<br>
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>
<?php //已過鑑賞期?>
<div id="fancybox-refund-expired" class="f-order fancybox-refund-expired">
    <div class="block">
        <p>
            訂單已過鑑賞期<br>           
如您商品分批收到且有退貨需求請<br>
<a href="../module_component/_site_fancybox_all.php #fancybox-order-contact" class="fancybox fancybox.ajax">聯絡客服</a>                

        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>
<?php //已全數退訂?>
<div id="fancybox-refund-all" class="f-order fancybox-refund-all">
    <div class="block">
        <p>
           此筆訂單商品已經全數退訂。<br>                             
<a href="order_refund_state.php" target="_blank">請按此查看退訂進度</a>
        </p>
        <div class="actions">
            <a title="Close" href="javascript:void(0);" onclick="$.fancybox.close()" class="button large gray btn-close">關閉</a>
        </div>
    </div>
</div>