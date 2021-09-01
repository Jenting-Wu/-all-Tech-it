<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>會員頁面</title>
<link rel="stylesheet" href="CSS/member_info2.css">

<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 內容開始 ↓↓↓ -->
    <div class="page row">
        <!-- 左半部 頭貼、名稱 -->
        <div class="col-lg-4 col-12">
            <div class="personal">
                <div class="photo">
                    <img src="./img/messageImage_1628074308759.jpeg" alt="">
                </div>
                <a class="d-sm-block d-md-none" href="">更改大頭貼</a>
                <h4 class="d-none d-lg-block">陳時中</h4>
                <div class="member_level d-none d-lg-block">一般會員</div>
            </div>
        </div>
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


<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>