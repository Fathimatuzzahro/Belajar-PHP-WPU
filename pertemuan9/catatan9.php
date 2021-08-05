PHP + MYSQL
    untuk menghubungkan website dg database mysql ada beberapa cara :
        1. ekstensi MySQL (versi lama, sudsh tdk diupdate, dan banyak celahnya)
        2. ekstensi MySQLi
        3. PDO (PHP Data Object) => driver untuk terhubung ke banyak database

        ekstensi/driver merupakan fungsi2 dlm PHP yg berguna untuk memanipulasi database MySQL

        ctrl+D untuk memilih kata yg sama lalu esc untuk menghentikan / mengembalikan kursornya

    contoh kasus :
    <?php
        koneksi ke database :
            nama host dr database, username mysql, password, nama database

            $conn = mysqli_connect("localhost", "root", "", "phpdasar");

        ambil data dari tabel mahasiswa (query datanya). parameternya ada 2, pertama adalah koneksi ke databasenya. kedua adalah querynya mau apa. kalo menggunakan mysqli_query ini mau gagal ataupun berhasil tidak ada pesan kesalahannya. untuk mengakalinya kita simpan ke dalam variabel result dulu
            $result = mysqli_query($conn, "SELECT * FROM mahasiswa");

        untuk mengecek errornya, kita bisa menggunakan kodisi
            if(!$result) {
                echo mysqli_error($conn);
            }

        ambil data (fetch) mahasiswa dari objek dr objek result.
        ada 4 cara ngambil data dr result
            1. mysqli_fetch_row() : mengembalikan array numeric (array yg indeksnya angka)
            
                $mhs = mysqli_fetch_array($result);
                var_dump($mhs[2]);

            2. mysqli_fetch_assoc() : mengembalikan array associative
                $mhs = mysqli_fetch_assoc($result);
                var_dump($mhs["jurusan"]);
            3. mysqli_fetch_array() : mengembalikan array numeric & associative. terlihat lebih fleksibel, tetapi saat mencetak semua datanya, maka akan tercetak data array numeric dan juga data array associative (data yg tercetak double)
                $mhs = mysqli_fetch_array($result);
                var_dump($mhs["jurusan"]);

                $mhs = mysqli_fetch_array($result);
                var_dump($mhs[1]);
            4. mysqli_fetch_object() : mengembalikan object
                $mhs = mysqli_fetch_object($result);
                var_dump($mhs->nama);
        
        looping untuk mencetak tabel
            while($mhs = mysqli_fetch_assoc($result)) {
                var_dump($mhs["nama"]);
            }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>         
                <th>Gambar</th>  
                <th>NIM</th>
                <th>Nama</th>
                <th>Email</th>        
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <a href="">Ubah</a> |
                        <a href="">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["nim"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["email"]; ?></td>
                    <td><?= $row["jurusan"]; ?></td>

                </tr>
            <?php $i++; ?>
            <?php endwhile; ?>
        
        </table>
    </body>
    </html>