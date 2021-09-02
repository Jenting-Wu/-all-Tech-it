<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>完成訂單</title>
<!-- CSS link ---------------------------->
<link rel="stylesheet" href="CSS/order_complete.css">
<?php

//將表單資訊寫入 session，之後建立訂單時，一起變成訂單資訊
$_SESSION['form'] = [];
$_SESSION['form']['recipient_name'] = $_POST['recipient_name'];
$_SESSION['form']['recipient_phone_number'] = $_POST['recipient_phone_number'];
$_SESSION['form']['recipient_address_no'] = $_POST['recipient_address_no'];
$_SESSION['form']['recipient_address'] = $_POST['recipient_address'];
$_SESSION['form']['recipient_comments'] = $_POST['recipient_comments'];

?>


<div class="wrap">
    <div class="a">
        <div class="circle circle2">

        </div>
        <div class="circle circle3"></div>
        <div class="circle circle1">
            <h6>確認訂單</h6>
        </div>
    </div>
    <div class="container">
        <div class="congrats">
            <h5>恭喜您，訂單已成立!</h5>
            <p>請於<span>會員中心/電子信箱</span>查看訂單詳情</p>
        </div>

        <div class="accordion">
            <div>
                <input type="checkbox" name="accordion" id="section1" class="a_input">
                <label for="section1" class="a_label">
                    <h5>訂單資訊</h5>
                </label>
                <div class="a_content">

                    <h6>訂單編號：UI0912Ux</h6>
                    <h6>訂單金額：NT$ <?= $_SESSION['feeInfo']['total_amount'] ?></h6>
                    <h6>訂單日期：<?php echo date("Y/m/d") ?></h6>

                </div>
            </div>
        </div>
        <div class="accordion">
            <div>
                <input type="checkbox" name="accordion" id="section2" class="a_input">
                <label for="section2" class="a_label">
                    <h5> 寄送資訊 <span class="red">(宅配)</span></h5>
                </label>
                <div class="a_content">

                    <h6>收件人：<?php echo $_POST['recipient_name']; ?></h6>
                    <h6>寄送地址：<?php echo $_POST['recipient_address']; ?></h6>

                </div>
            </div>
        </div>
        <div class="accordion">
            <div>

                <input type="checkbox" name="accordion" id="section3" class="a_input">
                <label for="section3" class="a_label">
                    <h5>付款資訊 <span class="red">(線上付款)</h5> </span>
                </label>
                <div class="a_content">

                    <h6>信用卡付款：4242-····-····</h6>
                    <h6>付款狀態：<span class="red">已完成付款</span>
                    </h6>

                </div>
            </div>
        </div>

        <h5 class="msg">處理狀態：已收到您的訂單，將盡速為您出貨</h5>

        <h6 class="right">如需修改訂單請 <span class="red"> 聯絡客服</span></h6>

        <div class="l_part">
            <a href="member_info3.php"> <button class="back">查看訂單</button></a>
            <a href="product_list_01_smart.php"><button class="next">繼續購物</button></a>
        </div>
    </div>
</div>




<script>

</script>


<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>