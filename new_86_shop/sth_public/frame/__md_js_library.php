<script src="../c/js/jquery/jquery-1.10.2.min.js"></script>
<script src="../c/js/3rd-party/jquery.unveil.js"></script>
<script src="../c/js/3rd-party/jquery.fancybox.pack.js"></script>
<script src="../c/js/common/md_actions.js"></script>
<script type="text/js-template" id="quantity-alert">
    <span class="quantity-alert">無法購買這麼多數量</span>
</script>
<script type="text/js-template" id="cart-alert">
    <div class="cart-alert">
        加入購物車..
    </div>
</script>
<script>
    $(function() {
        var availableTags = [
        "安撫巾",
        "安全帽",
        "按摩器材",
        "安全帶周邊",
        "美體按摩器",
        "自行車馬鞍包",
        "電動按摩椅<",
        "dvi-a",
        "a-ok",
        "a-prostand",
        "a-zcare",
        "origin-a",
        "a-star",
        "a6000y",
        "a5100y"
        ];
        //$( ".input-search" ).autocomplete({
        //    source: availableTags
        //});
    });
</script>

<?php //首頁專用JS?>
<?php if($sitePage=="index"){?>
<script src="../c/js/3rd-party/swiper.jquery.min.js"></script>
<script src="../c/js/common/md_index.js"></script>
<?php }?>

<?php //單品頁專用JS?>
<?php if($sitePage=="item"){?>
<script src="../c/js/3rd-party/swiper.jquery.min.js"></script>
<script src="../c/js/common/md_item.js"></script>
<?php }?>

<?php //館頁+搜尋+活動頁專用JS?>
<?php if($sitePage=="category" || $sitePage=="search" || $sitePage=="activity"){?>
<script src="../c/js/3rd-party/jquery.infinitescroll.min.js"></script>
<script src="../c/js/3rd-party/swiper.jquery.min.js"></script>
<script src="../c/js/common/md_catagory.js"></script>
<?php }?>

<?php //活動頁專用JS?>
<?php if($sitePage=="activity"){?>
<script src="../c/js/3rd-party/swiper.jquery.min.js"></script>
<script src="../c/js/common/md_activity.js"></script>
<?php }?>