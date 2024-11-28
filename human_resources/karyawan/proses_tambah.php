<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $karyawan_id=$_POST['karyawan_id'];
    $nama_karyawan=$_POST['nama_karyawan'];
    $posisi=$_POST['posisi'];
    $gaji=$_POST['gaji'];

    $sql = "INSERT INTO karyawan
    (nama_karyawan, posisi, gaji)
    VALUES ('$nama_karyawan', 
    '$posisi', '$gaji')";

    $query = mysqli_query($db, $sql);

    if($query){
        $_SESSION['notifikasi'] = "Data berhasil ditambahkan!";
    }else{
        $_SESSION['notifikasi'] = "Data gagal ditambahkan!";
    }
    header('Location: index.php');
}else{
    die("Akses ditolak...");
}
?>