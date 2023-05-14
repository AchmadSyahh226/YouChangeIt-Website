<?php
require 'koneksi.php';
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$batas_waktu = $_POST["batas_waktu"];
$foto = $_POST["foto"];

$sql = "INSERT INTO tb_target (judul, deskripsi, batas_waktu, foto) VALUES ('$judul', '$deskripsi', '$batas_waktu', '$foto')";

if (mysqli_query($conn, $sql)) {
    header("Location: target.html");
} else {
    echo "Pendaftaran akun gagal: " . mysqli_error($conn);
}
