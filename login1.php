<?php
session_start();

// 匯入 SQL 檔案名
require_once 'db.inc.php';

//預設
$obj['success'] = false;
$obj['info'] = '登入失敗';
$objUser = null;
$stmt = null;

//表單是不是完整

if (
    isset($_POST['email_login'])
    && isset($_POST['pwd_login'])
) {
    //密碼加密
    $email = $_POST['email_login'];
    $pwd = sha1($_POST['pwd_login']);
    try {
        //加使用者
        $sql =  "SELECT `user_name`
                FROM `users`
                WHERE `email` = '$email'
                AND `pwd` = '$pwd';";

        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            $obj['success'] = true;
            $obj['info'] = '登入成功';
            // 取得使用者資料（obj）
            $objUser = $stmt->fetch();

            //session
            $_SESSION['user_name'] = $objUser['user_name'];
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
