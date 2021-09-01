<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>付款頁面</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/payment.css">
<?php
//如果這個階段沒有購物車，就將頁面轉到商品確認頁
// if (!isset($_SESSION['cart'])) {
//     header("Location: shopping_cart.php");
//     exit();
// }

//將表單資訊寫入 session，之後建立訂單時，一起變成訂單資訊
$_SESSION['form'] = [];
$_SESSION['form']['transport_type'] = $_POST['transport_type'];
$_SESSION['form']['recipient_name'] = $_POST['recipient_name'];
$_SESSION['form']['recipient_phone_number'] = $_POST['recipient_phone_number'];
$_SESSION['form']['recipient_address'] = $_POST['recipient_address'];
$_SESSION['form']['recipient_comments'] = $_POST['recipient_comments'];

?>




<script src="https://js.stripe.com/v2/"></script>




<!-- 從這裡開始進行網頁撰寫 ------------------->
<div class="wrap">

    <!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
    <div class="container">
        <h4>結帳</h4>

        <div class="a">
            <div class="circle circle2">

            </div>
            <div class="circle circle1">
                <h6>選擇付款方式</h6>
            </div>
            <div class="circle circle3"></div>
        </div>
        <form action="order_complete.php" method="POST">
            <div class="option_method">

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
                            <h5 class="brand"><?= $arr[0]['brand_name'] ?></h5>
                        </label>
                        <?php foreach ($_SESSION['itemInfo'] as $index => $item) {
                            if ($item['brand_id'] == $obj) {
                                // $thisItem = (explode("NT$ ", $item['prod_price']))[1];
                        ?>
                                <div class="list">
                                    <div class="product_list">
                                        <div class="product_info">
                                            <img class="col-4 col-md-3" src="<?= $item['prod_thumbnail'] ?>">
                                            <div class="center col-8 col-md">
                                                <h5 class="title"><?= $item['prod_name'] ?></h5>
                                                <span>數量:</span>
                                                <input type="text" readonly class="item_price" name="qty[]" value="<?= $item['prod_qty'] ?>">
                                            </div>
                                        </div>
                                        <h4 class="right">NT$ <?= (int)$item['prod_price'] * (int)$item['prod_qty'] ?></h4>
                                    </div>
                                </div>

                            <?php } ?>


                <?php }
                    }
                }
                ?>


                <!-- 接運送方式 -->
                <div class="info">
                    <h5>運送方式：郵局掛號 免運(購物車達NT$10,000)</h5>
                    <div class="logistics_info">
                        <input type="hidden" name="recipient_name" value="<?php echo $_POST['recipient_name']; ?>">
                        <input type="hidden" name="recipient_phone_number" value="<?php echo $_POST['recipient_phone_number']; ?>">
                        <input type="hidden" name="recipient_phone_number" value="<?php echo $_POST['recipient_phone_number']; ?>">
                        <input type="hidden" name="recipient_address" value="<?php echo $_POST['recipient_address_no'] . ' ' . $_POST['recipient_address']; ?>">
                        <input type="hidden" name="recipient_address_no" value="<?php echo $_POST['recipient_address']; ?>">
                        <input type="hidden" name="recipient_comments" value="<?php echo $_POST['recipient_comments']; ?>">

                        <h6>訂購人姓名：<?php echo $_POST['recipient_name']; ?></h6>
                        <h6>訂購人聯絡電話：<?php echo $_POST['recipient_phone_number']; ?></h6>
                        <h6>送貨地址：<?php echo $_POST['recipient_address_no'] . ' ' . $_POST['recipient_address']; ?></h6>
                        <h6>備注：<?php echo $_POST['recipient_comments']; ?></h6>

                    </div>
                    <div class="right">
                        <h5>商品總計：NT$ <?= $_SESSION['feeInfo']['amount'] ?></h5>
                        <!-- <h5>商品折扣：NT$ php</h5> -->
                        <h5>運費總計：NT$ <?= $_SESSION['feeInfo']['logistic_fee'] ?></h5>
                        <h4 class="right">結帳總額 NT$ <?= $_SESSION['feeInfo']['total_amount'] ?></h4>
                    </div>

                </div>

                <h5 name="transport_payment">請選擇付款方式</h5>
                <div class="select_tri">
                    <select id="select_select">
                        <option value="0">請選擇</option>
                        <option value="1">信用卡付款</option>
                    </select>
                    <div class="tri"></div>
                </div>
                <div class="credit">
                    <div class='card-wrapper'></div>
                    <div id="credit">
                        <input type="text" name="number" placeholder="請填入信用卡號">
                        <input type="text" name="name" placeholder="請填入持卡人姓名">
                        <input type="text" name="expiry" placeholder="請填入到期年限">
                        <input type="text" name="cvc" placeholder="請填入CVC">
                    </div>
                </div>

                <div class=" info">
                    <h5>發票選項</h5>
                    <p>發票一經開立後不可更改，請確定資訊是否填寫正確喔！</p>
                    <div class="invoice">
                        <div class="invoice_type">

                            <h6>發票類型</h6>
                            <div class="select_tri">
                                <select class="bill_type ">
                                    <option value="0">請選擇</option>
                                    <option value="1">捐贈發票</option>
                                    <option value="2">電子發票</option>
                                </select>

                                <div class="tri"></div>
                            </div>
                            <div class="select_tri">
                                <select class="bill_2"></select>
                                <div class="tri"></div>
                            </div>
                            <input type="text" class="bill_3">
                        </div>
                        <h6>統一編號：<input type="text"></h6>
                        <h6>發票抬頭：<input type="text"></h6>

                    </div>

                </div>


                <div class="l_part">
                    <button class="back">回到購物車</button>
                    <button class="next">確認付款</button>
                </div>

            </div>
        </form>
        <!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->

    </div>
</div>
<!-- 在這裡結束網頁撰寫 ----------------------->


<script>
    // this
    $('#select_select').change(function() {
        if ($(this).val() == 1) {
            $('.credit').show();
            console.log(1)

        } else {
            $('.credit').hide();
            console.log(2)
        }
    });
    $('.bill_type').change(function() {
        $('.bill_3').val('');
        if ($(this).val() == 1) {
            var o1 = `<option value="0">浪浪之家（85314880）</option>
               <option value="1">11111（85314880）</option>
               <option value="2">2222（85314880）</option>
               <option value="3">3333（85314880）</option>
               <option value="4">浪4之家（85314880）</option>`;
            $('.bill_2').html(o1).show();
            $('.bill_3').hide();
        } else if ($(this).val() == 0) {
            $('.bill_2').html('').hide();
            $('.bill_3').hide();
        } else {
            $('.bill_2').html('').hide();
            $('.bill_3').show();
        }

    })
    $(function() {
        $('#credit').card({
            // a selector or DOM element for the container
            // where you want the card to appear
            container: '.card-wrapper', // *required*

            // all of the other options from above
        });
    })
</script>


<script src="plug-in/jquery.card.js"></script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>