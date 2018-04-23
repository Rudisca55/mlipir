<?php
include_once 'Dbconnect.php';
session_start();
$ids = $_SESSION['idnyabos'];
$saldo=$_POST['saldo'];

$pilih = mysqli_query($con,"SELECT * FROM `in_payment_balance` WHERE user_id = '$ids' ");
$cari = mysqli_fetch_array($pilih);

if($cari['user_id'] == false){
	 $query = "INSERT into `in_payment_balance` (user_id,balance_amount,version,status) VALUES ('$ids','0', '0', 'V')";
      $result = mysqli_query($con,$query);
	  $tambah="insert into temp_saldo(user_id,saldo,bukti,status)
                        values ('$ids','$saldo','asd','X')";
	$sukses = mysqli_query($con,$tambah);
    if($sukses){
       ?>
    <script>

    alert("sukses");
        document.location = 'saldo.php';

</script>

<?php
    }else{
        echo "error";
    }
}
else {
$tambah="insert into temp_saldo(user_id,saldo,bukti,status)
                        values ('$ids','$saldo','asd','X')";
	$sukses = mysqli_query($con,$tambah);
    if($sukses){
      ?>
     <script>

    alert("sukses");
        document.location = 'saldo.php';

</script>
<?php
    }else{
        echo "error";
    }}


?>