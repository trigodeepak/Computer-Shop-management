
<!--
To generate the bill -->
<?php
session_start();
// //starting the session
// if($_SESSION==""){

//   header("location:index.php");
//   //if the session is not started properly redirects to login page.
// }
include"mydbconnect.php";
$con=openDatabase();
$idpro=$_SESSION["idpro"];
$quantity=$_POST["quantity"];
$name=$_POST["name"];
$phno= $_POST["phno"];
$total=0;
$cost=0;
$pr="";
?>
<!DOCTYPE html>
<html> <head>
  <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="css/style.css" media="screen" title="no title">
  <title>Generate bill</title>
</head>
<script src="js/myscript.js"></script>
<body >
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
  <h1>List of items purchased </h1>
  <table align='center' class="table">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Price </th>
      <th>Quantity Bought </th>
    </tr>
    <?php
    $i=count($idpro);
    $j=0;
    for(;$j<$i;$j++){
    $qry = "select * from products where id=$idpro[$j]";
   //opening database and executing query to retrive some data
   $a = useDatabase($qry);
    while($row = mysqli_fetch_array($a)){
      print "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>Rs. ".$row[2]."/-</td> ";
      $qry1 = "UPDATE products SET quantity=$row[4]-$quantity[$j] WHERE ID = $idpro[$j];";
      if ($quantity[$j] > $row[4]) {print "<td>This item is out of stock</td></tr>"; $row[2]=0;}
      else{ print "<td>".$quantity[$j]."</td></tr>";}
     $total+=$quantity[$j]*$row[2];
     $cost+=$quantity[$j]*$row[5];
   }
     if($total==0){
        echo "<h5>Sorry Total amount is zero</h5>";
        echo '<h5><a href="sold.php">Cotinue Shopping...</a></h5>';
        die();    }

      $b = useDatabase($qry1);}
      // to inset details of customers into the database
      date_default_timezone_set("Asia/Kolkata");
      $dat=date("Y-m-d");
      $tim=date("h:i");
      $pr=$total-$cost;
      $qry1= "INSERT INTO customers (name, phno,price,date,time,profit) VALUES ('$name','$phno',$total,'$dat','$tim','$pr');";
      $b = useDatabase($qry1);
      // to fetch id i.e.bill no
      $qry1 = "select id from customers where date='$dat' && time='$tim'";
      $b = useDatabase($qry1);
      $c=mysqli_fetch_array($b);
      $billno=$c[0];
    ?>
</table>
<div class='row'><div class='col-md-4'><h3>Total amount</h3></div><div class='col-md-4'><?php print "<h3>Rs. ".$total."/-</h3>" ?></div></div>

    <!-- to create customer details form -->
    <div class="col-md-offset-3">
    <h2>Customer details</h2>
    <div class='row'><div class='col-md-4'><h5>Bill no.</h5></div><div class='col-md-4'><?php print "<h5>".$billno."</h5>" ?></div></div>
    <div class='row'><div class='col-md-4'><h5>Name</h5></div><div class='col-md-4'><?php print "<h5>".$name."</h5>" ?></div></div>
    <div class='row'><div class='col-md-4'><h5>Phone Number</h5></div><div class='col-md-4'><?php print "<h5>".$phno."</h5>" ?></div></div>
    <div class='row'><div class='col-md-4'><h5>Date</h5></div><div class='col-md-4'><?php print "<h5>".$dat."</h5>" ?></div></div>
    <div class='row'><div class='col-md-4'><h5>Time</h5></div><div class='col-md-4'><?php print "<h5>".$tim."</h5>" ?></div></div>
    </div>

    <!-- table showing the details of customer and current date and time -->
  <div class="col-md-offset-2">
  <button onclick="myFunction()" class="btn btn-primary col-md-4">Print order</button></div>
  <a href="sold.php">  <button type="button" class="btn btn-default col-md-3 col-md-offset-1">Continue shopping</button></a>

  <div class='row'><div class='col-md-12 col-md-offset-3'><?php print "<h2>Thanks for shopping ".$name." !!!</h3>" ?></div></div>
      <?php closeDatabase();
      ?>
      </div>
      </div>
 <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
