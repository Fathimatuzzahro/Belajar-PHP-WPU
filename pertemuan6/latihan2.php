<?php
    // $mahasiswa = [
    //     ["Faza", "V3420032", "fathimatuzzahro@student.uns.ac.id", "Teknik Informatika"],
    //     ["Fpio", "V3420039", "fpio@student.uns.ac.id", "Teknik Informatika"]
    // ];

    //array associative
    // array yg indeks nya string yang kita buat sendiri
    // definisinya sama seperti array numeric, kecuali
    // key-nya adalah string yang kita buat sendiri
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