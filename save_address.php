<?php

// 匯入 SQL 檔案名
require_once 'db.inc.php';

//預設
$obj['success'] = false;
$obj['info'] = '儲存失敗';
$verified_code = md5(date("YmdHis"));

//表單是不是完整
if (
    isset($_POST['user_name'])
    && isset($_POST['phone_number'])
    && isset($_POST['address'])
) {
    //密碼加密
    $user_name = $_POST['user_name'];
    $phone_number = $_POST['phone_number'];
    $address = $_POST['address'];

    //  增加使用者資訊
    try {
        $sql = "INSERT INTO `users` 
        (`user_name`,
        `phone_number`, `address`, `created_at`, `updated_at`)
        VALUES (
            '$user_name', '$phone_number', '$address', current_timestamp(), current_timestamp());";
        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            $obj['success'] = true;
            $obj['info'] = '儲存成功';
        }
    } catch (PODException $e) {
        switch ($pdo->errorInfo()[1]) {
            case 1062:
                $obj['info'] = '此地址已存在';
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
