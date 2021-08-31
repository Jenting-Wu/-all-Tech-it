<?php
session_start();

//預設訊息
$obj['success'] = false;
$obj['info'] = "加入喜愛清單失敗";


//判斷 post 變數是否存在
if (
    isset($_POST['prod_name']) &&
    isset($_POST['prod_thumbnail']) &&
    isset($_POST['prod_price']) &&
    isset($_POST['brand_id'])
) {
    //假如先前沒有建立喜愛清單，就直接初始化 (建立)
    if (!isset($_SESSION['follow_list'])) $_SESSION['follow_list'] = [];


    //將商品資料放到喜愛清單中
    $_SESSION['follow_list'][] = [
        "prod_name" => $_POST['prod_name'],
        "prod_thumbnail" => $_POST['prod_thumbnail'],
        "prod_price" => $_POST['prod_price'],
        "brand_id" => $_POST['brand_id'],
    ];


    //設定訊息
    $obj['success'] = true;
    $obj['info'] = "加入喜愛清單成功";
} else {
    $obj['success'] = false;
    $obj['info'] = "參數有少";
}

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
