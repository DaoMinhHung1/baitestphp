<?php
require 'person.php';
require 'studen.php';

$person = new Person(30, "John");

// Lấy thông tin từ đối tượng
$name = $person->getName();
$age = $person->getAge();

echo "<br/>";
echo "<br/>";
echo "<br/>";

// Gọi phương thức showcase() để in thông báo chào mừng
$person->showcase($name);

echo "<br/>";
echo "<br/>";
echo "<br/>";
// Tạo đối tượng Sinh viên
$student = new Student(20, "Nguyen Van A", "Khoa CNTT");

// Gọi phương thức showcase() của đối tượng Student để in thông tin
$student->showcase1();
