<?php
// array
    $hari = array("Senin", "Selasa", "Rabu");

    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

    $arr1 = [123, "tulisan", false];

    //menampilkan array
    //echo $hari;
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    //menampilkan satu elemen pada array
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    //menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "Kamis";
    $hari[] = "Jumat";
    echo "<br>";
    var_dump($hari);

?>