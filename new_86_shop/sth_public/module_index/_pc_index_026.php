<?php foreach ($list_type as $key => $value) {if($key==6){break;}?>
    <div class="pc_index_026">
        <div class="container">      
            <div class="block <?php echo $key;?>">
                <ul class="list">
                    <?php foreach ($value as $list) {?>
                        <li>
                            <a href="#"><?php echo $list; ?></a>
                        </li>
                    <?php }?>
                    <li><a class="more" href="#">看更多</a></li>
                </ul>
                <div class="item-left">
                    <a href="item.php">
                        <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                            <div class="photo-block">
                                <p href="#" class="photo-long">
                                    <img src="https://placehold.jp/360x360.png" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                                </p>
                            </div>
                        </div>
                        <div class="info">
                            <h3 itemprop="name" class="name">【PUFII】秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫 秋季熱銷品 自訂款素面修身襯衫</h3>
                            <div class="buy">
                                <div class="buy is-old">
                                    <span class="currency">網路價</span>
                                    <span itemprop="price" class="currency">NT$</span>
                                    <span itemprop="highPrice" class="price">99,999,999</span>
                                </div>
                                <div class="buy">
                                    <span class="currency">購物金價</span>
                                    <span itemprop="price" class="price"> $5999</span>
                                    <a href="item.php" class="btn" itemprop="offerurl">搶購</a>
                                </div>
                            </div>
                            <button href='../module_component/_site_fancybox_all.php #fancybox-compare-best-price' class="bird-block best fancybox fancybox.ajax fee-c">省1000<span class="detail">詳</span></button>
                        </div>
                    </a>
                </div>
                <div class="items">
                    <?php foreach ($itemss as $key => $value) {if($key==6){break;}?>
                    <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                        <a href="item.php">
                            <p class="photo" itemprop="offerurl">
                                <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" title="<?php echo $value['name'];?>" itemprop="image">
                            </p>
                            <div class="info">
                                <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                                <div class="buy">
                                <?php if($key==4){ 
                                    echo '
                                        <div class="buy is-old">
                                            <span class="currency">網路價</span>
                                            <span itemprop="currency" class="currency">NT$</span>
                                            <span itemprop="highPrice" class="price">9,999</span>
                                        </div>
                                        <div class="buy">
                                            <span class="currency">還可折抵</span>
                                            <span class="currency">購物金</span>
                                        </div>
                                    ';
                                }
                                else if($key==5){
                                    echo '
                                        <div class="buy is-old"></div>
                                        <div class="buy">
                                            <span class="currency">購物金價</span>
                                            <span itemprop="price" class="price"> $5999</span>   
                                        </div>
                                    ';
                                }
                                else{
                                    echo '
                                        <div class="buy is-old">
                                            <span class="currency">網路價</span>
                                            <span itemprop="currency" class="currency">NT$</span>
                                            <span itemprop="highPrice" class="price">9,999</span>
                                        </div>
                                        <div class="buy">
                                            <span class="currency">購物金價</span>
                                            <span itemprop="price" class="price"> $5999</span>   
                                        </div>
                                    ';
                                }?>
                                </div>
                                <button href="../module_component/_site_fancybox_all.php <?php echo $value['bird_url'];?>" class="bird-block-s <?php echo $value['bird_type'];?> fancybox fancybox.ajax fee-c"><?php echo $value['bird'];?></button>
                            </div>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>