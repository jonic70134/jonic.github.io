<?php include '_header.php';?>
        <div class="main_col">
            <?php include '_leftcol.php';?>
            <div class="right_col">
                <?php include '_breadcrumb.php';?>
                <div class="con_block">
                    <h3 class="con_title">版本歷程</h3>
                    <div class="con_main">
                        <table class="con_table">
                            <thead>
                              <tr>
                                  <th>發行版本</th>
                                  <th>發行日期</th>
                                  <th>主要變更內容</th>
                                  <th>修訂者</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>tw-v0.1</td>
                                    <td>2014/12/11</td>
                                    <td>初始版本</td>
                                    <td>Liyuan Chen</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.2</td>
                                    <td>2015/01/30</td>
                                    <td>加入API規格說明</td>
                                    <td>Liyuan Chen</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.3</td>
                                    <td>2015/02/14</td>
                                    <td>比對 test data 與原始規格後寫入</td>
                                    <td>Liyuan Chen</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.4</td>
                                    <td>2015/03/02</td>
                                    <td>
                                        解決以下問題：<br/>
                                        - 補充商品管理相關 API 欄位長度限制。<br/>
                                        - 補充商品管理相關 API 呼叫建議頻率。<br/>
                                        - 補充查詢可賣量 API x 2 test data 和 error code list。<br/>
                                        - 更新倉庫管理相關 API  的 test data & spec error code list。<br/>
                                        - 更新新增訂單 API 的 status code。<br/>
                                        - 更新訂單/發票查詢,退訂,退訂查詢 API response 的必填/選填欄位。
                                    </td>
                                    <td>Liyuan Chen</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.5 draft</td>
                                    <td>2015/03/20</td>
                                    <td>
                                        更新內容如下：<br/>
                                        - 新增金流授權，金流狀態查詢、退款、退款查詢的 API 說明。<br/>
                                        - 資料筆數參數統一使用 count。<br/>
                                        - 每筆資料明細回應狀態參數統一使用 drc<br/>
                                        - 查詢進倉單與退倉單的回覆內容增加"查詢種類"<br/>
                                        - 查詢商品庫存資訊 API 欄位"其他"由原來之"stock_others"改成"others"<br/>
                                        - 傳入參數增加 uitox 平台編號(platform_id)
                                    </td>
                                    <td>Tony Chang</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.6 draft</td>
                                    <td>2015/04/09</td>
                                    <td>
                                        - 加入檢查碼(cv)機制說明<br/>
                                        - 加入金流授權網址，範例程式與訊息代碼<br/>
                                        - 修改傳送資料為以一份 json 格式送出
                                    </td>
                                    <td>Tony Chang</td>
                                 </tr>
                                 <tr>
                                    <td>tw-v0.7 draft</td>
                                    <td>2015/05/08</td>
                                    <td>
                                        更新內容如下：<br/>
                                        - 加入金流授權狀態查詢、退款、退款狀態查詢的範例程式與訊息代碼。<br/>
                                        - 進貨單改為一單多品(一進貨單可多商品進倉)。<br/>
                                        - 調整退訂、訂單查詢、發票查詢、退訂查詢一次執行可執行100筆資料。
                                    </td>
                                    <td>Tony Chang</td>
                                 </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
<?php include '_footer.php';?>