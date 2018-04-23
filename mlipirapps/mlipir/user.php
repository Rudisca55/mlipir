<?php
include_once 'Dbconnect.php';



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><form action="prosesbeli.php" method="post">
<a href="saldo.php">Tambah Saldo </a>
  <p>Jumlah
    <label for="textarea"></label>
    <label for="jumlah"></label>
  <input type="text" name="jumlah" id="jumlah" />
  <label for="textarea">Tempat Wisata</label> 
  <label for="wisata"></label>
  <select name="wisata" id="wisata">
  <?php 
  			$result = "SELECT * FROM t_vendor ";
			$row= mysqli_query($con,$result);
			while ($rows = mysqli_fetch_array($row)) {
				?>
				<option value="<?php  echo $rows['vendor_id']; ?>"> <?php  echo $rows['vendor_name']; ?> </option>
                <?php
			}

			mysqli_free_result($result)
	?>
  </select>
  </p>
  <p>
    <input type="submit" name="generate" id="generate" value="Generate" />
  </p>
</form>

</form></body>
</html>