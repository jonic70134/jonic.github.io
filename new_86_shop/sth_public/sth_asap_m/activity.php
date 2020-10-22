<?php 
    include "../frame/__config.php";
    include "../frame/__data.php";
    include "__data.php";
    $type="md";
?>
<!doctype html>
<html lang="zh-TW">
<head>
    <?php meta();?>
</head>
<body>
    <div class="site-outter">
        <?php include "../module_header/_md_header_004.php";?>
        <div class="site-body">
            <article class="site-main">
                <div class="md_nav_breadcrumbs">
                    <div class="container">
                        <ul class="breadcrumbs">
                            <li class="item"><a href="index.php">首頁</a></li>
                            <li class="item">行銷活動</li>
                            <li class="item">
                                <select>
                                    <option value="volvo">五月花品牌月五月花品牌月滿1400折350</option>
                                    <option value="saab">親子賞花野餐親子賞花野餐特輯滿599折50</option>
                                    <option value="volvo">五月花品牌月五月花品牌月滿1400折350</option>
                                    <option value="saab">親子賞花野餐親子賞花野餐特輯滿599折50</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php include "../module_component/_md_site_activity.php";?>
                <?php if($act=='true'){//限時特賣中?>
                <?php include "../module_component/_md_site_filter.php";?>
                <?php include "../module_index/_md_index_026.php"; ?>
                <?php }?>
                <?php include "../module_component/_md_site_select_dialog.php";?>
            </article>
        </div>
        <?php include "../module_footer/_md_footer_001.php";?>
        <?php include "../module_footer/_md_copyright_001.php";?>
        <?php include "../module_component/_md_nav_top.php";?>
    </div>
    <?php include "../frame/__md_js_library.php";?>
</body>
</html>