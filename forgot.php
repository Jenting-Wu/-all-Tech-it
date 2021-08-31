<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>忘記密碼</title>
<link rel="stylesheet" href="CSS/forgot.css">

<!-- JS link ----------------------------------->
<!-- <script src="JS/custom.js"></script> -->



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<!-- <div class="wrap"> -->

<!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
<div class="promotion">
    夏季專屬優惠 5/10-5/20滿NT$10,000 免運費
</div>
<h5 class="head">忘記密碼 TECH IT</h5>
<form method="POST" action="check.php" id="forgot_form">
    <label for="member_ac" id="ac">
        <img src="img/icon_member.svg">
        <input type="text" id="email_login" name="email_login" placeholder="會員帳號">
    </label>
    <br>


    <button class="login" id="btn_forgot">寄送重設密碼信</button>


    <div class="member_none">還不是會員嗎？ <a href="./signup.php">快速註冊新帳號</a></div>

</form>



</div>
<!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->



<!-- FT : Footer ----------------------------------------------->


<!-- btn_toTop --------------------------------------------->




<!-- JQ ----------------------------------->
<script>
    // this page
    $('.back').click(function() {
        location.href = "login_index.php";
    })
</script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>