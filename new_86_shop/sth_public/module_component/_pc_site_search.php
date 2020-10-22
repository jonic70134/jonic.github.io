<div class="site-search">
	<form action="" class="form">
    	<input type="search" maxlength="128" class="input-search" placeholder="商品搜尋"/>
    	<button type="submit" class="btn-submit"><i class="fa fa-search icon-search"></i></button>
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
