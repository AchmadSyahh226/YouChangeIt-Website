<?php
$servername = "localhost";
$database = "db_users_web";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil. ";
?>