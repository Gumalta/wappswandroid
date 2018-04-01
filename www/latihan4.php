<html>
<head>
	<title>Tambah Data Karyawan - Nyekrip</title>
</head>
<body>

<?php
echo "<h1>Latihan 4 : Tambah Data</h1>
<hr>";

if (isset($_POST["tambah"])) {
	$serverHost = "localhost";
	$serverUser = "root";
	$serverPass = "";
	$dbName = "test_db";
	
	$conn=new mysqli($serverHost, $serverUser, $serverPass, $dbName);
	if ($conn->connect_error) {
		die("Koneksi gagal: " . $conn->connect_error);
	}
 
/*if(! get_magic_quotes_gpc() )
{
   $nama_karyawan = addslashes ($_POST['nama_karyawan']);
   $alm_karyawan = addslashes ($_POST['alm_karyawan']);
}
else
{
   $nama_karyawan = $_POST['nama_karyawan'];
   $alm_karyawan = $_POST['alm_karyawan'];
}*/
	
	$namaKaryawan = $_POST["namaKaryawan"];
	$alamatKaryawan = $_POST["alamatKaryawan"];
	$gajiKaryawan = $_POST["gajiKaryawan"];
	 
	$sql = "INSERT INTO karyawan (namaKaryawan, alamatKaryawan, gajiKaryawan, tglGabung)
		VALUES ('$namaKaryawan', '$alamatKaryawan', '$gajiKaryawan', NOW())";
	       
	if ($conn->query($sql) === TRUE) {
		echo "Record baru berhasil ditambahkan";
	} else {
		echo "Kesalahan: " . $sql . "<br>" .$conn->error;
	}

	$conn->close();
	} else {

	echo "<form method='post' action=''>
	<table width='500' border='0' cellspacing='1' cellpadding='2'>
	<tr>
		<td width='100'>Nama Karyawan</td>
		<td><input name='namaKaryawan' type='text' id='$namaKaryawan'></td>
	</tr>
	<tr>
		<td width='110'>Alamat Karyawan</td>
		<td><input name='alamatKaryawan' type='text' id=$alamatKaryawan'></td>
	</tr>
	<tr>
		<td width='110'>Gaji Karyawan</td>
		<td><input name='gajiKaryawan' type='text' id='$gajiKaryawan'></td>
	</tr>
	<tr>
		<td width='110'> </td>
		<td> </td>
	</tr>
	<tr>
		<td width='110'> </td>
		<td><input name='tambah' type='submit' id='tambah' value='Tambah Karyawan'></td>
	</tr>
	</table>
	</form>";
}
?>

</body>
</html>
