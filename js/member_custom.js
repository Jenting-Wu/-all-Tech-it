$(function () {
    let input_email = $('input#email');
    let input_user_name = $('input#user_name');
    let input_birthday = $('input#birthday');
    let input_pwd = $('input#pwd');
    let input_check = $('input#check_pwd');
    let input_phone_number = $('input#phone_number');

    // $("input#birthday").datepicker({
    //     dateFormat: 'yy-mm-dd',
    //     defaultDate: '1999-02-02',
    //     changeMonth: true,
    //     changeYear: true
    // });
    // $("input#birthday").datepicker( "setDate" , "2019-01-01" );

    $('input[type="checkbox"]').click(function () {
        if ($(this).prop("checked")) {
            $(this).css("background-color", "#FA8873")
        } else {
            $(this).css("background-color", "#ffffff")

        }
    })


    $('input#btn_signup').click(function (event) {
        event.preventDefault();

        let re = /\S+@\S+(\.\S+)+/;
        let re1 = /09[0-9]{8}/;
        let pwd = $('#pwd').val();
        if (pwd != $('#check_pwd').val()) {
            //兩次密碼不一樣的時候
            console.log(1);
            input_pwd.addClass("border border-danger border-2")
            input_check.addClass("border border-danger border-2")
                .tooltip({
                    title: '兩次密碼不相符',
                    placement: 'top'
                })
        } else if (!re.test(input_email.val())) {
            //兩次密碼一樣 接著檢查email 不正確
            console.log(input_email.val());
            input_pwd.removeClass("border border-danger border-2");
            input_check.removeClass("border border-danger border-2")
            input_email
                .addClass("border border-danger border-5")
                .tooltip({
                    title: '請填寫完整的 E-mail',
                    placement: 'top'
                })
                .tooltip('show');
        } else if (!re1.test(input_phone_number.val())) {
            //兩次密碼一樣 | email 正確 | 手機號碼不正確
            console.log(3);
            input_email.removeClass("border border-danger border-5")
                .tooltip()
                .tooltip('dispose');

            input_phone_number.addClass("border border-danger border-5")
                .tooltip({
                    title: '請填寫正確手機號碼',
                    placement: 'top'
                })
                .tooltip('show');
        }
        else {
            //全部檢查都正確
            input_phone_number.removeClass("border border-danger border-5")
                .tooltip()
                .tooltip('dispose');



            let objUser = {
                email: input_email.val(),
                pwd: input_pwd.val(),
                user_name: input_user_name.val(),
                birthday: input_birthday.val(),
                phone_number: input_phone_number.val(),
                photo_sticker: $('.upload_img').attr('src')
            };
            // $('#registered_form').submit();
            $.post('insertUser.php', objUser, function (obj) {
                console.log(obj)
                if (obj.success) {
                    alert('歡迎加入TECH IT');
                    location.href = 'success_signup.php';
                } else {
                    console.log(1)
                    alert(obj.info);
                }

            }, 'json');
        }
    });

    //登入
    $('button#btn_login').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();

        //各自將 input 帶入變數中
        let input_email = $('input#email_login');
        let input_pwd = $('input#pwd_login');

        //檢查 email 是否輸入
        if (input_email.val() == '') {
            alert('請輸入 E-mail');
            return false;
        }

        //檢查 密碼 是否輸入
        if (input_pwd.val() == '') {
            alert('請輸入密碼');
            return false;
        }

        //送出 post 請求，註冊帳號
        let objUser = {
            email_login: input_email.val(),
            pwd_login: input_pwd.val()
        };
        $.post("login1.php", objUser, function (obj) {
            if (obj['success']) {

                //成功訊息
                alert('登入成功');

                location.href = "follow.php";
            } else {
                alert(`${obj['info']}`);
            }
        }, 'json')
    });

    //登出
    $('a#logout').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();
        console.log(1)
        $.get('logout.php', function (obj) {
            if (obj['success']) {
                alert('登出成功');

                setTimeout(function () {
                    location.href = 'login_index.php';
                }, 1000);
            }
            console.log(obj);
        }, 'json');
    });

    //忘記密碼
    $('button#btn_forgot').click(function (event) {
        //避免元素的預設事件被觸發
        event.preventDefault();

        //各自將 input 帶入變數中
        let input_email = $('input#email_login');

        //檢查 email 是否輸入
        if (input_email.val() == '') {
            alert('請輸入 E-mail');
            return false;
        }

        // $('#forgot_form').submit();

        //送出 post 請求，註冊帳號
        let objUser = {
            email_login: input_email.val()
        };
        $.post("check.php", objUser, function (obj) {
            if (obj['success']) {
                //成功訊息 
                alert('驗證信已寄出');

                // setTimeout(function () {
                location.href = 'login.php';
                // }, 1000);

            } else {
                alert(`${obj['info']}`);
            }
            console.log(obj);
        }, 'json')
    });
    // 更改密碼
    $('#pwd_change').click(function (event) {
        event.preventDefault();
        if ($('#pwd_again').val() != $('#pwd_again2').val()) {

            console.log(1)
            $('#pwd_again').addClass("border border-danger border-2")
            $('#pwd_again2').addClass("border border-danger border-2")
                .tooltip({
                    title: '兩次密碼不相符',
                    placement: 'top'
                })
        } else {
            console.log(2)
            $('#pwd_again2').removeClass("border border-danger border-5")
                .tooltip()
                .tooltip('dispose');

            var email_str = location.search.split('&')[0].split('=')[1];
            var ver = location.search.split('&')['1'].split('=')[1];

            let objUserReset = {
                pwd: $('#pwd_again').val(),
                email: email_str,
                verified_code: ver
            };

            $.post('pwd_reset.php', objUserReset, function (obj) {
                console.log(obj)
                if (obj.success) {
                    alert('SUCCESS');
                    location.href = 'success_signup.php';
                } else {
                    alert(obj.info);
                }

            }, 'json');

        }
    })




    //會員資料頁-儲存地址
    $('.address_btn').click(function (event) {
        event.preventDefault();

        let input_username = $('input#exampleInputUser1');
        let input_phonenumber = $('input#exampleInputPhone1');
        let input_address = $('input#exampleInputAddress1');



        let objUser = {
            user_name: input_username.val(),
            phone_number: input_phonenumber.val(),
            address: input_address.val()
        };
        // POST
        $.post('save_address.php', objUser, function (obj) {
            console.log(obj)
            if (obj.success) {
                alert('儲存成功');
                location.href = 'member_info1.php';
            } else {
                console.log(1)
                alert(obj.info);
            }

        }, 'json');
    })
});