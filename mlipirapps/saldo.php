<?php
include 'Dbconnect.php';
include "header.php";


?>
<div class="content-wrapper">

    <!-- Typography -->

    <div class="container">

<form action="proses_saldo.php" method="post">
    <h2>Saldo</h2>
    <label for="textarea"></label>
    <label for="jumlah"></label>
  <input type="text" name="saldo" id="saldo" placeholder="Masukan Nominal Saldo Anda" />
  
 
    <input type="submit" class="btn btn--secondary" name="input" id="input" value="input" />
  
</form>
    </div>
    </div>
<?php include"footer.php"; ?>