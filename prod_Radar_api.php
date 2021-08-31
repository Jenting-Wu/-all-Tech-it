<?php require_once 'db.inc.php';


// 取得 訂單編號 / 類別名稱 / 商品ID / 商品名稱 / 評分 
$sql = "SELECT `order_id`,`products`.`cate_id`,`products`.`prod_id`,`prod_name`,
`rate_A_name`,`rate_A_score`,
`rate_B_name`,`rate_B_score`,
`rate_C_name`,`rate_C_score`,
`rate_D_name`,`rate_D_score`,
`rate_E_name`,`rate_E_score`
FROM `products` 
INNER JOIN `orders_rate` 
ON `products`.`prod_id`=`orders_rate`.`prod_id`
INNER JOIN `rate_item` 
ON `products`.`cate_id`=`rate_item`.`cate_id`                                 
WHERE `products`.`prod_id` = " . $_POST['prod_id'];

$arr3 = $pdo->query($sql)->fetchAll();

//預設訊息
$obj3['result'] = $arr3;

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj3, JSON_UNESCAPED_UNICODE);
