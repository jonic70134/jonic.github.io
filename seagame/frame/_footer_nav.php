<footer class="footer">
	<div class="container">
		<?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
		<section class="edit-area">
			<button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-sitemap.html"><i class="fa fa-pencil"></i>編輯</button>
			<div class="tooltip">網站導覽設定</div>     
		</section>
		<?php } //後臺編輯區塊 end ?>
		<div class="col-2">
			<h4>About</h4>
			<ul class="footer-nav">
				<li><a href="#">SEA Games 2015</a></li>
				<li><a href="#">Steering Committee</a></li>
				<li><a href="#">Songs</a></li>
				<li><a href="#">History</a></li>
				<li><a href="#">Accommodation</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h4>Get Involved</h4>
			<ul class="footer-nav">
				<li><a href="#">Be a Volunteer!</a></li>
				<li><a href="#">Jobs</a></li>
				<li><a href="#">Ticketing</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h4>News</h4>
			<ul class="footer-nav">
				<li><a href="../help_center/payway.php">News Articles</a></li>
				<li><a href="../help_center/payway.php">Feature Stories</a></li>
				<li><a href="../help_center/payway.php">Multimedia</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h4>Press</h4>
			<ul class="footer-nav">
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h4>News</h4>
			<ul class="footer-nav">
				<li><a href="../help_center/payway.php">News Articles</a></li>
				<li><a href="../help_center/payway.php">Feature Stories</a></li>
				<li><a href="../help_center/payway.php">Multimedia</a></li>
			</ul>
		</div>
		<div class="col-2">
			<h4>Press</h4>
			<ul class="footer-nav">
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Facebook</a></li>
			</ul>
		</div>
	</div>
</footer>