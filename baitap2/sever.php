<?php
if (isset($_POST['btnsubmit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];
    $bio = $_POST['bio'];

    if (!preg_match("/^[a-zA-Z\s]*$/", $name)) {
        echo "<script>alert('Tên phải chứa chỉ chữ cái và khoảng trắng.');</script>";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || substr($email, -10) !== "@gmail.com") {
        echo "<script>alert('Email không hợp lệ hoặc không phải là email của Gmail.');</script>";
    }
    if (empty($gender)) {
        echo "<script>alert('Phải chọn giới tính');</script>";
    }
    if (empty($hobbies)) {
        echo "<script>alert('Phải chọn ít nhất 1 sở thích');</script>";
    }

    echo "<h2>Submit thành công</h2>";
    echo "<p><strong>Họ và tên:</strong> " . htmlspecialchars($name) . "</p>";
    echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    echo "<p><strong>Giới tính:</strong> " . htmlspecialchars($gender) . "</p>";

    if (!empty($hobbies)) {
        $hobbiesList = implode(", ", array_map('htmlspecialchars', $hobbies));
        echo "<p><strong>Sở thích:</strong> " . $hobbiesList . "</p>";
    }

    echo "<p><strong>Tin nhắn:</strong> " . htmlspecialchars($bio) . "</p>";
} else {
    echo "Submit thất bại";
}
