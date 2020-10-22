<div class="pc_copyright_001">
	<div class="container">
		<?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
		<section class="edit-area">
			<button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-sitemap.html"><i class="fa fa-pencil"></i>編輯</button>
			<div class="tooltip">網站導覽設定</div>     
		</section>
		<?php } //後臺編輯區塊 end ?>
		<small><span class="service"></span> Copyright &copy; uitox Corporation  All rights reserved.<a href="#">隱私權政策</a></small>		
	</div>
</div>
<!--powered by uitox 固定在底部出現 -->
<div class="u_copyright">
	<div class="container">
		<small><span class="logo_tooltip">powered by <a href="http://www.uitox.com"><img alt="" src="../c/img/frame/footer_logo.png"></a></span></small>
	</div>
</div>
<?php include "../temp/colorpicker.php";?>
<?php include "../temp/buttonpicker.php";?>
<?php include "../temp/actswitch.php";?>