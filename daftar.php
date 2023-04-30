<?php
require 'koneksi.php';
$nama_awal = $_POST["firstname"];
$nama_akhir = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO tb_users (nama_awal, nama_akhir, email, password) VALUES ('$nama_awal', '$nama_akhir', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: masuk.html");
} else {
    echo "Pendaftaran akun gagal: " . mysqli_error($conn);
}
