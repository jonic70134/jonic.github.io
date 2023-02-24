<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript">
    $(function(){
        // 先取得 #swiper-IMG , 必要參數及輪播間隔
        var $block = $('#swiper-IMG'),
        $link = $block.find('.action .pagination li'),
            timrt, speed = 3000;

        // 幫 #swiper-IMG .title ul li 加上 hover() 事件
        var $li = $('.action .pagination li', $block).hover(function(){
            // 當滑鼠移上時加上 .over 樣式
            $(this).addClass('over').siblings('.over').removeClass('over');
        }, function(){
            // 當滑鼠移出時移除 .over 樣式
            $(this).removeClass('over');
        }).click(function(){
            // 當滑鼠點擊時, 顯示相對應的 div.info
            // 並加上 .on 樣式
            var $this = $(this);
            $this.add($('.swiper-container-box div.info', $block).eq($this.index())).addClass('on').siblings('.on').removeClass('on');
        });
        
        $link.mouseover(function(){
            var $this = $(this);
            $this.add($('.swiper-container-box div.info', $block).eq($this.index())).addClass('on').siblings('.on').removeClass('on');
        });
        
        // 幫 $block 加上 hover() 事件
        $block.hover(function(){
            // 當滑鼠移上時停止計時器
            clearTimeout(timer);
        }, function(){
            // 當滑鼠移出時啟動計時器
            timer = setTimeout(move, speed);
        });
        
        // 控制輪播
        function move(){
            var _index = $('.action .pagination li.on', $block).index();
            _index = (_index + 1) % $li.length;
            $li.eq(_index).click();

            timer = setTimeout(move, speed);
        }
        
        // 啟動計時器
        timer = setTimeout(move, speed);
    });
</script>
<div class="pc_index_002">
    <div class="container">
        <!-- 左側廣告 -->
        <ul itemtype="http://data-vocabulary.org/Product" class="ad-left-box">
            <li class="item">
                <a itemprop="offerurl" href="#" title="">
                    <img itemprop="image" src="../c/img/sth_asap/sample/item_09.jpg" alt="Sony" class="poto">
                    <pre class="name">日本原裝Calbee Jagabee 薯條先生（薄鹽口味）12包</pre>
                    <p class="info">
                        <b class="price"><sup>$</sup>748</b>
                        <i class="buy">搶購</i>
                    </p>
                </a>
            </li>

            <li class="item">
                <a itemprop="offerurl" href="#" title="">
                    <img itemprop="image" src="../c/img/sth_asap/sample/item_09.jpg" alt="Sony" class="poto">
                    <pre class="name">日本原裝Calbee Jagabee 薯條先生（薄鹽口味）12包</pre>
                    <p class="info">
                        <b class="price"><sup>$</sup>748</b>
                        <i class="buy">搶購</i>
                    </p>
                </a>
            </li>
        </ul>
       

        <!-- 大圖輪播 -->
        <!-- <div class="col-left">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($slides as $key => $value) {?>
                    <div class="swiper-slide">
                        <a href="<?php echo $value['url'];?>" title="<?php echo $value['name'];?>">
                            <img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>">
                        </a>
                    </div>
                    <?php }?>
                </div>
                <div class="actions">
                    <div class="pagination">
                    </div>
                </div>
            </div>
        </div>-->
        <div class="col-left" id="swiper-IMG">
            <div class="swiper-container-box">
                <div class="info on">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_01.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_02.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_01.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_02.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_01.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="info">
                    <a href="#" class="large-img"><img src="../c/img/sth_asap/sample/slides_02.jpg" alt="" /></a>
                    <div class="col-right">            
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_01.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_02.jpg" alt=""></a>
                        <a href="#" class="photo" title=""><img src="../c/img/sth_asap/sample/a3_03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="action">
                    <ul class="pagination">
                        <li class="swiper-pagination-switch on">
                            <a href="#" class=""><p>行銷特賣活動一</p></a>
                        </li>
                        <li class="swiper-pagination-switch ">
                            <a href="#" class=""><p>旅日必買海外直送</p></a>
                        </li>
                        <li class="swiper-pagination-switch ">
                            <a href="#" class=""><p>行銷特賣活動三</p></a>
                        </li>
                        <li class="swiper-pagination-switch ">
                            <a href="#" class=""><p>行銷特賣活動四</p></a>
                        </li>
                        <li class="swiper-pagination-switch ">
                            <a href="#" class=""><p>行銷特賣活動五</p></a>
                        </li>
                        <li class="swiper-pagination-switch ">
                            <a href="#" class=""><p>行銷特賣活動六</p></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        
    </div>
</div>

