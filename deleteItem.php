<?php
session_start();

//預設訊息
$lbj['success'] = false;
$ldbj['info'] = "刪除失敗";

//若購物車當中有 GET 指定的 index，則將之刪除，並重建索引
if (isset($_GET["tra_index"])) {
    //刪除指定的索引位置
    unset($_SESSION['data_compare'][$_GET["tra_index"]]);

    //重建索引
    $_SESSION['data_compare'] = array_values($_SESSION['data_compare']);

    $lbj['success'] = true;
    $lbj['info'] = "已刪除指定商品";
}

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($lbj, JSON_UNESCAPED_UNICODE);
