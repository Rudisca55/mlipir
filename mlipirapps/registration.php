<?php
include "header.php";
?>
<?php
	require('Dbconnect.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		
		

        $query = "INSERT into `t_user` (username, password, email, role_id) VALUES ('$username', '".md5($password)."', '$email', '2')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='container'><div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div></div>";
        }
    }else{
?>
<div class="content-wrapper">

    <!-- Typography -->

    <div class="container">

<div class="form">
<h1>Registration User</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
<br />
</div>
    </div></div>
<?php } ?>
<?php include "footer.php"; ?>
