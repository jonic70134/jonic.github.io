<div class="container">
    <?php foreach ($products as $key => $value){ ?>
    <div class="col-4">
        <figure itemscope itemtype="http://data-vocabulary.org/Product" class="product">
            <a href="../front/item.php" itemprop="offerurl" class="photo">
                <div class="crop">
                    <img src="<?php echo $value['images'];?>" alt="">
                </div>
            </a>
            <figcaption>
                <h1 itemprop="name">100-Days-to-Go Collar Pin</h1>
                <h2>避免螢幕受到刮損、擦傷。內層更加上超細纖維，細心呵護您的ZenFone</h2>
                <div class="product-item-price">
                    <span itemprop="price" class="price"><span class="text30">$</span>990</span>
                    <div class="highlight">
                        <p>每個會員限購1個(剩餘數量：9999)</p>
                        <p class="red-text">Estimated Delivery Date：2014/05/16</p>
                    </div>
                </div>
                    <?php if($value['type']=="btn-preorder" || $value['type']=="btn-addcart" || $value['type']=="btn-discount"){?>
                    <ul class="quantity">
                        <li><a href="javascript:void(0);" class="type">-</a></li>
                        <li><input itemprop="offerCount" class="type" value="1" max="99"></li>
                        <li><a href="javascript:void(0);" class="type">+</a></li>
                    </ul>
                    <?php }?>
                    <?php switch ($value['type']) {//6種按鈕型態
                        case 'btn-preorder':
                            echo '<a href="../front/item.php" itemprop="offerurl" class="button large btn-preorder">Pre-order Now</a>';
                            break;
                        case 'btn-addcart':
                            echo '<a href="../front/item.php" itemprop="offerurl" class="button large btn-addcart">Add to Cart</a>';
                            break;
                        case 'btn-discount':
                            echo '<a href="f23t32tjj" itemprop="offerurl" class="button large btn-discount">Instant Discount</a>';
                            break;
                        case 'to-stock':
                            echo '<p class="message to-stock">-Temporarily Out of Stock-</p>';
                            break;
                        case 'to-sale':
                            echo '<p class="message to-sale">-Coming Soon-</p>';
                            break;
                        case 'tips-alert':
                            echo '<p class="message tips-alert">Add to Cart</p>';
                            break;
                        default:
                            echo '<button itemprop="offerurl" class="button large btn-addcart">Add to Cart</button>';
                            break;
                    }?>
            </figcaption>
        </figure>
    </div>
    <?php } ?>
</div>