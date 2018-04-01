<?php
echo "<h1>Latihan 2i : Membuat Table </h1>
<hr>";

//Koneksi
$serverHost = "localhost";
$serverUser = "root";
$serverPass = "";
$dbName = "test_db";
$conn = new mysqli($serverHost, $serverUser, $serverPass, $dbName);

//Check koneksi
if ($conn->connect_error) {
	die("Koneksi gagal: " . $conn->connect_error);
}

//Membuat tabel
$sql = "CREATE TABLE karyawan (
idKaryawan INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
namaKaryawan VARCHAR(20) NOT NULL,
alamatKaryawan VARCHAR(50) NOT NULL,
gajiKaryawan INT NOT NULL,
tglGabung TIMESTAMP NOT NULL
)";

if($conn->query($sql) === TRUE) {
	ECHO "Tabel Karyawan berhasil dibuat";
} else {
	echo "Gagal membuat tabel: " . $conn->error;
}

$conn->close();
