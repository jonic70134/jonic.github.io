<?php include '_header.php';?>
        <div class="main_col">
            <?php include '_leftcol.php';?>
            <div class="right_col">
                <?php include '_breadcrumb.php';?>
                <div class="con_block">
                    <h3 class="con_title">UXAPI授權方式</h3>
                    <div class="con_main">
                      <p>購物平台取得 API資料皆使用Oauth2.0標準認證流程，必須先透過clien_id及secret取得token 後，再拿取該token值串接uitox API token 每次可維持7天的有效日期，超過日期則必須重新取得 token。<br/></p>
                      <img src="c/img/frame/1.png"/>
                      <h4 class="con_main_title">認證方式</h4>
                      <p>採HTTPS網路協定，以POST方式串接實作。URL路徑提供如下：<br/>https://[uitox server name]/A/oauth2/authorize</p>
                      <h4 class="con_main_title">輸入參數、範例及說明</h4>
                      <p>HTTPS POST參數整理如下：</p>
                      <table class="con_table">
                            <thead>
                              <tr>
                                  <th>參數</th>
                                  <th>說明</th>
                                  <th>型別</th>
                                  <th>限制</th>
                                  <th>屬性</th>
                                  <th>備註</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>grant_type</td>
                                    <td>授權方式</td>
                                    <td>String</td>
                                    <td></td>
                                    <td>必填</td>
                                    <td>uitox API 授權采用Client Credentials請傳入固定值client_credentials</td>
                                 </tr>
                                <tr>
                                    <td>client_id</td>
                                    <td>帳號</td>
                                    <td>String</td>
                                    <td></td>
                                    <td>必填</td>
                                    <td>請聯繫uitox人員提供</td>
                                 </tr>
                                <tr>
                                    <td>client_secret</td>
                                    <td>密鑰</td>
                                    <td>String</td>
                                    <td></td>
                                    <td>必填</td>
                                    <td>請聯繫uitox人員提供</td>
                                 </tr>
                            </tbody>
                         </table>
                         <p>參數請參考以下範例：</p>
                         <code>
                            POST / A/oauth2/authorize  HTTP/1.1 <br/>

                            Host:[uitox server name] <br/>
                            Content-Type: application/x-www-form-urlencoded<br/><br/>
                            grant_type=client_credentials&client_id=313a234y45768ag4t2436243g34t234tg342&client_secret=1545347357dfsagafw3r3f2
                          </code>
                          <h4 class="con_main_title">輸出回應、範例及說明</h4>
                          <p>API輸出回應的資料，一律放置在HTTPS協定回應結果，以JSON格式輸出，請參考以下範例：</p>
                          <code>
                            HTTP/1.1 200 OK <br/>
                            Content-Type: application/json;charset=UTF-8 <br/>
                            Cache-Control: no-store <br/>
                            Pragma: no-cache <br/>
                            { <br/>
                              &nbsp;&nbsp;"access_token":"8111C2E – 726D-554A-D5888-CDD66E72908D-154930ADV301-DK230A",<br/>
                              &nbsp;&nbsp;"token_type":"bearer",<br/>
                              &nbsp;&nbsp;"expires_in":604800,<br/>
                              &nbsp;&nbsp;“expires_on”:11438590515<br/>
                            }
                          </code>
                          <p>在API輸出回應的這串JSON字串內，各參數說明如下：</p>
                          <table class="con_table">
                            <thead>
                              <tr>
                                  <th>參數</th>
                                  <th>說明</th>
                                  <th>型別</th>
                                  <th>限制</th>
                                  <th>屬性</th>
                                  <th>備註</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>status_code</td>
                                    <td>狀態代碼</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>請參考以下代碼表</td>
                                 </tr>
                                <tr>
                                    <td>access_token</td>
                                    <td>授權碼</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                 </tr>
                                <tr>
                                    <td>token_type</td>
                                    <td>查詢狀態代碼</td>
                                    <td>String</td>
                                    <td></td>
                                    <td>必填</td>
                                    <td>用來識別API執行狀態</td>
                                 </tr>
                                <tr>
                                    <td>expires_in</td>
                                    <td>查詢日期</td>
                                    <td>String</td>
                                    <td>8</td>
                                    <td>必填</td>
                                    <td>格式YYYY/MM/DD</td>
                                 </tr>
                                <tr>
                                    <td>expires_on</td>
                                    <td>查詢時間</td>
                                    <td>String</td>
                                    <td>6</td>
                                    <td>必填</td>
                                    <td>格式HH:MM:SS</td>
                                 </tr>
                            </tbody>
                         </table>
                         <h4 class="con_main_title">使用限制</h4>
                         <p>token的有效期間以 expires_on 為準，目前限定7天內可使用。</p>
                         <h4 class="con_main_title">代碼說明</h4>
                         <p>drc參數</p>
                         <table class="con_table">
                            <thead>
                              <tr>
                                  <th>代碼</th>
                                  <th>說明</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100</td>
                                    <td>授權成功</td>
                                 </tr>
                                <tr>
                                    <td>203</td>
                                    <td>uitox商品ID 無值</td>
                                 </tr>
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
<?php include '_footer.php';?>