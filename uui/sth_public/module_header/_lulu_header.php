<header class="site-header">
    <div class="container">
        <div class="left-btn" data-category="<?php echo $sitePage;?>" data-action="header-menu" data-label="選單按鈕">
            <i class="m-menu fa fa-bars"></i>   
        </div>        
        <div class="site-search">                
            <form action="" class="form">
                <input type="search" maxlength="128" class="input-search" placeholder="商品搜尋"/>
                <button type="submit" class="btn-submit"><i class="fa fa-search"></i></button>
            </form>
            <?php if($recommends){?>
            <div class="recommend">
                <?php foreach ($recommends as $key => $value) {?>
                <li>
                    <a href="#"><?php echo $value;?></a>
                </li>
                <?php }?>
            </div>
            <?php }?>
        </div>
        <a href="index.php" class="logo" itemscope itemtype="http://schema.org/LocalBusiness">
            <img src="<?php echo $logo['images'];?>" alt="">
            <h1 itemprop="name" class="site-name">lulu guinness</h1>
        </a>
        <div class="account">
            <i class="fa fa-user"></i>
            <span>我的帳戶</span>
            <ul class="account-item">
                <li><a href="#">登入</a></li>
                <li><a href="#">註冊</a></li>
                <li><a href="#">查訂單</a></li>
                <li><a href="#">我的帳戶</a></li>
            </ul>
        </div>
        <div class="cart-btn">
            <a href="cart.php">
                <i class="fa fa-shopping-cart"></i>            
                <span>購物車</span>
                <span class="count">1</span>
            </a>
            <!-- <div class="cart-banner">(滿<span class="focus">$490</span>免運費)</div> -->
            <?php include "../module_component/_site_cart.php";?>
        </div>
    </div>
    <nav class="nav-menu">
        <ul class="menu-one">
            <li><a href="category.php" class="red-text">促銷</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">促銷</a></li>
                    <li><a href="category.php">手提包</a></li>
                    <li><a href="category.php">錢包</a></li>
                    <li><a href="category.php">行李箱</a></li>
                    <li><a href="category.php">配件</a></li>
                </ul>
            </li>
            <li><a href="category.php">手袋</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">全部</a></li>
                    <li><a href="category.php">後背包</a></li>
                    <li><a href="category.php">肩背包</a></li>
                    <li><a href="category.php">斜背包</a></li>
                    <li><a href="category.php">手提包</a></li>
                </ul>
            </li>
            <li><a href="category.php">手拿包</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">全部</a></li>
                    <li><a href="category.php">LIPS CLUTCHES</a></li>
                    <li><a href="category.php">NOVELTY CLUTCHES</a></li>
                    <li><a href="category.php">BOX CLUTCHES</a></li>
                    <li><a href="category.php">OVERSIZED CLUTCHES</a></li>
                </ul>
            </li>
            <li><a href="category.php">錢包</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">全部</a></li>
                    <li><a href="category.php">零錢包</a></li>
                    <li><a href="category.php">卡夾包</a></li>
                    <li><a href="category.php">長夾包</a></li>
                    <li><a href="category.php">短夾包</a></li>
                </ul>
            </li>
            <li><a href="category.php">行李箱</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">全部</a></li>
                    <li><a href="category.php">軟殼行李箱</a></li>
                    <li><a href="category.php">硬殼行李箱</a></li>
                    <li><a href="category.php">登機行李箱</a></li>
                </ul>
            </li>
            <li><a href="category.php">配件</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">全部</a></li>
                    <li><a href="category.php">雨傘</a></li>
                    <li><a href="category.php">隨身包</a></li>
                    <li><a href="category.php">科技相關</a></li>
                </ul>
            </li>
            <li><a href="category.php">經典</a>
                <ul class="menu-two hide">
                    <li><a href="category.php">A TOUCH OF SPARKLE</a></li>
                    <li><a href="category.php">AN EYE FOR AN EYE</a></li>
                    <li><a href="category.php">ABSTRACT LIP</a></li>
                    <li><a href="category.php">PERFECTLY POLISHED</a></li>
                </ul>
            </li>
            <li><a href="category.php">lulu 精選</a></li>
        </ul>
    </nav>
    
    <nav class="nav-menu-mobile" id="navMenu">
        <div class="block">
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">促銷</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">手袋</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">手拿包</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">錢包</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">行李箱</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">配件</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">經典</a>        

            <a href="category.php" class="link m-account" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">我的帳戶</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">登入</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">註冊</a>
            <a href="category.php" class="link" data-category="<?php echo $sitePage;?>" data-action="menu" data-label="">查訂單</a>
        </div>
    </nav>
</header>