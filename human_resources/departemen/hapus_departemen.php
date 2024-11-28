<?php
session_start();
include("../koneksi.php");

if (isset($_GET['departemen_id'])){

    $id=$_GET['departemen_id'];

    $sql= "DELETE FROM departemen WHERE departemen_id=$id";
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