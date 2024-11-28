<?php
session_start();
include("../koneksi.php");
if(isset($_POST['simpan'])){
    $departemen_id=$_POST['departemen_id'];
    $nama_departemen=$_POST['nama_departemen'];

    $sql = "INSERT INTO departemen
    (nama_departemen)
    VALUES ('$nama_departemen')";

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