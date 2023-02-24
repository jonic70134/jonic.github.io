<div class="site-topbar">
    <div class="container">
        <ul class="nav-other">
            <li><a href="#">廠商後台登入</a></li>
            <li><a href="#">uitox徵才</a></li>
        </ul>    
        <nav class="nav-user" style="visibility:visible;">
            <ul>
                <li><span class="account">user@ui..</span><a href="#">登出</a></li>
                <li><a href="#">登入</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">查訂單</a></li>
                <li><a href="#">帳戶</a></li>
                <li class="asap-app">
                    <i class="fa fa-mobile"></i><span>閃購APP</span>
                    <div class="asap-top-app">
                         <img src="../c/img/sth_asap/asap-top-app.gif" alt="閃購app"/>
                    </div>
                </li>
                <li class="cart-btn-top">
                    <span class="count">1</span>
                    <a class="icon-cart">購物車</a>
                    <div class="cart-banner">(滿<span class="focus">$490</span>免運費)</div>
                    <?php include "../module_component/_pc_site_cart.php";?>
                </li>
            </ul>
        </nav>
    </div>
</div>
<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="index.php" class="logo" itemscope itemtype="http://schema.org/LocalBusiness">
            <img src="<?php echo $logo['images'];?>" alt="">
            <h1 itemprop="name">ASAP閃電購物網</h1>
        </a>
        <!-- a href="#" class="button function-btn2"><i class="fa fa-chevron-circle-right"></i>回 ASAP</a -->
        <!--a href="#" class="button function-btn"><i class="fa fa-chevron-circle-right"></i>賣東西</a-->
        <!-- a href="#" class="button function-btn"><i class="fa fa-chevron-circle-right"></i>廠商登入</a -->
        <a href="#" class="get" title="廣告圖">
            <img src="../c/img/sth_asap/outside_free_img.png" alt="廣告圖">
        </a>

        <?php include "../module_component/_pc_site_search_001.php";?>
        <div class="cart-btn">
            <!-- <span class="count">99</span>
            <a class="icon-cart">購物車</a>
            <div class="cart-banner">(滿<span class="focus">$490</span>免運費)</div>
            <?php include "../module_component/_pc_site_cart.php";?> -->
            <!-- img src="../c/img/sth_asap/asap_app_header.gif" alt="閃購app"/ -->
        </div>
        <div class="country-box">
            <a href="#" class="prev"></a>
            <a href="#" class="next"></a>
            <ul class="loca-country">
                <li class="fg-jp"><a href="#" title="日本"><img src="../c/img/sth_asap/flag/flag_jp_40x27.png" alt="日本"><br>日本</a></li>
                <li class="fg-hk"><a href="#" title="香港"><img src="../c/img/sth_asap/flag/flag_hk_40x27.png" alt="香港"><br>香港</a></li>
                <li class="fg-mys"><a href="#" title="馬來西亞"><img src="../c/img/sth_asap/flag/flag_my_40x27.png" alt="馬來西亞"><br>馬來西亞</a></li>
                <li class="fg-idn"><a href="#" title="印尼"><img src="../c/img/sth_asap/flag/flag_id_40x27.png" alt="印尼"><br>印尼</a></li>
                <li class="fg-vnm"><a href="#" title="越南"><img src="../c/img/sth_asap/flag/flag_vn_40x27.png" alt="越南"><br>越南</a></li>
                <li class="fg-nld"><a href="#" title="荷蘭"><img src="../c/img/sth_asap/flag/flag_nl_40x27.png" alt="荷蘭"><br>荷蘭</a></li>
            </ul>
        </div>
        <!-- ul class="site-news">
            <li>北北桃5h<br>全台24h到貨<a href="#">(說明)</a></li>
        </ul -->
    </div>
</header>