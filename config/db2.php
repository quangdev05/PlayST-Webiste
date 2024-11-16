<?php
$servername = "localhost";
$username = "tplaystclick_playst";
$password = "tplaystclick_playst";
$dbname = "tplaystclick_playst";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
    exit;
}
?>