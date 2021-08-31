//------------------- brand-list Js----------------------

// active切換









//-- click effect --
$('a.cate_00').on('click', function () {
    $(this).css('border', '3px solid red');
    if ($(this).hasClass('btn_notouch')) {
        console.log('hhhhhh')
        $(this).removeClass('btn_notouch');


        $(this).addClass('btn_touch');
        $(this).siblings().removeClass('btn_touch');
        $(this).siblings().addClass('btn_notouch');
    }
})

// $('a.cate_00').click(function () {
//     if ($(this).hasClass('btn_notouch')) {
//         console.log('hhhhhh')
//         $(this).removeClass('btn_notouch');
//         $(this).css('border', '3px solid red');

//         $(this).addClass('btn_touch');
//         $(this).siblings().removeClass('btn_touch');
//         $(this).siblings().addClass('btn_notouch');
//     }
// })



// ---------------- scroll -----------------------

$(window).scroll(function () {

    const brandShow = $('.brand_icon').offset().top

    if ($(window).scrollTop() >= 0) {
        console.log('>0');
        $('.brand_wrap img').each(function (index, item) {
            console.log($(item));
            $(item).addClass('fadedIn');
        })
    }

})
