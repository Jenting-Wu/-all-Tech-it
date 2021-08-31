<?php require_once 'db.inc.php' ?>
<?php require_once 'head.php' ?>


<!-- index css -->
<link rel="stylesheet" href="./CSS/07-2.brand_list_item.css">




<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">
    <section class="section_1">
        <div class="brand_title d-flex flex-column flex-md-row align-items-center justify-content-center">
            <div class="brand_img col-12 col-md-3">
                <img src="./db_img/brands/20210401000082.jpeg" alt="">
            </div>
            <div class="brand_text col-12 col-md-7">
                <p>
                    米家智慧家庭是由小米與其旗下廠商共同組成之平台，旨在讓小米生態鏈所有企業的智能裝置能在同一平台共同操作，而“米家App”
                    即是手機用戶操作這些智能裝置的介面。米家產品鏈十分齊全，幾乎所有類型的智能居家裝置皆有販售（僅限陸版產品，台灣還在陸續引進…），因此光靠小米單一品牌就能開始打造智慧家庭了。
                </p>
            </div>
        </div>
        <?php if (isset($_GET['brand_id'])) {
            $sql = "SELECT *
                FROM `brands`
                WHERE `brand_id`={$_GET['brand_id']} ";
            $arr = $pdo->query($sql)->fetchAll();
            foreach ($arr as $obj) {
        ?>
                <h2 class="brand_CH display_title_2 my-5 text-center"><?= $obj['brand_name'] ?></h2>
        <?php
            }
        }
        ?>

    </section>
    <!-- <div class="row cate">
            <div class="col-6 cate_00 text-center" id="AI">
                <h4 class="display_1">智慧AI</h4>
            </div>
            <div class="col-6 cate_00 text-center display_1" id="Home">
                <h4 class="display_1">智慧家居</h4>
            </div>
        </div> -->
    <section class="section_AI">

        <?php if (isset($_GET['brand_id'])) { //取得品牌
            $sql = "SELECT * FROM `products` 
                INNER JOIN `categories`
                ON `products`.`cate_id`=`categories`.`cate_id`
                WHERE `brand_id`={$_GET['brand_id']}
                GROUP BY `products`.`cate_id`";
            $arr1 = $pdo->query($sql)->fetchAll();
            foreach ($arr1 as $obj1) {
        ?>

                <div class="prod_list">
                    <h3 class="display_3">
                        <!-- 類別名稱  ex:掃地機器人-->
                        <?= $obj1['cate_name'] ?>
                    </h3>
                    <div class="row">
                        <?php
                        $sql = "SELECT * FROM `products`
                            WHERE `cate_id`={$obj1['cate_id']} 
                            AND `brand_id`={$_GET['brand_id']} ";
                        $arr2 = $pdo->query($sql)->fetchAll();
                        foreach ($arr2 as $obj2) {
                        ?>
                            <div class="prod_thumbnail col-6 col-md-3">
                                <a class="thumbail_link" href="product_detail.php?prod_id=<?= $obj2['prod_id'] ?>"><img src="db_img/img_prod_thumbnail/<?= $obj2['prod_thumbnail'] ?>">
                                    <p><?= $obj2['prod_name'] ?></p>
                                </a>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </section>

    <div class="row justify-content-center">
        <div class="btn_back col-8 col-md-2">
            <a href="07-1.brand_list02.php">回品牌專區</a>
        </div>
    </div>

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->





<script src="./JS/07-2.brand-list-item.js"></script>
</body>

<?php require_once 'foot.php' ?>