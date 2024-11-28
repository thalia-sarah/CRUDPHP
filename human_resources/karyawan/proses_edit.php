<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $id=$_POST['karyawan_id'];
    $nama_karyawan=$_POST['nama_karyawan'];
    $posisi=$_POST['posisi'];
    $gaji=$_POST['gaji'];

    $sql = "UPDATE karyawan SET
    nama_karyawan='$nama_karyawan',
    posisi='$posisi',
    gaji='$gaji'
    WHERE karyawan_id=$id";

    $query = mysqli_query($db, $sql);

    if($query){
        $_SESSION['notifikasi'] = "Data berhasil diubah!";
    }else{
        $_SESSION['notifikasi'] = "Data gagal diubah!";
    }
    header('Location: index.php');
}else{
    die("Akses ditolak...");
}
?>