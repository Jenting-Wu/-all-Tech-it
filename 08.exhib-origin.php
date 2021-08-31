<?php require_once 'db.inc.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Version - Header & Footer</title>


    <!-- bootstrap 4 link -------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!-- jquery link -------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- owl.carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    </link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    </link>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">
    <link rel="stylesheet" href="CSS/08.exhib.css">


    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>


    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>

    <!-- HD : Header (Navbar) ----------------------------------------------->
    <span class="black"></span>
    <!-- HD : Header (Navbar) ----------------------------------------------->
    <header>
        <nav class="navbar fixed-top hd_navbar">
            <!-- logo ------------------------>
            <a href="01-index.html" class="d-none d-lg-block">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- nav-link d-none d-lg-block-------------------------->
            <div class="hd_nav-link">

                <!-- title-link ---------------------->
                <div class="hd_title">

                    <!-- 品牌專區 -->
                    <div class="hd_title_link t1">
                        <a href="07-1.brand_list02.php">品牌專區</a>
                    </div>

                    <!-- 商品分類 -->
                    <div class="hd_title_link t2">
                        <a href="product_list_01_smart.php">商品分類</a>
                    </div>

                    <!-- 智慧專欄 -->
                    <div class="hd_title_link t3">
                        <a href="#">智慧專欄</a>
                    </div>

                    <!-- 窩的智慧 -->
                    <div class="hd_title_link t4">
                        <a href="08.exhib-origin.php">窩的智慧</a>
                    </div>

                </div>

                <!-- icon-link --------------------->
                <div class="hd_icon">

                    <!-- 比較清單 -->
                    <div class="hd_icon_link i1">
                        <a href="#">
                            <!-- <img src="./img/icon_compare-list.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <line class="cls-1" y1="17.85" x2="37.51" y2="17.85" />
                                        <line class="cls-1" x1="18.83" x2="18.83" y2="37.51" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 喜好清單 -->
                    <div class="hd_icon_link i2">
                        <a href="follow.php">
                            <!-- <img src="./img/icon_saved.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.14 35.05">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M34,3.69c-4.13-4.13-10.83-3.25-15,.89-4.13-4.14-10.84-5-15-.89a10.59,10.59,0,0,0,0,15l15,15,15-15A10.57,10.57,0,0,0,34,3.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 購物車 -->
                    <div class="hd_icon_link i3">
                        <a href="shopping_cart.php">
                            <!-- <img src="./img/icon_shopping-cart.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-1" d="M0,1H8.08A1.51,1.51,0,0,1,9.55,2.16L15.38,27a1.5,1.5,0,0,0,1.47,1.16h24A1.51,1.51,0,0,0,42.31,27L46.24,8.12A1.51,1.51,0,0,0,44.77,6.3H14.92" />
                                        <line class="cls-1" x1="24.81" y1="12.44" x2="41.63" y2="12.44" />
                                        <line class="cls-1" x1="21.04" y1="16.79" x2="41.63" y2="16.79" />
                                        <line class="cls-1" x1="31.35" y1="22.07" x2="41.57" y2="22.07" />
                                        <circle class="cls-1" cx="19.29" cy="35.18" r="3.1" />
                                        <circle class="cls-1" cx="38.6" cy="35.18" r="3.1" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- 會員登入 / 註冊 -->
                    <div class="hd_icon_link i4">
                        <a href="#">
                            <!-- <img src="./img/icon_member.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.76 45.4">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <circle class="cls-1" cx="21.38" cy="9.67" r="8.67" />
                                        <path class="cls-1" d="M1.06,44.4H41.7C40.12,16.83,2.63,16.83,1.06,44.4Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- 會員登入 / 註冊狀態 ------------------------->
                <div class="hd_member_state">


                    <div class="tog_icon_link" style="color: white;">

                        <?php if (isset($_SESSION['user_name'])) { ?>
                            <?php echo $_SESSION['user_name'] ?>｜<a id="logout" class="btn btn-link">登出</a>
                        <?php } else { ?>
                            <a href="login.php">登入</a>｜<a href="signup.php">註冊</a>
                        <?php } ?>
                    </div>


                </div>

            </div>

            <!-- mobile_nav d-lg-none------------------------------>
            <!-- 三明治選單 -->
            <div class="hd_icon_link d-lg-none btn_toggler">
                <img src="./img/icon_menu2_black_24dp.svg" alt="">
            </div>

            <!-- LOGO -->
            <a href="01-index.html" class="d-lg-none">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- 購物車 -->
            <div class="hd_icon_link i4 d-lg-none">
                <a href="shopping_cart.php"><img src="./img/icon_shopping-cart.svg" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- 三明治選單 -------------------------------------->
    <div class="hd_toggler d-lg-none d-none">
        <div class="toggler_box">

            <!-- icon-link -->
            <div class="tog_icon_box">
                <!-- 註冊 / 登入 -->

                <div class="tog_icon_link">
                    <!-- <img class="tog_icon" src="./img/icon_member.svg" alt=""> -->
                    <!-- <a href="#"></a> -->

                    <div class="tog_icon_link">
                        <img class="tog_icon" src="./img/icon_member.svg" alt="">
                        <?php if (isset($_SESSION['user_name'])) { ?>
                            <?php echo $_SESSION['user_name'] ?>｜<a id="logout" class="btn btn-link">登出</a>
                        <?php } else { ?>
                            <a href="#">登入</a>｜<a href="#">註冊</a>
                        <?php } ?>
                    </div>

                </div>

                <!-- 喜好清單 -->
                <a href="follow.php">
                    <div class="tog_icon_link">
                        <img class="tog_icon" src="./img/icon_saved.svg" alt="">
                        喜好清單
                    </div>
                </a>

                <!-- 比較清單 -->
                <a href="compare.php">
                    <div class="tog_icon_link">
                        <img class="tog_icon" src="./img/icon_compare-list.svg" alt="">
                        比較清單
                    </div>
                </a>

            </div>

            <!-- title-link ---------------------->
            <div class="hd_title">

                <!-- 品牌專區 -->
                <div class="hd_title_link">
                    <a href="07-1.brand_list.php">品牌專區</a>
                </div>

                <!-- 智慧家電商品分類_level_0 -->
                <div class="hd_title_link tog_lv_0">
                    <a href="#">智慧家電</a>
                </div>

                <!-- 商品分類細項_level_1 ---------------->
                <div class="tog_lv_1 d-none">

                    <!-- 廚房家電_level_2 -->
                    <div class="tog_lv_2 lv2-1">
                        <p>廚房家電</p>

                        <!-- 商品項目(不含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-1">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 7";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                                <!-- <div class="tog_lv_4">
                                    <a href="#">烹飪機器人</a>
                                </div> -->

                            <?php
                            }
                            ?>

                        </div>

                    </div>

                    <!-- 居家安全_level_2 -->
                    <div class="tog_lv_2 lv2-2">
                        <p>居家安全</p>

                        <!-- 商品項目(不含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-2">


                            <?php
                            $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 8";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>

                        </div>

                    </div>

                    <!-- 居家清潔_level_2 -->
                    <div class="tog_lv_2 lv2-3">
                        <p>居家清潔</p>

                        <!-- 商品項目(不含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-3">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 9";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>

                            <!-- <div class="tog_lv_4">
                                <a href="#">掃地機器人</a>
                            </div> -->


                        </div>

                    </div>

                    <!-- 娛樂與教育_level_2 -->
                    <div class="tog_lv_2 lv2-4">
                        <p>娛樂與教育</p>

                        <!-- 商品項目(不含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-4">


                            <?php
                            $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 10";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>


                            <!-- <div class="tog_lv_4">
                                <a href="#">管家機器人</a>
                            </div> -->

                            <!-- <div class="tog_lv_4">
                                <a href="#">陪伴機器人</a>
                            </div> -->

                        </div>
                    </div>

                    <!-- 智能周邊_level_2 -->
                    <div class="tog_lv_2 lv2-5">
                        <p>智能周邊</p>

                        <!-- 商品項目(不含機器人)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-5">

                            <?php
                            $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 11";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                            ?>

                                <div class="tog_lv_4">

                                    <a href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                        <?= $obj['cate_name'] ?>
                                    </a>

                                </div>

                            <?php
                            }
                            ?>


                        </div>

                    </div>

                </div>

                <!-- AI機器人商品分類_level_0 -->
                <div class="hd_title_link  tog_lv_0_ai">
                    <a href="#">AI機器人</a>
                </div>

                <!-- 商品分類細項_level_1 ---------------->
                <div class="tog_lv_1_ai d-none" style="
                    margin: 5px 0 0px 30px;
                    display: flex;
                            flex-direction: column;text-align: left;letter-spacing: 0.3rem;font-size: 1rem;
                            font-weight: 400;
                            color: #5a5a5a; ">

                    <?php
                    $sql = "SELECT `cate_id`, `cate_name`, `parent_id` FROM `categories` WHERE `parent_id` = 1";
                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj) {
                    ?>

                        <div class="tog_lv_2_ai lv2-1" style="margin-bottom: 20px;">

                            <a style="color: #5a5a5a; text-decoration: none;" href="product_list_01_smart.php?cate_id=<?= $obj['parent_id'] ?>&sub_cate_id=<?= $obj['cate_id'] ?>">
                                <?= $obj['cate_name'] ?>
                            </a>

                        </div>


                    <?php
                    }
                    ?>

                </div>

                <!-- 智慧專欄 -->
                <div class="hd_title_link">
                    <a href="#">智慧專欄</a>
                </div>

                <!-- 窩的智慧 -->
                <div class="hd_title_link">
                    <a href="#">窩的智慧</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>


    <!-- 從這裡開始進行網頁撰寫 ------------------->
    <!-- WP : wrap -->
    <!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
    <div class="wrap">




        <!---------- 點選房間 ---------->
        <div class="exhib_room">
            <div class="wrap_ul">

                <div class="wrap_li">
                    <div class="wrap_s">
                        <a href="08.exhib-origin.php?location_id=2" id="livingroom">
                            <svg xmlns="http://www.w3.org/2000/svg" width="81.959" height="63.746" viewBox="0 0 81.959 63.746">
                                <defs>
                                    <style>
                                        .cls-0 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <path id="icon_livingroom01" class="cls-0" d="M-13025.76,24099.979v-4.555h-63.747v4.555a1.517,1.517,0,0,1-1.518,1.518,1.514,1.514,0,0,1-1.519-1.518v-4.555h-4.555a1.515,1.515,0,0,1-1.518-1.518v-18.213a1.514,1.514,0,0,1,1.518-1.518h33.389a1.514,1.514,0,0,1-1.512-1.52,1.514,1.514,0,0,1,1.512-1.518h4.555v-3.031h-22.767a1.524,1.524,0,0,1-1.519-1.523v-27.316a1.519,1.519,0,0,1,1.519-1.518h48.57a1.516,1.516,0,0,1,1.519,1.518v27.316a1.521,1.521,0,0,1-1.519,1.523h-22.768v3.031h4.555a1.516,1.516,0,0,1,1.519,1.518,1.516,1.516,0,0,1-1.519,1.52h33.389a1.514,1.514,0,0,1,1.519,1.518v18.213a1.516,1.516,0,0,1-1.519,1.518h-4.548v4.555a1.514,1.514,0,0,1-1.519,1.518A1.514,1.514,0,0,1-13025.76,24099.979Zm-15.176-7.592h21.249v-15.176h-21.249Zm-30.358,0h27.322v-6.066h-27.322Zm-24.285,0h21.249v-15.176h-21.249Zm24.285-9.1h27.322v-6.074h-27.322Zm-9.109-18.219h45.534v-24.285h-45.534Zm44.017,18.213a1.519,1.519,0,0,1-1.519-1.514,1.519,1.519,0,0,1,1.519-1.518h3.036a1.516,1.516,0,0,1,1.519,1.518,1.515,1.515,0,0,1-1.519,1.514Zm-45.534,0a1.519,1.519,0,0,1-1.519-1.514,1.519,1.519,0,0,1,1.519-1.518h3.036a1.515,1.515,0,0,1,1.518,1.518,1.514,1.514,0,0,1-1.518,1.514Z" transform="translate(13098.615 -24037.75)" />
                            </svg>
                            <p>客廳</p>
                        </a>
                    </div>
                </div>

                <div class="wrap_li">
                    <div class="wrap_s">
                        <a href="08.exhib-origin.php?location_id=5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17.906" height="20.379" viewBox="0 0 17.906 20.379">
                                <defs>
                                    <style>
                                        .cls-2 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <path id="icon_shower" class="cls-2" d="M-788.714-11205.118v-17.934a1.225,1.225,0,0,0-1.223-1.223h-7.043a1.225,1.225,0,0,0-1.223,1.223v.416a7.263,7.263,0,0,1,3.454,1.063.405.405,0,0,1,.135.561.4.4,0,0,1-.558.136,6.515,6.515,0,0,0-3.392-.952h-.045a6.36,6.36,0,0,0-4.381,1.727,4.048,4.048,0,0,0-1.2,2.5h11.157a3.634,3.634,0,0,0-.233-1.042.413.413,0,0,1,.234-.529.408.408,0,0,1,.527.236,4.486,4.486,0,0,1,.293,1.4,1.19,1.19,0,0,1,.791,1.161,1.25,1.25,0,0,1-.3.826,1.145,1.145,0,0,1-.841.4.373.373,0,0,1-.057,0h-12a.361.361,0,0,1-.057,0,1.169,1.169,0,0,1-1.138-1.222,1.261,1.261,0,0,1,.3-.825,1.116,1.116,0,0,1,.5-.335,4.84,4.84,0,0,1,1.438-3.142,7.049,7.049,0,0,1,4.552-1.954v-.42a2.038,2.038,0,0,1,2.037-2.037h7.043a2.038,2.038,0,0,1,2.037,2.037v17.934a.406.406,0,0,1-.406.408A.408.408,0,0,1-788.714-11205.118Zm-3.9-10.849a.347.347,0,0,0,.282-.113.46.46,0,0,0,.1-.3.373.373,0,0,0-.38-.405h-12a.355.355,0,0,0-.282.11.466.466,0,0,0-.1.295.377.377,0,0,0,.38.409Zm-6.406,10.189v-1.631a.4.4,0,0,1,.406-.406.407.407,0,0,1,.408.406v1.631a.408.408,0,0,1-.408.408A.406.406,0,0,1-799.016-11205.777Zm2.592-3.26v-1.631a.406.406,0,0,1,.406-.408.408.408,0,0,1,.409.408v1.631a.407.407,0,0,1-.409.406A.406.406,0,0,1-796.424-11209.037Zm-2.592,0v-1.631a.406.406,0,0,1,.406-.408.408.408,0,0,1,.408.408v1.631a.407.407,0,0,1-.408.406A.406.406,0,0,1-799.016-11209.037Zm-2.595,0v-1.631a.408.408,0,0,1,.408-.408.408.408,0,0,1,.409.408v1.631a.407.407,0,0,1-.409.406A.409.409,0,0,1-801.61-11209.037Zm7.778-3.262v-1.632a.407.407,0,0,1,.409-.405.4.4,0,0,1,.406.405v1.632a.407.407,0,0,1-.406.408A.409.409,0,0,1-793.832-11212.3Zm-2.592,0v-1.632a.4.4,0,0,1,.406-.405.407.407,0,0,1,.409.405v1.632a.409.409,0,0,1-.409.408A.407.407,0,0,1-796.424-11212.3Zm-2.592,0v-1.632a.4.4,0,0,1,.406-.405.407.407,0,0,1,.408.405v1.632a.409.409,0,0,1-.408.408A.407.407,0,0,1-799.016-11212.3Zm-2.595,0v-1.632a.407.407,0,0,1,.408-.405.407.407,0,0,1,.409.405v1.632a.409.409,0,0,1-.409.408A.409.409,0,0,1-801.61-11212.3Zm-2.592,0v-1.632a.407.407,0,0,1,.408-.405.4.4,0,0,1,.406.405v1.632a.407.407,0,0,1-.406.408A.409.409,0,0,1-804.2-11212.3Zm10.2-7.59a.388.388,0,0,1-.118-.284.4.4,0,0,1,.118-.29.424.424,0,0,1,.575,0,.416.416,0,0,1,.121.29.4.4,0,0,1-.121.284.4.4,0,0,1-.287.124A.391.391,0,0,1-794.007-11219.889Z" transform="translate(805.805 11225.089)" />
                            </svg>
                            <p>浴室</p>
                        </a>
                    </div>
                </div>

                <div class="wrap_li">
                    <div class="wrap_s">
                        <a href="08.exhib-origin.php?location_id=4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 74.27 82.77">
                                <defs>
                                    <style>
                                        .cls-3 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-3" d="M73.47,46.13h-1V42.5a.8.8,0,0,0-.8-.81h-4V22.47a.8.8,0,0,0-.8-.8H66.7L56.12,3.25a.8.8,0,0,0-.7-.4H51.36A2.47,2.47,0,0,0,50.47,2L47.33.3a2.53,2.53,0,0,0-3.42,1l-2.33,4.3a13.19,13.19,0,0,0-13.11,5.47A2.05,2.05,0,0,0,29,13.94a1.18,1.18,0,0,0,.19.11l6.06,3.3A4.5,4.5,0,0,0,43,21.58l5.78,3.09h0a2.06,2.06,0,0,0,2.79-.84l.09-.19A13.22,13.22,0,0,0,49.14,9.71l1.51-2.8h2.92L62.15,22a.78.78,0,0,0-.21.52V41.69H58.06a.8.8,0,0,0-.8.81h0v3.63H46V35.39a.8.8,0,0,0-.8-.8H29.37a3.67,3.67,0,0,0-2.26,6.57,3.65,3.65,0,0,0-.76,5h-5v-5a.8.8,0,0,0-.8-.8H4.73a3.69,3.69,0,0,0-3,5.77H.8a.8.8,0,0,0-.8.8V52.8a.8.8,0,0,0,.8.81H7.58V82a.8.8,0,0,0,.8.8h4.74a.8.8,0,0,0,.8-.8h0V61.28H60.35V82a.8.8,0,0,0,.8.8h4.74a.8.8,0,0,0,.8-.8h0V53.61h6.78a.8.8,0,0,0,.8-.81h0V46.93a.8.8,0,0,0-.8-.8ZM43.15,6l2.12-3.88a.92.92,0,0,1,1.24-.39l.05,0L49.71,3.5a1,1,0,0,1,.36.37,1.15,1.15,0,0,1,0,.37h0A.94.94,0,0,1,50,4.6L47.84,8.48h0a9.69,9.69,0,0,0-1-.78h-.07c-.37-.25-.75-.48-1.14-.7a10.76,10.76,0,0,0-1.2-.56H44.3c-.39-.16-.78-.3-1.16-.42ZM40.34,21.56a2.9,2.9,0,0,1-3.61-1.93,2.84,2.84,0,0,1,0-1.53l4.89,2.67a2.92,2.92,0,0,1-1.24.77ZM50.07,23a.46.46,0,0,1-.27.26.48.48,0,0,1-.37,0L43.1,19.86h0l-6.47-3.54h0l-6.7-3.64a.44.44,0,0,1-.22-.28.45.45,0,0,1,.06-.36,11.64,11.64,0,0,1,12-4.72h0a11,11,0,0,1,1.49.42l.23.09a10.41,10.41,0,0,1,2.72,1.43l.19.14a10.4,10.4,0,0,1,1.18,1h0A11.63,11.63,0,0,1,50.07,23ZM54,5.32H51.46a.22.22,0,0,1,.08-.2c.08-.07,0-.13.08-.2s0-.11,0-.17V4.47h3.25l9.89,17.21h-1l-9.06-16A.83.83,0,0,0,54,5.32Zm9.59,18h2.53V41.69H63.54Zm-4.64,20h12v2.83h-12Zm-31.67-5a2.07,2.07,0,0,1,2.09-2.07h15V37.5H31a.81.81,0,1,0,0,1.61H44.36V40.4h-15a2.07,2.07,0,0,1-2.14-2Zm0,5.77A2.09,2.09,0,0,1,29.31,42H44.36v1.29H31a.8.8,0,1,0,0,1.6H44.36v1.3h-15a2.08,2.08,0,0,1-2.14-2Zm-24.58,0A2.08,2.08,0,0,1,4.73,42H19.78v1.29H6.43a.8.8,0,0,0,0,1.6H19.78v1.3h-15a2.09,2.09,0,0,1-2.08-2.09Zm9.68,37.12H9.18V53.61h3.15Zm1.6-27.56H36.07v6.13H13.92Zm45.9,6.13H37.68V53.61H59.83Zm5.25,21.43H61.94V53.61h3.14ZM72.66,52H1.6V47.73H72.66Z" />
                                    </g>
                                </g>
                            </svg>
                            <p>書房</p>
                        </a>
                    </div>
                </div>

                <div class="wrap_li">
                    <div class="wrap_s">
                        <a href="08.exhib-origin.php?location_id=1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 82.61 82.61">
                                <defs>
                                    <style>
                                        .cls-4 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <g id="圖層_2" data-name="圖層 2">
                                    <g id="圖層_2-2" data-name="圖層 2">
                                        <path class="cls-4" d="M81.61,48.47H54.74a1,1,0,0,0-1,1V80.6H28.88V50.49H50.27a1,1,0,0,0,0-2H48.61a4.5,4.5,0,0,0,.82-2.63V43.11h1.1a1,1,0,0,0,0-2h-1.1V39.25a1,1,0,0,0-1-1H34.19a1,1,0,0,0-1,1V41.1h-1.1a1,1,0,1,0,0,2h1.1v2.73A4.57,4.57,0,0,0,34,48.47H1a1,1,0,0,0-1,1V81.61a1,1,0,0,0,1,1h80.6a1,1,0,0,0,1-1V49.48A1,1,0,0,0,81.61,48.47ZM35.19,45.84V40.26H47.42v5.58a2.63,2.63,0,0,1-2.63,2.63h-7A2.64,2.64,0,0,1,35.19,45.84ZM2,50.49H26.87V56.6H2Zm0,8.13H26.87v22H2Zm78.59-2H55.75V50.49H80.6Zm0,24H55.75v-22H80.6Z" />
                                        <path class="cls-4" d="M32.26,59.21V69.26a3.62,3.62,0,0,0,3.62,3.62H46.73a3.63,3.63,0,0,0,3.63-3.62V59.21a1,1,0,0,0-1-1H33.26A1,1,0,0,0,32.26,59.21Zm2,1H48.34v9a1.62,1.62,0,0,1-1.61,1.61H35.88a1.62,1.62,0,0,1-1.61-1.61Z" />
                                        <path class="cls-4" d="M46.52,14.2h-.76a1,1,0,0,0,0,2h.76a1,1,0,0,0,0-2Z" />
                                        <path class="cls-4" d="M53.39,0H29.23a1,1,0,0,0-1,1V15L25,23.78a1,1,0,0,0,.6,1.29,1,1,0,0,0,.34.06H56.66a1,1,0,0,0,1-1,1,1,0,0,0-.06-.35L54.39,15V1A1,1,0,0,0,53.39,0Zm-26,23.12,2.53-6.9H41.05a1,1,0,1,0,0-2H30.23V2H52.38V14.2h-1.6a1,1,0,0,0,0,2h1.9l2.54,6.9Z" />
                                        <path class="cls-4" d="M6.79,66.34a1,1,0,0,0-1,1v4.53a1,1,0,0,0,2,0V67.34A1,1,0,0,0,6.79,66.34Z" />
                                        <path class="cls-4" d="M17,52.54H11.87a1,1,0,0,0,0,2H17a1,1,0,1,0,0-2Z" />
                                        <path class="cls-4" d="M60.52,72.88a1,1,0,0,0,1-1V67.34a1,1,0,0,0-2,0v4.53A1,1,0,0,0,60.52,72.88Z" />
                                        <path class="cls-4" d="M65.61,54.55h5.13a1,1,0,1,0,0-2H65.61a1,1,0,1,0,0,2Z" />
                                        <path class="cls-4" d="M48,54.69a.64.64,0,0,0,.13.15,1,1,0,0,0,1.43,0l.12-.15a.56.56,0,0,0,.09-.17.7.7,0,0,0,.06-.19.86.86,0,0,0,0-.39.6.6,0,0,0-.06-.19.76.76,0,0,0-.09-.18l-.12-.15a1,1,0,0,0-1.43,0l-.13.15-.09.18a1.05,1.05,0,0,0,0,.19.86.86,0,0,0,0,.39,1.33,1.33,0,0,0,0,.19Z" />
                                        <path class="cls-4" d="M32.91,54.69a1.07,1.07,0,0,0,.28.28.61.61,0,0,0,.18.09.64.64,0,0,0,.18.06.9.9,0,0,0,.4,0,1.08,1.08,0,0,0,.36-.15.93.93,0,0,0,.15-.13.64.64,0,0,0,.13-.15l.09-.17a.7.7,0,0,0,.06-.19,1.36,1.36,0,0,0,0-.2,1,1,0,0,0-1-1h0a1,1,0,0,0-1,1h0a1.36,1.36,0,0,0,0,.2l.06.19Z" />
                                        <path class="cls-4" d="M43.44,55.06a.6.6,0,0,0,.19.06.86.86,0,0,0,.39,0,.6.6,0,0,0,.19-.06.56.56,0,0,0,.17-.09l.16-.13a1,1,0,0,0,.29-.71.62.62,0,0,0,0-.19.6.6,0,0,0-.06-.19.76.76,0,0,0-.09-.18,1.58,1.58,0,0,0-.12-.15l-.16-.13-.17-.09L44,53.14a1.28,1.28,0,0,0-.39,0l-.19.06-.17.09-.16.13a1,1,0,0,0,0,1.42l.16.13A.56.56,0,0,0,43.44,55.06Z" />
                                        <path class="cls-4" d="M38,54.69a1.39,1.39,0,0,0,.28.28,1.14,1.14,0,0,0,.36.15.86.86,0,0,0,.39,0,1.2,1.2,0,0,0,.37-.15l.15-.13a.44.44,0,0,0,.12-.15,1,1,0,0,0,.1-.17l.06-.19c0-.07,0-.13,0-.2a1,1,0,0,0-1-1l-.2,0-.19.06-.17.09a.64.64,0,0,0-.15.13l-.13.15a.76.76,0,0,0-.09.18.6.6,0,0,0-.06.19.86.86,0,0,0,0,.39.7.7,0,0,0,.06.19A.56.56,0,0,0,38,54.69Z" />
                                    </g>
                                </g>
                            </svg>
                            <p>廚房</p>
                        </a>
                    </div>
                </div>

                <div class="wrap_li">
                    <div class="wrap_s">
                        <a href="08.exhib-origin.php?location_id=3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.804" height="20.549" viewBox="0 0 26.804 20.549">
                                <defs>
                                    <style>
                                        .cls-5 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <path id="icon_bedroom01" class="cls-5" d="M-640.7-11205.263a.446.446,0,0,1-.448-.444v-2.234H-660.8v2.234a.445.445,0,0,1-.445.444h-1.789a.445.445,0,0,1-.445-.444v-2.234h-.448a.447.447,0,0,1-.445-.448v-6.254a4.024,4.024,0,0,1,3.127-3.916v-5.018a2.236,2.236,0,0,1,2.234-2.234h16.081a2.238,2.238,0,0,1,2.234,2.234v5.018a4.024,4.024,0,0,1,3.127,3.916v6.254a.447.447,0,0,1-.448.448h-.445v2.234a.446.446,0,0,1-.448.444Zm.445-.893h.9v-1.786h-.9Zm-22.336,0h.893v-1.786h-.893Zm-.893-2.68h25.018v-.9h-25.018Zm0-5.809v4.022h25.018v-4.022a3.133,3.133,0,0,0-3.127-3.128h-18.763A3.133,3.133,0,0,0-663.479-11214.644Zm18.763-7.593a1.34,1.34,0,0,1,1.341,1.338v2.234h1.786v-4.913a1.341,1.341,0,0,0-1.341-1.342H-659.01a1.341,1.341,0,0,0-1.341,1.342v4.913h1.786v-2.234a1.34,1.34,0,0,1,1.341-1.338h4.468a1.339,1.339,0,0,1,1.338,1.338v2.234h.893v-2.234a1.34,1.34,0,0,1,1.341-1.338Zm-4.913,1.338v2.234h5.359v-2.234a.446.446,0,0,0-.445-.445h-4.468A.446.446,0,0,0-649.629-11220.9Zm-8.043,0v2.234h5.361v-2.234a.446.446,0,0,0-.445-.445h-4.468A.447.447,0,0,0-657.672-11220.9Zm14.743,9.83a.445.445,0,0,1-.445-.448.444.444,0,0,1,.445-.445h.893a.447.447,0,0,1,.448.445.447.447,0,0,1-.448.448Zm2.234,0a.447.447,0,0,1-.448-.445.447.447,0,0,1,.448-.448h.893v-.893a.447.447,0,0,1,.448-.445.446.446,0,0,1,.445.445v1.341a.446.446,0,0,1-.445.445Zm-22.338-.445v-3.127a2.684,2.684,0,0,1,2.682-2.68.446.446,0,0,1,.445.445.447.447,0,0,1-.445.448,1.786,1.786,0,0,0-1.786,1.786v3.127a.445.445,0,0,1-.448.445A.445.445,0,0,1-663.034-11211.517Z" transform="translate(664.372 11225.812)" />
                            </svg>
                            <p>臥室</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!---------- 展示房間 ---------->
        <div class="exhib_space">
            <h1 class="title">窩の智慧</h1>
            <div class="wrapForPosition allroom">
                <img src="smart_home_img/allroom.png" alt="">
                <a href="" data-cateid="3">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="4">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="5">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="6">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="24">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="23">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="22">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="21">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="20">
                    <div class="cirle"></div>
                </a>
                <a href="" data-cateid="19">
                    <div class="cirle"></div>
                </a>

                <ul id="dialog" class="nth_2" hidden>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam, perferendis!
                        Quas, cupiditate
                    </p>
                </ul>
            </div>
        </div>

        <!---------- 左右拖曳選擇想查看的商品 ---------->
        <div class="drag_area d-md-none">
            <i id="arrow_left" class="fas fa-chevron-left  pointer fa-1x"></i>
            <p class="ml-1"><span>左右拖曳</span>選擇想查看的商品</p>
            <i id="arrow_right" class="fas fa-chevron-right  pointer fa-1x"></i>
        </div>

        <!---------- 商品類別區 ---------->
        <div class="click_area d-md-none">
            <p class="change_text">或直接<span>點選</span>欲查看商品</p>
            <div class="wrap_area">
                <div class="wrap_item d-flex">

                </div>
                <!-- <i id="itemToRight" class="fas fa-chevron-right  pointer fa-1x"></i> -->
            </div>
        </div>

        <!-- 推薦商品區 -->
        <div class="click_main" id="click_main">
            <p>推薦商品</p>
            <div id="back" class="d-none d-md-block">
                <a href="">
                    <div class="back_wrap">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 79 75.65">
                            <defs>
                                <style>
                                    .cls-1 {
                                        stroke: #fff;
                                    }
                                </style>
                            </defs>
                            <g id="圖層_2" data-name="圖層 2">
                                <g id="圖層_2-2" data-name="圖層 2">
                                    <path class="cls-1" d="M56.76,12.19l.73.73v-10H68.78V24.21l.73.73.82.82h1.31V2.62A2.58,2.58,0,0,0,69,0H57.16a2.58,2.58,0,0,0-2.61,2.62V10l.73.73Z" />
                                    <path class="cls-1" d="M9.73,34.67l-.57.58L7.69,36.72V69.1a6.56,6.56,0,0,0,6.54,6.55h51A6.56,6.56,0,0,0,71.8,69.1V36.72l-1.47-1.47-.57-.58h-.82V69.1a3.66,3.66,0,0,1-3.68,3.68H48.09V54.06a2.38,2.38,0,0,0-2.37-2.37H33.86a2.37,2.37,0,0,0-2.37,2.37V72.78H14.31a3.66,3.66,0,0,1-3.68-3.68V34.67ZM33.78,71.31V54.06H45.63V72.87H33.86Z" />
                                    <path class="cls-1" d="M42.85,62.73a1.47,1.47,0,1,0,1.48,1.47A1.52,1.52,0,0,0,42.85,62.73Z" />
                                    <path class="cls-1" d="M46,45.55a7.12,7.12,0,0,0,7.12-7.11V25.84A7.12,7.12,0,0,0,46,18.73H33.45a7.12,7.12,0,0,0-7.12,7.11v12.6a7.12,7.12,0,0,0,7.12,7.11Zm4.66-7.11A4.74,4.74,0,0,1,46,43.18H40.89V33.37H50.7v5.07Zm0-12.6v5.07H40.89V21.1H46A4.74,4.74,0,0,1,50.7,25.84Zm-22,0a4.74,4.74,0,0,1,4.74-4.74h5.07v9.81H28.71Zm0,12.6V33.37h9.81v9.81H33.45A4.85,4.85,0,0,1,28.71,38.44Z" />
                                    <path class="cls-1" d="M6.22,35.41,7,34.67,35.82,5.81a5.33,5.33,0,0,1,7.61,0L72.29,34.67l.74.74,4,4,1-1.06,1-1L56.84,15.21l-.33-.33-1.31-1.3-.73-.74L45.39,3.76a8.35,8.35,0,0,0-11.7,0L0,37.46l2,2Z" />
                                </g>
                            </g>
                        </svg>
                        <p>智慧の窩</p>
                    </div>
                    <span>
                        <i id="arrow_left" class="fas fa-chevron-left  pointer fa-1x">
                            <span>返回</span>
                        </i>
                </a>

                </span>
            </div>
            <div class="click_item_wrap">
                <div class="click_item_area owl-carousel owl-theme" id="click_item_area">

                    <!-- <div class="item wrap_svg">
                        <div class="hight">
                            -- -- img link -- --
                            <a href="">
                                <img src="./smart_home_img/item-02.png" alt="">
                                -- -- 品名+價格 ---
                                <div class="cardbody_area">
                                    <h5 class="card_name">123454654654</h5>
                                    <p class="card_text">NT$ 8,000</p>
                                </div>
                            </a>
                        </div>
                        <div class="top_svg"></div>
                    </div> -->


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
            $('.t1').css('border-bottom', '1px solid white');
            $('.t1>a').css('color', 'white')
        });

        $('.t2').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t2').css('border-bottom', '1px solid white');
            $('.t2>a').css('color', 'white')
        });

        $('.t3').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t3').css('border-bottom', '1px solid white');
            $('.t3>a').css('color', 'white')
        });

        $('.t4').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t4').css('border-bottom', '1px solid white');
            $('.t4>a').css('color', 'white')
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



    <!-- owl.carousel 連結檔-->
    <link rel="stylesheet" href="plug-in/owl.carousel/owl.carousel.css">
    <script src="plug-in/owl.carousel/owl.carousel.js"></script>
    <!-- <script src="plug-in/owl.carousel/theme.js"></script> -->

    <script src="./js/08.exhib2.js"></script>
    <script>
        $('#click_item_area').on('click', '.item', function() {
            console.log('url:', $(this).data('url'));
            window.location.href = $(this).data('url');
        });
    </script>

</body>

</html>