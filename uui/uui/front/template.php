<?php include "../frame/__data.php";?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="renderer" content="webkit|ie-comp|ie-stand" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
	<title>UUI template guideline v0.1</title>
	<link rel="shortcut icon" href="../assets/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="../assets/css/frame/frame.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/3rd-party/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/front/template.css">
	<!--[if lt IE 9]>
        <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
        <script src="../assets/js/3rd-party/respond.js"></script>
    <![endif]-->
</head>
<body>
	<?php include "../frame/_header.php";?>
	<section class="doc-header">
		<div class="container">
			<h1>Template</h1>
			<p>UUI is an HTML5 & CSS3 framework designed to help you kickstart the development of webapps and sites. Impress your clients and visitors while using a single, rock-solid foundation.</p>
		</div>
	</section>
	<section class="template block">
		<div class="container">
		<h1 class="page-header">Current Private Template</h1>
		<?php foreach ($template_private as $key => $value) {?>
			<figure>
				<img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" class="photo">
				<figcaption>
					<h1 class="name">
					<?php echo $value['name'];?><?php echo $value['desc'];?></h1>
					<p class="master">
						<?php switch ($value['state']) {
							case 'online':
								echo "<span class='tag green'>" . $value['state'] . "</span>";
								break;
							case 'deploying':
								echo "<span class='tag yellow'>" . $value['state'] . "</span>";
								break;
							case 'prototype':
								echo "<span class='tag'>" . $value['state'] . "</span>";
								break;
							case 'designing':
								echo "<span class='tag blue'>" . $value['state'] . "</span>";
								break;
							default:
								# code...
								break;
						}?>
						<i class="fa fa-edit"></i> by <?php echo $value['master'];?>
					</p>
				</figcaption>
				<div class="actions">
					<?php ?>
					<div class="actions-table">
						<div class="actions-cell">
							<p class="actions-color">
							<?php if(isset($value['color'])){?>
							coming in <?php echo count($value['color']);?> styles
							<?php }?>
							</p>
							<?php if($value['folder'] !=""){?>
							<a href="../../<?php echo $value['folder'];?>" class="button gray">View DEMO</a>
							<a href="../../<?php echo $value['folder'];?>/temp/sitemap.php" class="button gray"><i class="fa fa-bars"></i> Detail List</a>
							<?php }else if(isset($value['url'])){?>
							<a href="<?php echo $value['url'];?>" class="button gray">View DEMO</a>
							<a href="<?php echo $value['url'];?>/temp/sitemap.php" class="button gray"><i class="fa fa-bars"></i> Detail List</a>
							<?php }else if(isset($value['full'])){ ?>
							<a href="#fancybox-image" class="button gray fancybox-open-img">Preview image</a>
							<?php }?>
						</div>
					</div>
				</div>
			</figure>
		<?php }?>
		</div>
	</section>
	<section class="template block">
		<div class="container">
		<h1 class="page-header">Current Public Template</h1>
		<?php foreach ($template_public as $key => $value) {?>
			<figure>
				<img src="<?php echo $value['images'];?>" alt="<?php echo $value['name'];?>" class="photo">
				<figcaption>
					<h1 class="name">
					<?php echo $value['name'];?><?php echo $value['desc'];?></h1>
					<p class="master">
						<?php switch ($value['state']) {
							case 'online':
								echo "<span class='tag green'>" . $value['state'] . "</span>";
								break;
							case 'deploying':
								echo "<span class='tag yellow'>" . $value['state'] . "</span>";
								break;
							case 'prototype':
								echo "<span class='tag'>" . $value['state'] . "</span>";
								break;
							case 'designing':
								echo "<span class='tag blue'>" . $value['state'] . "</span>";
								break;
							default:
								# code...
								break;
						}?>
					</p>
				</figcaption>
				<div class="actions">
					<?php ?>
					<div class="actions-table">
						<div class="actions-cell">
							<p class="actions-color">
							<?php if(isset($value['color'])){?>
							coming in <?php echo count($value['color']);?> styles
							<?php }?>
							</p>
							<?php if($value['folder'] !=""){?>
							<a href="../../sth_public/<?php echo $value['folder'];?>" class="button gray">View DEMO</a>
							<!-- <a href="../../sth_public/<?php echo $value['folder'];?>/temp/sitemap.php" class="button gray"><i class="fa fa-bars"></i> Detail List</a> -->
							<?php }else if(isset($value['url'])){?>
							<a href="<?php echo $value['url'];?>" class="button gray">View DEMO</a>
							<a href="<?php echo $value['url'];?>/temp/sitemap.php" class="button gray"><i class="fa fa-bars"></i> Detail List</a>
							<?php }else if(isset($value['full'])){ ?>
							<a href="#fancybox-image" class="button gray fancybox-open-img">Preview image</a>
							<?php }?>
						</div>
					</div>
				</div>
			</figure>
		<?php }?>
		</div>
	</section>
	<?php include "../frame/_footer.php";?>
	<div id="fancybox-image" class="hide">
	    <h1 class="title">預覽圖</h1>
	    <div class="block">
	        <img src="../assets/img/template/theme_006_index_full.jpg" alt="" class="img-full">
	    </div>
	</div>
	<script src="../assets/js/jquery/jquery-1.10.2.min.js"></script>
	<script src="../assets/js/3rd-party/jquery.fancybox.pack.js"></script>
	<script>
	$('.fancybox-open-img').fancybox({
            padding:0,
        });
	</script>
</body>
</html>
