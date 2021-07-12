ARRAY : sebuah variabel yang bisa menampung/memiliki lebih dari satu nilai/elemen. 
di dalam php ada 2 cara membuat array :
    1. cara lama
        $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

        - definisikan dulu nama variabelnya
        - tuliskan keyword array _ kurung buka kurng tutup
        - simpan nilai/elemen, pisahkan tiap elemen dg koma, gunakan kutip untuk type string
    2. cara baru
        $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        - definisikan dulu nama variabelnya
        - tidak perlu menuliskan keyword arraynya, cukup menuliskan kurung siku

    NOTE :
    elemen pada array, type datanya boleh beda

MENAMPILKAN ARRAY
cara menampilkan array berbeda dg variabel pada biasanya. echo tdk bisa menampilkan array
kita bisa menggunakan :
    1. var_dump(); bisa mengecek isi dari variabel
    2. print_r(); hampir sama dg var_dump, tetapi lebih ringkas dan tdk ada tipe datanya

NOTE :
    - array mrpkn pasangan key dan value
    - key-nya adalah indeks yg dimulai dari 0

menampilkan satu elemen pada array
    echo $arr1[0];
    cukup dg menambahkan indeks yang ingin ditampilkan

<?php
// array
    $hari = array("Senin", "Selasa", "Rabu");

    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    $arr1 = [123, "tulisan", false];

    echo $hari;
    var_dump($hari);
    echo "<br>";
    print_r($bulan);
    echo "<br>";

    menampilkan satu elemen pada array
    echo $arr1[0];
    echo "<br>";
    echo $bulan[1];

    menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump($hari);

?>


Pengulangan pada array
    1. for
    2. foreach
<?php
    $angka = [3,2,15,20,11,77,89];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left; /* untuk membuat datanya berjajar ke kanan */
        }
    </style>
</head>
<body>
    untuk mencetak array sesuai dg array yg sudah didefinisikan sblmnya
    <?php for($i = 0; $i < 7; $i++) { ?>
        <div><?php echo $angka[$i]; ?></div>
    <?php } ?>
    untuk membuat PHP nya menghitung sendiri jumlah pengulangan sesuai jumlah elemen pada array, maka gunakan count($nama var);

    <div class="clear"></div>

    <?php foreach($angka as $a) { ?>
        <div><?php echo $a; </div>
    <?php } ?>
    intinya : memecah elemen2 yang ada pada variabel $angka kemudian disimpan ke dalam variabel $a, lalu ditampilkan. kelebihannya, kita tidak perlu memikirkan berapa banyak kita harus melakukan pengulangan

    memeperbaiki foreach dengan gaya templating
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
    
</body>
</html>

Contoh kasus 1 :
<?php
    $mahasiswa = ["Faza", "V3420032", "Teknik Informatika", "fathimatuzzahro@student.uns.ac.id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <li>Faza</li>
        <li>V3420032</li>
        <li>Teknik Informatika</li>
        <li>fathimatuzzahro@student.uns.ac.id</li>
    </ul>

    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li><?= $mahasiswa[0]; ?></li>
        <li><?= $mahasiswa[1]; ?></li>
        <li><?= $mahasiswa[2]; ?></li>
        <li><?= $mahasiswa[3]; ?></li>
    </ul>
</body>
</html>

Contoh kasus 2 (array multidimensi/array di dalam array) :

<?php
    $mahasiswa = [
        ["Faza", "V3420032", "Teknik Informatika", "fathimatuzzahro@student.uns.ac.id"], 
        ["Fpio", "V3420039", "Teknik Informatika", "fpio@student.uns.ac.id"]
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>NIM : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

NOTE: jika menggunakan teknik di atas, kita harus hati2 saat memasukkan data pada array nya. kita tdk bisa memberi tahu kalo data ini namanya apa, karena data/elemen2 tsb dibaca sbg array numeric.
array numeric adalah array yg indeksnya angka.

untuk memperbaikinya, kita perlu mengubah array numeric tsb menjadi array assosiative dimana indeksnya berupa string (indeksnya berasosiasi dg nilainya)