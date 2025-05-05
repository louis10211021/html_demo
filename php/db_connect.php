<?php
function db_connect()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "D1256977"; // 資料庫名稱
    $port = 3307;  // 添加端口號

    // 建立連線
    $conn = new mysqli($servername, $username, $password, $dbname, $port);

    // 檢查連線
    if ($conn->connect_error) {
        die("連線失敗: " . $conn->connect_error);
    }

    return $conn;
}
?>