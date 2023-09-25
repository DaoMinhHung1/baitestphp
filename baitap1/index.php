<?php
echo "Section 1: Arry and Loop Basics";
echo "<br/>";
echo "<br/>";
echo "<br/>";
$mang = [1, 2, 3, 4, 7, 6, 8, 10];
$tong = 0;

foreach ($mang as $so) {
    if ($so % 2 == 0) {
        $tong += $so;
    }
}
echo "Tổng các số chẵn là: " . $tong;
echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$mang2 = ["HTML", "CSS", "JAVASCRIPT", "BOOTSTRAP"];
for ($i = 0; $i < count($mang2); $i++) {
    $chuoi = $mang2[$i];
    $do_dai = strlen($chuoi);
    echo "Chuỗi: " . $chuoi . ", Độ dài: " . $do_dai . "<br/>";
}
