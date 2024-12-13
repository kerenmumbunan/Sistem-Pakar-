<?php
// koneksi.php
$host = "localhost";
$user = "root";
$password = "";
$database = "spkpenyakittanaman"; // Ganti dengan nama database Anda

$konek_db = mysqli_connect($host, $user, $password, $database);

// Periksa koneksi
if (!$konek_db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

