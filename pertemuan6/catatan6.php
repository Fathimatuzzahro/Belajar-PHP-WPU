PHP Associative Array
REVIEW MATERI :
<?php
    //array
    $hari = array("Senin", "Selasa", "Rabu");
    $bulan = ["Januari", "Februari", "Maret"];
    $arr = [100, "teks", true];

    //menampilkan array
    //versi debugging
    var_dump($hari);
    echo "<br>";
    print_r($bulan);

    //menampilkan 1 elemen pada array
    echo $arr[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 30px; 
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <?php
        $angka = [1,2,3,4,5,6,7,8,9];
    ?>

    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>

</body>
</html>

ARRAY MULTIDIMENSI => mempunyai 2 indeks untuk menampilkannya. indeks yang pertama untuk menentukan elemen array yg luarnya
<?php
    $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];
    //menampilkan angka 5
    echo $angka[1][1];
?>

CONTOH KASUS
<?php
    $mahasiswa = [
        ["Faza", "V3420032", "fathimatuzzahro@student.uns.ac.id", "Teknik Informatika"],
        ["Fpio", "V3420039", "fpio@student.uns.ac.id", "Teknik Informatika"]
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
            <li> Email : <?= $mhs[2]; ?></li>
            <li>Jurusan : <?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

CONTOH KASUS ARRAY ASSOCIATIVE
<?php
    $mahasiswa = [
        "nama" => "Faza", 
        "nim" => "V3420032",
        "email" => "fathimatuzzahro@student.uns.ac.id",
        "jurusan" => "Teknik Informatika"
    ];
    //menampilkan jurusannya saja
    echo $mahasiswa["jurusan"];
?>

CONTOH KASUS ARRAY NUMERIC + ASSOCIATIVE
<?php
    $mahasiswa = [
        [
            "nama" => "Faza", 
            "nim" => "V3420032",
            "email" => "fathimatuzzahro@student.uns.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Fpio", 
            "nim" => "V3420039",
            "email" => "fpio@student.uns.ac.id",
            "jurusan" => "Teknik Informatika"
        ]
    ];
    //menampilkan email dari data mhs kedua
    echo $mahasiswa[1]["email"];
?>

CONTOH KASUS ARRAY NUMERIC + ASSOCIATIVE + array lagi di dalamnya
<?php
    $mahasiswa = [
        [
            "nama" => "Faza", 
            "nim" => "V3420032",
            "email" => "fathimatuzzahro@student.uns.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Fpio", 
            "nim" => "V3420039",
            "email" => "fpio@student.uns.ac.id",
            "jurusan" => "Teknik Informatika",
            "tugas" => [90, 80, 100]
        ]
        
    ];
    echo $mahasiswa[1]["tugas"][1];
?>

CONTOH KASUS ASSOCIATIVE ARRAY yang tidak mempermasalahkan urutan data karena yang diperhatikan adalah key-nya
<?php
    $mahasiswa = [
        [
            "nama" => "Faza", 
            "nim" => "V3420032",
            "email" => "fathimatuzzahro@student.uns.ac.id",
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Fpio", 
            "nim" => "V3420039",
            "email" => "fpio@student.uns.ac.id",
            "jurusan" => "Teknik Informatika"
        ]
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
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li> Email : <?= $mhs["jurusan"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>

CONTOH KASUS ASSOCIATIVE ARRAY yang tidak mempermasalahkan urutan data karena yang diperhatikan adalah key-nya + gambar
<?php
    $mahasiswa = [
        [
            "nama" => "Faza", 
            "nim" => "V3420032",
            "email" => "fathimatuzzahro@student.uns.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "faza.jpg"
        ],
        [
            "nama" => "Fpio", 
            "nim" => "V3420039",
            "email" => "fpio@student.uns.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "pio.jpg"
        ]
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
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>"
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li> Email : <?= $mhs["jurusan"]; ?></li>
            <li>Jurusan : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
