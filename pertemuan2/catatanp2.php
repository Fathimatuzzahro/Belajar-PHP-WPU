catatan :
// Pertemuan 2 - PHP Dasar
Sintaks PHP
// ini adalah syntax untuk memberi komentar
/*
ini juga untuk menuliskan komentar dg jumlah yg banyak
*/

Standar Output : perintah di php yang digunakan untuk menampilkan sesuatu ke layar
bisa menggunakan echo, print
print_r (ini untuk array)
var_dump : digunakan untuk melihat isi dari variabel
print_r dan var_dump biasanya digunakan saat debugging
<?php
echo "Fazahro"; // bebas mau pake kutip 2 atau satu untuk menuliskan string
echo 1009;
echo true; // menghasilkan angka satu
echo false; // menghasilkan kosong, tidak ada yang dicetak
print "Fazahro";
print_r ("Fazahro");
var_dump ("Fazahro");
?>


Penulisan sintaks PHP
1. PHP di dalam HTML 
<h1>Yahallo!! Selamat Datang, <?php echo "Fathimatuzzahro"; ?></h1> 
<p><?php echo "Ini adalah paragraf"; ?></p>
2. HTML di dlm PHP
<?php
    echo "<h1>Yahallo!!! Selamat Datang, Fathimatuzzahro</h1>"
?>


Variabel dan Tipe Data
1. Variabel
Di dalam php, kita cukup menuliskan $ (dollar) lalu nama variabelnya. variabel itu digunakan untuk menampung sebuah nilai
Variabel tidak boleh diawali dengan angka tetapi boleh mengandung angka (misal : $1nama tdk boleh, ttpi $nama1 boleh)
<?php
$nama = "Faza";
echo "Yahallo, nama saya $nama";
?>


Operator
1. Aritmatika (+ - * / %)
langsung operasikan :
<?php
echo 1+1;
?>
atau bisa juga disimpan dalam variabel :
<?php
$x = 10;
$y = 20;
echo $x * $y;
?>

2. penggabung string / concatenation / concat (bentuknya titik, kalo di javascript bentuknya plus)
<?php
$nama_depan = "Faza";
$nama_belakang = " Azzahra";
echo $nama_depan . " " . $nama_belakang; //untuk memberi spasi ditambah " "
?>

3. Assigment (=, +=, -=, /=, %=, .=)
<?php
$x = 1;
$x += 5;
echo $x;
?>

<?php
$nama = " Faza";
$nama .= " ";
$nama .= "Azzahra";
echo $nama;
?>

4. Perbandingan (<,>, <=, >=, ==, !=), operator ini tidak mengecek tipe datanya, hanya mengecek nilainya. biasanya di pake saat kita membuat pengkondisian
<?php
var_dump (1 < 5); // hasilnya akan berupa boolean true atau false
var_dump (1 == "1"); // nilainya true
?>

5. Identitas (===, !==), operator ini mengecek tipe datanya juga
<?php
var_dump (1 === "1"); // nilainya false
?>

6. Logika (&&, ||, !), operator ini juga digunakan untuk pengkondisian
<?php
$x = 10;
var_dump ($x < 20 && $x % 2 == 0); // ini harusnya nilainya true, kedua pernyataan harus benar
?>

<?php
$x = 30;
var_dump ($x < 20 || $x % 2 == 0); // ini harusnya nilainya true, hanya satu yg benar ttp true
?>

NOTE : 
1. kutip 2 lebih sakti dari kutip 1. knp? karena dg menggunakan kutip 2 kita bisa menggunakan konsep yang namanya interpolasi.
2. interpolasi itu untuk mengecek di dalam kutip 2 atau string terdapat variabel atau tidak. kalau ada variabel, maka yg ditampilkan adalah variabelnya
3. variabel tidak boleh ada spasinya, bisa diberi _

//sintaks HTML
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Belajar PHP</title>
    </head>
    <body>
        
        <h1>Yahallo!! Selamat Datang <?php echo $nama; ?></h1>
        <p><?php echo "Ini adalah paragraf"; ?></p>
        
    </body>
</html>