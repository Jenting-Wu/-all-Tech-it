<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>


<!-- html ----------------------------------------------->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
    <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <!-- bootstrap 4 link -------------------------------->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>



    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">
    <!-- follow css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">



    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>
    <script src="JS/custom.js"></script>
    <!-- follow js link -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>

    <style>
        * {
            /* outline: 1px solid red; */
        }
    </style>


</head>

<body class="bg-light">

    <!-- HD : Header (Navbar) ----------------------------------------------->
    <header class="head_header">
        <nav class="navbar fixed-top hd_navbar">
            <!-- logo ------------------------>
            <a href="01-index.php" class="d-none d-lg-block">
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
                        <a href="product_list_01_smart.php?cate_id=10&sub_cate_id=21">商品分類</a>
                    </div>

                    <!-- 智慧專欄 -->
                    <div class="hd_title_link t3">
                        <a href="article_list.php">智慧專欄</a>
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
                        <a href="compare.php">
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
                        <a href="member_info1.php">
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


                    <div class="tog_icon_link">

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
            <a href="01-index.php" class="d-lg-none">
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
                            <a href="login.php">登入</a>｜<a href="signup.php">註冊</a>
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
                    <a href="article_list.php">智慧專欄</a>
                </div>

                <!-- 窩的智慧 -->
                <div class="hd_title_link">
                    <a href="08.exhib-origin.php">窩的智慧</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>