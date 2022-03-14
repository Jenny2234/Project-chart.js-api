<?php
session_start();

$servername = "localhost";
$username = "march";
$password = "12345";
$dbname = "test";
    
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// var_dump($conn);
// 檢查連線
if ($conn->connect_error) {
      die("連線失敗: " . $conn->connect_error);
}else{
    // echo "連線成功";
}


// $conn->close();
?>