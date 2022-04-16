<?php
//匯入連線資料庫模式
require('connection.php');
$test=@$_GET['Movie_id'];
$query = $db->query("SELECT * FROM actor INNER JOIN starring 
 ON actor.Actor_id=starring.Actor_id
 WHERE starring.Movie_id='$test'");
$friends = $query->fetchAll(PDO::FETCH_ASSOC);
//印出陣列格式
// print_r($friends);

//判斷是否有資料，有則印出json的格式
if(isset($friends)) {
  echo json_encode($friends, JSON_UNESCAPED_UNICODE);
}else{
  echo"Error";
}

?>
