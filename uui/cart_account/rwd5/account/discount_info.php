<?php
    include "../frame/__config.php";
    include "../frame/__data.php";
    $type="pc";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_header_001.php";?>
        <?php include "../module_component/_nav_breadcrumbs.php";?>
        <div class="site-body">
            <div class="site-main">
                 <div class="discount_info_001">
                    <div class="container">
                        <div class="account-title">我的折價券</div>
                        <div class="discount-info-block">
                            <table class="discount-info-table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="discount-info-come-date">歸戶日期</th>
                                        <th class="discount-info-num">折價券號碼</th>
                                        <th class="discount-info-price">面額</th>
                                        <th class="discount-info-come-name">活動名稱</th>
                                        <th class="discount-info-product">適用商品</th>
                                        <th class="discount-info-start">開始日期</th>
                                        <th class="discount-info-end">結束日期</th>
                                        <th class="discount-info-detail">使用說明</th>
                                        <th class="discount-info-source">來源</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        for ($x = 0; $x <= 9; $x++) {
                                            echo '
                                                <tr>
                                                    <td class="discount-info-come-date">2016.01.01</td>
                                                    <td class="discount-info-num">XGS205C123</td>
                                                    <td class="discount-info-price">$9999</td>
                                                    <td class="discount-info-come-name">ASUS zenphone新機現折500元、現折500元</td>
                                                    <td class="discount-info-product go-popup"><a href="../module_component/_site_fancybox_all.php #fancybox-discount-product" class="fancybox fancybox.ajax">詳</a></td>
                                                    <td class="discount-info-start">2016.09.09</td>
                                                    <td class="discount-info-end">2016.09.09</td>
                                                    <td class="discount-info-detail"><a href="../module_component/_site_fancybox_all.php #fancybox-discount-descript" class="fancybox fancybox.ajax">詳</a></td>
                                                    <td class="discount-info-source">APP</td>
                                                </tr>
                                            ';
                                        } 
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-to-top">
            <i class="fa fa-angle-double-up"></i>
        </div>
        <?php include "../module_footer/_copyright_001.php";?>
    </div>
    <?php include "../frame/__js_library.php";?>
</body>
</html>