<div class="container" style="max-height: 60px;">
    <a href="../index.php"><img src="../c/img/seagame/topseabg.jpg" style="max-width: 100%;"></a>
</div>
<div class="container">
    <?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
    <section class="edit-area">
        <button class="btn-edit" onclick="location.href='/inside/modify-menu.html'"><i class="fa fa-sitemap"></i>編輯網站MENU</button>
    </section>
    <?php } //後臺編輯區塊 end ?>
    <header class="header-inn">
        <div class="inner">
            <a href="../front/index.php" class="logo"><img src="../c/img/sample/SEA-Games-2015-logo.png" alt=""></a>
            <nav class="main-nav-icon">
                <ul class="tabs">
                    <li>
                        <a href="#tab1" class="icon-menu">
                            <i class="icon-nav-arrow hidden-desktop hide"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#tab2" class="icon-search">
                            <i class="icon-nav-arrow hidden-desktop hide"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#tab3" class="icon-account">
                            <i class="icon-nav-arrow hidden-desktop hide"></i>
                        </a>
                    </li>
                    <li><a href="#" class="icon-cart main-cart"><span class="count">1</span></a></li>
                </ul>
            </nav>
            <nav class="main-nav hidden-table hidden-mobile">
                <ul class="nav-desktop">
                    <li><a href="../front/category.php">Clothing</a>
                        <ul class="sub icon-sub-arrow hide">
                            <li><a href="../front/category.php">Zenfone 4</a>
                                <ul class="third hide">
                                    <li><a href="../front/category.php">第三層選單-1</a></li>
                                    <li><a href="../front/category.php">第三層選單-1</a></li>
                                    <li><a href="../front/category.php">第三層選單-1</a></li>
                                    <li><a href="../front/category.php">第三層選單-1</a></li>
                                </ul>
                            </li>
                            <li><a href="../front/category.php">abc</a>
                                <ul class="third hide">
                                    <li><a href="../front/category.php">第三層選單-2</a></li>
                                    <li><a href="../front/category.php">第三層選單-2</a></li>
                                    <li><a href="../front/category.php">第三層選單-2</a></li>
                                    <li><a href="../front/category.php">第三層選單-2</a></li>
                                </ul>
                            </li>
                            <li><a href="../front/category.php">Zenfone 6</a></li>
                            <li><a href="../front/category.php">Padfone</a></li>
                            <li><a href="../front/category.php">Padfone mini</a></li>
                        </ul>
                    </li>
                    <li><a href="../front/category.php">Nila</a>
                        <ul class="sub icon-sub-arrow hide">
                            <li><a href="../front/category.php">Fonepad 7 Dual SIM</a></li>
                            <li><a href="../front/category.php">MeMO Pad 7</a></li>
                            <li><a href="../front/category.php">VivoTab Note 8</a></li>
                            <li><a href="../front/category.php">Transformer Pad</a></li>
                            <li><a href="../front/category.php">Fonepad 7 ME372CL</a></li>
                        </ul>
                    </li>
                    <li><a href="../front/category.php">Souvenirs</a>
                        <ul class="sub icon-sub-arrow hide">
                            <li><a href="../front/category.php">G56JR</a></li>
                            <li><a href="../front/category.php">ASUS TRansformer book T100</a></li>
                            <li><a href="../front/category.php">ROG TYTAB G50AB</a></li>
                            <li><a href="../front/category.php">R9280X-DCT2T-3GD5</a></li>
                            <li><a href="../front/category.php">MAXIMUS VII HERO</a></li>
                        </ul>
                    </li>
                    <li class="current"><a href="../front/category.php">Sports</a></li>
                    <li><a href="../front/category.php">Sports Accessories</a></li>
                </ul>
            </nav>
            <div class="right-area">
                <div class="main-search">
                    <input type="search" maxlength="128" placeholder="SEA Games T-Shitrt" class="input-search">
                    <a href="../front/search.php"><i class="icon-search-s"></i></a>
                    <div class="recommend">
                        <a href="#">Nila</a>
                        <a href="#">Sea Games</a>
                        <a href="#">Singapore</a>
                    </div>
                </div>
            </div>
            <div class="tab_container hidden-desktop">
                <nav class="main-nav" id="tab1">
                    <ul class="nav-mobile">
                        <li><a href="javascript:void(0);">Clothing</a>
                            <ul class="sub hide">
                                <li><a href="javascript:void(0);">Zenfone 4</a>
                                    <ul class="third hide">
                                        <li><a href="../front/category.php">第三層選單-1</a></li>
                                        <li><a href="../front/category.php">第三層選單-1</a></li>
                                        <li><a href="../front/category.php">第三層選單-1</a></li>
                                        <li><a href="../front/category.php">第三層選單-1</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Nila</a>
                                    <ul class="third hide">
                                        <li><a href="../front/category.php">第三層選單-2</a></li>
                                        <li><a href="../front/category.php">第三層選單-2</a></li>
                                        <li><a href="../front/category.php">第三層選單-2</a></li>
                                        <li><a href="../front/category.php">第三層選單-2</a></li>
                                    </ul>
                                </li>
                                <li><a href="../front/category.php">Zenfone 6</a></li>
                                <li><a href="../front/category.php">Padfone</a></li>
                                <li><a href="../front/category.php">Padfone mini</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);">Souvenirs</a>
                            <ul class="sub hide">
                                <li><a href="../front/category.php">G56JR</a></li>
                                <li><a href="../front/category.php">ASUS TRansformer book T100</a></li>
                                <li><a href="../front/category.php">ROG TYTAB G50AB</a></li>
                                <li><a href="../front/category.php">R9280X-DCT2T-3GD5</a></li>
                                <li><a href="../front/category.php">MAXIMUS VII HERO</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);">Sports</a>
                            <ul class="sub hide">
                                <li><a href="../front/category.php">筆記型電腦</a></li>
                                <li><a href="../front/category.php">桌上型電腦</a></li>
                                <li><a href="../front/category.php">刺服器&工作站</a></li>
                                <li><a href="../front/category.php">顯示器</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav-mobile hidden-desktop">
                        <li><a href="javascript:void(0);">Sports Accessories</a>
                            <ul class="sub hide">
                                <li><a href="../front/category.php">Fonepad 7 Dual SIM</a></li>
                                <li><a href="../front/category.php">MeMO Pad 7</a></li>
                                <li><a href="../front/category.php">VivoTab Note 8</a></li>
                                <li><a href="../front/category.php">Transformer Pad</a></li>
                                <li><a href="../front/category.php">Fonepad 7 ME372CL</a></li>
                            </ul>
                        </li>
                        <li><a href="../front/category.php">周邊配件</a></li>
                    </ul>
                </nav>
                <div class="right-area" id="tab2">
                    <div class="main-search">
                        <!-- 新增 class name 以支援IE selector 20140818 -->
                        <input type="search" maxlength="128" placeholder="Zenfone手機" class="input-search">
                        <!-- 新增 class name 以支援IE selector 20140818 End -->
                        <a href="../front/search.php"><i class="icon-search-s"></i></a>
                        <div class="recommend">
                            <a href="#">PadFone</a>
                            <a href="#">手機</a>
                            <a href="#">平板</a>
                            <a href="#">電腦</a>
                            <a href="#">配件</a>
                        </div>
                    </div>
                </div>
                <nav class="nav-account hidden-desktop" id="tab3">
                    <ul>
                        <li><a href="">Login</a></li>
                        <li><a href="">Register</a></li>
                        <li><a href="">Check Order</a></li>
                        <li><a href="">Account</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <a class="store" href="#">SEA Games 2015 Offical Shopping Site</a>
        <!-- <ul class="site-language">
            <li><a href="#">ENG</a></li>
            <li><a href="#">繁中</a></li>
        </ul> -->
        <ul class="second-nav">
            <li><a href="">Login</a></li>
            <li><a href="">Register</a></li>
            <li><a href="">Check Order</a></li>
            <li><a href="">Account</a></li>
        </ul>
        <div class="main-cart">
            <a href="#" class="main-cart-btn">
                <i class="icon-cart"><span class="count">1</span></i>Cart
            </a>
            <div class="cart-item hide">
                <div class="list">
                    <?php foreach ($cart_products as $key => $value) {?>
                    <div class="prod">
                        <div class="item">
                            <?php if($value['images']){?>
                            <a href="../front/item.php" class="crop">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['images'];?>">
                            </a>
                            <?php }else{?>
                            <span class="crop-no"></span>
                            <?php }?>
                            <div class="name"><?php echo $value['name'];?></div>
                            <div class="main-price">
                                <span class="currency">HK$</span>
                                <span class="price"><?php echo $value['price'];?></span>
                            </div>
                            <ul class="quantity">
                                <li><a href="" class="type">-</a></li>
                                <li><input itemprop="offerCount" class="type" value="1" max="99"></li>
                                <li><a href="" class="type">+</a></li>
                            </ul>
                            <a href="#" class="del">刪除</a>
                        </div>
                        <?php if($value['type']=="add"){?>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name red-text">此商品會員限購 1 個</div>
                        </div>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name">贈品-原廠兩用立架</div>
                        </div>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name">加購-Bumper Case 保護殼</div>
                            <div class="main-price">
                                <span class="currency">$</span>
                                <span class="price"><?php echo $value['price'];?></span>
                            </div>
                            <ul class="quantity">
                                <li><a href="" class="type">-</a></li>
                                <li><input itemprop="offerCount" class="type" value="1" max="99"></li>
                                <li><a href="" class="type">+</a></li>
                            </ul>
                            <a href="#" class="del">刪除</a>
                        </div>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name">買立折</div>
                            <div class="main-price">
                                <span class="currency">-$</span>
                                <span class="price">100</span>
                            </div>
                        </div>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name full"><span class="tag">已符合</span>單品滿$50000立折$500</div>
                        </div>
                        <?php }?>
                        <?php if($value['type']=="combo"){?>
                        <div class="item">
                            <span class="crop-no"></span>
                            <div class="name combo">
                                <p>包含下列商品：</p>
                                <p>組合商品AAAAAAAAAAAAAAAA組合商品AAAAAAAAAAAAAAAA組合商品AAAAAAAAAAAAAAAA</p>
                                <p>組合商品BBBBBBBBBBBBBBBB</p>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                    <?php }?>
                </div>
                <ul class="cart-sale">
                    <li>
                        <span class="sale-name">活動折扣-(手機配件滿$2000折100)</span>
                        <span class="sale-discount">-$100</span>
                    </li>
                    <li>
                        <span class="sale-name">活動折扣-(手機配件滿$2000折100)</span>
                        <span class="sale-discount">-$100</span>
                    </li>
                    <li>
                        <span class="sale-name">活動折扣-(手機配件滿$2000折100)</span>
                        <span class="sale-discount">-$100</span>
                    </li>
                </ul>
                <div class="cart-actions">
                    <span class="total-title">商品合計</span>
                    <span class="total">
                        <span class="currency">$</span>
                        <span class="price">6990</span>
                    </span>
                    <a href="#" class="button">結帳</a>
                </div>
            </div>
        </div>
    </header>
</div>
