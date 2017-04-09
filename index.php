<?php
session_start();
if(!$_SESSION=="")
{
  header('Location:sold.php');
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <title>Login page </title>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" >
    <script src="js/myscript.js"></script>
    <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
  </head>
  <body >

  <img src="images/bg.jpg" id="bg" alt="">

  <div id="mn">
    <h1 align= "center">Welcome to the Computer shop</h1>
  </div>

<div class="col-md-4 col-md-offset-4" id="control-group">

  <form class="form-horizontal" method="post" action="newdbconnect.php">
    <input type="hidden" value="login" name="type" />
    <div class="form-group" >
      <label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
      <div class="col-sm-9">
        <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
      </div>
    </div>
  <div class="form-group" >
    <label for="inputPassword1" class="col-sm-2 control-label" required>Password</label>
    <div class="col-md-9" >
      <input type="password" class="form-control" name="psw" id="inputPassword3" placeholder="Password" required >
    </div>
  </div>
  <div class="form-group" >
    <div class="col-sm-offset-2 col-sm-10">
    <div class="checkbox">
      <label>
          <input type="checkbox" name="checkme" > Remember me
      </label>
    </div>
    </div>
  </div>
  <div class="form-group" >


    <div class="col-sm-offset-2 col-sm-10" >
      <button type="submit" class="btn btn-default" id="btn1">Log in</button>
    </div>
  </div>
</form>
</div>
  </body>
</html>
