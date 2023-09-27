<?php
require 'sever.php';
if (isset($_POST['btnsubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    print_r($_POST);

    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `user` (`user`, `name`) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("ss", $name, $email);
        if ($stmt->execute()) {
            echo "Thêm dữ liệu thành công!";
        } else {
            echo "Lỗi: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Lỗi trong việc chuẩn bị câu truy vấn: " . $conn->error;
    }
}
