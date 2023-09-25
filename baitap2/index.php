<?php
require 'sever.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Form Example</title>
    <!-- Liên kết tới các tệp CSS của Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2>Section 2: Web Forms</h2>
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="name">Họ và tên:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="gender">Giới tính</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="male" name="gender" value="Nam">
                    <label class="form-check-label" for="male">Nam</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="female" name="gender" value="Nữ">
                    <label class="form-check-label" for="female">Nữ</label>
                </div>
            </div>

            <div class="form-group">
                <label for="hobbies">Sở thích</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="football" name="hobbies[]" value="Đá banh">
                    <label class="form-check-label" for="football">Đá banh</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="jogging" name="hobbies[]" value="Chạy bộ">
                    <label class="form-check-label" for="jogging">Chạy bộ</label>
                </div>
            </div>
            <div class="form-group">
                <label for="bio">Tin nhắn:</label>
                <textarea class="form-control" id="bio" name="bio" rows="4"></textarea>
            </div>

            <button type="submit" name="btnsubmit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

    <!-- Liên kết tới các tệp JavaScript của Bootstrap (tùy chọn) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>