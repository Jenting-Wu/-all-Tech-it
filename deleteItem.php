<?php
session_start();

//預設訊息
$obj['success'] = false;
$obj['info'] = "刪除失敗";
$obj['ind'] = "";




//若購物車當中有 GET 指定的 index，則將之刪除，並重建索引
if (isset($_GET["tra_index"])) {

    foreach ($_SESSION['data_compare'] as $index => $pbj) {
        if ($pbj['prod_id'] == $_GET["tra_index"]) {
            $obj['ind'] = "{$index}";
        }
    }

    // 刪除指定的索引位置
    unset($_SESSION['data_compare'][$obj['ind']]);

    //重建索引
    // $_SESSION['data_compare'] = array_values($_SESSION['data_compare']);

    $obj['success'] = true;
    $obj['info'] = "已刪除指定商品";
}

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj, JSON_UNESCAPED_UNICODE);
