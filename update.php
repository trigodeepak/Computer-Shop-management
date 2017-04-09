<?php
session_start();
include 'mydbconnect.php';

if (isset($_POST['add']))
{
  $call=openDatabase();

  $PID=$_POST['ID'];
  $PBP=$_POST['quant'];
  $PSP=$_POST['Buy'];

  $PR=$_POST['sell'];

  if(!empty($PBP))
  {
    $q2="update products set quantity=quantity+'$PBP'  where id='$PID' ";
  }
if (!empty($PSP))
  {
    $q2="update products set costprice='$PSP' where id='$PID' ";
  }
 if(!empty($PR))
  {
    $q2="update products set price='$PR' where id='$PID' ";
  }

if ( (!empty($PSP)) && (!empty($PBP)) )
 {
   $q2="update products set costprice='$PSP', quantity=quantity+'$PBP'  where id='$PID' ";
 }
if ( (!empty($PR)) && (!empty($PBP)) )
 {
   $q2="update products set  price='$PR', quantity=quantity+'$PBP'  where id='$PID' ";
 }
if ( (!empty($PSP)) && (!empty($PR)) )
 {
   $q2="update products set  costprice='$PSP', price='$PR' where id='$PID' ";
 }

if( (!empty($PR)) && (!empty($PBP)) && (!empty($PSP)) )
{
   $q2="update products set  costprice='$PSP', quantity=quantity+'$PBP', price='$PR'  where id='$PID' ";

 }
    $result=useDatabase($q2);
    if(!$result)
    {
      echo "<script>
      alert('Error is in running query. ');
      window.location.href='product.php';
      </script>" ;
    }
}
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Add product page </title>
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css" >
 </head>
 <body>
     <img src="images/p4.jpg" id="bg" >
       <div id="col-md-12 col-md-offset-0">
     <ul class="nav nav-tabs" id="color1">
       <li role="presentation" ><a href="sold.php" id="lic1">Home</a></li>
       <li role="presentation"><a href="register.php" id="lic2">New account</a></li>
       <li role="presentation" class="active"><a href="product.php" id="lic3" >Add product</a></li>

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
 <div "col-md-4 col-md-offset-0">
<h1 class="ph1"> &#9997 Update any of following things</h1>
<form  id="Fm1" method="post">
  <div class="row">
    <div class="span" >
      <label for="inputText3" class="col-sm-1 control-label" id="F3" required >ProductID</label>
      <div class="col-sm-2">
        <input type="text" class="form-control" id="inputText3" name="ID"placeholder="Product ID" required>
      </div>
      </div>
      <div class="span" >
        <label for="inputText3" class="col-sm-1 control-label" id="E1"required >Quantity</label>
        <div class="col-sm-2">
          <input type="number" class="form-control" id="inputText3" name="quant" placeholder="Quantity" >
        </div>
    </div>

</div>
<br>
<br>
    <div class="row">

      <div class="span" >
        <label for="inputText3" class="col-sm-1 control-label" id="P1" required>Buying Price</label>
        <div class="col-md-2" >
          <input type="number" class="form-control" id="input Text3" name="Buy" placeholder="Buying Price" >
        </div>
      </div>

    <div class="span" >
        <label for="inputText3" class="col-md-1 control-label" id="P1" required>Selling price</label>
        <div class="col-md-2" >
          <input type="number" class="form-control" id="input Text3" name="sell" placeholder="Selling Price" >
        </div>
      </div>

  </div>
    <br>

    </div>
    <br><br>
  <div class="row">
    <div class="col-sm-1">
    </div>

  <div class="col-sm-3 control-label" >
    <button type="submit" class="btn btn-primary" name="add" >Add</button>
  </div>
  <div class="col-sm-3 control-label" >
    <a href="home.php" class="btn btn-danger">Cancel</a></button>
  </div>
  </div>
    </form>
  </div>
</body>
</html>
