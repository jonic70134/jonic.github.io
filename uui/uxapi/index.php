<?php include '_header.php';?>
        <div class="main_col">
            <?php include '_leftcol.php';?>
            <div class="right_col">
                <?php include '_breadcrumb.php';?>
                <div class="con_block col1">
                    <h3 class="con_title"><i class="fa fa-dot-circle-o"></i>新增商品</h3>
                    <div class="con_main">
                        提供平台 api 新增
                    </div>
                </div>
                <div class="con_block col1">
                    <h3 class="con_title"><i class="fa fa-dot-circle-o"></i>存取位置</h3>
                    <div class="con_main">
                        https://uxapi.uitox.com/show_add/add_product
                    </div>
                </div>
                <div class="con_block col1">
                    <h3 class="con_title"><i class="fa fa-dot-circle-o"></i>API</h3>
                    <div class="con_main">
                        <div class="access_block">
                            <div class="line">
                                <div class="front">Client ID</div>
                                <div class="back"><input type="text" class="reg_input"/></div>
                            </div>
                            <div class="line">
                                <div class="front">access_secret</div>
                                <div class="back"><input type="text" class="reg_input"/></div>
                            </div>
                            <button class="submit">更換 access_secret</button>
                        </div>
                    </div>
                </div>
                <div class="con_block col1">
                    <h3 class="con_title"><i class="fa fa-dot-circle-o"></i>傳入的 data 欄位說明</h3>
                    <div class="con_main">
                        <table class="con_table">
                            <thead>
                              <tr>
                                  <th>open / close</th>
                                  <th>Element</th>
                                  <th>中文名稱</th>
                                  <th>欄位格式</th>
                                  <th>長度限制</th>
                                  <th>必填/條件/自選</th>
                                  <th>內容</th>
                                  <th>狀態</th>
                              </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    for ($x = 0; $x <= 20; $x++) {
                                        echo '
                                            <tr>
                                                <td></td>
                                                <td>request_data/uitox_supplier_id</td>
                                                <td>uitox廠商編號</td>
                                                <td>Member</td>
                                                <td>String</td> 
                                                <td>必填</td>
                                                <td>寫賣場售價</td>
                                                <td>
                                                    <a href="#"><i class="fa fa-pencil-square-o"></i></a>
                                                     <a href="#"><i class="fa fa-times"></i></a>
                                                </td>
                                             </tr>
                                        ';
                                    }
                                ?>
                            </tbody>
                         </table>
                    </div>
                </div>
            </div>
        </div>
<?php include '_footer.php';?>