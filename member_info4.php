<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>

<link rel="stylesheet" href="./CSS/member_info4.css">
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
                            <div class="member_level  d-none d-lg-block">一般會員</div>
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
                    <a class="col-3" href="./member_info3.php">歷史訂單</a>
                    <a class="col-3" href="./member_info4.php">
                        <i class="far fa-address-card d-none d-lg-block"></i>
                        <br>我的評價</a>
                </div>
                <hr>

                <!-- 評價提示-->
                <div class="order_intro">
                    <div class="box">只要評論就送購物金！</div>
                </div>

                <!-- 未評價 -->
                <br>
                <h4>尚未評價商品</h4>
                <br>
                <?php
                if (isset($_SESSION['email']) && isset($_GET['prod_id']) && isset($_GET['order_id'])) {
                    $sql = "SELECT `products`.`prod_id`,`products`.`prod_name`,`products`.`cate_id`,`products`.`prod_thumbnail`,`rate_A_name`,`rate_B_name`,`rate_C_name`,`rate_D_name`,`rate_E_name`
                    FROM `products` 
                    INNER JOIN `rate_item`
                    ON `products`.`cate_id`=`rate_item`.`cate_id`
                    INNER JOIN `orders_detail`
                    ON `products`.`prod_id`=`orders_detail`.`prod_id`
                    WHERE `products`.`prod_id`={$_GET['prod_id']}
                    AND `orders_detail`.`order_id`='{$_GET['order_id']}'";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                ?>
                        <div class="com_cards">

                            <div class="com_card1">
                                <div class="com_card_photo">
                                    <img src="./db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>">
                                </div>

                                <div class="com_card-intro">
                                    <h5><?= $obj['prod_name'] ?></h5>
                                    <div class="give_stars">
                                        <div class="row">
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_A_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_1">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_B_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_2">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_C_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_3">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_D_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_4">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-flex col-6">
                                                <p class="col-4"><?= $obj['rate_E_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_5">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 評論不需要訂單編號嗎？ -->
                                <!-- <p>訂單編號：0531093022122</p>
                        <p>Reborock石頭科技 掃地機器人二代 S5 Max(白/黑)</p> -->
                                <div class="com_card_bottom">
                                    <button type="button" class="btn btn_com_send">送出</button>
                                </div>
                            </div>

                        </div>

                    <?php
                    }
                } else if (isset($_SESSION['email'])) {
                    $sql = "SELECT `users_order`.`email`,`products`.`prod_id`,`products`.`prod_name`,`products`.`cate_id`,`products`.`prod_thumbnail`,
                    `rate_A_name`,`rate_B_name`,`rate_C_name`,`rate_D_name`,`rate_E_name` 
                    FROM `products` 
                    INNER JOIN `rate_item` ON `products`.`cate_id`=`rate_item`.`cate_id` 
                    INNER JOIN `orders_detail` ON `products`.`prod_id`=`orders_detail`.`prod_id` 
                    INNER JOIN `users_order` ON `orders_detail`.`order_id`=`users_order`.`order_id` 
                    WHERE `users_order`.`email`='{$_SESSION['email']}'";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>
                        <div class="com_cards">
                            <h5><?= $obj['prod_name'] ?></h5>
                            <div class="com_card1">

                                <div class="com_card_photo">
                                    <img src="./db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>">
                                </div>

                                <div class="com_card-intro">
                                    <h5>快速評論</h5>
                                    <div class="give_stars">
                                        <div class="row">
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_A_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_1">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_B_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_2">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_C_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_3">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center col">
                                                <p class="col-4"><?= $obj['rate_D_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_4">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="d-flex col-6">
                                                <p class="col-4"><?= $obj['rate_E_name'] ?>： </p>
                                                <ul class="stars col-8" style="list-style: none;" id="ul_5">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="com_card_bottom">
                                    <button type="button" class="btn btn_com_send">送出</button>
                                </div>
                                <!-- 評論不需要訂單編號嗎？ -->
                                <!-- <p>訂單編號：0531093022122</p>
                        <p>Reborock石頭科技 掃地機器人二代 S5 Max(白/黑)</p> -->
                            </div>
                        </div>

                <?php
                    }
                }
                ?>




            </div>




            <!-- 已評價 -->
            <br>
            <h4>已評價商品</h4>
            <br>

        </div>
        <!-- </div> 

        </div>  -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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




    let isClicked = false;

    // hover星星
    $('.stars li').hover(
        function() {
            if (!isClicked) {
                let index = $(this).index();
                // 依序將星星變成黃色
                for (let i = 0; i <= index; i++) {
                    $(this).parent('.stars').find('li').eq(i).css('color', '#f0ad4e');;
                }
            }
        },
        function() {
            // 滑鼠移開時變回灰色
            if (!isClicked) {
                $(this).css('color', '#adadad');
            }
        }
    );

    // 點擊星星
    $('.stars li').click(function() {
        isClicked = true;
        $(this).parent('.stars').find('li').css('color', '#adadad');
        let index = $(this).index();
        // let value = ($(this).index()) + 1;
        // 依序將星星變成黃色
        for (let i = 0; i <= index; i++) {
            $(this).parent('.stars').find('li').eq(i).css('color', '#f0ad4e');

        }
        // 顯示給予星星數
        // $('.star_val').val(value);
    })
</script>
<!-- <script src="custom_member.js"></script> -->
<script>
    $('.btn_com_send').click(function(event) {
        event.preventDefault();

        let count1 = 0;
        let count2 = 0;
        let count3 = 0;
        let count4 = 0;

        for (let i = 0; i < 5; i++) {
            if ($('#ul_1').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
                count1 = count1 + 1;
            }
        }
        for (let i = 0; i < 5; i++) {
            if ($('#ul_2').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
                count2 = count2 + 1;
            }
        }
        for (let i = 0; i < 5; i++) {
            if ($('#ul_3').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
                count3 = count3 + 1;
            }
        }
        for (let i = 0; i < 5; i++) {
            if ($('#ul_4').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
                count4 = count4 + 1;
            }
        }
        for (let i = 0; i < 5; i++) {
            if ($('#ul_5').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
                count5 = count5 + 1;
            }
        }
        console.log(count1);

        // 送出 post 請求
        let objRate = {
            order_id: 1,
            prod_id: 1,
            rate_A_score: count1,
            rate_B_score: count2,
            rate_C_score: count3,
            rate_D_score: count4,
            rate_E_score: count5

        };
        $.post("setRate.php", objRate, function(rbj) {
            if (rbj['success']) {
                //成功訊息
                alert('評論成功');
            }
            console.log(rbj);
        }, 'json');
    });
</script>

</body>

</html>