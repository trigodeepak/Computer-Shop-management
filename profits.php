<?php
session_start();
//starting the session
// if($_SESSION==""){
//   header("location:index.php");
  //if the session is not started properly redirects to login page.
// }
include"mydbconnect.php";
$con=openDatabase();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Profit page </title>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/myscript.js"></script>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/stylenew.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <link href="css/menu.css" rel="stylesheet" type="text/css" media="all" /> <!-- menu style -->
  <link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all"> <!-- carousel slider -->
  <link href="css/font-awesome.css" rel="stylesheet">

</head>
<body id="Body">
<div>
  <div class="color1">
    <ul class="nav nav-tabs" >
      <li role="presentation" class="active"><a href="sold.php" id="lic1">Home</a></li>
      <li role="presentation"><a href="register.php" id="lic2">New account</a></li>
      <li role="presentation"><a href="product.php" id="lic3" >Add product</a></li>

      <div class="btn-group " style="float:right;" >
          <button type="button" class="btn-link dropdown-toggle"id='dp' data-toggle="dropdown"><?php echo $_SESSION['username']; ?><span class="caret red"></span></button>
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
    <img src="images/p6.jpg" id="bg" style="margin-top:110px;">
  <br>
    <div class="col-md-8 col-md-offset-2">
  <h1 class="profitH">Profit this Week</h1>
<br>
<div class="col-md-6">
   <table align='center' class="table table-bordered table-hover">
    <tr >
      <th style="padding:15px; font-size:20px;color:darkblue;">Profit this week </th>
      <?php
      $t1="";
      date_default_timezone_set("Asia/Kolkata");
      $mondate = date('Y-m-d',strtotime('last monday', strtotime('tomorrow')));
      $qry = "select profit from customers where date > ".$mondate." ";
      $a = useDatabase($qry);
      while($row = mysqli_fetch_array($a)){
           $t1+=$row[0];}
           print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
           <br>

      </tr>
        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this month </th>
          <?php
          $t1="";
          $mon=date('m');
          $year=date('Y');
          $qry = "select profit from customers where date > ".$year."-".$mon."-00 ";
          $a = useDatabase($qry);
          while($row = mysqli_fetch_array($a)){
               $t1+=$row[0];}
            print "<td style='padding:15px;font-size:1.3em;'>".$t1."</td>";
           ?>
        </tr>

        <tr>
          <th style="padding:15px; font-size:20px;color:darkblue;">Profit this year </th>
        <?php
                  $t1="";
             $qry = "select profit from customers where date > ".$year."-00-00 ";
             $a = useDatabase($qry);
             while($row = mysqli_fetch_array($a)){
                  $t1+=$row[0];}
                  print "<td style='padding:15px; font-size:1.3em;'>".$t1."</td>";
                  $t1="";

                   ?>
        </tr>
  </table>
</div>
</div>
</div>

      <?php closeDatabase(); ?>
      </div>

 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </div>
  </body>
  </html>
