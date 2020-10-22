<div class="site-topbar">
    <div class="container">
        <img src="../c/img/sth_asap/sample/top1440x100.jpg" alt="">
    </div>
    <div class="container">
        <ul class="nav-other">
            <li class="icon-block"><a href="#">公司介紹</a></li>
            <li class="icon-block"><a href="#">購物流程</a></li>
            <li class="icon-block"><a href="#">常見問題</a></li>
            <li class="icon-block"><a href="#">線上客服</a></li>
            <li class="site-btn">
                <a href="#" class="button property-btn"><i class="fa fa-chevron-circle-right"></i>賣東西</a> 
                <a href="#" class="button property-btn"><i class="fa fa-chevron-circle-right"></i>廠商登入</a>
            </li>
            
        </ul>    
        <nav class="nav-user" style="visibility:visible;">
            <ul>
                <li><span class="account">user@ui..</span><a href="#">登出</a></li>
                <li><a href="#">登入</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">我的帳戶 </a></li>
                
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
            <img src="../c/img/sth_asap/86_pc_logo.png" alt="86 小舖"/>
            <h1 itemprop="name">86 小舖</h1>
        </a>
        <?php include "../module_component/_pc_site_search.php";?>
        <a href="#" class="mid-ad" target="_blank">
            <img src="../c/img/sth_asap/86_280x60_Top20180111.jpg" alt="日本直送 嚴選海外好物" title="日本直送 嚴選海外好物"/>
        </a>
    
    </div>
</header>