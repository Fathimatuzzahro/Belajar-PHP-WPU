<?php
// 6. Logika (&&, ||, !), operator ini juga digunakan untuk pengkondisian
$x = 10;
var_dump ($x < 20 && $x % 2 == 0); // ini harusnya nilainya true, kedua pernyataan harus benar
$x = 30;
var_dump ($x < 20 || $x % 2 == 0); // ini harusnya nilainya true, hanya satu yg benar ttp true
?>


