<!-- prototype button type picker -->
<?php 
if($sitePage == "item"){ 
?>
<style>
.buttonpicker {position: fixed;top:30%;right:2px;padding:3px;}
.buttonpicker li > a {display: block;margin:5px 0;width:24px;height:24px;line-height:24px;box-shadow: 0 1px 0 #D4D4D4 inset, 0 5px 0 0 #888, 0 10px 5px #999;color: rgba(0, 0, 0, 0.8);padding: 0 2px;background-color: #D4D4D4;}
.buttonpicker li > a:hover {cursor:pointer;} 
.buttonpicker-inner a {display: block;margin:5px 0;width:80px;height:24px;line-height:24px;font-size: 12px;color: rgba(0, 0, 0, 0.8);padding: 0 2px;border-radius: 2px;background:#e6e6e6;text-align: center;}
.buttonpicker-inner {position: absolute;top: 80%;right:-85px;padding-top:7px;}
.buttonpicker > li:hover .buttonpicker-inner {right: 3px;}
</style>
<ul class="buttonpicker">
    <li>
        <a></a>
        <div class="buttonpicker-inner">
            <a href="?type=btn-preorder">立即預定</a>
            <a href="?type=btn-preorder-finish">預購結束</a>
            <a href="?type=btn-rush">立即搶購</a>
            <a href="?type=btn-rush-finish">搶購一空</a>
            <a href="?type=btn-discount">買立折</a>
            <a href="?type=btn-soldout-stock">售完，補貨中</a>
            <a href="?type=btn-soldout">已售完</a>
            <a href="?type=btn-to-sale">即將開賣</a>
            <a href="?type=btn-select">請選擇尺寸</a>
            <a href="?type=btn-addcart">加入購物車</a>
        </div>
    </li>
</ul>
<?php } ?>