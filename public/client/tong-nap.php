<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lỗi PDO để ngoại lệ
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Tổng hợp dữ liệu từ bảng recharge_logs
    $sql = "
        SELECT 
            user_id, 
            REPLACE(FORMAT(SUM(amount) + SUM(REPLACE(amount2, '.', '')), 0), ',', '.') as tongnap
        FROM 
            recharge_logs
        WHERE 
            status = 1
        GROUP BY 
            user_id
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Lấy kết quả truy vấn
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Chuẩn bị câu lệnh chèn dữ liệu vào bảng tong_nap
    $insertSql = "
        INSERT INTO tong_nap (user_id, tongnap)
        VALUES (:user_id, :tongnap)
        ON DUPLICATE KEY UPDATE tongnap = :tongnap
    ";
    $insertStmt = $conn->prepare($insertSql);

    // Ghi dữ liệu vào bảng tong_nap
    foreach ($results as $row) {
        $insertStmt->execute([
            ':user_id' => $row['user_id'],
            ':tongnap' => $row['tongnap']
        ]);
    }

    echo "Dữ liệu đã được tổng hợp và ghi vào bảng tong_nap.";
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

$conn = null;
?>
