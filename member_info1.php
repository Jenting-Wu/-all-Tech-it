<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>


<!-- CSS link ---------------------------->
<link rel="stylesheet" href="./CSS/member_info1.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 內容開始 ↓↓↓ -->

    <div class="page row">
        <!-- 左半部 頭貼、名稱 -->
        <div class="col-lg-4 col-12">
            <div class="personal ">
                <div class="photo">
                    <img src="./img/messageImage_1628074308759.jpeg" alt="">
                </div>
                <a class="d-sm-block d-md-none" href="">更改大頭貼</a>
                <h4 class="d-none d-lg-block">Sophia</h4>
                <div class="member_level d-none d-lg-block">一般會員</div>
            </div>
        </div>
        <!-- 右半部頁面 -->
        <div class="col-lg-8 col-12">
            <div class="main">
                <div class="bar">
                    <a class="col-3" href="./member_info1.php">
                        <i class="far fa-user-circle d-none d-lg-block"></i>
                        <br>
                        會員資訊</a>
                    <a class="col-3" href="./member_info2.php">我的購物金</a>
                    <a class="col-3" href="./member_info3.php">歷史訂單</a>
                    <a class="col-3" href="./member_info4.php">我的評價</a>
                </div>
                <hr>
                <!-- 現有 -->
                <br>

                <h5 class="d-none d-lg-block">現有</h5>

                <div class="m_personal">
                    <div class="d-sm-block d-md-none row justify-content-start">
                        <h5>Sophia</h5>
                        <div class="m_member_level">一般會員</div>
                    </div>
                </div>

                <hr>
                <!-- 現有input -->
                <div class="member_input">
                    <form>
                        <fieldset disabled>
                            <div class="form-group row">
                                <label for="inputUser" class="col-form-label">姓名</label>
                                <div class="col-lg-5 col-12">
                                    <input type="text" class="form-control" id="inputUser" placeholder="姓名" value="Sophia">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="validationServer01" class="col-form-label">郵件</label>
                                <div class="col-lg-5 col-12">
                                    <input type="text" class="form-control is-valid" id="validationServer01" placeholder="aaa@gmail.com" value="sophialin@gmail.com" required>
                                    <div class="valid-feedback">
                                        驗證完成
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputbday" class="col-form-label">生日</label>
                                <div class="col-lg-5 col-12">
                                    <input type="text" class="form-control" id="inputbday" placeholder="生日年/月/日" value="1987/10/26">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="validationServer02" class=col-form-label">電話</label>
                                <div class="col-lg-5 col-12">
                                    <input type="text" class="form-control is-valid" id="validationServer02" placeholder="手機號碼" value="0944-384-483" required>
                                    <div class="valid-feedback">
                                        驗證完成
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <label for="inputPassword4" class="col-form-label">密碼</label>
                            <div class="col-lg-5">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="設定新密碼" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <!-- 儲存地址 -->
                <br>
                <h5>已儲存的地址</h5>
                <hr>
                <div class="saved_address">
                    <form id="address_form" method="POST" action="save_address.php">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1"></label>
                            <div class="col-lg-5">
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option selected>Eason - 臺北市文山區羅斯福路五段151號</option>
                                    <option value="1">Darren - 臺北市文山區羅斯福路五段152號</option>
                                    <option value="2">Elaine - 臺北市文山區羅斯福路五段153號</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleInputUser1">收件人姓名</label>
                                <input type="text" class="form-control" id="exampleInputUser1" placeholder="姓名" value="Sophia" name="user_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleInputphone1">收件人手機</label>
                                <input type="text" class="form-control" id="exampleInputPhone1" placeholder="手機號碼" value="0911123456" name="phone_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlSelect2">國家</label>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option selected>台灣</option>
                                    <option value="1">美國</option>
                                    <option value="2">冰島</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleFormControlSelect3">城市</label>
                                <select class="form-control" id="exampleFormControlSelect3">
                                    <option selected>臺北市</option>
                                    <option value="1">台中市</option>
                                    <option value="2">澎湖縣</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-5">
                                <label for="exampleInputAddress1">收件地址</label>
                                <input type="text" class="form-control" id="exampleInputAddress1" placeholder="地址" value="復興南路一段390號2樓" name="address">
                            </div>
                        </div>


                        <input type="button" class="address_btn" id="btn_address" value="儲存">

                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- ↑↑↑ 內容結束 ↑↑↑ -->

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->
<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>