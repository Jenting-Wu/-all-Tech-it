<?php
session_start();

$obj['success'] = false;
$obj['info'] = '加入比較清單失敗';

if (isset($_POST['prod_id'])) {

    //假如先前比較列表沒有建立，就直接初始化 (建立)
    if (!isset($_SESSION['data_compare'])) $_SESSION['data_compare'] = [];

    // 初始化 : 預設商品不存在於比較清單
    $hasProductId = false;
    foreach ($_SESSION['data_compare'] as $index => $lbj) {
        if ($lbj['prod_id'] == $_POST['prod_id']) {


            //更新 bool 值，代表比較清單內有重複的商品
            $hasProductId = true;
            $obj['info'] = "已加入比較";
        }
    }
    //放置主要資料
    if ($hasProductId == false) {
        $_SESSION['data_compare'][] = [
            "prod_id" => $_POST['prod_id'],
        ];
        $obj['info'] = "加入比較清單成功";
    }


    //設定訊息
    // $obj['success'] = true;
}


// foreach ($_SESSION['data_compare'] as $key => $obj);

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
