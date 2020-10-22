<div class="pc_category_products_list clearfix">
	
		<!-- item 1 -->
		<a href="item.php "class="item">
			<p class="photo" href="#">
				<img src="../c/img/sth_asap/sample/item_09.jpg" alt="Miss Hana 花娜小姐 妝素顏透亮賴床霜 30ml 素妍雙/玫瑰素妍雙">
			</p>
			<div class="info">
				<h3 class="name">Miss Hana 花娜小姐 妝素顏透亮賴床霜 30ml 素妍雙/玫瑰素妍雙</h3>
				<div class="buy">
					<span class="price"><del>$666</del></span>
					<span class="discount_price"><span>$</span>499</span>
				</div>
				<div class="buy-actions">
					<span class="btn link-btn">搶購</span>
					<span class="coupon_search" href="#">折價券</span>
				</div>
			</div>
		</a>

		<?php 
			for ($x = 0; $x <=6; $x++) {
				echo '
				<a href="item.php" class="item">
					<p class="photo" href="#">
						<img src="../c/img/sth_asap/sample/item_09.jpg"/>
					</p>
					<div class="info">
						<h3 class="name">Miss Hana 花娜小姐 妝素顏透亮賴床霜 30ml 素妍雙/玫瑰素妍雙</h3>
						<div class="buy">
							<span class="price"><del>$666</del></span>
							<span class="discount_price"><span>$</span>499</span>
						</div>
						<div class="buy-actions">
							<span class="btn link-btn">搶購</span>
						</div>
					</div>
				</a>
				';
			} 
			?>
</div>