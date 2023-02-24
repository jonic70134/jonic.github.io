<div class="site-topbar">
    <div class="container">
        <ul class="nav-other">
            <li><a href="#">廠商後台登入</a></li>
            <li><a href="#">uitox徵才</a></li>
            <li><a href="#">uitox Group</a></li>
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
        <a href="#" class="button function-btn2"><i class="fa fa-chevron-circle-right"></i>回 ASAP</a>
        <!--a href="#" class="button function-btn"><i class="fa fa-chevron-circle-right"></i>賣東西</a-->
        <a href="#" class="button function-btn"><i class="fa fa-chevron-circle-right"></i>廠商登入</a>
        <!--a href="#" class="get" title="廣告圖">
            <img src="../c/img/sth_asap/img_like.png" alt="廣告圖">
        </a-->

        <?php include "../module_component/_pc_site_search.php";?>
        <div class="cart-btn">
            <!-- <span class="count">99</span>
            <a class="icon-cart">購物車</a>
            <div class="cart-banner">(滿<span class="focus">$490</span>免運費)</div>
            <?php include "../module_component/_pc_site_cart.php";?> -->
            <img src="../c/img/sth_asap/asap_app_header.gif" alt="閃購app"/>
        </div>
        <ul class="site-news">
            <li>北北桃5h<br>全台24h到貨<a href="#">(說明)</a></li>
        </ul>
    </div>
</header>