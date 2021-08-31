<?php
session_start();

// 匯入 SQL 檔案名
require_once 'db.inc.php';

//預設
$obj['success'] = false;
$obj['info'] = '鏈接失敗';
$objUserReset = null;
$stmt = null;

//表單是不是完整

if (
    isset($_POST['pwd'])

) {
    $pwd = sha1($_POST['pwd']);
    $email = $_POST['email'];
    $verified_code = $_POST['verified_code'];
    try {

        //UPDATE table_name
        // SET column1=value1, column2=value2, column3=value3···
        // WHERE some_column=some_value;
        //加使用者
        $sql =  "UPDATE `users` 
        SET `pwd` = '$pwd'
        WHERE  `email` = '$email'
        AND `verified_code` = '$verified_code'";


        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            $obj['success'] = true;
            $obj['info'] = '登入成功';
            // 取得使用者資料（obj）
            $objUser = $stmt->fetch();

            //session
            // $_SESSION['user_name'] = $objUser['user_name'];
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
