<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Departemen</title>
</head>
<body>
    <h3>Tambah Data Departemen</h3>
    <form action="proses_tambah_departemen.php" method="POST">
        <table border="0">
            <tr>

                <td>Nama Departemen</td>
                <td>
                    <select name="nama_departemen" style="width: 100%" required>
                        <option value="" selected disabled>
                            Pilih Kategori
                        </option>
                        <option value="Design">Design</option>
                        <option value="Engineer">Engineer</option>
                        <option value="Management">Manageme</option>
                    </select>
                </td>
            </tr>
            
        </table>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
</body>
</html>