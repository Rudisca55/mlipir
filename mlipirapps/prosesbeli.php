<?php
date_default_timezone_set('Asia/Jakarta');
include 'Dbconnect.php';
include 'header.php';
session_start();
$jumlah=$_POST['jumlah'];
$wisata=$_POST['wisata'];


?>

<?php

$trn_date = date("Y-m-d H:i:s");
?>

<?php
$result = "SELECT * FROM t_vendor WHERE vendor_id = $wisata ";
$rs=mysqli_query($con,$result); 		
$row = mysqli_fetch_array($rs);


$u = "SELECT * FROM in_payment_balance WHERE user_id = 1 ";
$us=mysqli_query($con,$u);
$user=mysqli_fetch_array($us);
$idbos = $_SESSION['idnyabos'];
$tambah="insert into in_out_log_payment_balance(payment_balance_id,user_id,amount,create_datetime,status,vendor_id)
                        values ('$user[0]','$idbos','$row[3]','$trn_date','OUT','$row[0]')";
	$sukses = mysqli_query($con,$tambah);


$sub_total=$row[3]*$jumlah;

$trxvendor="insert into trx_vendor(vendor_id,total_tiket,amount,sub_total_amount,user_id)
                        values ('$row[0]','$jumlah','$row[3]','$sub_total','$idbos')";
	$trx_sukses=mysqli_query($con,$trxvendor);
	

$trxvendor="update in_payment_balance set balance_amount = balance_amount - $sub_total, version=version+1 WHERE user_id=$idbos";
	$trxvendor_update=mysqli_query($con,$trxvendor);

$trxvendor="update t_vendor set balance_amount = balance_amount + $sub_total WHERE vendor_id=$wisata";
	$trxvendor_update1=mysqli_query($con,$trxvendor);


?>
 <body>
   <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <style type="text/css">
body{
    width:100%;
    text-align:center;
}
img{
    border:0;
}
#main{
    margin: 15px auto;
    background:white;
    overflow: auto;
	width: 750px;
}
#header{
    background:white;
}
#mainbody{
    background: white;
    width:100%;
}
#footer{
    background:white;
}
#mp1{
    text-align:center;
    font-size:35px;
}
#header ul{
    margin-bottom:0;
    margin-right:40px;
}
#header li{
    display:inline;
    padding-right: 0.5em;
    padding-left: 0.5em;
    font-weight: bold;
    border-right: 1px solid #333333;
}
#header li a{
    text-decoration: none;
    color: black;
}
p.quote1{
    
    font-weight:bold;
    margin-left:10%;
    margin-right:10%;
    color: black;
}
a{
	color: black;
}

div.button{
    border: 2px solid #333333;;
    border-radius:15px;
    width:100px;
    cursor:pointer;
    font-weight:bold;
}

</style>

<?

?>


<script type="text/javascript">

$(document).ready(function() {
	  document.getElementById("qrimage").innerHTML="<img src='https://chart.googleapis.com/chart?chs=250x250&cht=qr&chl="+encodeURIComponent("<?php echo $trn_date ?> ")+"'/>";    
});
header('Location:'.hhh.php);
die()

  


</script>





  <div id="main">
  <div id="mainbody">
  <p style="font-size:25px;text-align:center;">Create QR Code</p>


<p style="font-size:20px;text-align:center;">&nbsp;</p></td></tr>
<tr><td align="center">


<tr><td align="center">
<div id="qrimage">
</div>

</div>
<div id="footer">
<br>
<h5 align="center">&nbsp;</h5>
</div>
</div>
<?php include "footer.php" ?>