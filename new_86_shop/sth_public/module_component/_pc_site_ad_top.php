<div class="site-ad-top">
    <div class="container">
    	<?php if($edit=="true"){ //後臺編輯區塊?>
    	<section class="edit-area">
            <button class="btn-edit go-popup" data-width="800" data-href="/inside/popup/modify-edit-ad.html"><i class="fa fa-pencil"></i>編輯</button>
            <div class="tooltip">版頭橫幅AD：可設定1組版頭橫幅</div>     
        </section>
        <?php } //後臺編輯區塊 end ?>
        <a href="#">
            <img src="<?php echo $site_ad_top;?>" alt="">    
        </a>
    </div>
</div>