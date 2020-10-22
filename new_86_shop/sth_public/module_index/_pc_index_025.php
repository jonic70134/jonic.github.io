<div class="pc_index_025">
    <div class="container">
        <div class="content">
            <div class="items tab-1 active">
                <?php foreach ($itemss as $key => $value) {if($key==6){break;}?>
                <div itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                    <a href="item.php" class="photo" itemprop="offerurl">
                        <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                    </a>
                    <div class="info">
                        <h3 itemprop="name" class="name"><a href="#"><?php echo $value['name'];?></a></h3>
                        <?php if($key==4){ 
                                echo '
                                    <div class="buy is-old">
                                        <span class="currency">網路價</span>
                                        <!-- <span itemprop="currency" class="currency">NT$</span> -->
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
                                        <span itemprop="price" class="price"> 5999</span>
                                        <a href="item.php" class="btn" itemprop="offerurl">搶</a>    
                                    </div>
                                ';
                            }
                            else{
                                echo '
                                    <div class="buy is-old">
                                        <span class="currency">網路價</span>
                                        <!-- <span itemprop="currency" class="currency">NT$</span> -->
                                        <span itemprop="highPrice" class="price">9,999</span>
                                    </div>
                                    <div class="buy">
                                        <span class="currency">購物金價</span>
                                        <span itemprop="price" class="price"> 5999</span>
                                        <a href="item.php" class="btn" itemprop="offerurl">搶</a>    
                                    </div>
                                ';
                            }?>
                        <button href="../module_component/_site_fancybox_all.php <?php echo $value['bird_url'];?>" class="bird-block-m <?php echo $value['bird_type'];?> fancybox fancybox.ajax fee-c"><?php echo $value['bird'];?></button>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>