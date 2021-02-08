Pertemuan 3 PHP Dasar
A. Pengulangan : for, while, do-while, foreach (pengulangan khusus array)
<?php
for ($i = 0; $i < 5; $i++) {
    echo "Hello World! <br>"; // <br> atau breakline digunakan untuk menambahkan baris baru
}
?>
Penjelasan : 
Ada 3 bagian : inisialisasi, kondisi terminasi, increment atau decrement
inisialisasi : menentukan variabel awal untuk pengulangannya
kondisi terminasi : memberhentikan pengulangannya
increment atau decrement : agar pengulangannya bisa maju atau mundur

<?php
$i = 0 ;
while ($i < 5) {
     echo "Hello World! <br>";
$i++; // $i = $i+1
?>
pada while, selama kondisinya bernilai true, lakukan apapun yang ada di dalamya

<?php
$i = 0;
do {
    echo "Hello World! <br>";
$i++;
} while ($i < 5);
?>
artinya : lakukan hal ini (do) selama kondisinya bernilai true
ketika kondisinya bernilai false, maka bloknya akan dijalankan dulu minimal satu kali, kalo while tidak


Mari kita coba!!
1. ini adalah sintaks dasar html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- 
            border 1 : agar tabelnya ada garisnya
            cellpadding 10 : agar lebih luas ruangan selnya
            cellspacing 0 : biar bordernya satu garism biar gak terlalu tebal
        -->
            <tr> <!-- untuk membuat baris -->
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
                <td>1,5</td>
            </tr>
            <tr> <!-- untuk membuat baris -->
                <td>2,1</td>
                <td>2,2</td>
                <td>2,3</td>
                <td>2,4</td>
                <td>2,5</td>
            </tr>
            <tr> <!-- untuk membuat baris -->
                <td>3,1</td>
                <td>3,2</td>
                <td>3,3</td>
                <td>3,4</td>
                <td>3,5</td>
            </tr>
        </table>
    </body>
</html>

2. ini adalah sintaks html yg terdapat php di dalamnya untuk melakukan pengulangan
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- 
            border 1 : agar tabelnya ada garisnya
            cellpadding 10 : agar lebih luas ruangan selnya
            cellspacing 0 : biar bordernya satu garism biar gak terlalu tebal
        -->
            <?php
            //jika nilai awal menggunakan 1, maka terminasinya menggunakan operator lebih kecil sama dengan (<=)
            // NOTE : i adalah baris, dan j adalah kolom
            // kita akan membuat 3 baris 5 kolom
                for ($i = 1; $i <= 3; $i++) {
                    echo "<tr>";
                        for ($j = 1; $j <= 5; $j++) {
                            echo "<td>$i, $j</td>";
                        }
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>

3. ini adalah sintaks dengan gaya templating
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- 
            border 1 : agar tabelnya ada garisnya
            cellpadding 10 : agar lebih luas ruangan selnya
            cellspacing 0 : biar bordernya satu garism biar gak terlalu tebal
        -->
            <?php for ($i = 1; $i <= 3; $i++) { ?>
                <tr> <!-- <tr> ditulis sbg tag html, bukan sbg string di php -->
                    <?php for ($j = 1; $j <= 5; $j++) { ?>
                        <td> <?php echo "$i, $j" ?></td>
                    <?php } ?>
                </tr>
            <?php } ?>
            
        </table>
        
    </body>
</html>

menggunakan nested pengulangan gini akan sangat membingungkan, kita perlu menentukan letak kurung kurawal tutupnya.
maka dari itu, kurung kurawal bukanya diganti dengan titik dua (:), dan kurung kurawal tutupnya diganti endfor;
lihat kodingan di bawah ini
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 1</title>
    </head>
    <body>
        
        <table border="1" cellpadding="10" cellspacing="0">
        <!-- 
            border 1 : agar tabelnya ada garisnya
            cellpadding 10 : agar lebih luas ruangan selnya
            cellspacing 0 : biar bordernya satu garism biar gak terlalu tebal
        -->
            <?php for ($i = 1; $i <= 3; $i++) : ?>
                <tr> <!-- <tr> ditulis sbg tag html, bukan sbg string di php -->
                    <?php for ($j = 1; $j <= 5; $j++) : ?>
                        <td> <?php echo "$i, $j" ?></td>
                        ketika kita hanya punya satu variabel untuk dicetak, kita dapat menggunakan <?= yang memiliki arti <?php echo
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>

        </table>
        
    </body>
</html>

B. Pengkondisian
//Pengkondisian / Percabangan : if else, if else if else, ternary, switch
<?php
$x = 20;
if ($x < 20) {
    echo "benar";
} else if ($x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}
?>

// menerapkan percabangan pada latihan 1
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Latihan 3</title>
        <style>
            .warna-baris {
                background-color : silver;
            }
        </style>
    </head>
    <body>
        
        <table border="1" cellpadding="10" cellspacing="0">
        
            <?php for ($i = 1; $i <= 5; $i++) : ?>
                <?php if ($i % 2 == 0) : ?> <!-- untuk membuat baris genap berwarna abu2 -->
                    <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                        <?php for ($j = 1; $j <= 5; $j++) : ?>
                            <td> <?php echo "$i, $j" ?></td>
                        <?php endfor; ?>
                    </tr>
            <?php endfor; ?>

        </table>
        
    </body>
</html>
