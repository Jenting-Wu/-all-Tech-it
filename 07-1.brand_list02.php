<?php require_once 'db.inc.php' ?>
<?php require_once 'head.php' ?>




<!-- index css link-->
<link rel="stylesheet" href="./CSS/07-1.brand_list.css">





<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">
    <div class="row cate flex-row-reverse">
        <!-- 我想吃肉了 -->
        <?php
        $sql = "SELECT `cate_id`,`cate_name` FROM categories WHERE parent_id = 0;";
        $arr = $pdo->query($sql)->fetchAll();

        foreach ($arr as $index => $obj) {
            ${'strClass' . $index} = '';
        }

        // 我是active :)))))))))))))
        if (isset($_GET['cate_id'])) {
            ${'strClass' . ($_GET['cate_id'] - 1)} = 'btn_touch';
        }

        foreach ($arr as $index => $obj) {
        ?>
            <a href="07-1.brand_list02.php?cate_id=<?= $obj['cate_id'] ?>" class="col-6 cate_00  robot text-center  <?= ${'strClass' . $index} ?>">
                <h4 class="display_1"><?= $obj['cate_name'] ?></h4>
            </a>
        <?php
        }
        ?>

    </div>
    <section class="d-flex flex-column section_1">
        <h2 class="display_title_2 my-5 text-center
            text-md-left">三大智慧家庭平台支援的裝置</h2>
        <div class="homepad_brand col-12">
            <img src="./db_img/brands/works-with-google-assistant-1.png" alt="">
            <img src="./db_img/brands/works-with-apple-homekit-e1570729917983.jpeg" alt="">
            <img src="./db_img/brands/works-with-amazon-alexa.png" alt="">
        </div>
    </section>
    <section class="section_2">
        <?php if (isset($_GET['cate_id'])) {
            $sql = "SELECT * FROM categories WHERE `cate_id`={$_GET['cate_id']} ";
            $arr = $pdo->query($sql)->fetchAll();
            foreach ($arr as $obj) {
        ?>
                <h2 class="display_title_2 text-center
            text-md-left my-3 my-md-5 "><span><?= $obj['cate_name'] ?></span>的所有品牌</h2>
        <?php
            }
        }
        ?>

        <!-- WHERE `hasAI`LIKE '%{$_GET['cate_id']}%' -->


        <div class="row brand_icon">

            <!-- 所有品牌出現 -->
            <?php $sql = "SELECT * FROM brands ";



            $str = "";
            if (isset($_GET['cate_id'])) {
                $sql .= "WHERE `hasAI`LIKE '%{$_GET['cate_id']}%' ";
                $str = "cate_id={$_GET['cate_id']}&";
            }
            $arr = $pdo->query($sql)->fetchAll();
            foreach ($arr as $obj) {
            ?>
                <div class="col-6 col-md-2 brand_wrap">
                    <a href="07-2.brand_list_item.php?<?= $str ?>brand_id=<?= $obj['brand_id'] ?>"><img src="./db_img/brands/<?= $obj['brand_img'] ?>" alt=""></a>
                </div>

            <?php
            }

            ?>
        </div>


    </section>


</div>
<!-- 在這裡結束網頁撰寫 ----------------------->


<!------------------- brand-list Js---------------------->
<script src="./js/07-1.brand_list.js"></script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>