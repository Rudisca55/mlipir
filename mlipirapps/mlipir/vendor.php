<?php
include_once 'Dbconnect.php';



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><form action="proses_vendor.php" method="post">
  <p>Vendor Code
   <label for="textarea"></label>
  <input type="text" name="vendor_code" id="vendor_code" />
  <label for="textarea">Vendor Name</label> 
  <label for="vendor_name"></label>
  <input type="text" name="vendor_name" id="vendor_name" />
  <label for="textarea">Price</label> 
  <label for="price"></label>
  <input type="text" name="price" id="price" />
  </p>
  <p>
    <input type="submit" name="generate" id="generate" value="Generate" />
  </p>
</form>

</body>
</html>