<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>註冊</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="./CSS/signup.css">

<!-- JS link ----------------------------------->
<script src="JS/custom.js?time=<?php echo time(); ?>"></script>



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->


<div class="promotion">
    新註冊會員可現領100折價券，現領現用！
</div>
<h5 class="head display_title">註冊 TECH IT 帳號</h5>
<div class="main_part">
    <div class="l_part">
        <img src="./img/member_none@2x.png" class="upload_img">
        <h5 class="click_me"><u>選擇大頭貼</u> </h5>
        <div class="full">
            <div class="user_img">
                <h5>請選擇個人資料照片</h5>
                <div class="img_area">
                    <div class="type"> <img src="img/user_頭貼/photo_sticker_01.png" data-name="img_1">
                        <H6>我是kirobo</H6>
                    </div>
                    <div class="type"><img src="img/user_頭貼/photo_sticker_02.png" data-name="img_2">
                        <H6>我是公子白</H6>
                    </div>
                    <div class="type"> <img src="img/user_頭貼/photo_sticker_03.png" data-name="img_3">
                        <H6>我是kebi</H6>
                    </div>

                </div>
                <input type="button" value="確定" id="selected">
            </div>
        </div>
    </div>
    <div class="r_part">
        <form id="registered_form" method="POST" action="insertUser.php">
            <div class="form_div">
                <label for="user_name" id="name">
                    <img src="./img/icon_member.svg">
                    <input type="text" id="user_name" placeholder="會員姓名(請填入真實姓名)" name="user_name">

                </label>
            </div>


            <div class="form_div">
                <label for="email" id="ac">
                    <img src="./img/envelope-regular.svg" alt="">
                    <input type="text" id="email" placeholder="會員帳號(請填入email)" name="email">
                </label>
            </div>
            <div class="form_div">
                <label for="phone_number" id="nu">
                    <img src="./img/mobile-alt-solid.svg" alt="">
                    <input type="text" id="phone_number" placeholder="手機號碼" name="phone_number" maxlength="10">
                </label>
            </div>


            <div class="form_div">
                <label for="birthday" id="day">
                    <img src="./img/calendar-alt-regular.svg" alt="">
                    <input type="text" id="birthday" placeholder="出生日期" name="birthday" readonly>
                    <img src="./LOGO_ICON//caret-down-solid.svg" alt="" id="tr">
                </label>
            </div>

            <div class="form_div">
                <label for="pwd" id="pw">
                    <img src="./img/icon_password.svg" alt="" id="pw">
                    <input type="password" id="pwd" placeholder="請輸入8-10位(數字與英文組合)密碼" name="pwd">
                    <img src="./LOGO_ICON/密碼.svg" alt="" id="eye">
                </label>
            </div>

            <div class="form_div">
                <label for="check_pwd" id="pw2">
                    <img src="./img/icon_password.svg" id="pw2">
                    <input type="password" id="check_pwd" placeholder="請再輸入一次密碼">
                    <img src="./LOGO_ICON/密碼.svg" alt="" id="eye">
                </label>
            </div>


            <label for="remember_me" class="aa">
                <input type="checkbox" id="remember_me"><span>我同意網站服務條款及隱私政策</span>

            </label>
            <!-- type="submit" -->

            <input type="button" class="signup" id="btn_signup" value="註冊">
            <!-- <a href="./success_signup.html" target="_self">註冊</a> -->


            <!-- <div class="black" style="width: 100vw;height: 100vh;">
                        <div class="white"></div>
                    </div> -->

            </ul>
        </form>
    </div>
</div>

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->



<!-- FT : Footer ----------------------------------------------->


<!-- JQ ----------------------------------->
<script>
    // this page
    $('.click_me').click(function() {
        $('.full').show();
    })
    $('.type > img').click(function() {
        var a_src = $(this).attr('src');
        $('.upload_img').attr('src', a_src);
    })
    $('#selected').click(function() {
        $('.full').hide();
    })

    $('#btn_signup').click(function() {

        let pic = $('.upload_img').attr('src');
        localStorage.setItem('photo', pic);
        localStorage.setItem('user_name', $('#user_name').val())
    })
</script>


<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>