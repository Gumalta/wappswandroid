<?php
echo '<h1>Latihan 2 : Membuat Database</h1>
<hr>';

//membuat database
$serverHost = "localhost";
$serverUser = "root";
$serverPass = "";
$conn = new mysqli($serverHost, $serverUser, $serverPass);

//Check koneksi
if ($conn->connect_error) {
	die("Koneksi gagal: " . $conn->connect_error);
}

//membuat database
$sql = "CREATE DATABASE test_db";
if ($conn->query($sql) === true) {
	echo "Database berhasil dibuat";
} else {
	echo "Pembuatan database gagal: " . $conn->error;
}

$conn->close();