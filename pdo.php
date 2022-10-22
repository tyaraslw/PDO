<?php
//koneksi
// PDO
   $koneksi = new PDO("mysql:host=localhost;dbname=tysalwa","root","");
//query

//memasukan data
   //$koneksi ->query("insert into siswa values (3,'tony stark')");

//menghapus data   
   //$query = $koneksi->query("delete from `siswa` where id='3' ");

//mengedit/update data
   // $query = $koneksi->query("UPDATE `siswa` SET `Nama`='steve' WHERE id=1");

//menampilkan data
    $query = $koneksi->query("SELECT `ID`, `Nama` FROM `siswa` ");
    if(koneksi){
        echo "database berhasil terkoneksi";
    }