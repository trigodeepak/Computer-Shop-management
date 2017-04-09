
<?php
session_start();

// //starting the session
// if($_SESSION['useremail']==""){
//   print_r($_SESSION);
//   header("location:login.php");
//   //if the session is not started properly redirects to login page.
// }
include"mydbconnect.php";
$con=openDatabase();
?>
<!DOCTYPE html>
<html> <head>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <title>Checkout item</title>
</head>
<script src="js/myscript.js"></script>
<body id="body-color">

<div id="col-md-12 col-md-offset-0">
<div class="color1">
<ul class="nav nav-tabs" >

  <li role="presentation" class="active" ><a href="sold.php" id="lic1" >Home</a></li>

  <li role="presentation"   ><a href="register.php" id="lic2" >New account</a></li>
  <li role="presentation" ><a href="product.php" id="lic3">Add product</a></li>

        <div class="btn-group " style="float:right;" >
      <button type="button" class="btn-link dropdown-toggle"id='dp' data-toggle="dropdown"><?php echo $_SESSION["username"]; ?><span class="caret red"></span></button>
          <ul class="dropdown-menu pull-right" role="menu">
              <li><a href="about.php">Your profile</a></li>
              <li><a href="outofstock.php">Items out of stock <span class="badge"><?php print $_SESSION['count']; ?></span></a></li>
              <li><a href="profits.php">Profit</a></li>
              <li class="divider"></li>
              <li><a href="logout.php">Logout</a></li>
   </ul>
      </div>
    </ul>
    </div>
  </div>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
  <?php

  //fetching data from database

   ?>
  <h1>Items brought </h1>
  <?php
    $idpro=$_SESSION["idpro"];
    $idpro=array_unique($idpro);
    $idpro = array_values($idpro);
    $_SESSION['idpro']=$idpro;
    $i=count($idpro);
    $j=0;
    $total=0;
    $quantity=5;//$_SESSION["quantitiy"]=$_POST["quantity"];
    ?>
    <form action="bill.php" method="post">
<?php
    for(;$j<$i;$j++){
    $qry = "select * from products where id=$idpro[$j]";
   //opening database and executing query to retrive some data
   $a = useDatabase($qry);
   while($row = mysqli_fetch_array($a)){
     ?>
     <div class="col-md-3 product-grids">
                 <div class="agile-products">
                   <div class="new-tag"><?php print "<h6>".$row[4]."</h6>";?></div>
                   <?php print "<img src='images/".$row[0]."/1.jpg' style='height:110px;' class='img-responsive' alt='img'>";?>
                   <div class="agile-product-text">
                     <?php print "<h5><a href='#'>".$row[1]."</a></h5>";?>
                     <?php print "<h6>Rs".$row[2]."/-</h6>";?>

                       <input class="form-control" type="number" min="1" name="quantity[]" placeholder="Quantity" required/>
                   </div>
                 </div>
               </div>
               <?php   }
        }
    ?>
  <div class='row'><div class='col-md-4'></div></div>
<hr>
    <!-- to create customer details form -->
    <h2>Enter Customer details</h2><br>
    <div class="col-md-offset-3">

  <div class='row'><div class='col-md-4'><input type='text' class='form-control' name='name' placeholder='Name'required/></div>
  <div class='col-md-4 col-md-offset-1'><input class='form-control' type='tel' name='phno' placeholder='Phone number' required/></div></div>
  </div>
  <br><hr>
  <div class="col-md-offset-3">
  <button type="submit" class="btn btn-primary col-md-4">Confirm order</button></div>
  <a href="sold.php">  <button type="button" class="btn btn-default col-md-3 col-md-offset-1">Cancel order</button></a>
</form>
</div>
</div>


<footer class="color1" style="color:#FEBD69; margin-top:10%;">
    <h3 style="text-align:center; padding-top:2%; font-family:serif; font-weight:bold;">Made site for computer shop management by AMD</h3>
    <h3 style="text-align:center;">...................................................................................................</h3>
    <hr>
</footer>  </body>
      <?php     closeDatabase();
      ?>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
