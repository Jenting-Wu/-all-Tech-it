//-- index effect --

//-- scroll effect --

$(window).scroll(function () {

    $('.prod_list').each(function (index, item) {
        console.log('item', $(item).offset().top);

        if ($(window).scrollTop() + $(window).height() >= $(item).offset().top) {
            $(item).addClass('prod_show');
        }
        else {
            $(item).removeClass('prod_show');
        }
    })
})


//-- click effect --

// $('.section_AI').hide();
// $('#AI').addClass('btn_notouch');
// $('#Home').addClass('btn_touch')


// $('.cate_00').click(function () {
//     $(this).addClass('btn_touch');
//     $(this).siblings().addClass('btn_notouch');

//     if ($(this).hasClass('btn_touch')) {
//         $(this).removeClass('btn_notouch')
//     } else {
//         $(this).addClass('btn_notouch')
//         $(this).siblings().removeClass('btn_touch')
//     }

//     if ($('#AI').hasClass('btn_notouch')) {
//         $('.section_AI').hide();
//         $('.section_Home').show()
//     } else {
//         $('.section_AI').show();
//         $('.section_Home').hide()
//     };
// })
