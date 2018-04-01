<?php
echo '<h1>Latihan 5 : Menampilkan Data</h1>
<hr>';

$serverHost = 'localhost';
$serverUser = 'root';
$serverPass = '';
$dbName = 'test_db';

$conn = new mysqli($serverHost, $serverUser, $serverPass, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT idKaryawan, namaKaryawan, alamatKaryawan, gajiKaryawan
	FROM karyawan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["idKaryawan"]. " - Name: " . $row["namaKaryawan"]. " - Alamat: " . 
	$row["alamatKaryawan"].  " - Gaji: " . $row["gajiKaryawan"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();


