<article class="md-item-main">
    <div class="container">
        <figure itemscope itemtype="http://data-vocabulary.org/Product">
            <?php include "../module_item/_md_item_photo.php";?>
            <figcaption class="info">
                <div class="sale">
                    <?php if($sale){?>
                    <p itemprop="priceValidUntil"><?php echo $L10n_item['sale_title'];?>05/01 20:00 ~ 05/02 20:00</p>
                    <p itemprop="lowPrice"><?php echo $L10n_item['sale_price'];?><span itemprop="priceCurrency" content="TWD">NT$</span>4990</p>
                    <?php ;}else{ ?>
                    <div class="type"><span itemprop="priceValidUntil">4/6-4/25全站滿2仟送200、5仟送500、1萬送1000、2萬送2000購</span></div>
                    <p><b>結束時間</b><span class="time">23:59:59</span><b class="bought">9999人已買</b></p>
                    <a href="activity.php?act=true" class="go-activity">看更多2h商品》</a>
                    <?php ;} ?>
                </div>
                <h1 itemprop="name" class="name"><?php echo $items[$pid]['name'];?></h1>
                <div class="tags">
                    <span class="tag-status is-uitox-delivery">uitox出貨</span>
                    <span class="tag-status is-vendor-delivery">廠商出貨</span>
                    <span class="tag-status is-separate-delivery">分開到貨</span>
                    <span class="tag-status is-odd">大材積</span>
                    <span class="tag-status is-imported">日本直送</span>
                </div>
                <div class="feature">
                    <ul>
                        <li> 滿<span class="t-red"> 1 </span>件，每件<span class="t-red"> 1000 </span>元 </li>
                        <li> 滿<span class="t-red"> 2 </span>件，每件<span class="t-red"> 950 </span>元，每件省<span class="t-red"> 50 </span>元 </li>
                        <li> 滿<span class="t-red"> 3 </span>件，每件<span class="t-red"> 900 </span>元，每件省<span class="t-red"> 100 </span>元 </li>
                        <li> 滿<span class="t-red"> 4 </span>件，每件<span class="t-red"> 800 </span>元，每件省<span class="t-red"> 200 </span>元 </li>
                        <li> 滿<span class="t-red"> 5 </span>件，每件<span class="t-red"> 750 </span>元，每件省<span class="t-red"> 250 </span>元 </li>
                    </ul>
                </div>
                <div class="price">
                    <p>建議售價<span itemprop="highPrice" content="99999999" class="t-original-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span></p>
                    <p>網路價<span class="discount-mark">71% Off</span><span itemprop="lowPrice" content="99999999" class="t-sale-price"><span itemprop="priceCurrency" content="TWD" class="t-currency">NT$</span>99,999,999</span><span class="start">起</span></p>
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
                    <?php if(isset($items[$pid]['gift'])){?>
                    <div class="line">
                        <div class="value-name">請選擇贈品</div>
                        <div class="select-size">
                            <?php foreach ($items[$pid]['gift'] as $key => $item){ ?>
                            <div class="item size gift">
                                <input type="checkbox" class="input-size" id="gift1" name="gift">
                                <label for="gift1">
                                    <img src="../c/img/sth_asap_m/sample/gift.jpg" class="img-item" alt="<?php echo $value['name'];?>">
                                    <?php echo $item;?>
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
                                    <span class="tag-status is-odd">大材積</span><?php echo $item;?>
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
                        <?php $itemfee=true; include "../module_item/_md_item_quantity.php";?>
                </div>
            </figcaption>
        </figure>
    </div>
</article>