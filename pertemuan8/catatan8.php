DATABASE - MYSQL
    1. Data : representasi fakta di dunia nyata. 
    contoh data : nama, judul buku, no KTP, harga, foto, dokumen, video, dll

    biasanya data2 ittu saling terkait dan bisa kita hubungkan.

    bgmn menyimpan & mengelola data?
        a. simpel : menuliskan dg notepad
        b. menuliskan dg ms excel
    
    tp nantinya akan timbul masalah, seperti :
        a. kapasitas
        b. kecepatan
        c. keamanan
        d. duplikasi, dll

    solusinya?
        a. skalabilitas
        b. tersedia
        c. aman
        d. permanen

    DATABASE
        merupakan data di dalam DBMS-nya

    DMBS : software untuk mengelola database
        a. oracle
        b. mysql
        c. sql server
        d. postgresql
        e. mongodb

    jenis2 DBMS
        a. relational DBMS (RDBMS)
        b. hierarchical DBMS
        c. network DBMS
        d. nosql DBMS

    SQL
        merupakan sebuah bahasa yg digunakan untuk berinteraksi dg database
 
    ISTILAH :
        a. record (row) : baris pada tabel database
        b. field (coloumn) : kolom pada tabel database 
        c. primary key : sebuah data, yg dapat merepresentasikan satu baris record secara unik
        d. auto increment : untuk menambahkan satu nilai ke record yg baru masuk
        e. relationship : hubungan antar tabel
        f. normalization : sebuah proses untuk membuat tabel di dlm database normal

    SINTAKS
    show databases;
    show tables;
    create database phpdasar;
    create table mahasiswa (
        id int primary key auto_increment,
        nama varchar(100),
        nim char(9),
        email varchar(100),
        jurusan varchar(100),
        gambar varchar(100)
    );
    describe mahasiswa;
    select * from mahasiswa;
    select * from mahasiswa where nim = 'V3420032';
    delete from mahasiswa where id = 2;
    drop table mahasiswa;
    drop database phpdasar;
