<?php
require "index.php";
echo 'xin chào';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>

    <h2>Thông tin cá nhân</h2>

    <form method="post" action="form.php">
        <label for="name">Tên:</label>
        <input type="text" name="name" id="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" name="btnsubmit" value="Gửi">
    </form>

</body>

</html>