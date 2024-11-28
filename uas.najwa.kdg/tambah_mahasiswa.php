<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form action="proses_tambah.php" method="POST">
        <label>id:</Label>
        <input type="text" name="id" required><br>

        <label>nama:</Label>
        <input type="text" name="nama" required><br>

        <label>nim:</Label>
        <input type="text" name="nim" required><br>
        
        <label>email:</Label>
        <input type="text" name="email" required><br>

        <label>nomor:</Label>
        <input type="number" name="nomor" required><br>

        <label>jurusan:</Label>
        <input type="text" name="jurusan" required><br>

        <input type="submit" value="Tambah">
    </form>
</body>

</html>