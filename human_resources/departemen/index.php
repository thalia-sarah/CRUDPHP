<?php
include("../koneksi.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Departemen</title>
    <style>
        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Data Departemen</h2>
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
                <th>Nama Departemen</th>
                <th><a href="tambah_departemen.php">Tambah Data</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no =1;
            $query = $db->query("SELECT * FROM departemen");
            while ($departemen = $query->fetch_assoc()){
                ?>
            <tr>
                <td><?php echo $no++ ?></td>
                
                <td><?php echo $departemen['nama_departemen']?></td>
                <td align="center">
                    <a href="edit_departemen.php ?id=<?php echo $departemen['departemen_id'] ?>">Edit</a>
                    <a onclick= "return confirm('Hapus data?')" href="hapus_departemen.php ?departemen_id=<?php echo $departemen['departemen_id'] ?>">Hapus</a>
                </td>
            </tr>
            <?php    
            }
            ?>
        </tbody>
    </table>    
</body>
</html>