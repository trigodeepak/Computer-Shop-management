<?php
session_start();
// if (!isset($_SESSION['checkemail']) || !isset($_SESSION['checkpass']) )
// {
//   header('Location: index.php');
// }
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registration form</title>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
<body id="Body" >
    <img src="images/p5.jpg" id="bg" >
    <div id="col-md-12 col-md-offset-0">
    <ul class="nav nav-tabs" id="color">
      <li role="presentation" ><a href="sold.php" id="lic1" >Home</a></li>
      <li role="presentation" class="active"  ><a href="register.php" id="lic2" >New account</a></li>
      <li role="presentation" ><a href="product.php" id="lic3">Add product</a></li>

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
</div>

    <div class="col-md-4 col-md-offset-0" >


      <h1 class="headline">Create New Account</h1>
      <form class="form-horizontal" id="formid" method="post" action="newdbconnect.php" enctype="multipart/form-data">
      <input type="hidden" value="register" name="type" />
      <div class="form-group" >
        <label for="inputText3" class="col-sm-4 control-label" id="F1" required >First Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" id="inputText3"  name="fname" placeholder="First name" required>
        </div>
        </div>
        <div class="form-group" >
          <label for="inputText3" class="col-sm-4 control-label" id="L1" required >Last Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputText3" name="lname" placeholder="Last name" required>
          </div>
          </div>

          <div class="form-group" >
            <label for="inputEmail3" class="col-sm-4 control-label" id="E1"required >Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputText3" name="email" placeholder="Email" required>
            </div>
            </div>

            <div class="form-group" >
              <label for="inputPassword1" class="col-sm-4 control-label" id="P1" required>Password</label>
              <div class="col-md-8" >
                <input type="password" class="form-control" id="inputPassword3" name="pass"  placeholder="Password" required >
              </div>
            </div>
            <div class="form-group" >
              <label for="inputText3" class="col-sm-4 control-label" id="F1" required >Phone no</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="inputText3"  name="PN" placeholder="Phone number" required>
              </div>
              </div>
              <div class="form-group" >
                <label for="inputText3" class="col-sm-4 control-label" id="F1" required >Address</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="inputText3"  name="Add" placeholder="Address" required>
                </div>
                </div>

                  <div class="col-md-12 col-md-offset-1">
                    <p style="font-size:150%; ">
                      Select image to upload:
                    </p>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                  </div>


          <button type="submit" class="btn btn-default" id="button">SUBMIT</button>
  </form>
</div>
<br><br><br><br>
  </body>
</html>
