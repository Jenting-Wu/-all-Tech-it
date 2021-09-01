<!-- php link -------------------------------------------->
<?php require_once 'head.php' ?>

<!-- fa -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- animated -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- css link -->
<link rel="stylesheet" href="./CSS/index.css">

<!-- onwpage-scroll-css -->
<link rel="stylesheet" href="./plug-in/onepage-scroll-master/onepage-scroll.css">
<!-- plug in onepage-->
<script src="./plug-in/onepage-scroll-master/jquery.onepage-scroll.min.js"></script>

<style>
    .head_header {
        display: none;
        background-color: yellow;
        outline: 1px solid red;
    }
</style>


<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="main">
    <section class="section_1 wrap">

        <header>
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
                            <a href="product_list_01_smart.php">商品分類</a>
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

                        <!-- 會員有data -->
                        <div class="hd_icon_link i3">
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

                        <!-- 購物車 -->
                        <div class="hd_icon_link i4">
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
                    <a href="shopping_cart.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
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
                        </svg></a>
                </div>
            </nav>
        </header>



        <video autoplay muted loop src="./index_img/video/production ID_4109338.mp4"></video>

        <div class="index d-flex flex-column flex-md-row justify-content-md-center">
            <div class="left textwrap text-center">
                <h5 class="display_1">智能生活</h5>
                <p class="display_2">（AI機器人）</p>
                <ul class="item_content list-unstyled ">
                    <li class="display_3"><a href="">掃地機器人</a></li>
                    <li class="display_3"><a href="">掃地機器人</a></li>
                    <li class="display_3"><a href="">掃地機器人</a></li>
                    <li class="display_3"><a href="">掃地機器人</a></li>
                </ul>
                <a href="./product_list_02_ai.php?cate_id=1&sub_cate_id=3">
                    <p class="display_2">前往商場 >></p>
                </a>
            </div>
            <div class="right mt-5 mt-md-0 textwrap text-center">
                <h5 class="display_1">智能家居</h5>
                <p class="display_2">（智能家電）</p>
                <ul class="item_content list-unstyled ">
                    <li class="display_3"><a href="">廚房家電</a></li>
                    <li class="display_3"><a href="">居家清潔</a></li>
                    <li class="display_3"><a href="">居家安全</a></li>
                    <li class="display_3"><a href="">娛樂與教育</a></li>
                    <li class="display_3"><a href="">智能周邊</a></li>
                </ul>
                <a href="./product_list_01_smart.php?cate_id=10&sub_cate_id=21">
                    <p class="display_2 ">前往商場 >></p>
                </a>
            </div>
        </div>
        <div class="down_wrap text-center text-light">
            <div class="explore animate__animated display_3 py-1">探索智慧生活</div>
            <div class="circle"><i class="fas fa-arrow-down"></i></div>
        </div>
    </section>

    <section class="section_2">
        <div class="container_90">
            <div class="title_wrap text-center text-md-right mt-md-3">
                <span class="display_title color_brown number">1.</span>
                <span class="display_title color_brown">窩の智慧</span>
                <p class="display_title_2 color_brown">小住宅，大方便</p>
                <p class="display_3 color_brown">有智慧生活的思考 <br> 日子過得更輕鬆</p>
            </div>
            <h6 class="text-center d-block d-md-none">點擊看看小窩有什麼功能吧！</h6>
            <div class="img_wrap">
                <img src="index_img/a.mywo.png" alt="">
                <img id="phone" src="index_img/phone.png" alt="">
                <ul class="dialog_wrap d-none d-md-block">
                    <li class="d1">
                        <p class="display_3">當手機GPS 定位快回到家了，就把客廳冷氣<span class="display_title_2">預先打開</span>
                        </p>
                    </li>l
                    <li class="d1">
                        <p class="display_3">智慧音箱，只要<span class="display_title_2">出一張嘴</span>電燈、冷氣、家電…就通通都可輕鬆控制
                        </p>
                    </li>
                    <li class="d1">
                        <p class="display_3">平日早上8點一到，就打開智慧窗簾讓<span class="display_title_2">陽光照進</span>臥室
                        </p>
                    </li>
                    <li class="d1">
                        <p class="display_3 mt-1">當手機GPS 定位快回到家了，就把客廳冷氣<span class="display_title_2">預先打開</span>
                        </p>
                    </li>
                    <li class="d1">
                        <p class="display_3">智能冰箱輕鬆具備人工智慧(AI)食材辨識能力，還可以<span class="display_title_2">提供食譜</span>與購物清單建議。
                        </p>
                    </li>
                    <li class="d1">
                        <p class="display_3">用手機控制電子鍋煮飯時間，下班回家<span class="display_title_2">準時開飯</span>
                        </p>
                    </li>
                    <li class="d1">
                        <p class="display_3">當移動感測器偵測到<span class="display_title_2">有人經過</span>，就觸發房間電燈打開
                        </p>
                    </li>
                </ul>
                <ul class="circle_wrap d-block d-md-none">
                    <li class="circle"></li>
                    <li class="circle"></li>
                    <li class="circle"></li>
                    <li class="circle"></li>
                    <li class="circle"></li>
                    <li class="circle"></li>
                    <li class="circle"></li>
                </ul>
            </div>
            <div class="dialog_phone d-block d-md-none">
                <ul class="dia_text_wrap list-unstyled">
                    <li class="dt">
                        <h5>智能冷氣</h5>
                        <p>當手機GPS 定位快回到家了，就把客廳冷氣<span class="display_title_2">預先打開</span></p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智慧音箱</h5>
                        <p>只要<span class="display_title_2">出一張嘴</span>電燈、冷氣、家電…就通通都可輕鬆控制</p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智慧窗簾</h5>
                        <p>平日早上8點一到，就打開智慧窗簾讓<span class="display_title_2">陽光照進</span>臥室</p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智能冰箱</h5>
                        <p>當手機GPS 定位快回到家了，就把客廳冷氣<span class="display_title_2">預先打開</span></p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智能冰箱</h5>
                        <p>智能冰箱輕鬆具備人工智慧(AI)食材辨識能力，還可以<span class="display_title_2">提供食譜</span>與購物清單建議。</p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智慧電子鍋</h5>
                        <p>用手機控制電子鍋煮飯時間，下班回家<span class="display_title_2">準時開飯</span></p>
                    </li>
                    <li class="dt dt_hide">
                        <h5>智能感測器</h5>
                        <p>當移動感測器偵測到<span class="display_title_2">有人經過</span>，就觸發房間電燈打開</p>
                    </li>
                </ul>
            </div>
            <a href="08.exhib-origin.php">
                <div class="btn col-7 col-md-2 font-weight-light d-block ">
                    探索窩的智慧 >>
                </div>
            </a>
        </div>
    </section>

    <section class="section_3">
        <div class="container_90">
            <div class="title_wrap text-center text-md-right mt-3">
                <span class="display_title color_brown number">1.</span>
                <span class="display_title color_brown">窩の智慧</span>
                <p class="display_title_2 color_brown">小住宅，大方便</p>
                <p class="display_3 color_brown">有智慧生活的思考 <br> 日子過得更輕鬆</p>
            </div>
            <div class="card-stack">
                <ul class="card-list">
                    <li class="card ori_card_1">
                        <h3 class="display_1">1.寵物良伴-寵物機器人</h3>
                        <div class="card_wrap d-flex flex-column flex-md-row justify-content-end align-items-center">
                            <div class="card_left col-12 col-md-7">
                                <h2>忙到走不開 , 毛小孩來亂</h2>
                                <p><b>三重A小姐：</b>
                                    因為是編輯的關係，每次截稿前都會<span class="highline">瘋狂忙碌</span>，沒時間和我家的<b>狗小孩傑克</b>玩，自從有了寵物機器人後，終於可以<b>安心工作沒有罪惡感了!</b>
                                </p>
                                <div class="img_wrap row align-self-md-center align-items-center align-items-md-start m-0 m-md-1">
                                    <div class="person d-none d-md-block col-md-4">
                                        <img src="./index_img/persona-1.png" alt="">
                                        <img src="./index_img/persona-2.png" alt="">
                                        <p class="color_dark_purple text-center
                                                    mt-2 d-none d-md-block">當事狗傑克，與當事主人A小姐</p>
                                    </div>
                                    <img src="./index_img/card-before-1.png" alt="" class="card-list__image col-10 col-md-7 img_before">
                                    <img src="./index_img/card-after-1.png" alt="" class="card-list__image col-10 col-md-7 img_after">
                                </div>
                            </div>
                            <div class="card_right col-12 col-md-5">
                                <h4>你需要的...寵物良伴</h4>
                                <div class="item_wrap d-md-flex flex-wrap d-none">
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>VARRAM</h5>
                                            <p>給愛寵找個伴，當然首選網紅寵物陪伴機器人VARRAM！</p>
                                        </div>
                                    </div>
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>Mia</h5>
                                            <p>只需要倒入寵物喜歡的食物，並使用相應的 APP，Mia 就能在主人外出時陪伴寵物</p>
                                        </div>
                                    </div>
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>EBO Pro</h5>
                                            <p>貓奴必備最強寵物互動神器</p>
                                        </div>
                                    </div>
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>Aibo</h5>
                                            <p>擁有情緒的電子狗，可以如真實小狗般靈活行走</p>
                                        </div>
                                    </div>
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>Lovot</h5>
                                            <p>專為人們提供慰藉和陪伴的居家機器人</p>
                                        </div>
                                    </div>
                                    <div class="col-4 pet text-center">
                                        <div class="item">
                                            <h5>Qoobo</h5>
                                            <p>名為「Qoobo」的抱枕機器人，能在疫情期間成為我們的新晉「寵物」。</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="product_list_02_ai.php?cate_id=1&sub_cate_id=5">
                                    <div class="btn col-5 col-md-12 d-block">
                                        看更多
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="card ori_card_2">
                        <h3 class="display_1 ">2.Baby良伴-陪伴機器人</h3>
                        <div class="card_wrap d-flex flex-column flex-md-row justify-content-end align-items-center">
                            <div class="card_left col-12 col-md-7">
                                <h2>寶貝哭啼啼，新手爸求救</h2>
                                <p><b>彰化畢先生：</b>
                                    太太外出 <b>獨自在家顧寶寶</b> 總是壓力山大，寶寶一旦哭起來又遍尋不著原因時，真是叫天天不靈，但有 <b>陪伴機器人</b>
                                    這個好幫手，寶寶安心我也好放心；）
                                </p>
                                <div class="img_wrap row align-self-md-center align-items-center align-items-md-start m-0 m-md-1">
                                    <div class="person d-none d-md-block col-md-4">
                                        <img src="./index_img/persona-5.png" alt="">
                                        <img src="./index_img/persona-3.png" alt="">
                                        <p class="color_dark_purple text-center
                                                    mt-2 d-none d-md-block">當事嬰兒小明，與當事爸爸B先生</p>
                                    </div>
                                    <img src="./index_img/card-before-2.png" alt="" class="card-list__image col-10 col-md-7 img_before">
                                    <img src="./index_img/card-after-2.png" alt="" class="card-list__image col-10 col-md-7 img_after">
                                </div>
                            </div>
                            <div class="card_right col-12 col-md-5">
                                <h4>你需要的...Baby良伴</h4>
                                <div class="item_wrap d-md-flex flex-wrap d-none">
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5>Kirobo</h5>
                                            <p>陪伴機器人Kirobo，大眼紅鞋造型極為可愛</p>
                                        </div>
                                    </div>
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5>AIBO</h5>
                                            <p>Ers-1000 ERS 1000 aibo寵物機器狗</p>
                                        </div>
                                    </div>
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5> Lovot</h5>
                                            <p>可愛就是正義，首位有「個性」的機器人！</p>
                                        </div>
                                    </div>
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5>公子小白2</h5>
                                            <p>智能萌寵機器人第二代</p>
                                        </div>
                                    </div>
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5>公子小白</h5>
                                            <p>智能萌寵機器人，支持兒童智能機器人</p>
                                        </div>
                                    </div>
                                    <div class="col-4 baby text-center">
                                        <div class="item">
                                            <h5>Zenbo</h5>
                                            <p>提供居家生活陪伴及照護服務</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="product_list_02_ai.php?cate_id=1&sub_cate_id=6">
                                    <div class="btn col-5 col-md-12 d-block">
                                        看更多
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="card ori_card_3">
                        <h3 class="display_1">3.晚歸人良伴-智能電子鍋</h3>
                        <div class="card_wrap d-flex flex-column flex-md-row justify-content-end align-items-center">
                            <div class="card_left col-12 col-md-7">
                                <h2>忙到走不開 , 毛小孩來亂</h2>
                                <p><b>三重A小姐：</b>
                                    因為是編輯的關係，每次截稿前都會<span class="highline">瘋狂忙碌</span>，沒時間和我家的<b>狗小孩傑克</b>玩，自從有了寵物機器人後，終於可以<b>安心工作沒有罪惡感了!</b>
                                </p>
                                <div class="img_wrap row align-self-md-center align-items-center align-items-md-start m-0 m-md-1">
                                    <div class="person d-none d-md-block col-md-4">
                                        <img src="./index_img/persona-4.png" alt="">
                                        <p class="color_dark_purple text-center
                                                    mt-2 d-none d-md-block">當事晚歸人C先生</p>
                                    </div>
                                    <img src="./index_img/card-before-3.png" alt="" class="card-list__image col-10 col-md-7 img_before">
                                    <img src="./index_img/card-after-3.png" alt="" class="card-list__image col-10 col-md-7 img_after">
                                </div>
                            </div>
                            <div class="card_right col-12 col-md-5">
                                <h4>你需要的...晚歸人良伴</h4>
                                <div class="item_wrap d-md-flex flex-wrap d-none">
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>MU</h5>
                                            <p>MU全自動炒菜機‧IH爐智能機器人</p>
                                        </div>
                                    </div>
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>FANLAI</h5>
                                            <p>全自動炒菜機家用多功能炒飯機炒菜鍋智能機器人炒菜機</p>
                                        </div>
                                    </div>
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>小米</h5>
                                            <p>最近小米有品上架了一款眾籌智能炒菜機，Solista 獨奏智能炒菜機</p>
                                        </div>
                                    </div>
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>EASY LIFE</h5>
                                            <p>IH智能翻炒鍋(EL19008)，智能溫控、燉炒燜煲一鍵完成</p>
                                        </div>
                                    </div>
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>SMART</h5>
                                            <p>全功能智慧烹飪機/炒菜機器人/懶人炒鍋紅色/黃</p>
                                        </div>
                                    </div>
                                    <div class="col-4 night text-center">
                                        <div class="item">
                                            <h5>小米</h5>
                                            <p>飯來F1S 烹飪機器人，標榜一鍵烹飪坐享飯來</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="product_list_01_smart.php?cate_id=7&sub_cate_id=12">
                                    <div class="btn col-5 col-md-12 d-block">
                                        看更多
                                    </div>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section_4">
        <div class="container_90">
            <div class="title_wrap text-center text-md-right mt-3">
                <span class="display_title color_brown number">1.</span>
                <span class="display_title color_brown">窩の智慧</span>
                <p class="display_title_2 color_brown">小住宅，大方便</p>
                <p class="display_3 color_brown">有智慧生活的思考 <br> 日子過得更輕鬆</p>
            </div>
            <div class="choose_item">
                <div class="choose1">
                    <h4 class="display_title_2 text-center text-md-left">選選看-選擇一種情境</h4>
                    <div class="choose_card_wrap">
                        <div class="choose_card">
                            <div class="text_wrap mt-1 mt-md-5">
                                <h5 class="card-title text-center display_title_2  my-3 my-md-5 ">
                                    已經躺平在床上的我<br>
                                    沒力氣再爬起來關燈
                                </h5>
                            </div>
                            <img src="./index_img/choose-1.png" class="card-img" alt="...">
                        </div>
                        <div class="choose_card">
                            <div class="text_wrap mt-1 mt-md-5">
                                <h5 class="card-title text-center display_title_2  my-3 my-md-5 ">
                                    平日忙到不行
                                    <br>
                                    閒的時候根本不想打掃
                                </h5>
                            </div>
                            <img src="./index_img/choose-2.png" class="card-img" alt="...">
                        </div>
                        <div class="choose_card">
                            <div class="text_wrap mt-1 mt-md-5">
                                <h5 class="card-title text-center display_title_2  my-3 my-md-5 ">
                                    早出晚歸<br>
                                    難道只能吃外食？
                                </h5>
                            </div>
                            <img src="./index_img/choose-3.png" class="card-img" alt="...">
                        </div>
                        <div class="choose_card">
                            <div class="text_wrap mt-1 mt-md-5">
                                <h5 class="card-title text-center display_title_2  my-3 my-md-5 ">
                                    懶的極致只做重要的事<br>
                                    剩下的雜事交給管家就好
                                </h5>
                            </div>
                            <img src="./index_img/choose-4.png" class="card-img" alt="...">
                        </div>
                    </div>
                    <h5 class="display_title_2 text-center text-md-left">選選看-選擇一種情境</h5>
                    <div class="btn_wrap">
                        <div class="choose_btn">
                            <h3 class="display_title">又俗又大碗</h3>
                        </div>
                        <div class="choose_btn">
                            <h3 class="display_title">追求CP值</h3>
                        </div>
                        <div class="choose_btn">
                            <h3 class="display_title">我要黑科技</h3>
                        </div>
                        <div class="choose_btn">
                            <h3 class="display_title">質感の選品</h3>
                        </div>
                    </div>
                </div>
                <div class="choose2">
                    <h4 class="display_title_2 text-center">追求CP值的你，需要這個！</h4>
                    <div class="btn re_choose">再選一次</div>
                    <div class="recommand_item_wrap d-md-block ">
                        <div class="recommand_item row justify-content-center">
                            <div class="item_wrap">
                                <div class="item_card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <div class="icon_group">
                                            <a href="#" class="compare"><img src="
                                                        ./img/icon_compare-list.svg" alt="">比較</a>
                                            <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">收藏</a>
                                        </div>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <div class="img_wrap"><img src="index_img/jpg/recommand_1.jpeg" class="card-img-top" alt="...">
                                    </div>
                                </div>
                            </div>
                            <div class="item_wrap">
                                <div class="item_card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <div class="icon_group">
                                            <a href="#" class="compare"><img src="
                                                        ./img/icon_compare-list.svg" alt="">比較</a>
                                            <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">收藏</a>
                                        </div>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <div class="img_wrap"><img src="index_img/jpg/recommand_2.jpeg" class="card-img-top" alt="..."></div>
                                </div>
                            </div>
                            <div class="item_wrap">
                                <div class="item_card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <div class="icon_group">
                                            <a href="#" class="compare"><img src="
                                                        ./img/icon_compare-list.svg" alt="">比較</a>
                                            <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">收藏</a>
                                        </div>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <div class="img_wrap"><img src="index_img/jpg/recommand_3.jpeg" class="card-img-top" alt="..."></div>
                                </div>
                            </div>
                            <div class="item_wrap">
                                <div class="item_card">
                                    <div class="firstline">
                                        <h4 class="card-title">Panasonic</h4>
                                        <div class="icon_group">
                                            <a href="#" class="compare"><img src="
                                                        ./img/icon_compare-list.svg" alt="">比較</a>
                                            <a href="#" class="saved"><img src="./img/icon_saved.svg" alt="">收藏</a>
                                        </div>
                                    </div>
                                    <h5 class="card-title">電氣壓力鍋 SR-PG501 </h5>
                                    <div class="img_wrap"><img src="index_img/jpg/recommand_4.jpeg" class="card-img-top" alt="..."></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
        <footer class="footer d-none">

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
    </section>
</div>
<!-- 在這裡結束網頁撰寫 ----------------------->

<!-- btn_toTop --------------------------------------------->

<button class="btn_toTop btn" style="display: none;">
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

<script src="./js/01-index.js"></script>


</body>

</html>