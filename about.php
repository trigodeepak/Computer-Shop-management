<?php
session_start();
include "mydbconnect.php";
$con=openDatabase();
$e= $_SESSION['e'];
$query="select * from users where email='$e'";
$row=useDatabase($query);
$result=$row->fetch_array();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>About</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" >
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" >

  </head>
  <body>
    <img src="ProfileImage/pro.jpg" style="opacity:0.7;" id="bg"/>

    <div class="col-md-8" style="margin-top:2%;">

      <div class="col-md-5" >
      <?php
        echo "<span class='abouta' >".$result['f_name']." ".$result['l_name']."</span>" ;
        echo "<br><br><img class='img-circle' height=250 width=200 src=ProfileImage/".$result['id']."/1.jpg />";
      ?>
      <br>
      <br>
      <span style="color:darkslategrey; font-size:33px; font-weight:bold;">&#10149 !!!!Goto Shop!!!!</span>
      <br>
      <a href="home.php" style="font-size:25px; font-weight:bold; text-decoration:none;  margin-left:4%; color:black;">  &#10162 Home page</a>
      <br>
      <a href="profits.php" style="font-size:25px; font-weight:bold; text-decoration:none;  margin-left:4%; color:black;">  &#10162 Profit page</a>
      <br>
      <a href="logout.php "style="font-size:25px; font-weight:bold; text-decoration:none; margin-left:4%; color:black;"> &#10162 Logout</a>
  </div>
    <div class="col-md-6 ">
      <br>
      <h3 style="color:#714A1B;">!!!!!! Welcome sir, member of COM computer shop. !!!!</h3>
      <br>
      <span class="Newabout" >Email</span>

          <div class="input-group">
              <span class="input-group-addon" style="border-radius:0; font-size:20px;"/>&#9993</span>
              <span class="input-group-addon" style="border-radius:0; background-color:lightgray;font-family:serif; font-size:22px;"/><?php echo $result['email']; ?></span>
          </div>
          <br>
          <span class="Newabout" >Phone Number</span>

              <div class="input-group">
                  <span class="input-group-addon " style="border-radius:0; font-size:20px; margin-right:2%;"/>&#9990</span>
                  <span class="input-group-addon" style="border-radius:0; background-color:lightgray;font-family:serif; font-size:22px;"/><?php echo $result['phone_number']; ?></span>
                  <span class="input-group-addon " style="border-radius:0; background-color:lightgray"/></span>
                  <span class="input-group-addon " style="border-radius:0;background-color:lightgray;"/></span>
                  <span class="input-group-addon " style="border-radius:0;background-color:lightgray;"/></span>
              </div>
              <br>
              <span class="Newabout" >Address</span>

                  <div class="input-group">
                      <span class="input-group-addon" style="border-radius:0; font-size:20px;"/>&#10162</span>
                      <span class="input-group-addon" style="border-radius:0; background-color:lightgray;font-family:serif; font-size:22px;"/><?php echo $result['Address']; ?></span>
                  </div>
      </div>
  </div>
  </body>
</html>
