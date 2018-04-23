
<?php
    include "header.php";
	require('Dbconnect.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `t_user` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){

			$datarole = mysqli_fetch_array($result);
			$_SESSION['dataroleid'] = $datarole['role_id'];
			$_SESSION['idnyabos'] = $datarole['user_id'];
			$_SESSION['username'] = $username;
			$sempak = $_SESSION['dataroleid'];

			
			if($sempak == 1){
			header("Location: admin_acc.php"); // Redirect user to index.php
			}elseif($sempak == 2){
				header("Location: user.php"); 
			}else{
				header("Location: vendor.php"); 
			}
			
			}else{
            ?>
				<div class="alert alert-danger" role="alert">
                        <strong>Wrong Password!</strong> Check your username or password.
                    </div>
			<?php	}
    }else{
?>


<div class="content-wrapper">

    <!-- Typography -->

    <div class="container">
            
            <div class="row" style="margin: 75px 0 75px 0">
                <div class="col-lg-12">
                    <div class="heading">
                        <h2 class="h1 heading-title">Login</h2>
                    </div>

                    <form class="contact-form" method="post" action="" style="margin-bottom: 75px">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="with-icon">
                                            <input name="username" placeholder="Your Name" type="text">
                                            <svg class="utouch-icon utouch-icon-user"><use xlink:href="#utouch-icon-user"></use></svg>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="with-icon">
                                            <input name="password" placeholder="Password" type="password">
                                            <svg class="utouch-icon utouch-icon-message-closed-envelope-1"><use xlink:href="#utouch-icon-message-closed-envelope-1"></use></svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<input name="submit" class="btn btn--secondary" style="margin-bottom: 20px; margin-left: 0;" type="submit" value="Login" />
                                       
                                    </div>

                                </div>

                            </div>

                        </div>
                    </form>
                </div>
                </div>
                </div>
                </div>

<?php } ?>
<?php include "footer.php";