  <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="./css/LogReg.css">
</head>

<body>
<?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['email'])){
		
		$email = stripslashes($_REQUEST['email']); 
		$email = mysqli_real_escape_string($con,$email); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `customer` WHERE email='$email' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['email'] = $email;
			header("Location: index.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div data-aos="fade-down" class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="post" action="" name="login">
                <h1 style="padding-bottom: 20px">Sign in</h1>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required/>
                <span style="padding-top: 10px"><button>Login</button></span>
                <p>Not registered yet? <a href='registration.php' style="color:#FF0000;font-weight:bold;">Register Here</a></p>
            </form>
        </div>
</div>

    <div class="landing"> <!---background-->
        <div class="opac">
        </div>
    </div>

<?php } ?>

</body>

</html>