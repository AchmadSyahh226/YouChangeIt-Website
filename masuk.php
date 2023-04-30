<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM tb_users WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: index.html");
} else {
    echo "Masuk akun gagal: " . mysqli_error($conn);
}