            <a href="item.php">
                <figure class="md-list-item" itemscope itemtype="http://schema.org/Product">   
                    <p itemprop="offerURL" class="photo photo-lazyload">
                        <img data-src="<?php echo $value['images-tiny'];?>" data-src-retina="<?php echo $value['images'];?>" class="img-item img-lazyload" alt="<?php echo $value['name'];?>">
                    </p>
                    <figcaption class="info">
                        <p class="name" itemprop="name">
                            <?php echo $value['name'];?>
                        </p>
                        <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <span itemprop="highPrice" content="99999999" class="t-original-price"> 
                                    <span itemprop="priceCurrency" content="TWD" class="t-currency">網路價$</span>99,999,999
                                </span>
                                <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price">
                                    <span itemprop="priceCurrency" content="TWD" class="t-currency">購物金價$</span><?php echo $value['price'];?>
                                </span>
                                <button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購</button>
                        </div>
                    </figcaption> 
                </figure>
            </a>
            <a href="item.php">
                <figure class="md-list-item" itemscope itemtype="http://schema.org/Product">   
                    <p itemprop="offerURL" class="photo photo-lazyload">
                        <img data-src="<?php echo $value['images-tiny'];?>" data-src-retina="<?php echo $value['images'];?>" class="img-item img-lazyload" alt="<?php echo $value['name'];?>">
                    </p>
                    <figcaption class="info">
                        <p class="name" itemprop="name">
                            <?php echo $value['name'];?>
                        </p>
                        <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <span itemprop="highPrice" content="99999999" class="t-original-price"> 
                                    <span itemprop="priceCurrency" content="TWD" class="t-currency">網路價$</span>99,999,999
                                </span>
                                <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price">
                                    <span itemprop="priceCurrency" content="TWD" class="t-currency">還可折抵購物金</span>
                                <button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購</button>
                        </div>
                    </figcaption> 
                </figure>
            </a>
            <a href="item.php">
                <figure class="md-list-item" itemscope itemtype="http://schema.org/Product">   
                    <p itemprop="offerURL" class="photo photo-lazyload">
                        <img data-src="<?php echo $value['images-tiny'];?>" data-src-retina="<?php echo $value['images'];?>" class="img-item img-lazyload" alt="<?php echo $value['name'];?>">
                    </p>
                    <figcaption class="info">
                        <p class="name" itemprop="name">
                            <?php echo $value['name'];?>
                        </p>
                        <div class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <span itemprop="highPrice" content="99999999" class="t-original-price"></span>
                                <span itemprop="lowPrice" content="<?php echo $value['price'];?>" class="t-sale-price">
                                    <span itemprop="priceCurrency" content="TWD" class="t-currency">網路價$</span><?php echo $value['price'];?>
                                </span>
                                <button class="btn-buy" onclick="location.href=\'item.php\'" itemprop="offerURL">搶購</button>
                        </div>
                    </figcaption> 
                </figure>
            </a>