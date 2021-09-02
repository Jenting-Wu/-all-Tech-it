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
    <?php
    if (isset($_SESSION['email']) && isset($_SESSION['user_name'])) {
        $sql = "SELECT `user_name`,`photo_sticker`,`email`
                FROM `users` 
                WHERE `email` = '{$_SESSION['email']}'
                AND `user_name` = '{$_SESSION['user_name']}';";
        $stmt = $pdo->query($sql);
        if ($stmt->rowCount() > 0) {
            foreach ($stmt->fetchAll() as $obj) {
    ?>
                <div class="page row">
                    <!-- 左半部 頭貼、名稱 -->
                    <div class="col-lg-4 col-12">
                        <div class="personal ">
                            <div class="photo">
                                <img src="<?= $obj['photo_sticker'] ?>" alt="">
                            </div>
                            <a class="d-sm-block d-md-none" href="">更改大頭貼</a>
                            <h4 class="d-none d-lg-block"><?= $obj['user_name'] ?></h4>
                            <div class="member_level d-none d-lg-block">一般會員</div>
                        </div>
                    </div>
                    <!-- </div> -->
        <?php
            }
        }
    }
        ?>
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



                <div class="m_personal">
                    <div class="d-sm-block d-md-none row justify-content-start align-baseline">

                        <div class="m_member_level">一般會員</div>
                    </div>
                </div>


                <!-- 現有input -->
                <div class="member_input d-block">
                    <form>
                        <h5 class="d-none d-lg-block">會員資訊</h5>
                        <hr>
                        <?php
                        if (isset($_SESSION['email'])) {
                            $sql = "SELECT *
                            FROM `users` 
                            WHERE `email` = '{$_SESSION['email']}';";
                            $stmt = $pdo->query($sql);
                            if ($stmt->rowCount() > 0) {
                                foreach ($stmt->fetchAll() as $obj) {
                        ?>

                                    <fieldset disabled>
                                        <div class="form-group row">
                                            <label for="inputA" class="col-form-label">姓名</label>
                                            <div class="col-lg-5 col-12">
                                                <input type="text" class="form-control" id="inputA" placeholder="姓名" value="<?= $obj['user_name'] ?>">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputB" class="col-form-label">郵件</label>
                                            <div class="col-lg-5 col-12">
                                                <input type="text" class="form-control" id="inputB" placeholder="aaa@gmail.com" value="<?= $obj['email'] ?>" required>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputC" class="col-form-label">生日</label>
                                            <div class="col-lg-5 col-12">
                                                <input type="text" class="form-control" id="inputC" placeholder="生日年/月/日" value="<?= $obj['birthday'] ?>" required>

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputD" class="col-form-label">電話</label>
                                            <div class="col-lg-5 col-12">
                                                <input type="text" class="form-control" id="inputD" placeholder="手機號碼" value="<?= $obj['phone_number'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputE" class="col-form-label">地址</label>
                                            <div class="col-lg-5 col-12">
                                                <input type="text" class="form-control " id="inputE" placeholder="地址" value="<?= $obj['address'] ?>" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                        <?php
                                }
                            }
                        }
                        ?>
                    </form>
                    <br>
                    <form>
                        <h5 class="d-none d-lg-block">更新資訊</h5>
                        <hr>



                        <div class="form-group row">
                            <label for="inputE" class="col-form-label">地址</label>
                            <div class="col-lg-5 col-12">
                                <input type="text" class="form-control " id="inputF" placeholder="請輸入地址">

                            </div>
                        </div>

                        <input type="button" class="address_btn" id="btn_address" value="儲存" style="margin:0 auto;">

                    </form>

                </div>


            </div>

        </div>
        <!-- ↑↑↑ 內容結束 ↑↑↑ -->

                </div>
                <!-- 在這裡結束網頁撰寫 ----------------------->





                <!-- sweet alert -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                <!-- -- php link -------------------------------------------- -->
                <?php require_once 'foot.php' ?>