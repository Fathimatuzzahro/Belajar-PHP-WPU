<?php
    // koneksi ke database
    // nama host dr database, username mysql, password, nama database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    // membuat function query
    function query($query) {
        // ingat! variabel yg berada di luar function tdk bisa digunakan di dlm function (variable scoupe)
        // maka kita perlu menambahkan global $conn
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)) {
            // memasukkan data pada variabel row ke variabel rows
            $rows[] = $row;
        }

        return $rows;
    }

?>