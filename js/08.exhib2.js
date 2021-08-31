const mediaWeb = $(window).width();

//消失吧小btn
$('.btn_toTop').hide();

//scroll effect
$(window).scroll(function () {
    if ($(window).scrollTop() > 0) {
        $('.title').addClass('sub_title')
    }
})


// 換房間圖
// 個別大圈效果
$('#click_main').hide()

$('div.wrap_s').on({
    //click event
    click: function (event) {
        // 避免原事件觸發
        event.preventDefault();

        $('.black').addClass('black_hide');
        // $('.black').removeClass('black');
        $('.title').hide();
        $('.click_area').show();
        // 小black回家
        // $('.black').css("height","150px");
        console.log('小black回家吧');

        // 換字＿返回智慧的窩
        $('.drag_area > p').html('<a href="08.exhib-origin.php" class="text-muted">返回智慧の窩</a>')
        $('#arrow_right').remove();
        $('.drag_area').css('justify-content', 'flex-start')

        if ($(this).hasClass("active")) {
            $(this).removeClass('active')
        }
        else {
            $(this).addClass("active").parent('.wrap_li').siblings().children('.wrap_s').removeClass('active')
        };

        if (mediaWeb > 1000) {
            console.log('圈圈消失吧');
            $('div.wrap_li').hide()
            $('div.wrapForPosition.allroom div').show();

            //owl
            $('.owl-nav').hide()
            $('.owl-dots').hide()
        }


    },
    //mouse event
    mouseenter: function () {
        $(this).addClass('hover_exhib_room')
    },
    mouseleave: function () {
        $(this).removeClass('hover_exhib_room')
    },
})

//大圈圈點擊
//客廳 location_id 2
$('div.wrap_li:nth-child(1), .item_button').click(function () {
    event.preventDefault();

    $('#click_main').hide() //推薦商品
    $('.click_area').show(); //超連結a選擇商品

    //換圖片
    $('.wrapForPosition  img').attr('src', './smart_home_img/livingroom.jpg');

    //選取文字a
    $('.click_area').show();

    $('.wrapForPosition').addClass('living');
    $('.wrapForPosition').removeClass('allroom');
    $('.wrapForPosition').removeClass('bedroom');
    $('.wrapForPosition').removeClass('kitchen');
    $('#dialog').removeClass('bedroom');
    $('#dialog').removeClass('kitchen');

    // 小圈圈賦值
    $('.wrapForPosition a:nth-child(11)').attr('data-cateid', '23');
    $('.wrapForPosition a:nth-child(2)').attr('data-cateid', '19');
    $('.wrapForPosition a:nth-child(3)').attr('data-cateid', '3');
    $('.wrapForPosition a:nth-child(4)').attr('data-cateid', '20');
    $('.wrapForPosition a:nth-child(5)').attr('data-cateid', '22');

    console.log("hi");

    $.post("08.location_api.php", { locationID: "2" }, function (obj) {
        console.log(obj.result);
        

        let html = '';

        for (let i = 0; i < obj.result.length; i++) {
            html += `<div class="col-5 item_button top_row_button living_item" data-cateid="${obj.result[i].cate_id}">
            <a href="08.exhib-origin.php?cate_id=${obj.result[i].cate_id}">
            <p>${obj.result[i].cate_name}</p>
            </a>
        </div>`
        }
        $('.wrap_item').html(html);

    }, "json");
})


//廚房 location_id 1
$('div.wrap_li:nth-child(4)').click(function () {
    event.preventDefault();
    $('.wrapForPosition > img').attr('src', 'smart_home_img/kitchen.jpg');
    $('#click_main').hide();
    $('.click_area').show();

    $('.wrapForPosition').addClass('kitchen');
    $('.wrapForPosition').removeClass('allroom');
    $('.wrapForPosition').removeClass('bedroom');
    $('.wrapForPosition').removeClass('living');
    $('#dialog').removeClass('bedroom');
    $('#dialog').removeClass('living');

    // 小圈圈賦值
    $('.wrapForPosition a:nth-child(11)').attr('data-cateid', '4');
    $('.wrapForPosition a:nth-child(3)').attr('data-cateid', '14');
    $('.wrapForPosition a:nth-child(2)').attr('data-cateid', '13');

    

    $.post("08.location_api.php", { locationID: "1" }, function (obj) {
        console.log(obj.result);
        // console.log("hiiiiiiiiiiiiiii");

        let html = '';

        for (let i = 0; i < obj.result.length; i++) {
            html += `<div class="col-5 item_button top_row_button living_item" data-cateid="${obj.result[i].cate_id}">
            <a href="08.exhib-origin.php?cate_id=${obj.result[i].cate_id}">
            <p>${obj.result[i].cate_name}</p>
            </a>
        </div>`
        }

        $('.wrap_item').html(html);

    }, "json");
})

//房間 location_id 3
$('div.wrap_li:nth-child(5)').click(function () {
    event.preventDefault();
    $('.wrapForPosition > img').attr('src', 'smart_home_img/bedroom.jpg');
    $('#click_main').hide();
    $('.click_area').show();

    $('.wrapForPosition').addClass('bedroom');
    $('.wrapForPosition').removeClass('allroom');
    $('.wrapForPosition').removeClass('kitchen');
    $('.wrapForPosition').removeClass('living');
    $('#dialog').removeClass('kitchen');
    $('#dialog').removeClass('living');

    // 小圈圈賦值
    $('.wrapForPosition a:nth-child(4)').attr('data-cateid', '23');
    $('.wrapForPosition a:nth-child(2)').attr('data-cateid', '3');
    $('.wrapForPosition a:nth-child(3)').attr('data-cateid', '21');
    $('.wrapForPosition a:nth-child(11)').attr('data-cateid', '24');


    $.post("08.location_api.php", { locationID: "3" }, function (obj) {
        console.log(obj.result);

        let html = '';

        for (let i = 0; i < obj.result.length; i++) {
            html += `<div class="col-5 item_button top_row_button living_item" data-cateid="${obj.result[i].cate_id}">
            <a href="#">
            <p>${obj.result[i].cate_name}</p>
            </a>
        </div>`
        }

        $('.wrap_item').html(html);

    }, "json");

})
//超連結a選擇商品->跳轉至有該產品的空間
$('.wrap_item').on('click', '.item_button', function (event) {
    event.preventDefault();
    $('#click_main').show();
    $('.click_area').hide();

    let itembtn = $(this);
    let cateID = itembtn.attr('data-cateid');
    $.post("08.categories_api.php", { postCateID: cateID }, function (obj) {
        console.log(obj.result);
        let cardhtml = '';
        for (let i = 0; i < obj.result.length; i++) {

            cardhtml += `<div class="item wrap_svg" data-url="product_detail.php">
                        <div class="hight">
                            <a href="product_detail.php">
                                <img src="db_img/img_prod_thumbnail/${obj.result[i].prod_id}" alt="">
                                <div class="cardbody_area">
                                    <h5 class="card_name">${obj.result[i].prod_name}</h5>
                                    <p class="card_text">NT$ ${obj.result[i].prod_price}</p>
                                </div>
                            </a>
                        </div>
                        <div class="top_svg"></div>
                    </div>`
        };
        $('.click_item_area').html(cardhtml);
        $("#click_item_area").load(cardhtml, function () {
            console.log('reload');
            $('#click_item_area').trigger('destroy.owl.carousel');
            $("#click_item_area").owlCarousel({
                items: 2,
                margin: 10,
                nav: true,
            });
            return false;
        });
    }, "json");


    // $.post("08.categories_api.php", { postCateID: $('.item_button').attr('data-cateid') }, function (obj) {
    //     console.log(obj.result);
    // }, "json");
    // $.post("08.location_api.php", { locationID: "3" }, function (obj) {



    // }, "json");

    // $.post("08.categories_api.php", cateID, function (obj) {
    //     console.log(obj.result);

    //     // let cardhtml = '';

    //     // for (let i = 0; i < obj.result.length; i++) {
    //     //     cardhtml += `<div class="item wrap_svg">
    //     //         <div class="hight">
    //     //             <a href="#">
    //     //                 <img src="./smart_home_img/item-02.png" alt="">
    //     //                 <div class="cardbody_area">
    //     //                     <h5 class="${obj.result[i].prod_name}"></h5>
    //     //                     <p class="card_text">NT$ ${obj.result[i].prod_price}</p>
    //     //                 </div>
    //     //             </a>
    //     //         </div>
    //     //         <div class="top_svg"></div>
    //     //     </div>`

    //     //         `<div class="col-5 item_button top_row_button living_item">
    //     //         <a href="08.exhib-origin.php?cate_id=${obj.result[i].cate_id}">
    //     //             <p>${obj.result[i].cate_name}</p>
    //     //         </a>
    //     //         </div>`
    //     // };

    //     // $('.click_item_area').html(cardhtml);

    // }, "json");
})

// $('.item_button').on("click", function (event) {
//     if ($(this).hasClass('kitchen_item')) {
//         console.log('kitchen');
//         $('.click_area').show();
//         $('#click_main').hide();
//     } else {
//         console.log('hello');
//     }
//     if ($(this).hasClass('bedroom_item')) {
//         console.log('kitchen');
//         $('.click_area').show();
//         $('#click_main').hide();
//     } else {
//         console.log('hello');
//     }

// });

// $('.click_area').hide();
// $.post("08.location_api.php", { locationID: "2" }, function (obj) {
//     console.log(obj.result);

//     let html = '';

//     for (let i = 0; i < obj.result.length; i++) {
//         html += `<div class="col-5 item_button top_row_button living_item">
//         <a href="08.exhib-origin.php?cate_id=${obj.result[i].cate_id}">
//             <p>${obj.result[i].cate_name}</p>
//         </a>
//         </div>`
//     }

//     $('.wrap_item').html(html);

// }, "json");





//房間內的商品點擊
//小圈圈點擊
$('.wrapForPosition a').click(function () {
    event.preventDefault();
    const circle_num = $(this).index()
    console.log(circle_num)
    $(this).css('display', 'none').siblings('a').css('display', 'block');

    $('#click_main').show();
    $('.click_area').hide();

    $('#dialog').removeAttr("hidden");
    $('#dialog').removeClass();
    $('#dialog').addClass(`nth_${circle_num}`);


    let itembtn = $(this);
    let cateID = itembtn.attr('data-cateid');
    $.post("08.categories_api.php", { postCateID: cateID }, function (obj) {
        let cardhtml = '';
        console.log('obj',obj.result);
        for (let i = 0; i < obj.result.length; i++) {
            cardhtml += `<div class="item wrap_svg" data-url="product_detail.php?prod_id=${obj.result[i].prod_id}">
            <div class="hight">
            <a href="product_detail.php">
                    <img src="db_img/img_prod_thumbnail/${obj.result[i].prod_thumbnail}" alt="">
                    <div class="cardbody_area">
                        <h5 class="card_name">${obj.result[i].prod_name}</h5>
                        <p class="card_text">NT$ ${obj.result[i].prod_price}</p>
                    </div>
                </a>
            </div>
            <div class="top_svg"></div>
        </div>`
        };
        $('.click_item_area').html(cardhtml);
        $("#click_item_area").load(cardhtml, function () {
            console.log('reload');
            $('#click_item_area').trigger('destroy.owl.carousel');
            $("#click_item_area").owlCarousel({
                responsive: {
                    0: {
                        items: 2 // 螢幕大小為 0~600 顯示 1 個項目
                    },
                    600: {
                        items: 3 // 螢幕大小為 600~1000 顯示 3 個項目
                    },
                    1000: {
                        items: 5 // 螢幕大小為 1000 以上 顯示 5 個項目
                    }
                },
                loop: true,
                margin: 10,
                nav: true,
    
            });
            return false;
        });

        

    }, "json");


    //客廳
    if ($('.wrapForPosition').hasClass('living')) {
        console.log('我在客廳');
        $('#dialog').addClass('living');
        $('.nth_1 > p').text('“回家前冷氣就自動開啟”、“在家裡能用聲控來調整冷氣的溫度及風量”，App 可以控制冷氣機的全功能，不只開關，溫度﹑風速﹑時間管理等都可以控制。')
        $('.nth_2 > p').html('<h5>掃地機器人</h5>是客廳打掃的好幫手。記得要留空間放底座，讓掃地機器人集塵喔！')
        $('.nth_10 > p').html('<h5>智慧燈泡</h5>是一款能為居家空間鮮艷上色的科技家電，可藉由 iOS 和 Android系統之手機 App 操控照明開關、調節燈光亮度等基本功能；除此之外，內建喇叭及更多附加功能的產品也相繼問世。')
        $('.nth_3 > p').html('<h5>智慧電視</h5>應該選擇開放性平台架構為主，好處是軟體會隨時更新，保持在最新狀態，並且可提供APP市集的功能，讓使用者可以下載多彩多姿的APP來替自己的電視增加更多的可看性與娛樂效果。')
        $('.nth_4 > p').html('<h5>智慧音箱</h5>（搭載AI語音助理）。所謂智慧音箱是可以透過無線聲控的家電商品，其中更是有能將 AI助理連動家電遠端遙控的款式，實現只需動口不必動手的智慧新生活。')

    } else {
        $('#dialog').removeClass('living');
    }

    //房間
    if ($('.wrapForPosition').hasClass('bedroom')) {
        console.log('我在房間');
        $('#dialog').addClass('bedroom');
        $('.nth_1 > p').html('<h5>掃地機器人</h5>樣式提供消費者選擇，還有拖地功能喔！')
        $('.nth_2 > p').html('<h5>智慧音箱</h5>可以透過無線聲控的家電商品，其中更是有能將 AI助理連動家電遠端遙控的款式，實現只需動口不必動手的智慧新生活。')
        $('.nth_3 > p').html('<h5>智慧娛樂燈</h5>，是生活娛樂家。在遊戲、電影等音效撥放的同時，搭配Hue系列燈具，讓你聲光同步，沉浸在遊戲及影音體驗中')
        $('.nth_10 > p').html('<h5>智慧窗簾</h5>“坐在沙發上對語音助理下個口令，窗簾就能拉下”、“每天早上七點一到，窗簾便會自動拉上，讓晨光照進臥室裡”，或是“根據一天當中的日照強弱，調整窗簾的開合程度，以調節室內的光線舒適度”')
    } else {
        $('#dialog').removeClass('bedroom');
    }

    //廚房
    if ($('.wrapForPosition').hasClass('kitchen')) {
        console.log('我在廚房');
        $('#dialog').addClass('kitchen');
        $('.nth_1 > p').text('24hr智能預約，全天長效保溫；不沾內鍋、可拆設計，清潔快速徹底；輕巧時尚，玩美融入生活。 舒肥、煎炒、慢燉、蒸煮百種料理一鍋搞定；專為忙碌現代人打造，小家庭、租屋族最大福音！')
        $('.nth_2 > p').text('AI冰箱真聰明 知食材存量、能推薦食譜還能列出採購清單')
        $('.nth_10 > p').text('是多功能料理機和炒菜機結合的產物，是一款為解決廚房油煙、廚房家電多、健康飲食問題及合理使用零碎化時間而誕生的高度自動化廚房電器')
    } else {
        $('#dialog').removeClass('kitchen');
    }
})

//桌機版初始值
$(document).ready(function () {
    if (mediaWeb > 1000) {
        $('.wrap').css('margin', '0') //wrap歸零
        $('body').css('position', 'relative') //for .black滿版

        //nav bar樣式
        $('.hd_navbar').css('background-color', 'transparent');
        $('.hd_title_link > a').css('color', 'white');
        $('.hd_title_link').css('border-bottom', '1px solid white');
        $('.hd_member_state a').css('color', 'white')

        // 隱藏footer
        $('.btn_toTop').hide()
        $('.footer').removeClass('d-flex').hide();

        //紅色的圈圈為什麼不讓我消失
        $('div.wrapForPosition.allroom div').hide();
    }
})

