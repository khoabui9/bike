<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])) {
  header("location: src/dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="public/css/index.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="text-center front-box well opac">
      <h2>Login to Bike page</h2>
      <!-- Trigger the modal with a button -->
      <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>
      <br><br>
      <p>Not yet a member? Sign up now!</p>
      <button type="button" class="btn btn-default btn-lg" id="the-fadeIn">Sign up now!</button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style="padding:35px 50px;">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
          </div>
          <div class="modal-body" style="padding:40px 50px;">
            <form action="" method="post" role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                <input type="text" class="form-control" id="name" placeholder="Enter email" name="username">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" >
              </div>
              <button type="submit" class="btn btn-success btn-block" value="Login" name="submit"><span class="glyphicon glyphicon-off"></span> Login</button>
              <span><?php echo $error; ?></span>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <br><br>
          </div>
        </div>
      </div>
    </div> 
  </div>


  <div class="use-fadeIn">
    <div class="container">
      <div class="text-center front-box well opac">
        <form action="signup.php" method="post">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email-su">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd-su">
          </div>
          <div class="checkbox">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>   
      </div>    
    </div>
  </div>
  <script src="public/js/index.js"></script>
</body>
</html>