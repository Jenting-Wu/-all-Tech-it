<?php
// 匯入 SQL 檔案名
require_once 'db.inc.php';

//讀取 composer 所下載的套件
require_once('vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;

$obj['success'] = false;
$obj['info'] = '查無帳號';

if (
    isset($_POST['email_login'])
) {
    //密碼加密
    $email = $_POST['email_login'];
    try {
        //加使用者
        $sql =  "SELECT `email`, `verified_code`
                FROM `users`
                WHERE `email` = '$email'";

        $stmt = $pdo->query($sql);

        if ($stmt->rowCount() > 0) {
            $obj['success'] = true;
            $obj['info'] = '查詢到該帳號，發信';
            // 取得使用者資料（obj）
            $objUser = $stmt->fetch();
        }
    } catch (PODException $e) {
        switch ($pdo->errorInfo()[1]) {
            case 1062:
                $obj['info'] = '查無帳號';
                break;
            case 1064:
                $obj['info'] = 'wrong sql';
                break;
        }
    }
}

//以下發信

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";
$mail->CharSet = 'UTF-8';
$mail->SMTPDebug  = 0;
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "iamsophia0903@gmail.com";
$mail->Password   = "euoi knve cvzh mclr";

$mail->IsHTML(true);
$mail->AddAddress($email, "收件者");
$mail->SetFrom("iamsophia0903@gmail.com", "SOPHIA");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "TECHIT-重設密碼";
$content = "驗證碼: <a href='http://localhost/TECHIT/reset.php?email="
    . $objUser['email'] . "&verified_code=" . $objUser['verified_code']
    . "' target='_blank'>點擊並更新密碼</a>";
$mail->MsgHTML($content);

if ($mail->Send()) {
    $obj['success'] = true;
    $obj['info'] = '寄送成功';
} else {
    $obj['success'] = false;
    $obj['info'] = '寄送失敗';
}

// output json
header('Content-Type:application/json');
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
