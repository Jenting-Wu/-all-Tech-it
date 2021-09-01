<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>購物車頁面</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/shopping_cart.css">


<?php
if (!$_SESSION['shopping_cart']) {
    $_SESSION['shopping_cart'] = [];
}
?>




<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<!-- <div class="wrap"> -->
<!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
<div class="wrap">

    <div class="container">
        <h4>購物車</h4>
        <form name="myForm" action="logistics.php" method="post" class="cart">
            <div class="l_part">
                <div class="shopp_list">
                    <?php
                    $cartBrandId = [];

                    foreach ($_SESSION['shopping_cart'] as $index => $obj) {
                        $cartBrandId[] = $obj['brand_id'];
                        $cartBrandId = array_unique($cartBrandId);
                    }

                    foreach ($cartBrandId as $index => $obj) {
                        $sql = "SELECT `brand_name` FROM `brands` WHERE `brand_id` = $obj";
                        $stmt = $pdo->query($sql);
                        if ($stmt->rowCount() > 0) {
                            $arr = $stmt->fetchAll();
                    ?>
                            <label class="list_head">
                                <input type="checkbox" class="brand_check" value="">
                                <h5 class="brand"><?= $arr[0]['brand_name'] ?></h5>
                            </label>
                            <?php foreach ($_SESSION['shopping_cart'] as $index => $item) {
                                if ($item['brand_id'] == $obj) { ?>
                                    <div class="list">
                                        <input type="hidden" name="itemImg[]" value="<?= $item['prod_thumbnail'] ?>">
                                        <input type="hidden" name="itemBrand[]" value="<?= $item['brand_id'] ?>">
                                        <input type="hidden" name="itemName[]" value="<?= $item['prod_name'] ?>">
                                        <input type="hidden" name="itemPrice[]" value="<?= $item['prod_price'] ?>">
                                        <div class="list_left">
                                            <label>
                                                <input type="checkbox">
                                            </label>
                                            <img class="product_img img-thumbnail" src="<?= $item['prod_thumbnail'] ?>">
                                        </div>
                                        <div class="list_center">
                                            <div class="flex">
                                                <h5 class="title"><?= $item['prod_name'] ?></h5>
                                                <img class="del" src="img/icon_trash.svg" alt="" data-index="<?= $index ?>">
                                            </div>
                                            <!-- <div class="info_spec">
                                                <h6 class="spec">規格 </h6>
                                                <h6 class="colour"> 接PHP</h6>
                                            </div> -->
                                            <div class="info_price">
                                                <h6 class="price">單價 </h6>
                                                <h6 class="price">NT </h6>
                                                <h6 class="p_rice single_price"><?= $item['prod_price'] ?></h6>
                                                <div class="counter">
                                                    <button class="btn btn_minus" type="button" data-index="<?= $prod_qty ?>" data-prod-price="<?= $item['prod_price'] ?>"> <img src="img/minus.svg" alt=""></button>

                                                    <input type="text" class="item_price" name="itemQty[]" value="<?= $item['prod_qty'] ?>">

                                                    <button class="btn btn_plus" type="button" data-index="<?= $prod_qty ?>" data-prod-price="<?= $item['prod_price'] ?>"> <img src="img/plus.svg" alt=""></button>
                                                </div>
                                            </div>
                                            <div class="remove">
                                                <img src="img/icon_saved.svg" id="remove"> 移回喜愛清單
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>


                    <?php }
                        }
                    }
                    ?>




                    <div class="promotion">
                        <h6>商品折扣</h6>
                        <p>消費商品金額滿 NT$ 1,000 ，現折 NT$ 100 ！</p>
                    </div>
                    <div class="subtotal">
                        <h5>小計</h5>
                        <p>NT$ 10,000</p>
                    </div>
                </div>
            </div>
            <div class="r_part">
                <div class="amount">
                    <div class="card_title">
                        <h5>訂單金額</h5>
                    </div>
                    <div class="amount_center">
                        <div class="flex">
                            <h6>商品小計</h6>
                            <h5 class="total">NT$</h5>
                            <input type="hidden" name="amount" class="amount_val">
                        </div>
                        <div class=" coupon_div">
                            <div class="flex">
                                <h6>折扣碼</h6>
                                <input type="text" name="coupon_code">
                            </div>
                            <div id="check_coupon_code"><a href="" class="btn btn-link">確認</a></div>

                        </div>
                        <div class="flex">
                            <h6>運費</h6>
                            <h5>NT$ <span class="logistic_fee">60</span></h5>
                            <input type="hidden" name="logistic_fee" class="logistic_fee_val">
                        </div>
                    </div>
                    <p class="amount_promo">夏季專屬優惠 5/10 - 5/20滿NT$10,000 免運費</p>
                    <div class="amount_footer">
                        <h6>商品總計</h>
                            <h5 class="total_amount"></h5>
                            <input type="hidden" name="total_amount" class="total_amount_val">
                    </div>

                    <!-- >0 button -->

                    <button class="go_credit">前往結帳</button>


                </div>
                <div class="amount">
                    <div class="card_title">
                        <h5>追加商品</h5>
                    </div>
                    <div class="container">
                        <?php

                        $sql = "SELECT *  FROM `products` INNER JOIN `users_follow` ON `products`.`prod_id`=`users_follow`.`prod_id` INNER JOIN `brands` ON `products`.`brand_id`=`brands`.`brand_id`";

                        if (isset($_GET['brand_id'])) $sql .= "WHERE `products`.`brand_id`={$_GET['brand_id']} ";


                        $stmt = $pdo->query($sql);
                        if ($stmt->rowCount() > 0) {
                            $arr = $stmt->fetchAll();
                            foreach ($arr as $obj) {
                        ?>
                                <div class="card">
                                    <div class="l_card">
                                        <h6 class="title"><?= $obj['prod_name'] ?></h6>
                                        <!-- <p>about product</p> -->
                                        <!-- <div class="flex"> -->
                                        <h6 class="pr">NT <?= $obj['prod_price'] ?></h6>
                                        <a href="" class="add">加入購物車</a>
                                        <!-- </div> -->
                                    </div>
                                    <div class="r_card">
                                        <img src="db_img/img_prod_thumbnail/<?= $obj['prod_thumbnail'] ?>" class="prod_thumbnail">
                                    </div>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="m_footer ">
                <div class="footer_head">
                    <div class="f_l">
                        <div class="show_detail">展開明細</div>
                        <div class="count_product">結帳總金額：4件</div>
                    </div>
                    <div class="total_amount">NT$22,000</div>
                </div>
                <button type="submit" class="go_credit">前往結帳</button>
            </div>
        </form>
    </div>


    <!-- <div class="full">
        <div class="del_alert">
            <h5>是否取消商品？</h5>
            <div class="flex">
                <button class="ans_f">否</button>
                <button class="ans_y">確定</button>
            </div>
        </div>
    </div> -->

    </form>
</div>
<!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->



<!-- <footer> -->


<!-- </footer> -->

<!-- </div> -->
<!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->
</div>
<!-- 在這裡結束網頁撰寫 ----------------------->








<!-- JQ ----------------------------------->
<script>
    //   this page
    // this
    $('.remove').click(function() {
        $(this).parents('.shopp_list').remove();
    })
    $('.del').click(function() {
        $('.full').show();
    })
    $('.remove').click(function() {
        $('.full').show();
    })
    $('.ans_f').click(function() {
        console.log(1);
        $('.full').css('display', 'none');
    })
    $('.ans_y').click(function() {
        $('.full').css('display', 'none');
    })
</script>

<?php require_once 'foot.php' ?>