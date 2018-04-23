<?php
include_once 'Dbconnect.php';

if(isset($_GET)){
	$saldo=$_GET['iduser'];

	$caritbl="SELECT * FROM `temp_saldo` WHERE id_temp = '$saldo'";
	$expor =mysqli_query($con,$caritbl);
	
	$keldata = mysqli_fetch_array($expor);
	$nambahbos = $keldata['saldo'];
	$idnya = $keldata['user_id'];
	echo $idnya;
	$trxvendor="update in_payment_balance set balance_amount = balance_amount + $nambahbos,version=version+1 WHERE user_id = $idnya";mysqli_query($con,$trxvendor);
	$trxvendor1="update temp_saldo set status = 'V' WHERE id_temp = $saldo";


mysqli_query($con,$trxvendor1);
	
}
?>