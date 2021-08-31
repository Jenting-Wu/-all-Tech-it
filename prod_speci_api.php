<?php require_once 'db.inc.php';


// 取得 商品規格
$sql = "SELECT `prod_name`,`specific_id`,`specific_content`
        FROM `products` 
        INNER JOIN `products_specification`
        ON `products_specification`.`prod_id`=`products`.`prod_id`
        WHERE `products`.`prod_id` = " . $_POST['prod_id'];

$arr2 = $pdo->query($sql)->fetchAll();
// foreach ($arr2 as $obj2);

//預設訊息
$obj2['result'] = $arr2;

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj2, JSON_UNESCAPED_UNICODE);
