<?php
require 'sever.php';
if (isset($_POST['btnsubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Kết nối đến cơ sở dữ liệu
    $conn = new mysqli($host, $username, $password, $dbname);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    // Chuẩn bị truy vấn SQL để chèn dữ liệu
    $sql = "INSERT INTO `user` (`name`, `email`) VALUES('$name', '$email')";

    // Thực hiện truy vấn SQL
    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công!";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    // Đóng kết nối cơ sở dữ liệu
    $conn->close();
}
