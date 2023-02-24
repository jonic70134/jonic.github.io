<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="index.php" class="logo"><img src="../c/img/frame/logo_2x.png" alt=""></a>
        <?php include "../module_component/_nav_menu.php";?>
        <?php include "../module_component/_site_search.php";?>
        <div class="clearfix"></div>
        <nav class="nav-user">
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
                <li><div class="icon-menu"></div></li>
                <li><div class="icon-search"></div></li>
                <li><div class="icon-account"></div></li>
                <li><a href="#" class="icon-cart"><span class="count">1</span></a></li>
            </ul>
        </nav>
    </div>
</header>