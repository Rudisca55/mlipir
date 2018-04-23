<?php

include'header.php';
include'Dbconnect.php';



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
    <div class="content-wrapper">

    <!-- Typography -->

    <div class="container">

    
    <form action="prosesacc.php" method="post">
 
 
   <?php 
  			$result = "SELECT * FROM temp_saldo WHERE status = 'X' ";
			$dbss= mysqli_query($con,$result);
			$dbhh = mysqli_fetch_array($dbss);
			if($dbhh['status'] == true){
			echo '<table border ="1">';
			while($kmng = mysqli_fetch_array($dbss)){
				echo "<tr>";
				echo "<td>".$kmng['id_temp']."</td><td>".$kmng['saldo']."</td><td><a href='prosesacc.php?iduser=".$kmng['id_temp']."'>sempak</a></td>";
				echo "</tr>";
			}
			
			echo  "</table>";
            echo '<input type="submit" class="btn btn--secondary"  name="acc" id="acc" value="acc" />';
			}
			else
			{
                echo "<h2>Maaf Gak Ada Orderan</h2> ";
            }
	?>

 
    </form>
        </div>
        </div>
<?php include "footer.php"?>