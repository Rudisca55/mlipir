<?php
include_once 'Dbconnect.php';



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><form action="prosesacc.php" method="post">
 
 
   <?php 
  			$result = "SELECT * FROM temp_saldo status = 'X' ";
			$dbss= mysqli_query($con,$result);
			
			if($dbss == true){
			echo '<table border ="1">';
			while($kmng = mysqli_fetch_array($dbss)){
				echo "<tr>";
				echo "<td>".$kmng['id_temp']."</td><td>".$kmng['saldo']."</td><td><a href='prosesacc.php?iduser=".$kmng['id_temp']."'>sempak</a></td>";
				echo "</tr>";
			}
			
			echo  "</table>";
			}
			else
			{echo " Maaf Gak Ada Orderan ";}
	?>

 
 
  
  </p>
  <p>
    <input type="submit" name="acc" id="acc" value="acc" />
  </p>
</form>
</form>
</body>
</html>