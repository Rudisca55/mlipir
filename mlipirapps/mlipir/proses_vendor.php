<?php
include_once 'Dbconnect.php';

$vendor_code=$_POST['vendor_code'];
$vendor_name=$_POST['vendor_name'];
$price=$_POST['price'];

$tambah="insert into t_vendor	(vendor_code,vendor_name,price) values ('B$vendor_code','$vendor_name','$price')";
						
$result = mysqli_query($con,$tambah);
if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/></div>";
        }

?>