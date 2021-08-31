//header

let mediaWeb = $(window).width();

$(document).ready(function () {
    $('.wrap').css('margin', '0');
    $('.hd_navbar').css('background-color', 'rgba(0, 0, 0, 0.3)');
    $('.hd_title_link').css('border-bottom', '1px solid white')
    $('.cls-1').css('stroke', 'white')
    $('.hd_logo > img').attr('src', './index_img/jpg/logo-white-17.png');
})



//onepage

$(".main").onepage_scroll({
    sectionContainer: "section",     // sectionContainer accepts any kind of selector in case you don't want to use section
    easing: "cubic-bezier(0.5, 0, 0, 1)",
    animationTime: 1000,             // AnimationTime let you define how long each section takes to animate
    pagination: true,                // You can either show or hide the pagination. Toggle true for show, false for hide.
    updateURL: false,                // Toggle this true if you want the URL to be updated automatically when the user scroll to each page.
    beforeMove: function (index) { },  // This option accepts a callback function. The function will be called before the page moves.
    afterMove: function (index) { },   // This option accepts a callback function. The function will be called after the page moves.
    loop: true,                     // You can have the page loop back to the top/bottom when the user navigates at up/down on the first/last page.
    keyboard: true,                  // You can activate the keyboard controls
    responsiveFallback: false,        // You can fallback to normal page scroll by defining the width of the browser in which
    // you want the responsive fallback to be triggered. For example, set this to 600 and whenever
    // the browser's width is less than 600, the fallback will kick in.
    direction: "vertical"            // You can now define the direction of the One Page Scroll animation. Options available are "vertical" and "horizontal". The default value is "vertical".  
});



//minheight
$(window).on('load', function () {
    // $(window).resize(function () {
    //     const windowWidth = $(window).width();
    //     const viewMinheight = $('.choose1').height();
    //     console.log(viewMinheight);
    //     $('.choose_item').css("min-height", viewMinheight);
    // }).resize();
})
$('.explore').addClass('animate__bounce')

$('.down_wrap').mouseenter(function () {
    $('.circle').addClass('down')
})
$('.down_wrap').mouseleave(function () {
    $('.circle').removeClass('down')
})


//<!-- card change -->
$('.card-stack .card').click(function () {

    if ($(this).hasClass('ori_card_2')) {
        console.log('has 2');
        $('.ori_card_3').removeClass('ori_card_3').addClass('ori_card_2');
        $('.ori_card_1').removeClass('ori_card_1').addClass('ori_card_3');

        $(this).removeClass('ori_card_2').addClass('ori_card_1');
    };

    if ($(this).hasClass('ori_card_3')) {
        console.log('has 3');
        $('.ori_card_2').removeClass('ori_card_2').addClass('ori_card_3');
        $('.ori_card_1').removeClass('ori_card_1').addClass('ori_card_2');

        $(this).removeClass('ori_card_3').addClass('ori_card_1');
    }

})


$('.img_after').mouseenter(function () {
    console.log('img enter');
    $(this).css('opacity', '1');
    $(this).css('transform', 'scale(1.2)')
    $('.img_before').css('opacity', '0')
});



//<!-- scroll animate -->

$('.dialog_wrap li').css('opacity', '0');

function showMessage() {
    console.log('Transition 已完成');
    if ($('.section_2').hasClass('active')) {
        // console.log('show');
        $('#phone').addClass('phone_show')

        // dialog_fadein
        $('.dialog_wrap li').each(function (index, item) {
            // console.log($(item));
            $(item).addClass('fadeIN');
        })
    };
    if ($('.section_3').hasClass('active')) {
        console.log('hi section3');
        $('.section_3 .card').addClass('card_show')
    }
}
var element = document.querySelector('body');
element.addEventListener("transitionend", showMessage, false);


////<!-- text change -->

//changePage
$('.dia_text_wrap li').eq(0).show();
$('.dia_text_wrap li').eq(0).siblings().hide();

$('.circle_wrap li').click(function () {

    // console.log('li index : ', $(this).index());
    const circleIndex = $(this).index();

    $('.dia_text_wrap li').each(function (index, item) {

        // console.log('.dia_text_wrap li this index :', $(this).index());

        if (circleIndex == index) {
            $(item).show()
            $(item).siblings().hide()
            $(item).addClass('dia_move');
        }
        else {
            $(item).hide();

        }
    })

})


//<!-- choose card -->

$('.choose2').hide();
$('.choose_item .choose_card').click(function () {
    $(this).addClass('choosed');
    $('.texxt_wrap .card-title h5').css('color', 'rgb(49, 49, 49)')
    $(this).siblings().removeClass('choosed');
});
$('.btn_wrap .choose_btn').click(function () {

    $(this).addClass('choosed');
    $(this).siblings().removeClass('choosed');

    if ($(this).hasClass('choosed') && $('.choose_item .choose_card').hasClass('choosed')) {
        console.log('both choosed');
        $(' .choose1').hide()
        $('.choose2').delay(500).show('slow');
    }
})

$('.re_choose').click(function () {
    console.log('click');
    $('.choose2').hide();
    $('.choose_item .choose_card').removeClass('choosed');
    $('.btn_wrap .choose_btn').removeClass('choosed');
    $('.choose1').show('slow');
})


//<!-- mouseenter -->

// 首頁兩個圓圈
$('.left').mouseenter(function () {
    console.log('enter');
    $(this).addClass('scale');
});
$('.left').mouseleave(function () {
    $(this).removeClass('scale');
})
$('.right').mouseenter(function () {
    console.log('enter');
    $(this).addClass('scale');
});
$('.right').mouseleave(function () {
    $(this).removeClass('scale');
})

