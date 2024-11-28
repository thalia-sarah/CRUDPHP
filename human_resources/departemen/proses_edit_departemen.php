<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $id=$_POST['departemen_id'];
    $nama_departemen=$_POST['nama_departemen'];

    $sql = "UPDATE departemen SET
    nama_departemen='$nama_departemen'
    WHERE departemen_id=$id";

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