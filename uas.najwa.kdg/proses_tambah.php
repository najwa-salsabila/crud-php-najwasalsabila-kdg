<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$nomor = $_POST['nomor'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (id, nama, nim, email, nomor, jurusan) VALUES ('$id', '$nama', '$nim', '$email', '$nomor', '$jurusan')";

if ($conn->query($sql) === TRUE) {
    header("location: index.php");
    exit;
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();