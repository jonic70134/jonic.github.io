<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="index.php" class="logo"><img src="../c/img/frame/logo_2x.png" alt=""></a>
        <nav class="nav-user" style="visibility:visible;">
            <ul>
                <li><a class="icon-menu" href="javascript: void(0);"><i class="fa fa-bars"></i></a></li>
                <li><a href="#" class="icon-search"><i class="fa fa-search"></i></a></li>
                <li class="nav-account"><a href="#"><i class="fa fa-user icon-account"></i></a>
                    <ul class="account-item hide">
                        <li><a href="#">登入</a></li>
                        <li><a href="#">註冊</a></li>
                        <li><a href="#">查訂單</a></li>
                        <li><a href="#">我的帳戶</a></li>
                    </ul>
                </li>
                <li>
                    <div class="cart-btn">
                        <span class="count">1</span>
                        <i class="fa fa-shopping-cart f-cart"></i>
                        <!--i class="icon-cart"></i-->
                        <?php include "../module_component/_site_cart.php";?>
                    </div>
                </li>
            </ul>
        </nav>
        <?php include "../module_component/_site_search.php";?>
    </div>    
</header>