<?php
session_start();
  if( !isset($_SESSION["login_user"]) ){
    header("location:../index.php");
    exit();
}
    echo '
                <div class="col-sm-2 navbar-left">
                        <div class="text-center col-sm-12">
                            <img src="../public/img/facebook-avatar.jpg" class="rounded-circle ava mx-auto d-block img-fluid" alt="">
                            <h2 style="font-size: 25px;">'. $_SESSION['login_user'] .'</h2>
                        </div>
                        <hr>
                        <div class="menu col-sm-12">
                            <ul>
                              <li><a class="" href="dashboard.php">Book a bike</a></li>
                              <li><a href="./my_booking.php">My Booking</a></li>
                              <li><a href="./account.php">Account</a></li>
                            </ul>
                        </div>
                         <div class="bottom col-sm-12">
                            <ul>
                              <li><a href="../logout.php">Log out</a></li>
                            </ul>
                        </div>
                </div>';
?>

