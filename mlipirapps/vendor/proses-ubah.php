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

		// perintah query untuk mengubah data pada tabel is_siswa
		$query = mysqli_query($db, "UPDATE t_vendor SET vendor_name		   = '$vendor_name',
														phone 	           = '$phone',
                                                        price 	           = '$price',
														email 	           = '$email',
														address 	       = '$address',
														longitude 		   = '$longitude',
														latitude 		   = '$latitude',
														description   	   = '$description'
												  WHERE vendor_code 	   = '$vendor_code'");		

		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil update data
			header('location: index.php?alert=3');
		} else {
			// jika gagal tampilkan pesan kesalahan
			header('location: index.php?alert=1');
		}	
	}					
?>