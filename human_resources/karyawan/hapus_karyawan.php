<?php
session_start();
include("../koneksi.php");

if (isset($_GET['karyawan_id'])){

    $id=$_GET['karyawan_id'];

    $sql= "DELETE FROM karyawan WHERE karyawan_id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        $_SESSION['notifikasi'] = "Data berhasil dihapus!";
    }else{
        $_SESSION['notifikasi'] = "Data gagal dihapus!";
    }
    header('Location: index.php');
}else{
    die("Akses ditolak...");
}
?>