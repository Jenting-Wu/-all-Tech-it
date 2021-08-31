<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>變更密碼</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/reset.css">



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">


    <div class="promotion display_2">
        夏季專屬優惠 5/10-5/20滿NT$10,000 免運費
    </div>
    <!-- <?php
            // require_once 'layout.php';
            ?> -->
    <h5 class="head display_title">重設 Tech it 密碼</h5>
    <form method="POST" action="pwd_reset.php">
        <label for="member_pw" id="pw">
            <img src="./img/icon_password.svg">
            <input type="password" id="pwd_again" name="pwd_again" placeholder="重新設定密碼">
        </label>
        <br>
        <label for="member_pw2" id="pw2">
            <img src="./img/icon_password.svg">
            <input type="password" id="pwd_again2" placeholder="再確認密碼">
        </label>
        <br>
        <button class="login" id="pwd_change">變更密碼</button>
    </form>



</div>
<!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->



<!-- JQ ----------------------------------->
<script>
    // this page
    $('.back').click(function() {
        location.href = "login_index.php";
    })
</script>


<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>