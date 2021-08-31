<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>登入成功</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/login_index.css">

<!-- JS link ----------------------------------->
<script src="JS/custom.js"></script>


< <!-- 從這裡開始進行網頁撰寫 ------------------->
    <!-- WP : wrap -->
    <!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
    <div class="wrap">

        <!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->

        <div class="promotion display_2">
            夏季專屬優惠 5/10-5/20滿NT$10,000 免運費
        </div>
        <div class="login_page">
            <div>
                <button type="button" class="btn btn_coupon" id="tool" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                    新註冊會員可領 100 折價券 !
                </button>
                <img src="./img/member_none@2x.png" alt="">
            </div>
            <div>

                <div class="page_footer">
                    <button class="signup">會員註冊</button>
                    <button class="login">會員登入</button>
                </div>
            </div>





        </div>
        <!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->

    </div>
    <!-- 在這裡結束網頁撰寫 ----------------------->







    <!-- JQ ----------------------------------->
    <script>
        //   this page
        $('img').hover(function() {
            $('button#tool.btn.btn-secondary').css('display', 'block');
        })
        $('.login').click(function() {
            location.href = 'login.php';
        })
        $('.signup').click(function() {
            location.href = 'signup.php';
        })
    </script>

    <!-- php link -------------------------------------------->
    <?php require_once 'foot.php' ?>