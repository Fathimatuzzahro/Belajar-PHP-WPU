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
    <!-- ada 2 atribut wajib : action & method. tdk akan error jika tdk ditulis, tetapi ada nilai default yg disimpan ke dalam 2 atribut tadi -->
        Masukkan Nama :
        <input type="text" name="nama">
        <!-- atribut type dan name harus ada, supaya post nya bisa jalan -->
        <!-- atribut name akan menjadi key pada array associativenya ($_POST) -->
        <br>
        <button type="submit" name="submit">Kirim</button>
    </form>
</body>
</html>