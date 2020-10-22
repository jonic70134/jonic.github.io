<div class="site-search">
	<form action="" class="form">
    	<input type="search" maxlength="128" class="input-search" placeholder="<?php echo $L10n_search['placeholder'];?>"/>
    	<button type="submit" class="btn-submit"><i class="fa fa-search icon-search"></i></button>
    </form>
    <?php if($recommends){?>
	<ul class="recommend">
	    <?php foreach ($recommends as $key => $value) {?>
	    <li>
			<a href="#"><?php echo $value;?></a>
		</li>
		<?php }?>
	</ul>
	<?php }?>
</div>
