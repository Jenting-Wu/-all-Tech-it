<?php
session_start();

// 匯入 SQL 檔案名
require_once 'db.inc.php';

//預設
$obj['success'] = false;
$obj['info'] = '註冊失敗';
$verified_code = md5(date("YmdHis"));



//表單是不是完整
if (
    isset($_POST['email'])
    && isset($_POST['user_name'])
    && isset($_POST['birthday'])
    && isset($_POST['pwd'])
    && isset($_POST['phone_number'])
    && isset($_POST['photo_sticker'])
) {
    //密碼加密
    $phone_number = $_POST['phone_number'];
    $birthday = $_POST['birthday'];
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $pwd = sha1($_POST['pwd']);
    $photo_sticker = $_POST['photo_sticker'];
    try {
        //加使用者
        $sql = "INSERT INTO `users` 
        (`email`, `pwd`, `user_name`,
        `phone_number`, `birthday`,`photo_sticker`, `verified_code`, `created_at`, `updated_at`)
        VALUES (
            '$email', '$pwd', '$user_name', 
            '$phone_number', '$birthday', '$photo_sticker','$verified_code',
            current_timestamp(), current_timestamp());";
        $stmt = $pdo->query($sql);


        if ($stmt->rowCount() > 0) {
            $obj['success'] = true;
            $obj['info'] = '注冊成功';

            // 註冊成功時，額外新增優惠券代碼，供結帳時使用
            $coupon_code = md5(date('YmdHis'));
            $sqlCoupon = "INSERT INTO `coupon` (`email`, `code`, `percentage`) 
                  VALUES ('{$_POST['email']}', '{$coupon_code}', 0.8)";
            $pdo->query($sqlCoupon);

            //session
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['user_name'] = $_POST['user_name'];
        }
    } catch (PODException $e) {
        switch ($pdo->errorInfo()[1]) {
            case 1062:
                $obj['info'] = '此賬號已注冊';
                break;
            case 1064:
                $obj['info'] = 'wrong sql';
                break;
        }
    }
}
header('Content-Type:application/json');

// output json
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
