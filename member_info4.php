<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>

<link rel="stylesheet" href="./CSS/member_info4.css?v20210903">
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
                        <div class="personal">
                            <div class="photo">
                                <img src="<?= $obj['photo_sticker'] ?>" alt="">
                            </div>
                            <a class="d-sm-block d-md-none" href="">更改大頭貼</a>
                            <h4 class="d-none d-lg-block"><?= $obj['user_name'] ?></h4>
                            <div class="member_level  d-none d-lg-block">一般會員</div>
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
                    <a class="col-3" href="./member_info2.php">我的購物金</a>
                    <a class="col-3" href="./member_info3.php">歷史訂單</a>
                    <a class="col-3" href="./member_info4.php">
                        <i class="far fa-address-card d-none d-lg-block"></i>
                        <br>我的評價</a>
                </div>
                <hr>

                <!-- 評價提示-->
                <!-- <div class="order_intro">
                    <div class="box">只要評論就送購物金！</div>
                </div> -->

                <!-- 未評價 -->
                <br>
                <h4>評價商品</h4>
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
                                <div class="hasSubmit">
                                    <div class="hasSubmitContent">已評論</div>
                                </div>

                                <div class="com_card_photo">
                                    <img src="./db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>">
                                </div>

                                <div class="com_card-intro">
                                    <h5><?= $obj['prod_name'] ?></h5>
                                    <div class="give_stars">
                                        <div class="stars_div">
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_A_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_1" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_B_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_2" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_C_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_3" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_D_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_4" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex ul_wrap end_ul">
                                                <p class="star_title"><?= $obj['rate_E_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_5" data-isclick="0">
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

                            <div class="com_card1">
                                <div class="hasSubmit">
                                    <div class="hasSubmitContent">已評論</div>
                                </div>

                                <div class="com_card_photo">
                                    <img src="./db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>">
                                </div>

                                <div class="com_card-intro">
                                    <h5><?= $obj['prod_name'] ?></h5>
                                    <div class="give_stars">
                                        <div class="stars_div">
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_A_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_1" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_B_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_2" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_C_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_3" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex center ul_wrap">
                                                <p class="star_title"><?= $obj['rate_D_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_4" data-isclick="0">
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                    <li>★</li>
                                                </ul>
                                            </div>
                                            <div class="d-flex ul_wrap">
                                                <p class="star_title"><?= $obj['rate_E_name'] ?>： </p>
                                                <ul class="stars" style="list-style: none;" id="ul_5" data-isclick="0">
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


        </div>
        <!-- </div> 

        </div>  -->
                </div>
</div>

</div>

<!-- ↑↑↑ 內容結束 ↑↑↑ -->

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    // hover星星
    $('.stars li').hover(
        function() {
            if ($(this).parent().attr('data-isclick') == '0') {
                let index = $(this).index();
                // 依序將星星變成黃色
                for (let i = 0; i <= index; i++) {
                    $(this).parent('.stars').find('li').eq(i).css('color', '#f0ad4e');;
                }
            }
        },
        function() {
            // 滑鼠移開時變回灰色
            if ($(this).parent().attr('data-isclick') == '0') {
                $(this).parent('.stars').find('li').css('color', '#adadad');
            }
        }
    );

    // 點擊星星
    $('.stars li').click(function() {
        $(this).parent().attr('data-isclick', '1');
        $(this).parent('.stars').find('li').css('color', '#adadad');
        let index = $(this).index();
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
        $(this).parents('.com_card1').find('.hasSubmit').css('display', 'flex');
        // event.preventDefault();

        // let count1 = 0;
        // let count2 = 0;
        // let count3 = 0;
        // let count4 = 0;

        // for (let i = 0; i < 5; i++) {
        //     if ($('#ul_1').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
        //         count1 = count1 + 1;
        //     }
        // }
        // for (let i = 0; i < 5; i++) {
        //     if ($('#ul_2').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
        //         count2 = count2 + 1;
        //     }
        // }
        // for (let i = 0; i < 5; i++) {
        //     if ($('#ul_3').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
        //         count3 = count3 + 1;
        //     }
        // }
        // for (let i = 0; i < 5; i++) {
        //     if ($('#ul_4').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
        //         count4 = count4 + 1;
        //     }
        // }
        // for (let i = 0; i < 5; i++) {
        //     if ($('#ul_5').find('li').eq(i).css('color') == 'rgb(240, 173, 78)') {
        //         count5 = count5 + 1;
        //     }
        // }
        // console.log(count1);

        // // 送出 post 請求
        // let objRate = {
        //     order_id: 1,
        //     prod_id: 1,
        //     rate_A_score: count1,
        //     rate_B_score: count2,
        //     rate_C_score: count3,
        //     rate_D_score: count4,
        //     rate_E_score: count5

        // };
        // $.post("setRate.php", objRate, function(rbj) {
        //     if (rbj['success']) {
        //         //成功訊息
        //         alert('評論成功');
        //     }
        //     console.log(rbj);
        // }, 'json');
    });
</script>
<script>

</script>

<!-- -- php link -------------------------------------------- -->
<?php require_once 'foot.php' ?>