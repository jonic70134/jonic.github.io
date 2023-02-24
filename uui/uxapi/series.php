<?php include '_header.php';?>
        <div class="main_col">
            <?php include '_leftcol.php';?>
            <div class="right_col">
                <?php include '_breadcrumb.php';?>
                <div class="con_block">
                    <h3 class="con_title">UITOX API 串接流程</h3>
                    <div class="con_main">
                      <p>本章將說明，購物平台如何透過uitox提供的API，針對各種不同的使用情境來串接uitox系統，達到使用uitox服務的目的。以下分別針對不同的使用情境進行說明。</p>
                      <img src="c/img/frame/2.png"/>
                      <ul class="con_main_list">
                        <li>購物平台人員操作uitox提供的「平台管理系統」，建立或更新供應商資料。</li>
                        <li>購物平台系統透過uitox提供的API，即時新增、修改或查詢入庫商品的資料。</li>
                        <li>購物平台系統透過uitox提供的API，定期查詢入庫商品的庫存資訊。</li>
                      </ul>
                      <h4 class="con_main_title">商品進倉</h4>
                      <img src="c/img/frame/3.png"/>
                      <ul class="con_main_list">
                        <li>供應商人員操作購物平台提供的SCM系統，申請商品補貨。</li>
                        <li>購物平台系統透過API，即時申請建立uitox進倉單。</li>
                        <li> 購物平台系統透過API，即時查詢uitox進倉單的開立狀態。</li>
                        <li>uitox進倉單開立後，購物中心接著通知供應商準備將商品送到uitox倉庫。</li>
                        <li>供應商人員操作購物平台提供的SCM系統，列印進倉單和嘜頭。購物平台進倉單和嘜頭的文件格式，請務必事先提供給uitox審核，以加速進倉效率。</li>
                        <li>供應商將進倉單和嘜頭黏貼在商品包裝上，自行派物流商將商品進貨到uitox倉庫。</li>
                        <li>商品到倉後，uitox倉庫人員執行收貨、驗貨、貼標、入庫和上架等作業程序；購物平台的系統可以隨時透過API，即時查詢uitox進倉單的到貨狀態。</li>
                      </ul>
                      <h4 class="con_main_title">商品退倉</h4>
                      <img src="c/img/frame/4.png"/>
                      <ul class="con_main_list">
                        <li>供應商人員到購物平台提供的SCM系統，申請取回商品。</li>
                        <li>購物平台系統透過API，即時申請建立uitox退倉單。</li>
                        <li>退倉單開立後，uitox倉庫人員執行彙整、揀貨、理貨和裝箱等作業程序；購物平台的系統可以隨時透過API，即時查詢uitox退倉單狀態。</li>
                        <li>當uitox倉庫完成該筆退倉單的作業處理(退倉單狀態＝已出庫／出貨)後，購物平台接著通知供應商，準備到uitox倉庫取回退倉商品。</li>
                        <li>供應商自行指派物流商，到uitox倉庫取回退倉商品。</li>
                      </ul>
                      <h4 class="con_main_title">訂單出貨</h4>
                      <img src="c/img/frame/5.png"/>
                      <ul class="con_main_list">
                        <li>消費者到購物平台進行購物。</li>
                        <li>購物平台將要出貨的訂單，透過uitox提供的API匯入到uitox系統。</li>
                        <li>對該筆訂單，uitox倉庫人員執行揀貨、理貨、裝箱和列印宅配單等作業程序。</li>
                        <li>uitox指派的物流商，在指定指段到倉庫取走已出貨的訂單商品。</li>
                        <li>物流商將訂單商品配送給消費者。</li>
                        <li>在步驟4後，物流商隨時將配送狀態更新到uitox系統。</li>
                        <li>在步驟2後，購物平台的系統可以隨時透過API，即時查詢uitox訂單出貨配送資料及狀態。</li>
                      </ul>
                      <h4 class="con_main_title">訂單退貨</h4>
                      <p>消費者的退貨流程，依照退訂時間點和數量的差異，可以區分成「出貨前全部取消」、「出貨前部分取消」、「出貨後退貨」三種情況。</p>
                      <h5 class="con_main_sub_title">出貨前全部取消</h5>
                      <img src="c/img/frame/6.png"/>
                      <ul class="con_main_list">
                        <li>消費者告知購物平台要取消訂單全部商品。</li>
                        <li>購物平台將要退訂的資料，透過uitox提供的API匯入到uitox系統。</li>
                        <li>要被退訂的訂單資料，此時若還在uitox倉庫的作業處理中，該筆訂單的揀貨單會被取消，uitox系統將阻擋讓它無法出貨；已揀貨的商品之後會被重新上架。</li>
                      </ul>
                      <h5 class="con_main_sub_title">出貨前部分取消</h5>
                      <ul class="con_main_list">
                        <li>消費者告知購物平台要取消訂單部分商品。</li>
                        <li>購物平台將要退訂的資料，透過uitox提供的API匯入到uitox系統。</li>
                        <li>要被退訂的訂單資料，此時若還在uitox倉庫的作業處理中，該筆訂單的揀貨單會被取消，uitox系統將阻擋讓它無法出貨；由於該筆訂單並未全部取消，uitox系統會重新建立一張新的揀貨單，進行訂單剩餘商品後續揀貨、理貨、裝箱和列印宅配單等作業程序。</li>
                        <li>uitox指派的物流商，在指定指段到倉庫取走已出貨的訂單商品。</li>
                        <li>物流商將訂單商品配送給消費者。</li>
                        <li>在步驟4後，物流商隨時將配送狀態更新到uitox系統。</li>
                        <li>在步驟2後，購物平台的系統可以隨時透過API，即時查詢uitox訂單剩餘商品出貨配送資料及狀態。</li>
                      </ul>
                      <h5 class="con_main_sub_title">出貨後退貨(部分或全部)</h5>
                      <ul class="con_main_list">
                        <li>消費者告知購物平台要退訂商品(部分或全部)。</li>
                        <li>購物平台將要退訂的資料，透過uitox提供的API匯入到uitox系統。</li>
                        <li>要被退訂的訂單資料，此時若uitox倉庫已經出貨，uitox會指派物流商，在指定期限內到消費者端取回被退訂的訂單商品。</li>
                        <li>物流商到消費者端取回被退訂的訂單商品。</li>
                        <li>物流商將取到的退訂商品送回uitox倉庫。</li>
                        <li>對該筆退訂，uitox倉庫人員執行驗入、上架或客退還貨等作業程序；uitox倉庫人員在驗入過程中，若對取回商品有疑慮，一律都透過購物平台的客服人員與消費者聯繫，並由購物平台的客服人員告知該筆退訂是否可以驗入的最終決定。</li>
                        <li>在步驟2後，購物平台的系統可以隨時透過API，即時查詢uitox退訂單配送資料及狀態。</li>
                      </ul>
                    </div>
                </div>
            </div>
        </div>
<?php include '_footer.php';?>