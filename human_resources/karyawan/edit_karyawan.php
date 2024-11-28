<?php
include("../koneksi.php");
$id = $_GET['id'];

$query = $db->query("SELECT * FROM karyawan WHERE karyawan_id='$id'");
$karyawan=$query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h3>Edit Data Karyawan</h3>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="karyawan_id" value="<?php echo $karyawan['karyawan_id'];?>">
        <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama_karyawan" value="<?php echo $karyawan['nama_karyawan'];?>" required></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="number" name="gaji" value="<?php echo $karyawan['gaji'];?>" required></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>
                    <select name="posisi" style="width: 100%" required>
                        <option value="" selected disabled>
                            Pilih Kategori
                        </option>
                        <option value="Fronted Developer" <?php echo ($karyawan['posisi']=='Fronted Developer')? 'selected' : '';?>>Fronted Developer</option>
                        <option value="Backend Developer"<?php echo ($karyawan['posisi']=='Backend Developer')? 'selected' : '';?>>Backend Developer</option>
                        <option value="QA Engineer"<?php echo ($karyawan['posisi']=='QA Engineer')? 'selected' : '';?>>QA Engineer</option>
                        <option value="UI/UX Designer"<?php echo ($karyawan['posisi']=='UI/UX Designer')? 'selected' : '';?>>UI/UX Designer</option>
                        <option value="Project Manager"<?php echo ($karyawan['posisi']=='Project Manager')? 'selected' : '';?>>Project Manager</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>