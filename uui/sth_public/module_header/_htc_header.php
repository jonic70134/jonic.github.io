<header class="site-header">
    <div class="container">
        <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
        <section class="edit-area">
            <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>    
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="index.php" class="logo"><img src="../c/img/sth_htc/logo.png" alt=""></a>
        <nav class="nav-user">
            <ul>
                <li><a href="javascript: void(0);" class="icon-search"></a></li>
                <li class="nav-account"><a href="#"><i class="icon-account"></i></a>
                    <ul class="account-item hide">
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Order</a></li>
                        <li><a href="#">My Account</a></li>
                    </ul>
                </li>
                <li>
                    <div class="cart-btn">
                        <span class="count">1</span>
                        <i class="icon-cart"></i>
                        <?php include "../module_component/_site_cart.php";?>
                    </div>
                </li>
            </ul>
        </nav>
        <?php include "../module_component/_site_search.php";?>
    </div>
    <?php include "_nav_menu.php";?>    
</header>