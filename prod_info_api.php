<?php require_once 'db.inc.php';


// 取得 商品名稱 / 品牌名稱 / 商品尺寸 / 商品價格 / 商品型號 / 商品縮圖
$sql = "SELECT `prod_name`,`brand_name`,`prod_size`,`prod_price`,`prod_type`,`prod_thumbnail`
        FROM `products`   
        INNER JOIN `brands`
        ON `brands`.`brand_id`=`products`.`brand_id`
        WHERE `prod_id` = " . $_POST['prod_id'];

$arr1 = $pdo->query($sql)->fetchAll();

//預設訊息
$obj1['result'] = $arr1;

//告訴前端，回傳格式為 JSON (前端接到，會是物件型態)
header('Content-Type: application/json');

//輸出 JSON 格式，供 ajax 取得 response
echo json_encode($obj1, JSON_UNESCAPED_UNICODE);
