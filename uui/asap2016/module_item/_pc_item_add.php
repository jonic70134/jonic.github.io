<div class="pc-item-add">
    <div class="container">
        <h3 class="title-h3">加購商品</h3>
        <div class="items">
            <?php foreach ($items as $key => $value) {if($key==4){break;}?>
            <figure itemscope itemtype="http://data-vocabulary.org/Product" class="item">
                <div class="checkbox">
                    <input class="input-checkbox" type="checkbox" value="" check="0" id="<?php echo $value['add_id'];?>">
                </div>
                <label for="<?php echo $value['add_id'];?>" class="photo" title="商品圖預覽">
                    <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" itemprop="image">
                </label>
                <figcaption class="info">
                    <h1 itemprop="name" class="name">
                        <label for="<?php echo $value['add_id'];?>" title="商品圖預覽">
                            <?php echo $value['name'];?>
                        </label>
                    </h1>
                    <select name="" id="" class="spec">
                        <option value="">請選擇規格</option>
                    </select>
                    <div class="quantity small">
                        <span class="quantity-decrease">-</span>
                        <?php //修正瀏覽器統一樣式?>
                        <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
                        <span class="quantity-increase">+</span>
                    </div>
                    <div class="buy">
                        <span class="currency">$</span>
                        <span itemprop="price" class="price"><?php echo $value['price'];?></span>
                    </div>
                </figcaption>
            </figure>
            <?php }?>
        </div>
    </div>
</div>