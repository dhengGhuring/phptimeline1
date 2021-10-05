<?php
//echo perintah untuk menampilkan code ke layar
echo "Ridho Ananta";
echo "\n";
echo 12345;
//print perintah untuk menampilkan code ke layar
print " \nHello World \n";
echo "\n";
print 12345;
//print_r perintah untuk menampilkan
print_r ("\nSelamat Datang ");
//var_dump perintah untuk menampilkan
var_dump("Belajar PHP Dasar")
?>

//Sintaks PHP
//Php dalam HTML
//html dalam php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- (php di dalam html) -->
    <h1>Halo <?php echo "Mistom"; ?></h1>
    <!-- (html di dalam php) -->
    <?php echo "<h1>Halo Mistom</h1>"; ?>
</body>
</html>

<?php 
//variabel pada PHP
$nama = "Mistom";
echo "Hai nama Saya $nama";
?>

<?php 
//Operator pada PHP
//Aritmatika
// + - * / %
$a = 5;
$b = 5;
echo $a + $b;
echo $a - $b;
echo $a * $b;
echo $a / $b;
echo $a % $b;

// penggabung string / concatenation
$nama_depan = "Mistom";
$nama_belakang = "Marsua";

echo $nama_depan . " " . $nama_belakang;

//Assigment
// =, +=, -=, *=, /=, %=
$angka = 1;
$angka += 5;
echo $angka;

//Operator Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);

//identitas
//===, !==
var_dump(5 === "5");

//Logika
// &&, ||, !
 $a = 10;
 var_dump($a < 5 && $a % 2 == 0);
?>