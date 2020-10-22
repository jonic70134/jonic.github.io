<div class="buy_product_style">
	<div class="container">
		<h3 class="title-h3">請選擇您要的規格:</h3>
		<div class="items">

			<?php foreach ($itemss as $key => $value) {if($key==8){break;}?>
				<figure itemscope itemtype="#" class="item">
					<div class="soldout" style="display: block;">                              
						<img src="../c/img/sth_asap/item_soldout_big.png" alt="已售完">
						<div class="soldout-bg"></div>                          
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

		                <div class="quantity small">
		                    <span class="quantity-decrease">-</span>
		                    <?php //修正瀏覽器統一樣式?>
		                    <input type="text" class="quantity-input" value="1" max="99" title="請輸入購買量">
		                    <span class="quantity-increase">+</span>
						</div><button class="button large btn-addcart" id="item_add_cart" style="display: inline-block;">加入購物車</button>
		            </figcaption>
		            
	        	</figure>
            <?php }?>

		</div>
	</div>
</div>