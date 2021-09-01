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




<script>
    $(".gotocomment").click(function() {
        window.location.href = $(this).data('url');
    });
</script>
<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>