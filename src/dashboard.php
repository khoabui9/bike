<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="../public/bootstrap/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link type="text/css" rel="stylesheet" href="../public/css/style.css"  media="screen,projection"/>
        <script type="text/javascript" src="../public/js/js.cookie.js"></script>

</head>
<body>
    <div class="row">
       <?php include '/templates/sidebar.php';?>
       <div class="col-sm-10 scroll">
                <div class="row">
                    <h3 style="color: black;">Filter:</h3>
                    <form>
                        <select class="model custom-select">
                          <option value="undefined" selected>Model</option>
                          <option value="city">City</option>
                          <option value="racing">Racing</option>
                          <option value="fix gear">Fixed gear</option>
                          <option value="road">Road</option>
                          <option value="track">Track</option>
                        </select>
                        <select class="size custom-select">
                          <option value="undefined" selected>Size</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                         <select value="undefined" class="location custom-select">
                          <option value="undefined" selected>Location</option>
                          <option value="niemi">Niemi</option>
                          <option value="fellmania">fellmania</option>
                          <option value="sta10">sta10</option>
                        </select>
                        <button type="submit" class="apply btn btn-warning">Apply</button>
                    </form>
                        </div>
                <div class="row  card-container">
                   <?php include '/dashboard/show.php';?>
                </div>
            </div>
        </div>
    </div>
   
<script type="text/javascript" src="../public/js/app.js"></script>
</body>
</html>