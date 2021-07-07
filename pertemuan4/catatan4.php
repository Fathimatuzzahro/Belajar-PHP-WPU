FUNCTION
adalah potongan program/baris-baris kode yg kita buat untuk mempermudah kita pada saat membuat program.
kode program tadi bisa kita kasih nama, lalu bisa kita panggil berulang-ulang
ada 2 jenis function :
1. built-in function : fungsi yg sudah disediakan oleh php. bisa cek di http://php.net/manual/en/funcref.php
2. user-defined function : fungsi yg nantinya kita bikin sendiri

1. built-in function
    a. date/time
        - time()
        <?php
            echo date();
        ?>
        jika ditulis tanpa echo, tidak muncul apa2
        jika ditulis dengan echo tanpa parameter, akan muncul rangkaian angka yg disebut UNIX Timestamp/EPOCH time
        rangkaian angka tsb mempuanyai maksud yaitu jumlah detik yg sudah berlalu sejak 1 Januari 1970 sampai saat ditampilkan. bisa dilitah pada http://en.wikipedia.org/wiki/Unix_time

        kapan menggunakannya?
        tenggat/durasi, mencari umur seseorang, 

        mencoba menampilkan 2 hari setelah hari ini :
        <?php
            echo date("l", time()+172800);
        ?>

        mencoba menampilkan 100 hari setelah hari ini :
        <?php
            echo date("l", time()+60*60*24*100);
        ?>

        mencoba menampilkan 100 hari kebelakang :
        <?php
            echo date("l", time()-60*60*24*100);
            atau
            echo date("d M Y", time()-60*60*24*100);
        ?>        

        - date()
        <?php
            echo date("l, d-M-Y");
        ?>
        harus menggunakan parameter dan juga echo untuk menampilkan.
        merupakan fungsi dlm php untuk mengelola tanggal, dan bisa ditampilkan dalam berbagai macam format bergantung pada parameter yang kita masukkan dalam function date
        l : tampilkan harinya saja
        d : tampilkan tanggalnya saja
        M : tampilkan bulannya saja (dlm bentuk string, tulisan)
        m : tampilkan bulannya saja (dlm bentuk angka)

        cara pengunaan date :
        nama function lalu kurung buka-kurung tutup
        cek function tsb butuh parameter atau tidak
        tetapi kurung buka-kurung tutup harus tetap ditulis

        - mktime()
            fungsi : untuk membuat sendiri detik yang sudah berlalu
            cara menggunakan :
            mktime(0,0,0,0,0,0) > (jam, menit, detik, bulan, tgl, tahun)

            mencoba menampilkan hari lahir :
            mktime(0,0,0,8,25,1985); //melihat detik
            atau
            echo date("l", mktime(0,0,0,8,25,1985)); //melihat hari

        - strtotime()
            echo strtotime("25 aug 1985"); //melihat detik
            atau
            echo date("l", strtotime("25 aug 1985")); //melihat hari
    b. string
        - strlen() : menghitung panjang dr sebuah string
        - strcmp() / string compare : membandingkan 2 buah string
        - explode() : memecah sebuah string menjadi array
        - htmlspecialchars() : function khusus untuk menjaga kita dari orang yang masuk ke website kita
    
    c. utility : fungsi bantuan
        - var_dump() : untuk mencetak isi dari variabel
        - isset() : untuk mengecek apakah sebuah variabel, pakah sudah prnh dibuat atau belum. isset akan menghasilkan nilai boolean (true/false). jika blm prnh membuat variabel tsb, maka akan bernilai false
        - empty() : untuk mengecek apakah variabel yang ada itu kosong atau tidak
        - die() : untuk memberhentikan program kita
        - sleep () : untuk memberhentikan sementara

2. user-defined function
    ada bbrp hal yang hrs diperhatikan:
        - fungsinya harus didefinisikan dulu > panggil
        - sebuah function biasanya mengembalikan nilai
    
    <?php
        function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
        }
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan function</title>
    </head>
    <body>
    <!-- <h1>Selamat Datang, Administrator!</h1> -->
        <h1><?php echo salam("Pagi", "Faza"); ?></h1>
    </body> 
    </html>

    note : pada php, parameter di atas harus diisikan, berneda dg javascript. untuk mengakalinya dapat dibuat isi parameter defaultnya saat mengeinisialisai function di awal 