<?php session_start() ?>
<?php require_once 'head.php' ?>

<title>願望清單</title>
<link rel="stylesheet" href="./Css/follow.css">

<style>
    .wrap {
        padding-top: 0px;
    }
</style>
<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<div class="wrap">
    <div class="r_part">
        <div class="main_head">
            <h3>商品種類</h3>

            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php
                        $sql = "SELECT `brands`.`brand_name`,`brands`.`brand_id`,`products`.`prod_id` FROM `products` INNER JOIN `users_follow` ON `products`.`prod_id`=`users_follow`.`prod_id` INNER JOIN `brands` ON `products`.`brand_id`=`brands`.`brand_id`
                            GROUP BY `products`.`brand_id`;";
                        $stmt = $pdo->query($sql);
                        if ($stmt->rowCount() > 0) {
                            $arr = $stmt->fetchAll();
                            foreach ($arr as $obj) {
                        ?>
                                <li class="splide__slide"><a href="follow.php?brand_id=<?= $obj['brand_id'] ?>"><?= $obj['brand_name'] ?></a></li>
                        <?php
                            }
                        } ?>

                        <!-- $sql = "SELECT `brand_id` FROM `users_follow`";
                            $arr = $pdo->query($sql)->fetchAll();
                            foreach ($arr as $obj) {
                                echo "<li class=\"splide__slide\">{$obj['brand_id']}</li>";
                            } -->


                    </ul>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="row">
                <?php

                $sql = "SELECT *  FROM `products` INNER JOIN `users_follow` ON `products`.`prod_id`=`users_follow`.`prod_id` INNER JOIN `brands` ON `products`.`brand_id`=`brands`.`brand_id`";

                if (isset($_GET['brand_id'])) $sql .= "WHERE `products`.`brand_id`={$_GET['brand_id']} ";


                $stmt = $pdo->query($sql);
                if ($stmt->rowCount() > 0) {
                    $arr = $stmt->fetchAll();
                    foreach ($arr as $obj) {
                ?>
                        <div class="col-md-4 col-12">
                            <div class="card1 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox="0 0 149.945 36">
                                    <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                        <g id="Group_275" data-name="Group 275">
                                            <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                            <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                <tspan x="0" y="0">免運優惠</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                                <div class="card_head">
                                    <h5 class="card_title"><?= $obj['prod_name'] ?>
                                    </h5>

                                    <div class="pic_area"> <img src="db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" class="prod_thumbnail"></div>

                                    <div class="price">NT$ <?= $obj['prod_price'] ?></div>
                                </div>
                                <div class="card_footer">
                                    <button class="del_follow"><img src="./img/icon_trash.svg" alt="">移出喜愛清單</button>
                                    <button class="follow_shopping_cart" data-brand_id="<?= $obj['brand_id'] ?>">
                                        <img src="./img/icon_shopping-cart.svg" alt="">加入購物車
                                    </button>
                                </div>
                            </div>

                        </div>
                <?php
                    }
                }
                ?>
                <?php
                if (isset($_SESSION['follow_list'])) {
                    foreach ($_SESSION['follow_list'] as $follow) {
                ?>
                        <div class="col-md-4 col-12">
                            <div class="card1 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="149.945" height="36" viewBox="0 0 149.945 36">
                                    <g id="Group_650" data-name="Group 650" transform="translate(-364.442 -1080)">
                                        <g id="Group_275" data-name="Group 275">
                                            <path id="Subtraction_1" data-name="Subtraction 1" d="M-6172.056,39H-6322V3h149.943L-6190.4,21l18.338,18Z" transform="translate(6686.442 1077)" fill="#8b82b2" opacity="0.561" />
                                            <text id="免運優惠" transform="translate(377.442 1103.857)" fill="#fff" font-size="16" font-family="PingFangHK-Regular, PingFang HK" letter-spacing="0.2em">
                                                <tspan x="0" y="0">免運優惠</tspan>
                                            </text>
                                        </g>
                                    </g>
                                </svg>
                                <div class="card_head">
                                    <h5 class="card_title"><?= $follow['prod_name'] ?>
                                    </h5>

                                    <div class="pic_area"> <img src="db_img/img_prod_thumbnail/<?= $follow['prod_thumbnail'] ?>" class="prod_thumbnail"></div>

                                    <div class="price">NT$ <?= $follow['prod_price'] ?></div>
                                </div>
                                <div class="card_footer">
                                    <button class="del_follow"><img src="img/icon_trash.svg" alt="">移出喜愛清單</button>
                                    <button class="follow_shopping_cart" data-brand_id="<?= $follow['brand_id'] ?>">
                                        <img src="img/icon_shopping-cart.svg" alt="">加入購物車
                                    </button>
                                </div>
                            </div>
                        </div>
                <?php }
                } ?>
            </div>

        </div>

    </div>


</div>






<form id="aa" method="POST" action="ShoppingCart.php">
    <input type="hidden" name="prod_name" value="1">
    <input type="hidden" name="prod_thumbnail" value="1">
    <input type="hidden" name="prod_price" value="1">
</form>







<!-- 在這裡結束網頁撰寫 ----------------------->



<!-- FT : Footer ----------------------------------------------->

<!-- <footer class="footer">

        <div class="row ft-box">

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

            <div class="col-3 ft-title">
                <h5>footer title</h5>
            </div>

        </div>

    </footer> -->


<!-- btn_toTop --------------------------------------------->
<!-- <button class="btn_toTop btn btn-primary">TOP</button> -->


<!-- JQ : btn_toTop ----------------------------------->


<script>
    $(".btn_toTop").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });
    // slide
    $(function() {
        $('.left').click(function() {
            let nowX = $('ul').css('margin-left');
            nowX = Number(nowX.split('px')[0]);
            if (nowX >= -216) {
                $('ul').animate({
                    marginLeft: `${(nowX * 100 - 72 * 100) / 100}px`
                });
            }
        });

        $('.right').click(function() {
            let nowX = $('ul').css('margin-left');
            nowX = Number(nowX.split('px')[0]);
            if (nowX <= -72) {
                $('ul').animate({
                    marginLeft: `${(nowX * 100 + 72 * 100) / 100}px`
                });
            }
        });

        var splide = new Splide('.splide', {
            type: 'loop',
            width: '500px',
            height: '30px',
            focus: 'center',
            perPage: 3,
            pagination: false
        }).mount();
        $('li.is-active').addClass('active-menu');

        splide.on('moved', function() {
            $('li').removeClass('active-menu');
            $('li.is-active').addClass('active-menu');
        });

        $('.del').click(function() {
            $('.full').show();
        })

        $('.ans_f').click(function() {
            $('.full').css('display', 'none');
        })
        $('.ans_y').click(function() {
            $('.full').css('display', 'none');
        })
    });
    // this
    $('.del_follow').click(function() {
        $(this).parents('.col-md-4.col-12').remove();
    })





    // var item_arr =

    // for(let i=0;i>=item_arr;i++){
    // $('.price').val(item_arr[i].price)
    // }
</script>
<?php require_once 'foot.php' ?>