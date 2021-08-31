
function alertCompare() {
    Swal.fire(
        "成功加入比較清單!",
        "",
        "success"
    );
}

function alertNoCompare() {
    Swal.fire(
        "此商品已在比較清單中",
        "",
        "error"
    );
}

function confirmCompare() {
    Swal.fire({
        title: "比較清單沒有任何商品喔!",
        text: "請點選你想按的按鈕",
        showCancelButton: true
    }).then(function (result) {
        if (result.value) {
            Swal.fire("您按了OK");
        }
        else {
            Swal.fire("您選擇了Cancel");
        }
    });
}

//加入比較列表
$('button.compare').click(function (event) {
    event.preventDefault();

    //取得 button 的 jQuery 物件
    let btn = $(this);

    //送出 post 請求，加入購物車
    let objProduct = {
        prod_id: btn.attr('data-prod-id'),
        // prod_name: btn.attr('data-prod-name'),
        // prod_thumbnail: btn.attr('data-prod-thumbnail'),
        // prod_price: btn.attr('data-prod-price'),
    };

    $.post("setCompare.php", objProduct, function (obj) {
        // if (obj['success']) {
        //成功訊息
        // alert(obj.info);
        if (obj['info'] == "加入比較清單成功") {
            alertCompare();
        } else if (obj['info'] == "已加入比較") {
            alertNoCompare();
        }

        // }

    }, 'json');


});

