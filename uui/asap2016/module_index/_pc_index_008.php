<div class="pc_index_008">
    <div class="container">
        <div class="col-left">      
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $key => $value) {?>
                    <div class="swiper-slide">
                        <a href="<?php echo $value['url'];?>">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="pagination"></div>
            </div>
        </div>
        <div class="col-right">            
            <a href="#" class="photo"><img src="../c/img/sth_sosoon/sample/a3_01.jpg"></a>
            <a href="#" class="photo"><img src="../c/img/sth_sosoon/sample/a3_02.jpg"></a>
            <a href="#" class="photo"><img src="../c/img/sth_sosoon/sample/a3_03.jpg"></a>
        </div>
    </div>
</div>