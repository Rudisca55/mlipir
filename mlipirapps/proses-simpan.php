<?php
// Panggil koneksi database
require_once "config/database.php";

if (isset($_POST['simpan'])) {
	$vendor_code   = mysqli_real_escape_string($db, trim($_POST['vendor_code']));
	$vendor_name   = mysqli_real_escape_string($db, trim($_POST['vendor_name']));

	$phone         = $_POST['phone'];
	$email         = mysqli_real_escape_string($db, trim($_POST['email']));
	$price         = $_POST['price'];
    $address       = mysqli_real_escape_string($db, trim($_POST['address']));
    $longitude     = $_POST['longitude'];
    $latitude      = $_POST['latitude'];
    $description   = mysqli_real_escape_string($db, trim($_POST['description']));
    
	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysqli_query($db, "INSERT INTO t_vendor(vendor_code,
													 vendor_name,
													 phone,
													 email,
													 price,
													 address,
													 longitude,
													 latitude,
                                                     description)	
											  VALUES('$vendor_code',
													 '$vendor_name',
													 '$phone',
													 '$email',
													 '$price',
													 '$address',
													 '$longitude',
													 '$latitude',
                                                     '$description')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: index.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}					
?>