<?php
// Cấu hình thông số kết nối
$host = 'localhost';
$db   = 'food';
$user = 'root';
$pass = ''; // Mặc định của XAMPP là trống
$charset = 'utf8mb4';

// Chuỗi DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Các tùy chọn cấu hình PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Đẩy lỗi ra ngoại lệ để dễ debug
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Trả về dữ liệu dạng mảng kết hợp
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Sử dụng Prepared Statements thực sự
];

try {
     // Khởi tạo đối tượng PDO
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     // Nếu lỗi, dừng chương trình và hiện thông báo
     die("Lỗi kết nối Database: " . $e->getMessage());
}
?>