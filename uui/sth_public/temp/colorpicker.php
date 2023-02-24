<!-- prototype切換顏色用 -->
<?php
    $onecolor = array("sth_adi", "sth_sosoon", "sth_seagame");
?>
<style>
    .colorpicker {position: fixed;top:30%;left:2px;padding:3px;}
    .colorpicker a {display: block;margin:5px 0;width:24px;height:24px;
    -webkit-box-shadow: 1px 1px 6px 0px rgba(117,117,117,0.93);
    -moz-box-shadow: 1px 1px 6px 0px rgba(117,117,117,0.93);
    box-shadow: 1px 1px 6px 0px rgba(117,117,117,0.93);}
    .colorpicker a.red {background: #e00517;}
    .colorpicker a.purple {background: #c15797;}
    .colorpicker a.green {background: #90bf4f;}
    .colorpicker a.pc_blue {background: #00b6f9;}
    .colorpicker a.blue {background: #7fd8f9;}
    .colorpicker a.orange {background: #ff9a23;}
    .colorpicker a.dark_orange {background: #ff8600;}
    .colorpicker a.black {background: black;}
    .colorpicker a.gray {background: gray;}
    .colorpicker a.pink {background: pink;}
    .colorpicker a.white {background: white;}
    .colorpicker a.gold {background: #c4a265;}
    .colorpicker a.purple {background: #827bb9;}
</style>
<?php if($imp=='true'){//跨境?>
<div class="colorpicker">
    <a href="?color=red&imp=true" class="red"></a>
    <a href="?color=purple&imp=true" class="purple"></a>
    <a href="?color=green&imp=true" class="green"></a>
    <a href="?color=blue&imp=true" class="pc_blue"></a>
    <a href="?color=orange&imp=true" class="orange"></a>
</div>
<?php }else if($siteName=="sth002") {//sth002?>
<div class="colorpicker">
    <a href="?color=white" class="white"></a>
    <a href="?color=black" class="black"></a>
    <a href="?color=blue" class="blue"></a>
    <a href="?color=gold" class="gold"></a>
    <a href="?color=gray" class="gray"></a>
    <a href="?color=green" class="green"></a>
    <a href="?color=pink" class="pink"></a>
    <a href="?color=purple" class="purple"></a>
</div>
<?php }else if($siteName=="sth003") {//sth003?>
<div class="colorpicker">
    <a href="?color=white" class="white"></a>
    <a href="?color=black" class="black"></a>
    <a href="?color=blue" class="blue"></a>
    <a href="?color=gray" class="gray"></a>
    <a href="?color=pink" class="pink"></a>
    <a href="?color=purple" class="purple"></a>
</div>
<?php }else if($siteName=="sth_asap"){//asap?>
<div class="colorpicker">
    <a href="?color=red" class="red"></a>
    <a href="?color=purple" class="purple"></a>
    <a href="?color=green" class="green"></a>
    <a href="?color=blue" class="pc_blue"></a>
    <a href="?color=orange" class="orange"></a>
    <a href="?color=dark_orange" class="dark_orange"></a>
    <a href="?color=gray" class="gray"></a>
</div>
<?php }else if(in_array($siteName, $onecolor)) {//none?>
<?php }else{//一般?>
<div class="colorpicker">
    <a href="?color=white" class="white"></a>
    <a href="?color=black" class="black"></a>
    <a href="?color=blue" class="blue"></a>
    <a href="?color=gray" class="gray"></a>
    <a href="?color=pink" class="pink"></a> 
</div>
<?php }?>