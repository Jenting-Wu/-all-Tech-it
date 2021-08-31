<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>


<!-- CSS link ---------------------------->
<link rel="stylesheet" href="./detail_CSS/1.detail_topBox.css">
<link rel="stylesheet" href="./detail_CSS/2.detail_shopBox.css">
<link rel="stylesheet" href="./detail_CSS/3.detail_dataBox.css">




<!-- detail頁 開始 --------------------------------------->

<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap row">

    <!-- path：路徑 -->
    <p class="path">

        目前位置：&ensp;

        <!-- cate_id_0 -->
        <?php
        if (isset($_GET['cate_id'])) {
            $sql = "SELECT `cate_id`, cate_name FROM categories WHERE cate_id ={$_GET['cate_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>
            <a href="#"><?= $obj['cate_name'] ?></a>
            &ensp;
        <?php
        } else if (isset($_GET['prod_id'])) {
            $sql = "SELECT `prod_id`, brand_name , `products`.`brand_id` 
            FROM brands 
            INNER JOIN products
            ON `brands`.`brand_id`=`products`.`brand_id` 
            WHERE prod_id ={$_GET['prod_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>
            <a href="07-2.brand_list_item.php?brand_id=<?= $obj['brand_id'] ?>"><?= $obj['brand_name'] ?></a>
            &ensp;

        <?php
        }
        ?>


        <!-- 商品分類 -->
        <?php
        if (isset($_GET['sub_cate_id'])) {
            $sql = "SELECT `cate_id`, cate_name FROM categories WHERE cate_id ={$_GET['sub_cate_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>
            >&ensp;
            <a href="#"><?= $obj['cate_name'] ?></a>
        <?php
        } else if (isset($_GET['prod_id'])) {
            $sql = "SELECT `products`.`cate_id`, cate_name , prod_id ,`products`.`brand_id`
    FROM categories 
    INNER JOIN products
    ON `categories`.`cate_id`=`products`.`cate_id`
    INNER JOIN brands
    ON `brands`.`brand_id`=`products`.`brand_id`  
    WHERE prod_id ={$_GET['prod_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>

            >&ensp;
            <a href="07-2.brand_list_item.php?brand_id=<?= $obj['brand_id'] ?>"><?= $obj['cate_name'] ?></a>
        <?php
        }
        ?>

        &ensp;

        <!-- 商品名稱 -->
        <?php
        if (isset($_GET['sub_cate_id'])) {
            $sql = "SELECT * FROM products WHERE cate_id = {$_GET['sub_cate_id']} ";
            $obj = $pdo->query($sql)->fetch();
        ?>
            >&ensp;
            <a href="#"><?= $obj['prod_name'] ?></a>
        <?php
        } else if (isset($_GET['prod_id'])) {
            $sql = "SELECT prod_name , prod_id
    FROM products 
    WHERE prod_id ={$_GET['prod_id']}";
            $obj = $pdo->query($sql)->fetch();
        ?>
            >&ensp;
            <a href="#"><?= $obj['prod_name'] ?></a>
        <?php
        }
        ?>
    </p>


    <?php
    if (isset($_GET['sub_cate_id']) || ($_GET['prod_id'])) {
        $sql = "SELECT * FROM `products` 
        INNER JOIN `brands`
        ON `products`.`brand_id`=`brands`.`brand_id`
        WHERE `prod_id` = {$_GET['prod_id']} ";


        $stmt = $pdo->query($sql);
        if ($stmt->rowCount() > 0) {
            $obj = $stmt->fetch();
    ?>


            <!-- 商品照片 -->
            <div class="product_pic_box col-12 col-lg-6">
                <img src="db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" class="card-img-top" alt="...">
            </div>

            <!-- pc : 照片展示_輪播牆 -->
            <!-- <div class="pc_carousel col-6 d-lg-block d-none">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./detail_img/sample_主要圖片.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./detail_img/sample_縮圖_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="./detail_img/sample_縮圖_2.png" class="d-block w-100" alt="...">
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div> -->



            <!-- detail topBox 資訊欄 ------------------------------->
            <div class="detail_topBox col-sm-12 col-md-6">

                <!-- 品名 -->
                <div class="prod_name">
                    <h6><?= $obj['brand_name'] ?></h6>
                    <h6><?= $obj['prod_name'] ?></h6>
                </div>

                <!-- mob : 照片展示_輪播牆 -->
                <!-- <div id="carouselExampleControls" class="carousel slide mob_prod_image d-sm-block d-md-none" data-ride="carousel">
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img src="./detail_img/sample_主要圖片.png" class="d-block w-100" alt="...">
                            </div>


                            <div class="carousel-item">
                                <img src="./detail_img/sample_縮圖_1.jpg" class="d-block w-100" alt="...">
                            </div>


                            <div class="carousel-item">
                                <img src="./detail_img/sample_縮圖_2.png" class="d-block w-100" alt="...">
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon  car_icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>

                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon  car_icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div> -->



                <!-- price -->
                <p class="prod_price">
                    $<?= $obj['prod_price'] ?>
                </p>

                <!-- 商品顏色規格 -->
                <!-- <div class="spec_color">
                <div class="color_title">顏色規格：</div>
                <button>銀光白</button>
                <button>太空灰</button>
            </div> -->



                <!-- 購買數量 -->
                <div class="input-group qty_box">

                    購買數量：

                    <button class="btn btn-outline-secondary qty_arrow_box" type="button" id="btn_minus">
                        <i class="fas fa-minus">
                            <img src="detail_img/icon_arrow_drop_down_black_24dp.svg" alt="">
                        </i>
                    </button>

                    <input type="text" class="form-control qty" placeholder="" value="1" id="qty">

                    <button class="btn btn-outline-secondary qty_arrow_box" type="button" id="btn_plus">
                        <i class="fas fa-plus">
                            <img src="detail_img/icon_arrow_drop_up_black_24dp.svg" alt="">
                        </i>
                    </button>

                </div>

                <!-- 優惠標示 -->
                <div class="prod_discount">
                    現購優惠 : 購買即贈智能燈泡
                </div>

                <!-- 加入購物車/喜好/比較 -->
                <div class="input_box d-none d-lg-flex">

                    <div class="input_btn">
                        <button class="input_btn_shop go_shop" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
                            <img src="./img/icon_shopping-cart.svg" alt="">
                            <div class="detailToShopping">加入購物車</div>
                        </button>
                    </div>

                    <div class="input_btn">
                        <button class="btn_fol input_btn_fol_com go_follow" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
                            <img src="./img/icon_saved.svg" alt="">
                            <div>加入喜好清單</div>
                        </button>

                        <button class="input_btn_fol_com btn_com compare" data-prod-id="<?= $obj['prod_id'] ?>">
                            <img src="./img/icon_compare-list.svg" alt="">
                            <div>加入比較列表</div>
                        </button>
                    </div>

                </div>


                <!-- 商品描述 -->
                <span class="prod_description">
                    <?= $obj['prod_description'] ?>
                </span>

        <?php
        }
    }

        ?>

            </div>

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->

<!-- detail shopping car 購物車 ------------------------------------------>

<div class="detail_shopBox d-md-block d-lg-none">
    <!-- 加入比較/喜好清單 -->
    <div class="shopBox_left">

        <!-- 加入比較 -->
        <div class="add_compare compare" data-prod-id="<?= $obj['prod_id'] ?>">
            <!-- <img src="./detail_img/icon_compare-list.svg" alt=""> -->
            <svg class="detail_svg_icon_compare" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
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

            <div class="put_in add_1">
                加入比較
            </div>
            <!-- <div class="take_out out_1 d-none">
                    已加入比較
                </div> -->
        </div>

        <!-- 加入喜好清單 -->
        <div class="add_save go_follow" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
            <!-- <img src="./detail_img/icon_saved.svg" alt=""> -->
            <svg class="detail_svg_icon_save" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.14 35.05">
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

            <div class="put_in add_2">
                加入喜好清單
            </div>
            <!-- <div class="take_out out_2 d-none">
                    已加入喜好清單
                </div> -->
        </div>
    </div>

    <!-- 加入購物車 -->
    <div class="shopBox_right">

        <!-- 購買數量 -->
        <div class="input-group mb_qty_box">

            <div class="mb_qty_title">購買數量：</div>

            <button class="btn btn-outline-secondary mb_qty_arrow_box" type="button" id="btn_minus_mb">
                <i class="fas fa-minus">
                    <img src="./detail_img/icon_arrow_drop_down_black_24dp.svg" alt="">
                </i>
            </button>

            <input type="text" class="form-control qty" placeholder="" value="1" id="qty_mb">

            <button class="btn btn-outline-secondary mb_qty_arrow_box" type="button" id="btn_plus_mb">
                <i class="fas fa-plus">
                    <img src="./detail_img/icon_arrow_drop_up_black_24dp.svg" alt="">
                </i>
            </button>

        </div>

        <!-- 加入購物車 -->
        <div class="shopBox_btn go_shop" data-prod-id="<?= $obj['prod_id'] ?>" data-prod-name="<?= $obj['prod_name'] ?>" data-prod-thumbnail="<?= $obj['prod_thumbnail'] ?>" data-prod-price="<?= $obj['prod_price'] ?>">
            <!-- <img src="./detail_img/icon_shopping-cart.svg" alt=""> -->
            <svg class="detail_svg_icon_shop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
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
            加入購物車
        </div>
    </div>
</div>

<!-- detail dataBox 詳細介紹欄 -------------------------------->
<div class="detail_dataBox">

    <!-- 分頁標籤 ----------->
    <div class="detail_page">
        <div class="page p1 col-4 p1_button">商品介紹</div>
        <div class="page p2 col-4">商品規格</div>
        <div class="page p3 col-4">商品評論</div>
    </div>

    <?php if (isset($_GET['sub_cate_id']) || ($_GET['prod_id'])) { ?>

        <!-- p1:商品介紹 active-->
        <div class="p1_prod_AD p11">
            <img src="detail_img/sample_長圖_小米.png" alt="">
        </div>

        <!-- p2:商品規格 -->
        <div class="p2_prod_spec p22 d-none">



            <div class="p2_prod_name">
                <?= $obj['prod_name'] ?>
            </div>

            <div class="p2_prod_item">
                <div class="p2_prod_text_title col-md-4 col-lg-3">商品品牌</div>
                <div class="p2_prod_text col-md-8 col-lg-9"><?= $obj['brand_name'] ?></div>
            </div>

            <div class="p2_prod_item">
                <div class="p2_prod_text_title col-md-4 col-lg-3">商品售價</div>
                <div class="p2_prod_text col-md-8 col-lg-9">$<?= $obj['prod_price'] ?></div>
            </div>

            <div class="p2_prod_item">
                <div class="p2_prod_text_title col-md-4 col-lg-3">商品型號</div>
                <div class="p2_prod_text col-md-8 col-lg-9"><?= $obj['prod_type'] ?></div>
            </div>

            <div class="p2_prod_item">
                <div class="p2_prod_text_title col-md-4 col-lg-3">商品尺寸</div>
                <div class="p2_prod_text col-md-8 col-lg-9"><?= $obj['prod_size'] ?></div>
            </div>

            <div class="p2_prod_item">
                <div class="p2_prod_text_title col-md-4 col-lg-3">商品描述</div>
                <div class="p2_prod_text col-md-8 col-lg-9"><?= $obj['prod_description'] ?></div>
            </div>
        </div>

    <?php
    }

    ?>

    <!-- p3:商品評論 -->
    <div class="p3_prod_comment p33 d-none">

        <!-- 雷達圖 radar chart -->
        <div class="p3_prod_radar">
            <p>整體評價：</p>

            <?php
            $strobjA = [];
            $strobjB = [];
            $strobjC = [];
            $strobjD = [];
            $strobjE = [];
            $scoreA = [];
            $scoreB = [];
            $scoreC = [];
            $scoreD = [];
            $scoreE = [];
            if (isset($_GET['prod_id'])) {
                $sql = "SELECT `order_id`,`products`.`cate_id`,`products`.`prod_id`,`prod_name`,
            `rate_A_name`,`rate_A_score`,
            `rate_B_name`,`rate_B_score`,
            `rate_C_name`,`rate_C_score`,
            `rate_D_name`,`rate_D_score`,
            `rate_E_name`,`rate_E_score`
            FROM products 
            INNER JOIN orders_rate 
            ON `products`.`prod_id`=`orders_rate`.`prod_id`
            INNER JOIN rate_item 
            ON `products`.`cate_id`=`rate_item`.`cate_id`                                 
            WHERE `products`.`prod_id` = {$_GET['prod_id']};";
                $arr = $pdo->query($sql)->fetchAll();
                $strobjA = "{$arr[0]['rate_A_name']}";
                $strobjB = "{$arr[0]['rate_B_name']}";
                $strobjC = "{$arr[0]['rate_C_name']}";
                $strobjD = "{$arr[0]['rate_D_name']}";
                $strobjE = "{$arr[0]['rate_E_name']}";
                $scoreA = "{$arr[0]['rate_A_score']}";
                $scoreB = "{$arr[0]['rate_B_score']}";
                $scoreC = "{$arr[0]['rate_C_score']}";
                $scoreD = "{$arr[0]['rate_D_score']}";
                $scoreE = "{$arr[0]['rate_E_score']}";
            }
            ?>

            <div class="p3_radar_chart">
                <div id="chart1">

                </div>
            </div>
        </div>

        <!-- 顧客評論區 customer comment -->
        <p class="p3_comment_card_title">使用心得：</p>

        <div class="p3_customer_comment row">

            <!-- 評論區 -->
            <div class="p3_comment_card">
                <!-- 顧客姓名 -->
                <p>Sophia</p>

                <!-- 顧客星評 -->
                <div class="p3_comt row">

                    <div class="comt col-12 col-lg-4">
                        <div>音效呈現：</div>
                        <img src="./detail_img/3-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>CP值：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>外觀：</div>
                        <img src="./detail_img/4-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>執行準確度：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>指令接收速度：</div>
                        <img src="./detail_img/3-star.svg" alt="">
                    </div>
                </div>

                <!-- 顧客評論/留言 -->
                <div class="p3_customer_text">
                    音質是明確的比起小愛音箱好不少的，3 公尺距離仍然不用太大聲就能喚醒小愛同學，音質中高及低音都算還不錯，都有個基本水平，唯一可惜就是圓孔的電源線。
                </div>

            </div>

            <!-- 評論區 -->
            <div class="p3_comment_card">
                <!-- 顧客姓名 -->
                <p>Eason</p>

                <!-- 顧客星評 -->
                <div class="p3_comt row">

                    <div class="comt col-12 col-lg-4">
                        <div>音效呈現：</div>
                        <img src="./detail_img/3-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>CP值：</div>
                        <img src="./detail_img/4-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>外觀：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>執行準確度：</div>
                        <img src="./detail_img/2-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>指令接收速度：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>
                </div>

                <!-- 顧客評論/留言 -->
                <div class="p3_customer_text">
                    整體設計上，更加簡約，爲標準的矮圓柱體，上面有顆小指示燈，還帶有一個按鈕。能夠關閉警報聲音。新的多模網關取消了網關燈，同時也沒有網狀的鏤空內置揚聲器設計。
                </div>

            </div>

            <!-- 評論區 -->
            <div class="p3_comment_card">
                <!-- 顧客姓名 -->
                <p>擺渡人</p>

                <!-- 顧客星評 -->
                <div class="p3_comt row">

                    <div class="comt col-12 col-lg-4">
                        <div>音效呈現：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>CP值：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>外觀：</div>
                        <img src="./detail_img/2-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>執行準確度：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>指令接收速度：</div>
                        <img src="./detail_img/4-star.svg" alt="">
                    </div>
                </div>

                <!-- 顧客評論/留言 -->
                <div class="p3_customer_text">
                    是生活中相當有智慧的好伙伴，也讓我家孩子可以練習對話溝通
                </div>

            </div>

            <!-- 評論區 -->
            <div class="p3_comment_card">
                <!-- 顧客姓名 -->
                <p>童童</p>

                <!-- 顧客星評 -->
                <div class="p3_comt row">

                    <div class="comt col-12 col-lg-4">
                        <div>音效呈現：</div>
                        <img src="./detail_img/4-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>CP值：</div>
                        <img src="./detail_img/3-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>外觀：</div>
                        <img src="./detail_img/1-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>執行準確度：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>

                    <div class="comt col-12 col-lg-4">
                        <div>指令接收速度：</div>
                        <img src="./detail_img/5-star.svg" alt="">
                    </div>
                </div>

                <!-- 顧客評論/留言 -->
                <div class="p3_customer_text">
                    使用起來很方便
                </div>

            </div>

        </div>


    </div>



</div>

<!-- detail頁 結束 --------------------------------------->


<!-- JQ ----------------------------------->
<!-- detail ------------------------------->
<script>
    $('.p1').click(function() {
        console.log('p1 click');

        $('.p22, .p33').addClass('d-none');
        $('.p2').removeClass('p2_button');
        $('.p3').removeClass('p3_button');

        $('.p11').removeClass('d-none');
        $('.p1').addClass('p1_button');

    });

    $('.p2').click(function() {
        console.log('p2 click');

        $('.p11, .p33').addClass('d-none');
        $('.p1').removeClass('p1_button');
        $('.p3').removeClass('p3_button');

        $('.p22').removeClass('d-none');
        $('.p2').addClass('p2_button');

    });

    $('.p3').click(function() {
        console.log('p3 click');

        $('.p11, .p22').addClass('d-none');
        $('.p1').removeClass('p1_button');
        $('.p2').removeClass('p2_button');

        $('.p33').removeClass('d-none');
        $('.p3').addClass('p3_button');

    });
</script>

<!-- 雷達圖 ----------------------------------->
<script>
    $(function() {
        $('#chart1').radarChart({
            size: [500, 400],
            step: 1,
            title: '',
            values: {
                '<?= $strobjA ?>': <?= $scoreA ?>,
                '<?= $strobjB ?>': <?= $scoreB ?>,
                '<?= $strobjC ?>': <?= $scoreC ?>,
                '<?= $strobjD ?>': <?= $scoreD ?>,
                '<?= $strobjE ?>': <?= $scoreE ?>,
            },
        });
    });

    (function($) {

        var Radar = (function() {

            function Radar(ele, settings) {
                this.ele = ele;
                this.settings = $.extend({
                    showAxisLabels: false,
                    title: "Untitled",
                    step: 1,
                    size: [300, 300],
                    values: {},
                    color: [0, 128, 255]
                }, settings);
                this.width = settings.size[0];
                this.height = settings.size[1];
                $(ele).css({
                    'position': 'relative',
                    'width': this.width,
                    'height': this.height
                });
                this.canvases = {};
                this.draw();
            }

            Radar.prototype.newCanvas = function(name, delay) {
                var delay = delay || 0;
                var canvas = document.createElement('canvas');
                canvas.width = this.width;
                canvas.height = this.height;
                $(canvas).css({
                    'position': 'absolute'
                });
                this.canvases[name] = canvas;
                this.ele.appendChild(canvas);
                this.cxt = canvas.getContext('2d');
                if (delay != 0) {
                    $(canvas).css('opacity', 0).delay(delay).animate({
                        opacity: 1
                    }, 500);
                }
            }

            Radar.prototype.draw = function() {
                this.newCanvas('axis', 100);
                var min = 0;
                var max = 0;

                $.each(this.settings.values, function(i, val) {
                    if (val < min)
                        min = val;
                    if (val > max)
                        max = val;
                });

                min = Math.floor(min);
                max = Math.ceil(max);

                var spacing = 20;

                for (var i = min; i <= max; i += this.settings.step) {
                    this.cxt.beginPath();
                    this.cxt.arc(this.width / 2,
                        this.height / 2,
                        this.settings.step * spacing * i,
                        0, 2 * Math.PI, false);
                    this.cxt.strokeStyle = "#ccc";
                    this.cxt.fillStyle = "#ccc";
                    this.cxt.stroke();
                    if (this.settings.showAxisLabels)
                        this.cxt.fillText(i, this.width / 2 + this.settings.step * spacing * i + 4, this.height / 2 - 2);
                }

                var size = 0;
                for (var key in this.settings.values)
                    size += 1;

                for (var i = 0; i < size; i += 1) {
                    this.cxt.beginPath();
                    this.cxt.moveTo(this.width / 2, this.height / 2);
                    var x = this.width / 2 + Math.cos((Math.PI * 2) * (i / size)) * spacing * max;
                    var y = this.height / 2 + Math.sin((Math.PI * 2) * (i / size)) * spacing * max;
                    this.cxt.lineTo(x, y);
                    this.cxt.stroke();
                }

                this.newCanvas('part', 200);

                this.cxt.beginPath();
                var first = true;
                var i = 0;
                var that = this;
                var end = {
                    x: null,
                    y: null
                };
                $.each(this.settings.values, function(key, val) {
                    var x = that.width / 2 + Math.cos((Math.PI * 2) * (i / size)) * spacing * val;
                    var y = that.height / 2 + Math.sin((Math.PI * 2) * (i / size)) * spacing * val;
                    if (first) {
                        that.cxt.moveTo(x, y);
                        end.x = x;
                        end.y = y;
                        first = false;
                    }
                    that.cxt.lineTo(x, y);
                    i += 1;
                });

                this.cxt.lineTo(end.x, end.y);
                var grad = this.cxt.createLinearGradient(0, 0, 0, this.height);
                grad.addColorStop(0, 'rgba(255, 192, 203, 0');
                grad.addColorStop(1, 'rgba(255, 192, 203, 1');
                this.cxt.fillStyle = grad;
                this.cxt.shadowBlur = 2;
                this.cxt.shadowColor = "rgba(0, 0, 0, .2)";
                this.cxt.stroke();
                this.cxt.fill();

                this.newCanvas('labels', 1000);

                i = 0;
                $.each(this.settings.values, function(key, val) {
                    that.newCanvas('label-' + i, i * 250);
                    that.cxt.fillStyle = "rgba(0,0,0,.8)";
                    that.cxt.strokeStyle = "rgba(0,0,0,.5)";
                    that.cxt.font = "bold 12px Verdana";
                    var dist = Math.min(spacing * val, size * spacing);
                    var x = that.width / 2 + Math.cos((Math.PI * 2) * (i / size)) * spacing * val;
                    var y = that.height / 2 + Math.sin((Math.PI * 2) * (i / size)) * spacing * val;

                    var textX = that.width / 2 + Math.cos((Math.PI * 2) * (i / size)) * spacing * val;
                    var textY = that.height / 2 + Math.sin((Math.PI * 2) * (i / size)) * spacing * val * 1.5;

                    if (textX < that.width / 2) {
                        textX -= 75
                        that.cxt.textAlign = "end";
                        that.cxt.beginPath();
                        var width = that.cxt.measureText(key).width;
                        that.cxt.moveTo(textX - width - 5, textY + 4);
                        that.cxt.lineTo(textX + 15, textY + 4);
                        that.cxt.lineTo(x - 2, y);
                        that.cxt.lineWidth = 2;
                        that.cxt.stroke();
                    } else {
                        textX += 75
                        that.cxt.textAlign = "start";
                        that.cxt.beginPath();
                        var width = that.cxt.measureText(key).width;
                        that.cxt.moveTo(x + 2, y);
                        that.cxt.lineTo(textX - 15, textY + 4);
                        that.cxt.lineTo(textX + width + 5, textY + 4);
                        that.cxt.lineWidth = 2;
                        that.cxt.stroke();
                    }
                    that.cxt.fillText(key, textX, textY);
                    //For arrows that aren't done.
                    i += 1;
                });


                this.newCanvas('title', 1000);
                this.cxt.font = "bold 24px Verdana";
                this.cxt.fillText(this.settings.title, 10, 30);
            }

            return Radar;

        })();

        $.fn.radarChart = function(settings) {
            this.each(function(i, ele) {
                var radar = new Radar(ele, settings);
            });
        }

    })(jQuery);
</script>


<!-- sweet alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<!-- JS link ----------------------------------->
<!-- <script src="JS/custom.js"></script> -->

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>