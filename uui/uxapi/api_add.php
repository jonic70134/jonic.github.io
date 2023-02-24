<?php include '_header.php';?>
        <div class="main_col">
            <?php include '_leftcol.php';?>
            <div class="right_col">
                <?php include '_breadcrumb.php';?>
                <div class="right_col_form">
                    <div class="right_col_title">
                        新增API
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 名稱：</label><input type="text" id=""/>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 代號：</label><input type="text" id=""/>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 存取位置：</label><input type="text" id=""/>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 應用場景：</label><textarea name="" id="" cols="50" rows="10"></textarea>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 限制：</label><input type="text" id=""/>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">API 權限：</label>
                        <label for="a"><input type="checkbox" id="a" name="1" value="1"/>廠商</label>
                        <label for="b"><input type="checkbox" id="b" name="2" value="2"/>A1</label>
                        <label for="c"><input type="checkbox" id="c" name="2" value="2"/>純平台</label>
                        <label for="d"><input type="checkbox" id="d" name="2" value="2"/>買家</label>
                        <label for="e"><input type="checkbox" id="e" name="2" value="2"/>APP</label>
                    </div>
                    <div class="line">
                        <label for="" class="prefix">是否需要登入：</label>
                        <label for="f"><input type="checkbox" id="f" name="1" value="1"/>是</label>
                        <label for="g"><input type="checkbox" id="g" name="2" value="2">否</label>
                    </div>
                </div>
            </div>
        </div>
<?php include '_footer.php';?>