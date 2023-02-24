<footer class="rwd_footer_001">
	<div class="container">
		<div class="links">
			<?php if(isset($_GET['edit']) && $edit=="true"){ //後臺編輯區塊?>
			<section class="edit-area">
				<button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-sitemap.html"><i class="fa fa-pencil"></i>編輯</button>
				<div class="tooltip">網站導覽設定</div>     
			</section>
			<?php } //後臺編輯區塊 end ?>
			<dl>
				<dt>About HTC</dt>
				<dd><a href="#">Company Overview</a></dd>
				<dd><a href="#">Newsroom</a></dd>
			</dl>
			<dl>
				<dt>Shopping flow</dt>
				<dd><a href="../help_center/sign_up.php">New customer</a></dd>
				<dd><a href="../help_center/shop_flow.php">purchase flow</a></dd>
				<dd><a href="../help_center/delivery.php">shipping</a></dd>
			</dl>
			<dl>
				<dt>Payment</dt>
				<dd><a href="../help_center/payway.php">Credit Card</a></dd>
				<dd><a href="../help_center/payway.php">ATM</a></dd>
				<dd><a href="../help_center/payway.php">Cash on delivery</a></dd>
				<dd><a href="../help_center/payway.php">Pay on 7-11</a></dd>
			</dl>
			<dl>
				<dt>After-sales service</dt>
				<dd><a href="../help_center/service.php#service_reject">Return</a></dd>
				<dd><a href="../help_center/service.php#service_refund">Refunds</a></dd>
				<dd><a href="#">Contact Us</a></dd>
			</dl>
			<dl>
				<dt>Q & A</dt>
				<dd><a href="../help_center/faq.php#h0501">Account issue</a></dd>
				<dd><a href="../help_center/faq.php#h0503">Order issue</a></dd>
				<dd><a href="../help_center/faq.php#h0507">Invoice issue</a></dd>
			</dl>
			<dl>
				<dt>Other</dt>
				<dd><a href="#">Other service</a></dd>
				<dd><a href="#">Other service</a></dd>
				<dd><a href="#">Other service</a></dd>
			</dl>
		</div>
	</div>
</footer>