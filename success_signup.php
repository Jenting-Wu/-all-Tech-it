<?php require_once 'db.inc.php' ?>
<?php session_start() ?>
<?php require_once 'head.php' ?>
<title>登入成功</title>
<link rel="stylesheet" href="CSS/success_signup.css">

<!-- JS link ----------------------------------->
<script src="JS/custom.js?time=<?php echo time(); ?>"></script>




<!-- 從這裡開始進行網頁撰寫 ------------------->
<!-- WP : wrap -->
<!-- ★★★ 請不要調整wrap原數值(in 0.body.css) -->
<!-- <div class="wrap"> -->

<!-- ↓↓↓ 測試區域可刪 ↓↓↓ -->
<div class="promotion display_2">
    夏季專屬優惠 5/10-5/20滿NT$10,000 免運費
</div>
<div class="success_page">
    <div>
        <div class="profile">
            <img src="https://picsum.photos/225/225" alt="接PHP">
            <h5>name PHP</h5>
        </div>
        <p>您已成功註冊，正式成為<br>
            Tech it的會員，<br>
            現在，就開始來一場愉快的購物旅程吧！</p>
        <button class="go_product">前往商品列表</button>

    </div>
</div>
<!-- ↑↑↑ 測試區域可刪 ↑↑↑ -->

</div>
<!-- 在這裡結束網頁撰寫 ----------------------->






<!-- JQ ----------------------------------->
<script>
    //this
    $('.profile > img').attr('src', localStorage.getItem('photo'));
    $('.profile > h5').html(localStorage.getItem('user_name'));
    $('.go_product').click(function() {
        location.href = "product_list_01_smart.php";
    })
</script>

<!-- php link -------------------------------------------->
<?php require_once 'foot.php' ?>