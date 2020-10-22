	<div class="infinite-scroll">
		<div class="items">
			<?php foreach($itemss as $key => $value) {if($key==1){break;} include "../module_component/_md_item_list_02.php";}?>
            <?php foreach($itemss as $key => $value) {if($key==5){break;} include "../module_component/_md_item_list_02.php";}?>
		</div>
		<a href="category2.php" data-loading-msg="讀取更多商品..." data-finished-msg="沒有商品了" class="infinite-next-page"></a>
    </div>