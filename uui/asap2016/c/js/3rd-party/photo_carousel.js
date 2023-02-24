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