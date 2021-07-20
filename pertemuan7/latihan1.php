<?php
    // $_GET
    // cara mengisi variabelnya, masukkan key nya [] dan isinya
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

    //var_dump($_GET);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nim=<?= $mhs["nim"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
    
</body>
</html>