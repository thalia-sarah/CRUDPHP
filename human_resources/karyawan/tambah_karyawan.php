<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Karyawan</title>
</head>
<body>
    <h3>Tambah Data Karyawan</h3>
    <form action="proses_tambah.php" method="POST">
        <table border="0">
            <tr>
                <td>Nama Karyawan</td>
                <td><input type="text" name="nama_karyawan" required></td>
            </tr>
            <tr>
                <td>Gaji</td>
                <td><input type="number" name="gaji" required></td>
            </tr>
            <tr>
                <td>Posisi</td>
                <td>
                    <select name="posisi" style="width: 100%" required>
                        <option value="" selected disabled>
                            Pilih Kategori
                        </option>
                        <option value="Fronted Developer">Fronted Developer</option>
                        <option value="Backend Developer">Backend Developer</option>
                        <option value="QA Engineer">QA Engineer</option>
                        <option value="UI/UX Desinger">UI/UX Desinger</option>
                        <option value="Project Manager">Project Manager</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>