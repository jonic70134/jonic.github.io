<footer class="pc_footer_001">
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
				<dd><a href="#">uitox徵才</a></dd>
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
				<dd><a href="#">廠商合作</a></dd>
				<dd><a href="#">uitox group</a></dd>
				<dd><a href="#">uitox 品牌電商系統</a></dd>
				<dd><a href="#">uitox 徵才</a></dd>
			</dl>
		</div>
		<!-- 其他訊息框 fancybox-->
		<div id="login_box" class="coupon_box login_box">
			<div class="coupon_title">您目前尚未登入！<span class="cole00">紅色字</span></div>
			<div class="login_st"><span class="cole00">紅色字目前已選購3件，還差2件</span><br/>登入後可立即查看</div>
			<a href="#coupon_box" class="loginbox-btn fancybox">我要登入</a>
		</div>
		<!-- 折價券 fancybox-->
		<div id="coupon_box" class="coupon_box">
			<div class="coupon_title">本賣場最新優惠折價券</div>
			<div class="coupon_price">
				<span class="coupon_net">網路價</span>
				<span class="price"><small>$</small>195,000</span>
				<div class="coupon_des">欲使用折價券，請於購物車結帳畫面使用</div>
			</div>
			<table class="coupon_table">
				<tr>
					<th>折價券名稱</th>
					<th>折價優惠</th>
					<th>折價後金額</th>
				</tr>
				<tr>
					<td class="coupon_name_td">
						<div class="coupon_date">2018/11/01-2018/11/18</div>
						<div class="coupon_name">快3年終大促銷限時限量全館滿額$2000折價券</div> 
						<div class="cole00">單品滿3000以上即可使用</div>
					</td>
					<td><div><span class="coupon_bf"><small>$</small>2,000</span></div></td>
					<td><div><span class="coupon_la cole00"><small>$</small>193,000</span></div></td>
				</tr>
				<tr>
					<td class="coupon_name_td">
						<div class="coupon_date">2018/11/01-2018/11/18</div>
						<div class="coupon_name">快3會員專屬$333折價券，全館適用</div> 
					</td>
					<td><div><span class="coupon_bf"><small>$</small>300</span></div></td>
					<td><div><span class="coupon_la cole00"><small>$</small>194,667</span></div></td>
				</tr>
			</table>
			<div class="coupon_txt">以上金額依您帳戶內可使用的折價券面額計算</div>
			<div class="coupon_txt">折價券適用促銷價金額折抵，實際折抵金額以購物車結帳頁面為準！</div>
		</div>
	</div>
</footer>