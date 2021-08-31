<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>物流頁面</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/logistics.css">

<?php
if (!isset($_SESSION['shopping_cart'])) {
    header("Location: shopping_cart.php");
    exit();
}

//如果購物車與商品索引與數量同時存在，則修改指定索引的商品數量
// if (isset($_POST['index']) && isset($_POST['qty'])) {
//     foreach ($_POST['index'] as $index => $value) {
//         $_SESSION['cart'][$index]['prod_qty'] = $_POST['qty'][$index];
//     }
// }
$_SESSION['itemInfo'] = [];
foreach ($_POST['itemName'] as $index => $item) {
    $_SESSION['itemInfo'][$index]['prod_thumbnail'] = $_POST['itemImg'][$index];
    $_SESSION['itemInfo'][$index]['brand_id'] = $_POST['itemBrand'][$index];
    $_SESSION['itemInfo'][$index]['prod_name'] = $_POST['itemName'][$index];
    $_SESSION['itemInfo'][$index]['prod_price'] = $_POST['itemPrice'][$index];
    $_SESSION['itemInfo'][$index]['prod_qty'] = $_POST['itemQty'][$index];
}

//將商品小計|運費|總計存入session
$_SESSION['feeInfo'] = [];
$_SESSION['feeInfo']['amount'] = $_POST['amount'];
$_SESSION['feeInfo']['logistic_fee'] = $_POST['logistic_fee'];
$_SESSION['feeInfo']['total_amount'] = $_POST['total_amount'];


?>







<!-- 三明治選單 -------------------------------------->


<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<div class="wrap">

    <!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
    <div class="container">
        <h4>結帳</h4>

        <div class="a">
            <div class="circle circle1">
                <h6>選擇物流方式</h6>
            </div>
            <div class="circle circle2"></div>
            <div class="circle circle3"></div>
        </div>

        <div class="option_method">

            <h5>選擇物流</h5>
            <div class="select_tri">
                <select name="" id="logistics">
                    <option value="0">請選擇</option>
                    <option value="1">宅配</option>
                </select>
                <div class="tri"></div>
            </div>

        </div>
        <form name="myForm" method="post" action="payment.php">
            <div class="info">
                <h5>宅配資訊</h5>
                <div class="info_card">
                    <label for="member">
                        <input type="checkbox" id="member">填入會員資料
                    </label>

                    <div class="group">
                        <h6>收件人姓名</h6>
                        <input type="text" name="recipient_name">
                    </div>

                    <div class="group">
                        <h6>收件人手機</h6>
                        <input type="text" class="b_style" name="recipient_phone_number">
                    </div>

                    <div class="group">

                        <div class="select_tri">
                            <select name="transport_type" id="logistics">
                                <option value="0">宅配地方</option>
                                <option value="1">台灣</option>
                                <option value="2">外島</option>
                            </select>
                            <div class="tri"></div>
                        </div>
                    </div>

                    <div class="group">
                        <h6>地址</h4>
                            <input type="text" name="recipient_address">
                    </div>

                    <div class="group">
                        <h6>郵遞區號</h6>
                        <input type="text" class="b_style" name="recipient_address_no">
                    </div>

                    <div class="group">
                        <h6>備註</h6>
                        <textarea name="recipient_comments"></textarea>
                    </div>

                </div>
                <div class="l_part">
                    <a href="shopping_cart.php" class="back">上一頁</a>
                    <button class="next" type="submit">下一步</button>
                </div>
            </div>
        </form>

    </div>

</div>





<!-- JQ ----------------------------------->
<script>
    // this page
    $('#logistics').change(function() {
        // console.log($(this).val());
        if ($(this).val() == 1) {
            $('.info2').hide();
            $('.info').show();
        } else if ($(this).val() == 0) {

            $('.info2').hide();
            $('.info').hide();
        } else {
            $('.info').hide();
            $('.info2').show();
        }
    });
</script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>