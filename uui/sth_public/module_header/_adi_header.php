<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>        
        <?php } //後臺編輯區塊 end ?>
        <div class="inner">
            <a href="index.php" class="logo"><img src="../c/img/sth_adi/asus_logo.png" alt=""></a>
            <?php include "../module_component/_nav_menu.php";?>
            <?php include "../module_component/_site_search.php";?>
        </div>
        <div class="clearfix"></div>

        <a class="store" href="index.php">Store</a>
        <ul class="site-language">
            <li><a href="#">ENG</a></li>
            <li><a href="#">繁中</a></li>
        </ul>
        <nav class="nav-user" style="visibility:visible;">            
            <ul>
                <li><a href="#">登入</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">查訂單</a></li>
                <li><a href="#">帳戶</a></li>
                <li><div class="cart-btn">
                    <span class="count">1</span>
                    <a class="icon-cart">購物車</a>
                    <?php include "../module_component/_site_cart.php";?>
                    </div>
                </li>
            </ul>
        </nav>
        <nav class="nav-menu-mobile">
            <ul>
                <li><div class="icon-menu"><i class="icon-nav-arrow hide"></i></div></li>
                <li><div class="icon-search"><i class="icon-nav-arrow hide"></i></div></li>
                <li><div class="icon-account"><i class="icon-nav-arrow hide"></i></div></li>
                <li><a href="#" class="icon-cart"><span class="count">1</span></a></li>
            </ul>
        </nav>
    </div>
</header>