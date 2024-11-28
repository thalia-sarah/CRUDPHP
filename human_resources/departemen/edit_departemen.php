<?php
include("../koneksi.php");
$id = $_GET['id'];

$query = $db->query("SELECT * FROM departemen WHERE departemen_id='$id'");
$departemen=$query->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Departemen</title>
</head>
<body>
    <h3>Edit Data Karyawan</h3>
    <form action="proses_edit_departemen.php" method="POST">
        <input type="hidden" name="departemen_id" value="<?php echo $departemen['departemen_id'];?>">
        <table border="0">
            <tr>
                <td>Nama Departemen</td>
                <td>
                    <select name="nama_departemen" style="width: 100%" required>
                        <option value="" selected disabled>
                            Pilih Kategori
                        </option>
                        <option value="Designer" <?php echo ($departemen['nama_departemen']=='Designer')? 'selected' : '';?>>Designer</option>
                        <option value="Engineer"<?php echo ($departemen['nama_departemen']=='Engineer')? 'selected' : '';?>>Engineer</option>
                        <option value="Management"<?php echo ($departemen['nama_departemen']=='Management')? 'selected' : '';?>>Management</option>
                        
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>