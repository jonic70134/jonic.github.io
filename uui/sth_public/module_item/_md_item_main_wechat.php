<article class="md-item-main">
    <div class="container">
        <figure itemscope itemtype="http://data-vocabulary.org/Product">
            <?php include "../module_item/_md_item_photo.php";?>
            <figcaption class="info">
                <h1 itemprop="name" class="name"><?php echo $itemss[$pid]['name'];?></h1>
                <div class="tags">
                    <span class="tag-status is-uitox-delivery">uitox出貨</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span>
                    <span class="tag-status is-imported">日本直送</span>
                </div>
                <div class="price">
                    <p>建議售價<span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span></p>
                    <p>網路價<span class="discount-mark">71% Off</span><span itemprop="lowPrice" content="99999999" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span></p>
                </div>
                <div class="line">
                    <?php include "../module_component/_site_translation.php";?>
                </div>
                <div class="size-block">
                    <div class="hlight">
                        <div class="line">
                            <div class="value-name">顏色</div>
                            <ul class="select-size">
                                <li itemprop="color" class="size img" title="已售完">
                                    <input type="radio" class="input-size" id="color1" name="color">
                                    <label for="color1">
                                        <img src="../c/img/sample/color_purple.png" class="img-item" alt="顏色" title="顏色">
                                    </label>
                                </li>
                                <li itemprop="color" class="size img">
                                    <input type="radio" class="input-size" id="color2" name="color">
                                    <label for="color2">
                                        <img src="../c/img/sample/color_white.png" class="img-item" alt="顏色" title="顏色">
                                    </label>
                                </li>
                                <li itemprop="color" class="size img">
                                    <input type="radio" class="input-size" id="color3" name="color" disabled>
                                    <label for="color3">
                                        <img src="../c/img/sample/color_red.png" class="img-item" alt="顏色" title="顏色">
                                    </label>
                                </li>
                                <li itemprop="color" class="size img">
                                    <input type="radio" class="input-size" id="color4" name="color">
                                    <label for="color4">
                                        <img src="../c/img/sample/color_green.png" class="img-item" alt="顏色" title="顏色">
                                    </label>
                                </li>
                                <li itemprop="color" class="size img">
                                    <input type="radio" class="input-size" id="color5" name="color">
                                    <label for="color5">
                                        <img src="../c/img/sample/color_orange.png" class="img-item" alt="顏色" title="顏色">
                                    </label>
                                </li>
                                <li itemprop="color" class="size">
                                    <input type="radio" class="input-size" id="color6" name="color">
                                    <label for="color6">顏色文字</label>
                                </li>
                            </ul>
                        </div>
                        <div class="line">
                            <div class="value-name">規格</div>
                            <ul class="select-size">
                                <li itemprop="model" class="size">
                                    <input type="radio" class="input-size" id="size1" name="size" disabled>
                                    <label for="size1">11</label>
                                </li>
                                <li itemprop="model" class="size" title="已售完">
                                    <input type="radio" class="input-size" id="size2" name="size">
                                    <label for="size2">12</label>
                                </li>
                                <li itemprop="model" class="size">
                                    <input type="radio" class="input-size" id="size3" name="size">
                                    <label for="size3">13</label>
                                </li>
                                <li itemprop="model" class="size">
                                    <input type="radio" class="input-size" id="size4" name="size">
                                    <label for="size4">14</label>
                                </li>
                                <li itemprop="model" class="size">
                                    <input type="radio" class="input-size" id="size5" name="size">
                                    <label for="size5">15</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="line">
                        <div class="value-name">包含內容</div>
                        <div class="select-size">
                            <div class="item">
                                <span class="item-name">附屬商品</span>
                                <div class="select-style">
                                    <select>
                                        <option value="volvo">Volvo Volvo Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item">
                                <span class="item-name">附屬商品</span>
                                <div class="select-style">
                                    <select>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(isset($itemss[$pid]['gift'])){?>
                    <div class="line">
                        <div class="value-name">請選擇贈品</div>
                        <div class="select-size">
                            <?php foreach ($itemss[$pid]['gift'] as $key => $items){ ?>
                            <div class="item size gift">
                                <input type="checkbox" class="input-size" id="gift1" name="gift">
                                <label for="gift1">
                                    <img src="../c/img/sth_asap_m/sample/gift.jpg" class="img-item" alt="<?php echo $value['name'];?>">
                                    <?php echo $items;?>
                                </label>
                                <div class="select-style">
                                    <select class="gift-select">
                                        <option value="volvo">Volvo Volvo Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="item size gift">
                                <input type="checkbox" class="input-size" id="gift2" name="gift" disabled>
                                <label for="gift2">
                                    <img src="../c/img/sth_asap_m/sample/gift.jpg" class="img-item" alt="<?php echo $value['name'];?>">
                                    <span class="tag-status is-odd">大材積</span><?php echo $items;?>
                                </label>
                                <div class="select-style">
                                    <select class="gift-select" disabled>
                                        <option value="volvo">Volvo</option>
                                        <option value="saab">Saab</option>
                                        <option value="mercedes">Mercedes</option>
                                        <option value="audi">Audi</option>
                                    </select>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="md-item-buy">
                    <div class="line">
                        <?php $itemsfee=true; include "../module_item/_md_item_quantity.php";?>
                </div>
            </figcaption>
        </figure>
    </div>
</article>