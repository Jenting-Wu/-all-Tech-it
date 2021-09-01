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
    if (isset($_SESSION['email'])) {
        $sql = "SELECT `user_name`,`photo_sticker`,`email`
                FROM `users` 
                WHERE `email` = '{$_SESSION['email']}';";
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
                <?php
                if (isset($_SESSION['email'])) {
                    $sql = "SELECT *
                            FROM `users` 
                            WHERE `email` = '{$_SESSION['email']}';";
                    $stmt = $pdo->query($sql);
                    if ($stmt->rowCount() > 0) {
                        foreach ($stmt->fetchAll() as $obj) {
                ?>
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
                <?php
                        }
                    }
                }
                ?>
            </div>
        </div>

                </div>
                <!-- ↑↑↑ 內容結束 ↑↑↑ -->

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->



<!-- FT : Footer ----------------------------------------------->

<footer class="footer d-flex">

    <!-- LOGO -------------------------------->
    <a class="ft_logo" href="#">
        <img src="img/logo-png.png" alt="">
    </a>

    <!-- ft_box_link ---------------------------->
    <div class="ft_box">

        <div class="d-flex ft_box_top">

            <!-- footer_link 品牌專區 -->
            <p class="col ft_tt">
                <a href="#">品牌專區</a>
            </p>

            <!-- footer_link 商品分類 -->
            <p class="col ft_tt">
                <a href="#">商品分類</a>
            </p>

            <!-- footer_link 智慧專欄 -->
            <p class="col ft_tt">
                <a href="#">智慧專欄</a>
            </p>

            <!-- footer_link 聯絡客服 -->
            <p class="col ft_tt">
                <a href="#">聯絡客服</a>
            </p>

            <!-- footer_link 會員資料 -->
            <p class="col ft_tt">
                <a href="#">會員資料</a>
            </p>
        </div>

        <div class="ft_box_bot">
            © copy right by Tech it
        </div>

    </div>

    <!-- ft_mobile_copy_right -->
    <div class="ft_mb_copy_right d-lg-none">
        <p>© copy right by Tech it</p>
    </div>

</footer>


<!-- btn_toTop --------------------------------------------->

<button class="btn_toTop btn">
    <p>TOP</p>
</button>


<!-- JQ ----------------------------------->
<script>
    // btn_toTop ----------------------------------
    $(".btn_toTop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });


    // PC : click & hover ----------------------------
    // mouseenter ------------------------------
    $('.t1').mouseenter(function() {
        console.log('navbar mouseenter');
        // pc
        $('.t1').css('border-bottom', '1px solid rgb(11, 141, 173)');
        $('.t1>a').css('color', 'rgb(11, 141, 173)')
    });

    $('.t2').mouseenter(function() {
        console.log('navbar mouseenter');
        // pc
        $('.t2').css('border-bottom', '1px solid rgb(11, 141, 173)');
        $('.t2>a').css('color', 'rgb(11, 141, 173)')
    });

    $('.t3').mouseenter(function() {
        console.log('navbar mouseenter');
        // pc
        $('.t3').css('border-bottom', '1px solid rgb(11, 141, 173)');
        $('.t3>a').css('color', 'rgb(11, 141, 173)')
    });

    $('.t4').mouseenter(function() {
        console.log('navbar mouseenter');
        // pc
        $('.t4').css('border-bottom', '1px solid rgb(11, 141, 173)');
        $('.t4>a').css('color', 'rgb(11, 141, 173)')
    });


    // mouseleave --------------------------------
    $('.t1').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t1').css('border-bottom', '1px solid #707070');
        $('.t1>a').css('color', 'black')
    });

    $('.t2').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t2').css('border-bottom', '1px solid #707070');
        $('.t2>a').css('color', 'black')
    });

    $('.t3').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t3').css('border-bottom', '1px solid #707070');
        $('.t3>a').css('color', 'black')
    });

    $('.t4').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t4').css('border-bottom', '1px solid #707070');
        $('.t4>a').css('color', 'black')
    });


    // toggler 下拉選單 ---------------------------------

    // open/close toggler
    $('.btn_toggler').click(function() {
        console.log('btn_toggler click');
        $('.hd_toggler').removeClass('d-none');
    });

    $('.toggler_box_right').click(function() {
        console.log('.toggler_box_right click');
        $('.hd_toggler').addClass('d-none');
    });

    // tog_lv_0 商品分類
    $('.tog_lv_0').click(function() {
        console.log('商品分類 click');
        if ($('.tog_lv_1').hasClass('d-none')) {
            $('.tog_lv_1').removeClass('d-none');
        } else {
            $('.tog_lv_1').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
        $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
    });

    // tog_lv_2
    // tog_lv2-1 廚房家電
    $('.lv2-1').click(function() {
        console.log('廚房家電 click');
        if ($('.lv3-1').hasClass('d-none')) {
            $('.lv3-1').removeClass('d-none');
            $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
        } else {
            $('.lv3-1').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-2, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
        $('.lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
    });

    $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
        console.log('關閉廚房家電 click');
        $('.lv3-1').addClass('d-none');
        $('.lv2-1>p').css('color', '#5a5a5a');
    });

    // tog_lv2-2 居家安全
    $('.lv2-2').click(function() {
        console.log('居家安全 click');
        if ($('.lv3-2').hasClass('d-none')) {
            $('.lv3-2').removeClass('d-none');
            $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
        } else {
            $('.lv3-2').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-1, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
        $('.lv2-1>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
    });

    $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
        console.log('關閉居家安全 click');
        $('.lv3-2').addClass('d-none');
        $('.lv2-2>p').css('color', '#5a5a5a');
    });

    // tog_lv2-3 居家清潔
    $('.lv2-3').click(function() {
        console.log('居家安全 click');
        if ($('.lv3-3').hasClass('d-none')) {
            $('.lv3-3').removeClass('d-none');
            $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
        } else {
            $('.lv3-3').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-1, .lv3-2, .lv3-4, .lv3-5').addClass('d-none');
        $('.lv2-1>p, .lv2-2>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
    });

    $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
        console.log('關閉居家清潔 click');
        $('.lv3-3').addClass('d-none');
        $('.lv2-3>p').css('color', '#5a5a5a');
    });

    // tog_lv2-4 娛樂與教育
    $('.lv2-4').click(function() {
        console.log('居家安全 click');
        if ($('.lv3-4').hasClass('d-none')) {
            $('.lv3-4').removeClass('d-none');
            $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
        } else {
            $('.lv3-4').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-1, .lv3-2, .lv3-3, .lv3-5').addClass('d-none');
        $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-5>p').css('color', '#5a5a5a');
    });

    $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
        console.log('關閉娛樂與教育 click');
        $('.lv3-4').addClass('d-none');
        $('.lv2-4>p').css('color', '#5a5a5a');
    });

    // tog_lv2-5 智能周邊
    $('.lv2-5').click(function() {
        console.log('居家安全 click');
        if ($('.lv3-5').hasClass('d-none')) {
            $('.lv3-5').removeClass('d-none');
            $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
        } else {
            $('.lv3-5').addClass('d-none');
        }

        // 清除項目點選效果
        $('.lv3-1, .lv3-2, .lv3-3, .lv3-4').addClass('d-none');
        $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p').css('color', '#5a5a5a');
    });

    $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
        console.log('智能周邊 click');
        $('.lv3-5').addClass('d-none');
        $('.lv2-5>p').css('color', '#5a5a5a');
    });
</script>

</body>

</html>