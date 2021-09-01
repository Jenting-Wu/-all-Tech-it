<!-- php link -------------------------------------------->
<?php require_once 'db.inc.php' ?>

<!-- FT : Footer ----------------------------------------------->

<footer class="footer d-flex">

    <!-- LOGO -------------------------------->
    <a class="ft_logo" href="#">
        <img src="img/logo-png.png" alt="">
    </a>

    <!-- ft_box_link ---------------------------->
    <div class="ft_box">

        <div class="d-flex ft_box_top">

            <!-- footer_link 品牌專區 -->
            <p class="col ft_tt">
                <a href="./07-1.brand_list02.php">品牌專區</a>
            </p>

            <!-- footer_link 商品分類 -->
            <p class="col ft_tt">
                <a href="product_list_01_smart.php?cate_id=10&sub_cate_id=21">商品分類</a>
            </p>

            <!-- footer_link 智慧專欄 -->
            <p class="col ft_tt">
                <a href="article_list.php">智慧專欄</a>
            </p>

            <!-- footer_link 聯絡客服 -->
            <p class="col ft_tt">
                <a href="contant.php">聯絡客服</a>
            </p>

            <!-- footer_link 會員資料 -->
            <p class="col ft_tt">
                <a href="member_info1.php">會員資料</a>
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


<!-- btn_toTop --------------------------------------------->

<button class="btn_toTop btn">
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
        $('.t1').css('border-bottom', '1px solid #707070');
        $('.t1>a').css('color', 'black')
    });

    $('.t2').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t2').css('border-bottom', '1px solid #707070');
        $('.t2>a').css('color', 'black')
    });

    $('.t3').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t3').css('border-bottom', '1px solid #707070');
        $('.t3>a').css('color', 'black')
    });

    $('.t4').mouseleave(function() {
        console.log('navbar mouseleave');
        // pc
        $('.t4').css('border-bottom', '1px solid #707070');
        $('.t4>a').css('color', 'black')
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

    // tog_lv_0 商品分類 : 智慧家電
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

    // tog_lv_0 商品分類 : AI機器人
    $('.tog_lv_0_ai').click(function() {
        console.log('商品分類 click');
        if ($('.tog_lv_1_ai').hasClass('d-none')) {
            $('.tog_lv_1_ai').removeClass('d-none');
        } else {
            $('.tog_lv_1_ai').addClass('d-none');
        }

        // 清除項目點選效果
        // $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
        // $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
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

</body>

</html>