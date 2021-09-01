<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>


<?php

if (!isset($_SESSION['data_compare'])) {
    echo "比較清單沒有任何商品喔!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!";
    exit();
}

?>

<!-- CSS link Compare-List---------------------------->
<link rel="stylesheet" href="./CSS/04.compare.css">


<!-- fa -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />




<!----------------------- 拖曳效果 ----------------------->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">



<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">
    <div class="cate_area_title">
        <h3 class="display_title">商品種類</h3>
        <p>(請選擇想比較的商品類別)</p>
    </div>
    <!-------- mob版 類別資料夾-------->
    <div class="cate_area">
        <ul>
            <?php
            $number = 0;
            if (isset($_SESSION['data_compare']) && count($_SESSION['data_compare']) > 0) {
                $cateIDArray = [];
                foreach ($_SESSION['data_compare'] as $key => $obj1) {
                    $sql = "SELECT `prod_id`, `cate_name`,`categories`.`cate_id` 
                                    FROM `products` 
                                    INNER JOIN `categories` 
                                    ON `products`.`cate_id`=`categories`.`cate_id`
                                    WHERE `prod_id` = {$obj1['prod_id']};";

                    $arr = $pdo->query($sql)->fetchAll();
                    foreach ($arr as $obj2) {
                        if (in_array($obj2['cate_id'], $cateIDArray)) {
                            // echo "The 'first' element is in the array";

                        } else {
                            $number++;
                            $cateIDArray[] = $obj2['cate_id'];

            ?>
                            <li><a class="folder_<?= $number ?>" href="compare.php?cate_id=<?= $obj2['cate_id'] ?>&prod_id=<?= $obj2['prod_id'] ?>"><?= $obj2['cate_name'] ?></a></li>
                            <!-- <li class="martop_0"><a class="folder_1" href="">掃地機器人</a></li>
            <li><a class="folder_2" href="">管家機器人</a></li>
            <li><a class="folder_3" href="">烹飪機器人</a></li>
            <li><a class="folder_4" href="">智慧手錶</a></li>
            <li><a class="folder_5" href="">智慧音箱</a></li>
            <li><a class="folder_6" href="">智慧音箱</a></li>
            <li><a class="folder_7" href="">電子鍋</a></li>
            <li><a class="folder_8" href="">寵物機器人</a></li>
            <li><a class="folder_9" href="">空氣清淨機機機</a></li> -->
            <?php
                        }
                    }
                }
            }
            ?>
        </ul>
    </div>
    <!-------- web版 類別資料夾--------->
    <div class="cate_wrap">
        <div class="cate_area_web">
            <ul>
                <?php
                $number = 0;
                if (isset($_SESSION['data_compare']) && count($_SESSION['data_compare']) > 0) {
                    $cateIDArray = [];
                    foreach ($_SESSION['data_compare'] as $key => $obj1) {
                        $sql = "SELECT `prod_id`, `cate_name`,`categories`.`cate_id` 
                                    FROM `products` 
                                    INNER JOIN `categories` 
                                    ON `products`.`cate_id`=`categories`.`cate_id`
                                    WHERE `prod_id` = {$obj1['prod_id']};";

                        $arr = $pdo->query($sql)->fetchAll();
                        foreach ($arr as $obj2) {
                            if (in_array($obj2['cate_id'], $cateIDArray)) {
                                // echo "The 'first' element is in the array";

                            } else {
                                $number++;
                                $cateIDArray[] = $obj2['cate_id'];

                ?>
                                <li><a class="folder_<?= $number ?>" href="compare.php?cate_id=<?= $obj2['cate_id'] ?>&prod_id=<?= $obj2['prod_id'] ?>"><?= $obj2['cate_name'] ?></a></li>

                <?php
                            }
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <button class="cate_wrap_left_arrow_area">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="cate_wrap_right_arrow_area">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>

    <!-------- 商品選擇區 -------->
    <div class="select_area_title">
        <?php
        if (isset($_GET['cate_id'])) {
            $sql = "SELECT * 
                FROM `categories`
                WHERE `cate_id`= {$_GET['cate_id']};";
            $arr = $pdo->query($sql)->fetchAll();
            foreach ($arr as $obj) {
        ?>
                <h3><?= $obj['cate_name'] ?></h3>
                <p>(您加入比較清單的商品)</p>
        <?php
            }
        }
        ?>
    </div>
    <div class="select_area">

        <div class="img_area">
            <ul class="img_wrap" id="left_card">
                <?php
                if (isset($_GET['cate_id'])) {
                    foreach ($_SESSION['data_compare'] as $key => $obj1) {
                        $sql = "SELECT `prod_name`, `prod_price`,`cate_name`,`prod_thumbnail`,`prod_id`
                        FROM `products` 
                        INNER JOIN `categories` 
                        ON `products`.`cate_id`=`categories`.`cate_id`
                        WHERE `products` .`prod_id` = {$obj1['prod_id']}
                        AND `products`.`cate_id`={$_GET['cate_id']};";
                        $arr = $pdo->query($sql)->fetchAll();
                        foreach ($arr as $obj2) {
                ?>
                            <li data-id="<?= $obj2['prod_id'] ?>" data-price="<?= $obj2['prod_price'] ?>">
                                <a href="#">
                                    <img class="img1" src="db_img/img_prod_thumbnail/<?= $obj2['prod_thumbnail'] ?>" alt="">
                                </a>
                            </li>
                <?php
                        }
                    }
                }
                ?>
                <!-- <li data-id="305" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0305.png" alt=""></a>
                    </li>
                    <li data-id="1.3" data-price='100'><a href=""><img class="img1" src="./img_prod_thumbnail/0307.png" alt=""></a>
                    </li>
                    <li data-id="1.4"><a href=""><img class="img1" src="./img_prod_thumbnail/0304.png" alt=""></a></li>
                    <li data-id="1.5"><a href=""><img class="img1" src="./img_prod_thumbnail/0302.png" alt=""></a></li>
                    <li data-id="1.6"><a href=""><img class="img1" src="./img_prod_thumbnail/0306.png" alt=""></a></li>
                    <li data-id="1.7"><a href=""><img class="img1" src="./img_prod_thumbnail/0310.png" alt=""></a></li>
                    <li data-id="1.8"><a href=""><img class="img1" src="./img_prod_thumbnail/0312.png" alt=""></a></li> -->
            </ul>
        </div>
        <div class="plus d-none d-md-block">
            <a href="product_list_01_smart.php?cate_id=2&sub_cate_id=21">
                <img class="img9" src="img/icon_compare-list.svg" alt="">
            </a>
            </li>
        </div>
        <button class="select_left_arrow_area">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="select_right_arrow_area">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <!-- <ul class="slider_dots">
        <li class="dots dot1"></li>
        <li class="dots dot2"></li>
        <li class="dots dot3"></li>
    </ul> -->

    <!-------- 比較表格 -------->
    <div class="compare_table_title">
        <h3 class="mob">快速查看詳細規格</h3>
        <h3 class="web">詳細規格比較</h3>
    </div>

    <!-- ---------- 取得欄位項目 ---------- -->
    <?php if (isset($_GET['cate_id'])) {
        $sql = "SELECT `specific_A` , `specific_B` , `specific_C` , `specific_D` , `specific_E` 
                    FROM `specification_item`
                    WHERE `cate_id` = {$_GET['cate_id']}";
        $arr = $pdo->query($sql)->fetchAll();
        foreach ($arr as $obj) {
    ?>
            <div class="compare_table">
                <div class="box box01 box_pic">商品</div>
                <ul class="box box02 box_pic box_pic1" id="right_card"></ul>
                <ul class="box box03 box_pic box_pic2" id="middle_card"></ul>
                <ul class="box box04 box_pic box_pic3" id="middle2_card"></ul>
                <div class="box box01">商品名稱</div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01">商品價格</div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01">品牌名稱</div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01">商品型號</div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01"><?= $obj['specific_A'] ?></div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01"><?= $obj['specific_B'] ?></div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01"><?= $obj['specific_C'] ?></div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01"><?= $obj['specific_D'] ?></div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04"></div>
                <div class="box box01"><?= $obj['specific_E'] ?></div>
                <div class="box box02"></div>
                <div class="box box03"></div>
                <div class="box box04">
                    <p style="font-size: 60px;"></p>
                </div>
            </div>
    <?php
        }
    }
    ?>


    <!-------- 快速比較區 (web_only) -------->
    <div class="card_wrap">
        <li class="compare_card">
            <h3 class="display_title">快速查看<small> (僅提供站內資料)</small></h3>
            <!-- 上半卡片 -->
            <div class="card_title row">
                <!-- 商品資訊 -->
                <div class="title_wrap">
                    <h4 class="display_1 brand_name">米家</h4>
                    <h4 class="display_1">掃地機器人</h4>
                    <h4 class="display_2">NT$ 9999</h4>
                </div>
                <!-- icon 垃圾桶 -->
                <a href="#"><img src="./img/icon_trash.svg" alt=""></a>
            </div>
            <!-------- 下半卡片  -------->
            <div class="outerwrap">
                <!-- 商品圖 -->
                <div class="itemcard">
                    <a href="#">
                        <img src="db_img/img_prod_thumbnail/0301.png" alt="">
                    </a>
                </div>
                <!-------- 雷達圖  -------->
                <div class="card_radar">
                    <div id="chart1"></div>
                </div>
                <!-------- 右邊 button  -------->
                <div class="icon_wrap">
                    <a href="#" class="compare">
                        <img src="./img/icon_saved.svg" alt="">
                        <span class="display_title_2">加入喜好清單</span>
                    </a>
                    <a href="#" class="shopping-cart">
                        <img src="./img/icon_shopping-cart.svg" alt="">
                        <span class="display_title_2">加入購物車</span>
                    </a>
                </div>
            </div>
        </li>
        <button class="fixed_left_arrow_area">
            <i class="fas fa-chevron-right"></i>
        </button>
        <button class="fixed_right_arrow_area">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>

</div>

<!-- 在這裡結束網頁撰寫 ----------------------->




<!-------- Link: Radar Chart -------->
<script src="./JS/04.radar.js" type="text/javascript"></script>

<!-------- Data: Radar Chart -------->
<script>
    $('.img_wrap').on("click", "li", function() {

        let img_prodID = $(this);
        let prodID = img_prodID.attr('data-id');

        // 初始
        let strA_name = '';
        let strB_name = '';
        let strC_name = '';
        let strD_name = '';
        let strE_name = '';
        let strA_score;
        let strB_score;
        let strC_score;
        let strD_score;
        let strE_score;

        // 取值
        $.post("prod_Radar_api.php", {
            prod_id: prodID
        }, function(obj3) {

            console.log(obj3.result);
            // strA_name = obj3.result[0].rate_A_name;
            // strB_name = obj3.result[0].rate_B_name;
            // strC_name = obj3.result[0].rate_C_name;
            // strD_name = obj3.result[0].rate_D_name;
            // strE_name = obj3.result[0].rate_E_name;

            strA_score = obj3.result[0].rate_A_score;
            strB_score = obj3.result[0].rate_B_score;
            strC_score = obj3.result[0].rate_C_score;
            strD_score = obj3.result[0].rate_D_score;
            strE_score = obj3.result[0].rate_E_score;

            console.log(strA_name, strB_name, strC_name, strD_name, strE_name);
            console.log(strA_score, strB_score, strC_score, strD_score, strE_score);

            // 清空 Radar圖
            $('#chart1').html('');
            objValues = {};
            objValues[obj3.result[0].rate_A_name] = obj3.result[0].rate_A_score;
            objValues[obj3.result[0].rate_B_name] = obj3.result[0].rate_B_score;
            objValues[obj3.result[0].rate_C_name] = obj3.result[0].rate_C_score;
            objValues[obj3.result[0].rate_D_name] = obj3.result[0].rate_D_score;
            objValues[obj3.result[0].rate_E_name] = obj3.result[0].rate_E_score;

            console.log(`${strA_name}:${strA_score}`);
            $('#chart1').radarChart({
                size: [500, 400],
                step: 1,
                title: '',
                values: objValues,
                showAxisLabels: true
            });
        }, "json");

        // 取詳細資訊
        $.post("prod_info_api.php", {
            prod_id: prodID
        }, function(obj1) {
            console.log(obj1.result);
            let cardinfo = '';
            for (let i = 0; i < obj1.result.length; i++) {
                cardinfo += ` <h4 class="display_1 brand_name">${obj1.result[i].brand_name}</h4>
                        <h4 class="display_1">${obj1.result[i].prod_name}</h4>
                        <h4 class="display_2">NT$ ${obj1.result[i].prod_price}</h4>`
            };
            $('.title_wrap').html(cardinfo);

            let cardimg = '';
            for (let i = 0; i < obj1.result.length; i++) {
                cardimg += `<a href="#">
                            <img src="db_img/img_prod_thumbnail/${obj1.result[i].prod_thumbnail}" alt="">
                        </a>`
            };
            $('.itemcard').html(cardimg);

        }, "json");


    })
</script>


<!--arrow  -->
<script>
    let thisList = 0;

    $('.cate_wrap_right_arrow_area').click(function() {
        event.preventDefault();
        thisList = thisList + 1;
        moveDown()
    })
    $('.select_right_arrow_area').click(function() {
        event.preventDefault();
        thisList = thisList + 1;
        imgMoveDown()
    })


    $('.cate_wrap_left_arrow_area').click(function() {
        event.preventDefault();
        thisList = thisList - 1;
        moveDown()

        if (thisList === 0) {
            $('.cate_area_web ul').css('transform', `translateX(0px)`)
        }
    })
    $('.select_left_arrow_area').click(function() {
        event.preventDefault();
        thisList = thisList - 1;
        imgMoveDown()
    })

    function moveDown() {
        const moveWidth = $('.cate_area_web ul li').width();
        const positionX = thisList * -1 * moveWidth;
        $('.cate_area_web ul').css(
            'transform', `translateX(${positionX}px)`);
    }

    function imgMoveDown() {
        const imgMoveWidth = $('.select_area ul li').width();
        const positionImgX = thisList * -1 * imgMoveWidth;
        $('.select_area ul').css(
            'transform', `translateX(${positionImgX}px)`);
    }
</script>
<!--  -->


<script>
    // ------------------------ [雷達卡片 收合展開 ------------------------
    $(document).ready(function() {
        $('.card_wrap').css('width', '30px');
    })
    $('.fixed_left_arrow_area').hide();
    // 卡片收合
    $('.fixed_right_arrow_area').click(function(event) {
        event.preventDefault();
        setTimeout(function() {
            $('.fixed_right_arrow_area').hide();
        }, 600);
        // $(this).delay(10000).hide();
        setTimeout(function() {
            $('.fixed_left_arrow_area').show();
        }, 600);
        $('.card_wrap').css('width', '30px');
    })
    // 卡片展開
    $('.fixed_left_arrow_area , .img1, .img2, .img3').click(function(event) {
        event.preventDefault();
        $('.fixed_left_arrow_area').hide();
        $('.fixed_right_arrow_area').show();
        $('.card_wrap').css('width', '70vw');

    })

    // ------------------------ 雷達卡片 取值 ------------------------
</script>

<!-- <script src="JS/04.compare03.js"></script> -->

<script>
    //----------------------- 拖曳效果 -----------------------
    var saveDragId_1 = '';
    var saveDragHtml_1 = '';
    var saveDragId_2 = '';
    var saveDragHtml_2 = '';
    var saveDragId_3 = '';
    var saveDragHtml_3 = '';

    $(function() {
        $('ul#left_card').sortable({
            connectWith: "ul#right_card, ul#middle_card, ul#middle2_card",
        });
        // ---------- 表格第一欄 ----------
        $('ul#right_card').sortable({
            // connectWith: "ul#left_card",
            update: function(event, ui) {
                let _ui = $(ui.item[0]);
                // console.log(_ui.attr('data-price'));
                // alert(ui.item[0].getAttribute('data-price'));

                if (saveDragHtml_1 == '') {
                    saveDragId_1 = ui.item[0].dataset.id;
                    saveDragHtml_1 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;

                } else {
                    $('ul#right_card').find(`li[data-id="${saveDragId_1}"]`).remove();
                    $('ul#left_card').append(saveDragHtml_1);
                    saveDragId_1 = ui.item[0].dataset.id;
                    saveDragHtml_1 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
                }
                console.log('hi');



                // 取得 詳細資訊 放進表格
                $.post("prod_info_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj1) {
                    // console.log(obj2.result);
                    let prod_info = obj1.result[0];
                    $('.box02').eq(1).text(prod_info.prod_name);
                    $('.box02').eq(2).text('NT$ ' + prod_info.prod_price);
                    $('.box02').eq(3).text(prod_info.brand_name);
                    $('.box02').eq(4).text(prod_info.prod_type);
                }, "json");

                // 取得 規格表 放進表格
                $.post("prod_speci_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj2) {
                    for (let i = 0; i < obj2.result.length; i++) {
                        if (obj2.result[i].specific_id == 'A') {
                            $('.box02').eq(5).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'B') {
                            $('.box02').eq(6).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'C') {
                            $('.box02').eq(7).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'D') {
                            $('.box02').eq(8).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'E') {
                            $('.box02').eq(9).text(obj2.result[i].specific_content);
                        }
                    };
                }, "json");
            }
        });

        // ---------- 表格第二欄 ----------
        $('ul#middle_card').sortable({
            // connectWith: "ul#left_card",
            update: function(event, ui) {
                let _ui = $(ui.item[0]);
                // console.log(_ui.attr('data-price'));
                // alert(ui.item[0].getAttribute('data-price'));

                if (saveDragHtml_2 == '') {
                    saveDragId_2 = ui.item[0].dataset.id;
                    saveDragHtml_2 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
                } else {
                    $('ul#middle_card').find(`li[data-id="${saveDragId_2}"]`).remove();
                    $('ul#left_card').append(saveDragHtml_2);
                    saveDragId_2 = ui.item[0].dataset.id;
                    saveDragHtml_2 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
                }

                // 取得 詳細資訊 放進表格
                $.post("prod_info_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj1) {
                    console.log(obj1.result);
                    let prod_info = obj1.result[0];
                    $('.box03').eq(1).text(prod_info.prod_name);
                    $('.box03').eq(2).text('NT$ ' + prod_info.prod_price);
                    $('.box03').eq(3).text(prod_info.brand_name);
                    $('.box03').eq(4).text(prod_info.prod_type);
                }, "json");

                // 取得 規格表 放進表格
                $.post("prod_speci_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj2) {
                    for (let i = 0; i < obj2.result.length; i++) {
                        if (obj2.result[i].specific_id == 'A') {
                            $('.box03').eq(5).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'B') {
                            $('.box03').eq(6).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'C') {
                            $('.box03').eq(7).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'D') {
                            $('.box03').eq(8).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'E') {
                            $('.box03').eq(9).text(obj2.result[i].specific_content);
                        }
                    };
                }, "json");

            }
        });

        // ---------- 表格第三欄 ----------
        $('ul#middle2_card').sortable({
            // connectWith: "ul#left_card",
            update: function(event, ui) {
                let _ui = $(ui.item[0]);
                // console.log(_ui.attr('data-price'));
                // alert(ui.item[0].getAttribute('data-price'));

                if (saveDragHtml_3 == '') {
                    saveDragId_3 = ui.item[0].dataset.id;
                    saveDragHtml_3 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
                } else {
                    $('ul#middle2_card').find(`li[data-id="${saveDragId_3}"]`).remove();
                    $('ul#left_card').append(saveDragHtml_3);
                    saveDragId_3 = ui.item[0].dataset.id;
                    saveDragHtml_3 = `<li data-id="${ui.item[0].dataset.id}">${ui.item[0].innerHTML}</li>`;
                }


                // 取得 詳細資訊 放進表格
                $.post("prod_info_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj1) {
                    console.log(obj1.result);
                    let prod_info = obj1.result[0];
                    $('.box04').eq(1).text(prod_info.prod_name);
                    $('.box04').eq(2).text('NT$ ' + prod_info.prod_price);
                    $('.box04').eq(3).text(prod_info.brand_name);
                    $('.box04').eq(4).text(prod_info.prod_type);
                }, "json");

                // 取得 規格表 放進表格
                $.post("prod_speci_api.php", {
                    prod_id: ui.item[0].dataset.id
                }, function(obj2) {
                    console.log(obj2.result);
                    for (let i = 0; i < obj2.result.length; i++) {
                        if (obj2.result[i].specific_id == 'A') {
                            $('.box04').eq(5).text(obj2.result[i].specific_content);

                        } else if (obj2.result[i].specific_id == 'B') {
                            $('.box04').eq(6).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'C') {
                            $('.box04').eq(7).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'D') {
                            $('.box04').eq(8).text(obj2.result[i].specific_content);
                        } else if (obj2.result[i].specific_id == 'E') {
                            $('.box04').eq(9).text(obj2.result[i].specific_content);
                        }
                    };
                }, "json");

            }
        });

        $("#left_card, #right_card, #middle2_card, #middle_card").disableSelection();

    });

    // 貼best標籤
    // $(function() {
    //     let str_box2 = $('.box02').eq(2).text();
    //     let str_box3 = $('.box03').eq(2).text();
    //     let str_box4 = $('.box04').eq(2).text();
    //     console.log(str_box2)
    // })
</script>


<!-- foot.php -->
<?php require_once 'foot.php' ?>