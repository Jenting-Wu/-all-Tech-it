<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>

<link rel="stylesheet" href="./CSS/member_info3.css">
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
                        <div class="personal">
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
                    <a class="col-3" href="./member_info1.php">會員資訊</a>
                    <a class="col-3" href="./member_info2.php">我的購物金</a>
                    <a class="col-3" href="./member_info3.php">
                        <i class="far fa-file-alt d-none d-lg-block"></i>
                        <br>歷史訂單</a>
                    <a class="col-3" href="./member_info4.php">我的評價</a>
                </div>
                <hr>

                <br>

                <!-- 訂單-->
                <div class="order_intro">
                    <div class="box">只要評論就送購物金！</div>
                </div>
                <?php
                if (isset($_SESSION['email'])) {
                    $sql = "SELECT `users_order`.`order_id`,`orders_detail`.`prod_id`,`orders_detail`.`prod_name`,`orders_detail`.`prod_thumbnail`,`users_order`.`created_at`
                            FROM `users_order` 
                            INNER JOIN `users` 
                            ON `users`.`email`=`users_order`.`email` 
                            INNER JOIN `orders_detail` 
                            ON `users_order`.`order_id`=`orders_detail`.`order_id`
                            WHERE `users`.`email` = '{$_SESSION['email']}'
                            ORDER BY `created_at` DESC, `order_id` DESC;";
                    $stmt = $pdo->query($sql);
                    if ($stmt->rowCount() > 0) {
                        foreach ($stmt->fetchAll() as $obj) {
                ?>
                            <div class="order_card">
                                <div class="card_photo">
                                    <img src="./db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>">
                                </div>
                                <div class="card-intro">
                                    <div class="card1">

                                        <p>訂單編號：<?= $obj['order_id'] ?></p>
                                        <p><?= $obj['prod_name'] ?></p>
                                        <br>
                                        <div class="to-com">
                                            <div class="d-flex justify-content-between align-center">
                                                <p>訂單成立時間：<?= $obj['created_at'] ?></p>
                                                <button type="button" class="btn btn-to-com gotocomment" data-url="member_info4.php?prod_id=<?= $obj['prod_id'] ?>&order_id=<?= $obj['order_id'] ?>">評論</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    }
                }
                ?>

            </div>
        </div>

                </div>




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




<script>
    $(".gotocomment").click(function() {
        window.location.href = $(this).data('url');
    });
</script>
</body>

</html>