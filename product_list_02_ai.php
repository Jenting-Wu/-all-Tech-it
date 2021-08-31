<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>

<!-- CSS link ---------------------------->
<link rel="stylesheet" href="./CSS/product_list_ai.css">

<!-- JS link ----------------------------------->
<!-- <script src="JS/custom.js"></script> -->



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->

<!-- 桌機 ------------------------------------------->

<div class="wrap d-none d-lg-block">

    <!--桌機內容開始-->
    <div class="web_part">
        <!--兩大分頁-->
        <div class="lgbtn">
            <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                <a href="./product_list_01_smart.php?cate_id=10&sub_cate_id=21" class="btn btn-light display_1" aria-current="page">智慧家電</a>
                <a href="./product_list_02_ai.php?cate_id=1&sub_cate_id=3" class="btn btn-light active display_1">AI機器人</a>
            </div>
        </div>

        <!-- title : 熱門商品 -->
        <div class="lgtitle">
            <h4 class="display_title_2">熱門商品</h4>
        </div>

        <!-- 路徑 / 排序方式 -->
        <div class="pathnfilter">

            <!-- path ------------------->
            <div class="path">

                目前位置：

                <?php
                if (isset($_GET['cate_id'])) {
                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `cate_id` ={$_GET['cate_id']}";
                    $obj = $pdo->query($sql)->fetch();
                ?>
                    <a href="#"><?= $obj['cate_name'] ?></a>
                <?php
                }
                ?>

                <?php
                if (isset($_GET['sub_cate_id'])) {
                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `cate_id` ={$_GET['sub_cate_id']}";
                    $obj = $pdo->query($sql)->fetch();
                ?>
                    >
                    <a href="#"><?= $obj['cate_name'] ?></a>
                <?php
                }
                ?>

                <!-- 
                    >
                    <a href="#">Panasonic</a> -->

            </div>


            <!-- filter ---------------->
            <div class="filter">
                <div class="dropdown">
                    <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        最新上架
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">熱門程度</a>
                        <a class="dropdown-item" href="#">低價優先</a>
                        <a class="dropdown-item" href="#">評價最高</a>
                    </div>
                </div>
            </div>

        </div>

        <hr>

        <!--sidebar-->
        <div class="mainpart">

            <!-- 左側篩選 -->
            <div class="l_part col-2">
                <h3 class="mt-5">篩選</h3>

                <!-- 依品牌 -->
                <h5 class="mt-5">
                    熱門品牌
                </h5>
                <?php
                $sql = "SELECT * 
                            FROM `brands`
                            WHERE `brand_name` IN ('Roborock', 'iRobot', 'Philips' ,'SwitchBot', '小米', '狗尾草')";
                $stmt = $pdo->query($sql);
                foreach ($stmt->fetchAll() as $obj) {
                ?>
                    <div>
                        <input type="checkbox" name="product_name" data-brand="<?= $obj['brand_name'] ?>"> <label for="c1"><span></span><?= $obj['brand_name'] ?></label>
                    </div>
                <?php
                }
                ?>


                <!-- 依金額 -->
                <h5 class="mt-5">
                    依金額
                </h5>
                <div>
                    <input type="checkbox" name="product_name"> <label for="c1"><span></span>低→高</label>
                </div>
                <div>
                    <input type="checkbox" name="product_name"> <label for="c1"><span></span>高→低</label>
                </div>


                <!-- 優惠活動 -->
                <h5 class="mt-5">
                    優惠活動
                </h5>
                <div>
                    <input type="checkbox" name="product_name"> <label for="c1"><span></span>新→舊</label>
                </div>
                <div>
                    <input type="checkbox" name="product_name"> <label for="c1"><span></span>舊→新</label>
                </div>

            </div>



            <!--right-part-->
            <div class="r_part col-10">

                <!-- 上排分頁籤 -->
                <div class="smbtn col-12">
                    <div class="card text-center">

                        <!--php : 上排分頁籤 ------------------------>
                        <div class="card-header">

                            <ul class="nav nav-tabs card-header-tabs">

                                <?php
                                $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `cate_name` IN ('機器人AI') ";
                                $arr = $pdo->query($sql)->fetchAll();

                                // 預設active為空
                                foreach ($arr as $index => $obj) {
                                    ${'strClass' . $obj['cate_id']} = '';
                                }

                                // 
                                if (isset($_GET['cate_id'])) {
                                    ${'strClass' . $_GET['cate_id']} = 'active';
                                }

                                foreach ($arr as $obj) {
                                ?>

                                    <li class="nav-item">

                                        <a class="nav-link <?= ${'strClass' . $obj['cate_id']} ?>" href="product_list_02_ai.php?cate_id=<?= $obj['cate_id'] ?>"><?= $obj['cate_name'] ?></a>

                                    </li>

                                    <!-- <a class="nav-link active" href="#">廚房家電</a> -->
                                <?php
                                }
                                ?>

                            </ul>
                        </div>


                        <!--php : 上排分頁籤底下類別 ----------------------->
                        <div class="card-body">

                            <?php if (isset($_GET['cate_id'])) { ?>

                                <div class="minibtn">

                                    <?php
                                    $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `parent_id` = {$_GET['cate_id']}";
                                    $arr1 = $pdo->query($sql)->fetchAll();
                                    foreach ($arr1 as $obj1) {
                                    ?>

                                        <a class="btn btn-light" href="product_list_02_ai.php?cate_id=<?= $_GET['cate_id'] ?>&sub_cate_id=<?= $obj1['cate_id'] ?>"><?= $obj1['cate_name'] ?></a>

                                        <!-- <a href="#" class="btn btn-light">電子鍋</a> -->

                                    <?php } ?>

                                </div>

                            <?php } ?>

                        </div>


                    </div>
                </div>


                <!-- 商品展示連結-->
                <div class="maincards col-12">

                    <?php if (isset($_GET['sub_cate_id'])) { ?>

                        <div class="row justify-content-between">

                            <?php
                            $sql = "SELECT * FROM `products` 
                                        INNER JOIN `brands`
                                        ON `products`.`brand_id`=`brands`.`brand_id`
                                        WHERE `cate_id` = {$_GET['sub_cate_id']} ";



                            $stmt = $pdo->query($sql);
                            if ($stmt->rowCount() > 0) {
                                /**
                                 * 如果查詢結果很多筆
                                 * $stmt->fetchAll()
                                 * 
                                 * 如果查詢只有一筆
                                 * $stmt->fetch()
                                 */
                                $arr = $stmt->fetchAll();
                                foreach ($arr as $obj) {
                            ?>

                                    <!-- 商品card ------------>
                                    <div class="col-lg-3 col-sm-12 product" data-brand="<?= $obj['brand_name'] ?>">
                                        <div class="card">

                                            <div class="firstline">

                                                <h4 class="card-title"><?= $obj['brand_name'] ?></h4>

                                                <button class="compare" data-prod-id="<?= $obj['prod_id'] ?>" alt="">比較</button>

                                                <button class="saved" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_saved.svg" alt="">喜愛清單</button>
                                            </div>

                                            <!-- php : 商品名稱 -->
                                            <h5 class="card-title"><?= $obj['prod_name'] ?></h5>

                                            <!-- php : 商品圖片 -->
                                            <a href="product_detail.php?cate_id=<?= $_GET['cate_id'] ?>&sub_cate_id=<?= $_GET['sub_cate_id'] ?>&prod_id=<?= $obj['prod_id'] ?>">
                                                <img src="db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="...">
                                            </a>

                                            <!-- 優惠標示 -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox=" 0 0 149.945 36">
                                                <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                                    <g id="Group_275" data-name="Group 275">
                                                        <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                        <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                            <tspan x="0" y="0">88折</tspan>
                                                        </text>
                                                    </g>
                                                </g>
                                            </svg>

                                            <div class="card-body">

                                                <!-- php : 價格 -->
                                                <p class="price">$<?= $obj['prod_price'] ?></p>

                                                <!-- 加入購物車 -->
                                                <button class="joincart" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
                                                    加入購物車</button>
                                            </div>


                                        </div>
                                    </div>

                        <?php
                                }
                            }
                        }
                        ?>

                        <!-- 商品card -->
                        <!-- <div class="col-lg-3 col-sm-12">
                                <div class="card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <a href="#" class="compare"><img src="
                                                ./img/icon_compare-list.svg" alt="">比較</a>
                                        <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">加入購物車</a>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <img src="./img/1.jpeg" class="card-img-top" alt="...">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36""
                                        viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88折</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="card-body">
                                        <a href="#" class="price">$18,888</a>
                                        <a href="#" class="joincart">加入購物車</a>
                                    </div>
                                </div>
                            </div> -->


                        </div>


                </div>


            </div>
        </div>



    </div>

</div>

<!-- 手機 ------------------------------------------->

<div class="wrap d-sm-block d-md-none">

    <!-- 手機內容開始 -->
    <div class="moblie_part">

        <!--兩大分頁-->
        <div class="lgbtn">
            <div class="btn-group btn-group-lg col-12" style="padding: 0;">
                <a href="./product_list_01_smart.php?cate_id=10&sub_cate_id=21" class="btn btn-light active" aria-current="page">智慧家電</a>
                <a href="./product_list_02_ai.php?cate_id=1&sub_cate_id=3" class="btn btn-light">Ai 機器人</a>
            </div>
        </div>

        <!-- title : 熱門商品 -->
        <div class="lgtitle">
            <h4>熱門商品</h4>
        </div>

        <hr>

        <!--path -------------------->
        <div class="path d-flex row justify-content-center">

            <P style="font-size: 12px;">目前位置：</P>

            <?php
            if (isset($_GET['cate_id'])) {
                $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `cate_id` ={$_GET['cate_id']}";
                $obj = $pdo->query($sql)->fetch();
            ?>
                <a href="#"><?= $obj['cate_name'] ?></a>
            <?php
            }
            ?>

            <?php
            if (isset($_GET['sub_cate_id'])) {
                $sql = "SELECT `cate_id`, `cate_name` FROM `categories` WHERE `cate_id` ={$_GET['sub_cate_id']}";
                $obj = $pdo->query($sql)->fetch();
            ?>

                <P style="font-size: 12px;">&nbsp;>&nbsp; </P>

                <a href="#"><?= $obj['cate_name'] ?></a>
            <?php
            }
            ?>

            <!-- 
                    >
                    <a href="#">Panasonic</a> -->
        </div>


        <div class="moblie_filter">

            <!-- 篩選+排序 -->
            <div class="head">

                <!-- 篩選列表 ----------------------------->
                <button class="m_button">篩選</button>

                <!-- 排序列表 -->
                <div class="filter">
                    <div class="dropdown">
                        <button class="btndropdown-toggle dropdown_btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            最新上架
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">熱門程度</a>
                            <a class="dropdown-item" href="#">低價優先</a>
                            <a class="dropdown-item" href="#">評價最高</a>
                        </div>
                    </div>
                </div>


            </div>

            <!-- 商品展示連結-->
            <div class="m_body">

                <?php if (isset($_GET['sub_cate_id'])) { ?>

                    <?php
                    $sql = "SELECT * FROM `products` 
                                        WHERE `cate_id` = {$_GET['sub_cate_id']} ";

                    $stmt = $pdo->query($sql);
                    if ($stmt->rowCount() > 0) {
                        /**
                         * 如果查詢結果很多筆
                         * $stmt->fetchAll()
                         * 
                         * 如果查詢只有一筆
                         * $stmt->fetch()
                         */
                        $arr = $stmt->fetchAll();
                        foreach ($arr as $obj) {
                    ?>

                            <div class="m_card">


                                <div class=" m_card_head">

                                    <!-- php : 商品名稱 -->
                                    <h6 class="mb-0"><?= $obj['prod_name'] ?></h6>

                                    <!-- 優惠標籤 -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="83.3" height="20" viewBox=" 0 0 149.945 36">
                                        <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                            <g id="Group_275" data-name="Group 275">
                                                <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                                <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                    <tspan x="0" y="0">88折</tspan>
                                                </text>
                                            </g>
                                        </g>
                                    </svg>

                                </div>

                                <div class="card_center">

                                    <!-- php : 商品圖片 -->
                                    <img src="db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" alt="">


                                    <div class="r_rpart">

                                        <!-- php : 加入喜好清單 -->
                                        <div class="m_button2 mr-2" data-prod-id="<?= $obj['prod_id'] ?>" alt="">
                                            收藏</div>

                                        <!-- php : 加入比較列表 -->
                                        <div class="m_button2 mr-2" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_compare-list.svg" alt="">
                                            比較</div>


                                        <div class="m_rpart">

                                            <!-- php : price -->
                                            <div class="m_price mb-3">$<?= $obj['prod_price'] ?></div>

                                            <!-- php : 加入購物車 -->
                                            <button class="m_button1" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>"><img src="./img/icon_shopping-cart.svg" alt="">
                                                加入購物車</button>
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



<!-- 列表篩選jq -->
<script>
    $('input[type="checkbox"][name="product_name"]').click(function() {
        console.log('篩選 click');

        // 淡出
        $('div.product').fadeOut();

        // 有打勾才顯示
        let checkbox_checked = $('input[type="checkbox"][name="product_name"]:checked');
        if (checkbox_checked.length > 0) {
            $('input[type="checkbox"][name="product_name"]:checked').each(function(index, element) {
                $(`div.product[data-brand="${$(element).attr('data-brand')}"]`).fadeIn();
            });
        } else {
            $('div.product').fadeIn();
        }
    });
</script>

<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>