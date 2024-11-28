<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Karyawan</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Karyawan</h2>
    <ul>
        <li><a href = "http://localhost/Thalia-Sarah_XI-RPL-2/human_resources/karyawan/index.php">Daftar Karyawan</a></li>
        <li><a href = "http://localhost/Thalia-Sarah_XI-RPL-2/human_resources/departemen/index.php">Daftar Departemen</a></li>
    </ul>
    <?php if (isset($_SESSION['notifikasi'])):?>
        <p><?php echo $_SESSION['notifikasi'];?></p>
        <?php unset($_SESSION['notifikasi']);?>
    <?php endif; ?>
    <table>
        <thead>
            <tr align="center">
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Posisi</th>
                <th>Gaji</th>
                <th><a href="tambah_karyawan.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no =1;
            $query = $db->query("SELECT * FROM karyawan");
            while ($karyawan = $query->fetch_assoc()){
                ?>
            <tr>
                <td><?php echo $no++ ?></td>
                
                <td><?php echo $karyawan['nama_karyawan']?></td>
                <td><?php echo $karyawan['posisi']?></td>
                <td><?php echo $karyawan['gaji']?></td>
                <td align="center">
                    <a href="edit_karyawan.php ?id=<?php echo $karyawan['karyawan_id'] ?>">Edit</a>
                    <a onclick= "return confirm('Hapus data?')" href="hapus_karyawan.php ?karyawan_id=<?php echo $karyawan['karyawan_id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php    
            }
            ?>
        </tbody>
    </table>    
</body>
</html>