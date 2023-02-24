<div class="site-search">
	<form action="" class="form">
		<div class="search-box">
			<a href="#" class="sort-search">全球商品<i class="fa fa-caret-down" aria-hidden="true"></i></a>
			<input type="search" maxlength="128" class="input-search" placeholder="請輸入商品名稱"/>
    		<button type="submit" class="btn-submit"><i class="fa fa-search icon-search"></i></button>	
		</div>
    	
    </form>
    <?php if($recommends){?>
	<div class="recommend">
	    <?php foreach ($recommends as $key => $value) {?>
	    <li>
			<a href="#"><?php echo $value;?></a>
		</li>
		<?php }?>
	</div>
	<?php }?>
</div>
