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
				<dt>公司介紹</dt>
				<dd><a href="#">關於我們</a></dd>
				<dd><a href="#">媒體報導</a></dd>
			</dl>
			<dl>
				<dt>購物流程</dt>
				<dd><a href="../help_center/sign_up.php">新客註冊</a></dd>
				<dd><a href="../help_center/shop_flow.php">購買流程</a></dd>
				<dd><a href="../help_center/delivery.php">配送方式</a></dd>
			</dl>
			<dl>
				<dt>付款方式</dt>
				<dd><a href="../help_center/payway.php">信用卡</a></dd>
				<dd><a href="../help_center/payway.php">ATM</a></dd>
				<dd><a href="../help_center/payway.php">貨到付款</a></dd>
				<dd><a href="../help_center/payway.php">超商取貨付款</a></dd>
			</dl>
			<dl>
				<dt>售後服務</dt>
				<dd><a href="../help_center/service.php#service_reject">退貨說明</a></dd>
				<dd><a href="../help_center/service.php#service_refund">退款說明</a></dd>
				<dd><a href="#">聯絡我們</a></dd>
			</dl>
			<dl>
				<dt>常見問題</dt>
				<dd><a href="../help_center/faq.php#h0501">帳戶問題</a></dd>
				<dd><a href="../help_center/faq.php#h0503">訂單問題</a></dd>
				<dd><a href="../help_center/faq.php#h0507">發票問題</a></dd>
			</dl>
			<dl>
				<dt>其他服務</dt>
				<dd><a href="#">其他服務</a></dd>
				<dd><a href="#">其他服務</a></dd>
				<dd><a href="#">其他服務</a></dd>
			</dl>
		</div>
	</div>
</footer>