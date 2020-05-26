<footer class="footer">
	<div class="container">
		<?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
		<section class="edit-area">
			<button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-sitemap.html"><i class="fa fa-pencil"></i>編輯</button>
			<div class="tooltip">網站導覽設定</div>     
		</section>
		<?php } //後臺編輯區塊 end ?>
		<small>&copy; 2014 SEA Games Singpore</small>
		<ul class="footer-bottom">
			<li><a href="#">RSS</a></li>
			<li><a href="#">Terms of Use</a></li>
			<li><a href="#">Contact Us</a></li>
			<li><a href="#">Sitemap</a></li>
		</ul>
	</div>
</footer>