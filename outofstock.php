<?php
 session_start();
include"mydbconnect.php";
$con=openDatabase();
$i=1;
//opening database and executing query to retrive some data
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>out of stock</title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/myscript.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
</head>
<body>

  <div class="color1">
    <ul class="nav nav-tabs" >
      <li role="presentation" class="active"><a href="sold.php" id="lic1">Home</a></li>
      <li role="presentation"><a href="register.php" id="lic2">New account</a></li>
      <li role="presentation"><a href="product.php" id="lic3" >Add product</a></li>
      <div class="btn-group " style="float:right;" >
          <button type="button" class="btn-link dropdown-toggle"id='dp' data-toggle="dropdown"><?php echo $_SESSION['username']; ?><span class="caret red"></span></button>
          <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="#">Your profile</a></li>
              <li><a href="outofstock.php">Items out of stock <span class="badge"><?php print $_SESSION['count']; ?></span></a></li>
              <li><a href="profits.php">Profit</a></li>

              <li class="divider"></li>
              <li><a href="logout.php">Logout</a></li>
          </ul>
      </div>

    </ul>

    <form method="post" >
      <div class="form-group has-success has-feedback" >
        <div class="col-sm-1"></div>
        <label class="control-label col-sm-1" for="inputGroupSuccess2" id="searchbar">SEARCH</label>
        <div class="col-sm-8">
          <div class="input-group">
            <span class="input-group-addon"/>Search</span>
            <input class="form-control" type="text" name="disp"/>
            <div class="input-group-addon">
              <button  class="btn-link"type="submit" name="search" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="container">
    <div class="col-md-10 col-md-offset-1">
      <h1>Out of Stock products</h1>
    <?php  $qry = "select * from products";
      $a = useDatabase($qry);



    //fetching data from database
    while($row = mysqli_fetch_array($a)){
      if($row[4]==0)
      {?>
      <div class="col-md-3 product-grids">
                  <div class="agile-products">
                    <div class="new-tag"><?php print "<h6>Nil</h6>";?></div>
                    <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                    <div class="agile-product-text">
                      <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                      <?php print "<h6>Rs".$row[2]."/-</h6>";?>
                      </div>
                  </div>
                </div>
                <?php
              }

            }
   closeDatabase();
    ?>

</div>
</div>
<footer class="color1" style="color:#FEBD69; margin-top:10%;">
    <h3 style="text-align:center; padding-top:2%; font-family:serif; font-weight:bold;">Made site for computer shop management by AMD</h3>
    <h3 style="text-align:center;">...................................................................................................</h3>
    <hr>
</footer>

  </body>
  </html>
