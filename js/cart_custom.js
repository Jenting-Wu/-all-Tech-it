
$(function () {
    $("input#birthday").datepicker({
        dateFormat: 'yy-mm-dd'
    });
    $("input,checkbox").click(function () {
        if ($(this).prop("checked")) {
            console.log(1);
            $(this).css("background-color", "#FA8873")
        } else {
            $(this).css("background-color", "#ffffff")

        }
    })


    $('button#btn_signup').click(function (event) {
        event.preventDefault();

        let input_email = $('input#email');
        let input_name = $('input#name');
        let input_birthday = $('input#birthday');
        let input_pwd = $('input#pwd');
        let input_check = $('input#check_pwd');

        let pwd = $('#pwd').val();
        if (pwd != $('check_pwd').val()) {
            console.log(input_check)
            input_pwd.addClass('red');
            input_check.addClass('red');

        } else {
            input_pwd.removeClass('red')
            input_check.removeClass('red')
        }
        // check mail
        let re = /\S+@\S+(\.\S+)+/;
        if (!re.test(input_email.val())) {
            input_email.addClass('red');
        } else {
            input_email.removeClass('red')
        }
    });


// });
