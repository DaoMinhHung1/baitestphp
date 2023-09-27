<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testnl";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối không thành công: " . mysqli_connect_error());
}

echo "Kết nối thành công!";

mysqli_close($conn);
