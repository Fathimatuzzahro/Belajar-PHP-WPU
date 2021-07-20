REQUEST METHODE GET & POST
sebelumnya, kita perlu mempelajari hal2 berikut :
    1. superglobals : variabel yg dimiliki oleh PHP. variabelnya mrpkn variabel spesial. 
    sebelum mempelajari variabel superglobals ini, kita harus memahami variabel scoupe (lingkup dr sebuah variabel di dalam PHP)

    contoh :
    <?php
        variabel scoupe / lingkup variabel
        $x = 10; => variabel lokal untuk file latihan1.php pada folder pertemuan7
        echo $x; 
    ?>

    <?php
        $x = 10; //variabel lokal untuk file latihan1.php pada folder pertemuan7
        function tampilX() {
            echo $x;
        }
        tampilX();
    ?>
    pada code di atas akan menampilka error, karena variabel x yg di-echo tdk dikenali di dalam function.
    berbeda dg code di bawah ini, tidak akan menampilkan error 
    <?php
        variabel scoupe / lingkup variabel
        $x = 10; => variabel lokal untuk file latihan1.php pada folder pertemuan7

        function tampilX() {
            $x = 20; => variabel lokal untuk function itu saja
            echo $x;
        }

        tampilX();
        echo "<br>";
        echo $x;
    ?>

    untuk mengatasi error tsb, maka diberlakukan code seperti di bawah ini
    <?php
        variabel scoupe / lingkup variabel
        $x = 10; => variabel lokal untuk file latihan1.php pada folder pertemuan7
        function tampilX() {
            global $x; => mendefinisikan variabel x dg mencari variabel x di luar functionnya
            echo $x;
        }

        tampilX();
    ?>

    VARIABEL SUPERGLOBALS :
        merupakan variabel2 yang sudah dimiliki PHP yg bisa kita akses dimanapun dan kapanpun di dlm halaman PHP kita
        terdiri dari :
            a. $_GET
            b. $_POST
            c. $_REQUEST
            d. $_SESSION
            e. $_COOKIE
            f. $_SERVER
            g. $_ENV
        dari semua variabel global ini, semuanya merupakan array associative. maka perlakukan seperti array associative. masing2 dari variabel tersebut mempunyai perilaku yg berbeda, punya cara kerja yang beda2

        contoh penggunaanya :
        <?php
            SUPERGLOBALS
            variabel global milik PHP
            merupakan array associative
            var_dump($_GET);
        ?>
        <?php
            SUPERGLOBALS
            variabel global milik PHP
            merupakan array associative
            var_dump($_POST);
        ?>
        jika 2 code di atas dijalankan, maka akan menampilkan sebuah array yang kosong.

        akan tetapi, untuk variabel di bawah ini sudah ada isinya :
        <?php
            var_dump($_SERVER);
        ?>
        <?php
            echo $_SERVER["SERVER_NAME"];
        ?>
        variabel superglobals di atas bisa diakses di file manapun dan sudah ada isinya

        NOTE!
        METODE REQUEST GET & POST dg VARIABEL SUPERGLOBALS $_GET dan $_POST=> BEDA

        <?php
            $_GET
            cara mengisi variabelnya, masukkan key nya [] dan isinya
            $_GET["nama"] = "Faza";
            $_GET["nim"] = "V3420032";
            var_dump($_GET);
        ?>
        khusus variabel ini, ada cara lain untuk memasukkan datanya melalui urlnya

        http://localhost/phpdasar/pertemuan7/latihan1.php

        tanda tanya setelah tulisan terakhir pada url dibaca "saya akan memasukkan data di halaman ini ke dlm variabel $_GET"

        saya bisa memasukkan data ke halaman ini dg metode request GET. kalo metode request nya GET, datanya akan dikirim ke url, lalu data tersebut akan ditangkap oleh variabel superglobals $_GET

        dg menambahakan sbb:
        http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Faza

        kalo mau menambahkan data lagi
        http://localhost/phpdasar/pertemuan7/latihan1.php?nama=Faza&nim=V3420032

        penerapan GET pada kasus pertemuan 6
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
            <title>GET</title>
        </head>
        <body>
            <h1>Daftar Mahasiswa</h1>

            <?php foreach($mahasiswa as $mhs) : ?>
                <ul>
                    <li><img src="img/<?= $mhs["gambar"]; ?>"</li>
                    <li><?= $mhs["nama"]; ?></li>
                    <li><?= $mhs["nim"]; ?>
                </ul>
            <?php endforeach; ?>
        </body>
        </html>

        contoh penggunaan metode req GET
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

        kemudian, buat satu file baru dg code seperti di bawah ini
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Detail Mahasiswa</title>
            </head>
            <body>
                <ul>
                    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
                    <li><?= $_GET["nama"]; ?></li>
                    <li><?= $_GET["nim"]; ?></li>
                    <li><?= $_GET["email"]; ?></li>
                    <li><?= $_GET["jurusan"]; ?></li>
                </ul>

                <a href="latihan1.php">Kembali ke Daftar Mahasiswa</a>
        </body>
        </html>

        jika pada url lgsg mengakses pada file baru tanpa mengirim data apapun, maka akan terjadi error. kenapa?
        di file baru tsb kita lgsg mencetak dari variabel superglobal, dg asumsi datanya sudah ada di url.

        cara mengatasi?
        user tidak boleh/tidak bisa mengakses file baru tsb (latihan2.php) tanpa meng-klik link pada file latihan1.php
        <?php
            //cek apakah tdk ada data di $_GET
            if(!isset($_GET["nama"])) {
                //redirect : memindahkan user ke halaman lain
                header("Location: latihan1.php");
                exit; // mengakhiri proses supaya script di bawahnya tidak dieksekusi
            }
        ?>

        tetapi jika pada url kita menuliskan salah satu isi variabel (misal nama), maka akan ditampilkan. hal ini juga harus kita tangani

    REQUEST METHOD POST
        perbedaan POST dan GET :
        kalo GET, datanya dikirim lewat url. kalo POST, datanya dikirim lewat form. 

        kelebihan menggunakan POST :
        ketika kita mengirimkan data ke sebuah tempat, datanya nggak keliatan, nggak ada di url.
        contoh : saat membuat login, jangan pernah menggunakan GET. 

        contoh penggunaannya :
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>POST</title>
            </head>
            <body>
                <form action="latihan4.php" method="post">
                => ada 2 atribut wajib : action & method. tdk akan error jika tdk ditulis, tetapi ada nilai default yg disimpan ke dalam 2 atribut tadi
                    Masukkan Nama :
                    <input type="text" name="nama">
                    atribut type dan name harus ada, supaya post nya bisa jalan
                    => atribut name akan menjadi key pada array associativenya ($_POST)
                    <br>
                    <button type="submit" name="submit">Kirim</button>
                </form>
            </body>
            </html>

            kemudian buat satu file baru untuk menyimpan data yang dikirim tadi.
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>POST</title>
            </head>
            <body>
                <h1>Selamat Datang, <?= $_POST["nama"] ?>!</h1>
            </body>
            </html>

            akan tetapi jika pada atribut form action dikosongkan / tidak ditulis, maka datanya akan dikirim ke halaman itu sendiri.
            sedangkan jika form methodnya yang dikosongkan, maka secara default nilainya adalah GET. 
            <body>
                <h1>Yahallo, Selamat Datang, <?= $_POST["nama"]; ?></h1>
                <form action="" method="post">
                    Masukkan Nama :
                    <input type="text" name="nama">
                    <br>
                    <button type="submit" name="submit">Kirim</button>
                </form>
            </body>

            saat code di atas ditampilkan, maka akan terjadi error, krn blm prnh dibuat variabelnya/isi dr arraynya.
            untuk memperbaikinya, kita perlu menambahkan seperti code di bawah ini
            <body>
                => untuk mengecek apakah tombol submit sudah dipencet atau belum
            <?php if(isset($_POST["submit"])) : ?>
                <h1>Yahallo, Selamat Datang, <?= $_POST["nama"]; ?></h1>
            <?php endif; ?>
                <form action="" method="post">
                    Masukkan Nama :
                    <input type="text" name="nama">
                    <br>
                    <button type="submit" name="submit">Kirim</button>
                </form>
            </body>