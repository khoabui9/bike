<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="../public/css/style.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../public/css/bike_detail.css"  media="screen,projection"/>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="../public/js/js.cookie.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<body>
    <div class="row">
       <?php include '/templates/sidebar.php';?>
       <div class="col-sm-10 scroll">
            <div class="row">
                <?php include '/bike/show.php';?>
            </div>    
       </div>
    </div>
<script type="text/javascript" src="../public/js/app.js"></script>
<script type="text/javascript" src="../public/js/book.js"></script>
</body>
</html>