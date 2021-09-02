<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>

<link rel="stylesheet" href="./CSS/member_info2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 內容開始 ↓↓↓ -->
    <?php
    if (isset($_SESSION['email'])) {
        $sql = "SELECT `user_name`,`photo_sticker`,`email`
                FROM `users` 
                WHERE `email` = '{$_SESSION['email']}'
                GROUP BY `email`;";
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
                    <a class="col-3" href="./member_info1.php">會員資訊</a>
                    <a class="col-3" href="./member_info2.php">
                        <i class="fas fa-coins d-none d-lg-block"></i>
                        <br>我的購物金</a>
                    <a class="col-3" href="./member_info3.php">歷史訂單</a>
                    <a class="col-3" href="./member_info4.php">我的評價</a>
                </div>
                <hr>

                <br>

                <!-- 現有購物金 -->
                <div class="voucher">
                    <form>
                        <fieldset disabled>
                            <div class="form-group row">
                                <label for="voucher" class="col-form-label">現有購物金</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="inputVoucher" placeholder="" value="100">
                                </div>
                                <p style="color: gray;">評價購物金</p>
                            </div>


                            <div class="form-group row">
                                <label for="voucherID" class="col-form-label">購物金代碼</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" id="inputVoucherID" placeholder="" value="CP001">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- 購物金紀錄 -->
                <br>
                <hr>

                <div class="voucher_rec">
                    <h5>購物金紀錄</h5>
                    <div class="v_rec_pt">
                        <div class="rec_card">2020/04/03</div>
                        <div class="rec_card">已經使用購物金在此筆訂單</div>
                        <div class="rec_card"><a href="">202104030930511</a></div>
                        <div class="rec_card">-100</div>
                    </div>

                    <div class="v_rec_pt">
                        <div class="rec_card">2020/04/03</div>
                        <div class="rec_card">已經使用購物金在此筆訂單</div>
                        <div class="rec_card"><a href="">202104030930511</a></div>
                        <div class="rec_card">-100</div>
                    </div>

                    <div class="v_rec_pt">
                        <div class="rec_card">2020/04/03</div>
                        <div class="rec_card">已經使用購物金在此筆訂單</div>
                        <div class="rec_card"><a href="">202104030930511</a></div>
                        <div class="rec_card">-100</div>
                    </div>
                </div>

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