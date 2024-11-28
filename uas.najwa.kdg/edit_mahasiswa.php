<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h2>Edit Data Mahasiswa</h2>
    <form action="proses_edit.php"method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
        nama:  <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
        nim:  <input type="text" name="nim" value="<?php echo $data['nim']; ?>"><br>
        email:  <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
        nomor:  <input type="text" name="nomor" value="<?php echo $data['nomor']; ?>"><br>
        jurusan:  <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
        <input type="submit" value="simpan">
    </form>    
</body>

</html>