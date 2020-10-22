<?php //全站共用JS?>
<script src="../c/js/jquery/jquery-1.10.2.min.js"></script>
<script src="../c/js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../c/js/3rd-party/idangerous.swiper.2.6.1.min.js"></script>
<script src="../c/js/3rd-party/jquery.fancybox.pack.js"></script>
<script src="../c/js/common/pc_actions.js"></script>
<script src="../c/js/3rd-party/swiper.min.js"></script>
<script type="text/js-template" id="quantity-alert">
    <div class="quantity-alert">無法購買這麼多數量</div>
</script>
<script type="text/js-template" id="cart-mark">
    <div class="cart-mark">
        <p>加入購物車..</p>
    </div>
</script>
<script type="text/js-template" id="add-follow-list">
    <div class="add-follow-list">
        <p>加入追蹤清單..</p>
    </div>
</script>
<script type="text/js-template" id="arrival-info">
    <div class="arrival-info">
        <p>加入貨到通知..</p>
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
        $( ".input-search" ).autocomplete({
            source: availableTags
        });
    });
</script>

<?php //首頁後臺編輯用JS，前台顯示不須載入?>
<?php if($sitePage== "index" && isset($_GET['edit']) && $edit=="true"){?>
<script src="../c/js/jquery/jquery-ui-1.10.4.custom.min.js"></script>
<script src="../c/js/common/editor-btn.js"></script>
<script>
    //sort spinner for 編輯畫面
    $('.input-sort').spinner();
</script>
<?php }?>

<?php //首頁專用JS?>
<?php if($sitePage=="index"){?>
<script src="../c/js/3rd-party/jquery-menu-aim.js"></script>
<script src="../c/js/common/pc_index.js"></script>
<?php }?>

<?php //館頁專用JS?>
<?php if($sitePage=="category"){?>
<script src="../c/js/common/category.js"></script>
<?php }?>

<?php //單品頁頁專用JS?>
<?php if($sitePage=="item"){?>
<script src="../c/js/common/item.js"></script>
<?php }?>

<?php //活動頁專用JS?>
<?php if($sitePage=="activity"){?>
<script src="../c/js/common/activity.js"></script>
<?php }?>

<?php //活動集合頁專用JS?>
<?php if($sitePage=="activity_group"){?>
<script src="../c/js/common/activity_group.js"></script>
<?php }?>