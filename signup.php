  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php 
$connection = mysqli_connect('localhost','root','','bike') or die(mysqli_error($connection));
// print_r($connection);      
		$email      = mysqli_real_escape_string($connection,$_POST['email-su']);
		$password   = mysqli_real_escape_string($connection,$_POST['pwd-su']);
		$query = "SELECT email FROM user where email='".$email."'";
		$result = mysqli_query($connection,$query);
		$numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        {
        	$message =  "Invalid email address please type a valid email!!";
        }
        elseif($numResults>=1)
        {
        	$message = $email." Email already exist!!";
        }
        else
        {
        	mysqli_query($connection, "insert into user(email,password) values('".$email."','".($password)."')");
        	$message = "Signup Sucessfully!!";
        }
        echo '
        <div class="well text-center">
        	' . $message . '
			<a href="index.php"><h3>Back to sign in page!</h3></a>
		</div>';
?>

