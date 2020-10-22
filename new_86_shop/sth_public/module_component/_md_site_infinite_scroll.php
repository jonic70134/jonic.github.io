	<div class="infinite-scroll">
		<div class="items">
			<?php foreach($itemss as $key => $value) {if($key==10){break;} include "../module_component/_md_item_list.php";}?>
		</div>
		<a href="category2.php" data-loading-msg="讀取更多商品..." data-finished-msg="沒有商品了" class="infinite-next-page"></a>
    </div>