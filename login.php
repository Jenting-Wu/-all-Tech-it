<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>登入頁面</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/login.css">



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
    <div class="promotion display_2">
        夏季專屬優惠 5/10-5/20滿NT$10,000 免運費
    </div>
    <h5 class="head display_title">登入 Tech it 帳號</h5>
    <form method="POST" action="login1.php">
        <label for="member_ac" id="ac">
            <img src="./img/icon_member.svg">
            <input type="text" id="email_login" name="email_login" placeholder="會員帳號">
        </label>
        <br>
        <label for="member_pw" id="pw">
            <img src="./img/icon_password.svg">
            <input type="password" id="pwd_login" name="pwd_login" placeholder="密碼">
        </label>
        <br>

        <label for="remember_me" class="aa">
            <input type="checkbox" id="remember_me"><span>記住我</span>
        </label>
        <br>

        <button class="login " id="btn_login">登入</button>
        <div class="forgot">
            <a href="./forgot.php">忘記密碼</a>
        </div>

        <div class="member_none">還不是會員嗎？ <a href="./signup.php">快速註冊新帳號</a></div>

    </form>



</div>
<!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->





<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>