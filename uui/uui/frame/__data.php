<?php
// session_set_cookie_params(0);
// session_start();
// if($_SESSION['isLogin'] != 'true'){
//     header("Location: ../temp/ulogin.php");
// }

$slides = array(
    array(
        "name"      => "活動預購",
        "images"    => "../assets/img/store/demo02.jpg",
        "url"       => "#",
    ),
    array(
        "name"      => "活動預購",
        "images"    => "../assets/img/store/demo02.jpg",
        "url"       => "#",
    ),
);

$template_private = array(
	array(
		"name"		=> "001",
		"images"	=> "../assets/img/template/theme_001_index.jpg",
		"desc"		=> "手機類：ASUS",
		"folder"	=> "adi",
		"master"		=> "Ken",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "002",
		"images"	=> "../assets/img/template/theme_003_index.jpg",
		"desc"		=> "手機類：HTC",
		"folder"	=> "",
		"url"		=> "http://prototype-kenblue.rhcloud.com/htc",
		"master"	=> "Ken",
		"state"		=> "prototype",
		"color"     => array(
			"black",
        ),
	),
	array(
		"name"		=> "003",
		"images"	=> "../assets/img/template/theme_004_index.jpg",
		"desc"		=> "服裝類：STAYREAL",
		"folder"	=> "sth_public/sth_stayreal",
		"master"	=> "Ken",
		"state"		=> "prototype",
		"color"     => array(
			"black",
        ),
	),
	array(
		"name"		=> "004",
		"images"	=> "../assets/img/template/theme_006_index.jpg",
		"full"		=> "../assets/img/template/theme_006_index_full.jpg",
		"desc"		=> "居家生活類：無印良品",
		"folder"	=> "",
		"master"	=> "一千",
		"state"		=> "designing",
		"color"     => array(
			"white",
        ),
	),
	array(
		"name"		=> "005",
		"images"	=> "../assets/img/template/sth_asap_index.png",
		"desc"		=> "ASAP",
		"folder"	=> "sth_public/sth_asap",
		"master"		=> "Ken",
		"state"		=> "prototype",
		"color"     => array(
			"white",
        ),
	),
);

$template_public = array(
	array(
		"name"		=> "001",
		"images"	=> "../assets/img/template/sth001_index.jpg",
		"desc"		=> "手機類：ASUS",
		"folder"	=> "sth001",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "002",
		"images"	=> "../assets/img/template/sth002_index.jpg",
		"desc"		=> "家電類：Philip",
		"folder"	=> "sth002",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "003",
		"images"	=> "../assets/img/template/sth003_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth003",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "004",
		"images"	=> "../assets/img/template/sth004_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth004",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "005",
		"images"	=> "../assets/img/template/sth005_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth005",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "006",
		"images"	=> "../assets/img/template/sth006_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth006",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "007",
		"images"	=> "../assets/img/template/sth007_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth007",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "008",
		"images"	=> "../assets/img/template/sth008_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth008",
		"state"		=> "online",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "009",
		"images"	=> "../assets/img/template/sth009_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth009",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "010",
		"images"	=> "../assets/img/template/sth010_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth010",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "011",
		"images"	=> "../assets/img/template/sth011_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth011",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "012",
		"images"	=> "../assets/img/template/sth012_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth012",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "013",
		"images"	=> "../assets/img/template/sth013_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth013",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "014",
		"images"	=> "../assets/img/template/sth014_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth014",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
	array(
		"name"		=> "015",
		"images"	=> "../assets/img/template/sth015_index.jpg",
		"desc"		=> "未分類",
		"folder"	=> "sth015",
		"state"		=> "prototype",
		"color"     => array(
			"white",
            "gray",
            "pink",
            "black",
            "blue",
        ),
	),
);

$style = array(
	array(
		"style"		=> "手機",
		"brand"		=> "ASUS",
		"url"		=> "http://www.asus.com/tw/",
	),
	array(
		"style"		=> "電腦",
		"brand"		=> "Acer",
		"url"		=> "http://www.acer.com.tw/",
	),
	array(
		"style"		=> "家電",
		"brand"		=> "飛利浦",
		"url"		=> "http://www.philips.com.tw/",
	),
	array(
		"style"		=> "女裝",
		"brand"		=> "NET",
		"url"		=> "http://www.net-fashion.net/",
	),
	array(
		"style"		=> "內睡衣",
		"brand"		=> "華歌爾",
		"url"		=> "http://www.wacoal.com.tw/",
	),
	array(
		"style"		=> "鞋子",
		"brand"		=> "GRACE GIFT",
		"url"		=> "http://www.gracegift.com.tw/",
	),
	array(
		"style"		=> "美妝",
		"brand"		=> "莎莎",
		"url"		=> "http://tw.sasa.com/",
	),
	array(
		"style"		=> "精品",
		"brand"		=> "COACH",
		"url"		=> "http://taiwan.coach.com/top/CSfTop.jsp",
	),
	array(
		"style"		=> "包包",
		"brand"		=> "LESPORTSAC",
		"url"		=> "http://www.lesportsac.com.tw/",
	),
	array(
		"style"		=> "飾品",
		"brand"		=> "folli follie",
		"url"		=> "http://www.follifollie.com.tw/",
	),
	array(
		"style"		=> "手錶",
		"brand"		=> "Citizen",
		"url"		=> "http://www.citizenwatch.com.tw/",
	),
	array(
		"style"		=> "男裝",
		"brand"		=> "Levis",
		"url"		=> "http://www.levis.com.tw/",
	),
	array(
		"style"		=> "運動休閒",
		"brand"		=> "山頂鳥",
		"url"		=> "http://www.hilltop.tw/",
	),
	array(
		"style"		=> "居家生活",
		"brand"		=> "無印良品 MUJI",
		"url"		=> "http://www.muji.tw/",
	),
	array(
		"style"		=> "婦幼",
		"brand"		=> "ALEX",
		"url"		=> "http://kidslife.com.tw/",
	),
	array(
		"style"		=> "日用清潔",
		"brand"		=> "花王",
		"url"		=> "https://tw.mall.yahoo.com/store/kao-taiwan",
	),
	array(
		"style"		=> "食品",
		"brand"		=> "桂格",
		"url"		=> "http://www.quaker.com.tw/onlineshop.asp",
	),
	array(
		"style"		=> "保健",
		"brand"		=> "白蘭氏",
		"url"		=> "http://mall.brands.com.tw/ec",
	),
);

?>