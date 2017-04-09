<?php
session_start();

include "mydbconnect.php";
$con=openDatabase();

if($_POST['type']=='login')
{
  $a=md5($_POST["psw"]);

  $e=$_POST['email'];

  $sql="SELECT * FROM users WHERE email='$e'";
  $result = useDatabase($sql);
  $row = $result->fetch_assoc();
  // echo "<script>$row[4]</script>";
  if($row['password']==$a) //search given mail and already stored email
  {
      $_SESSION['e']=$e;
      $_SESSION['username']=$row['f_name']; // if both are same go on products table
      $_SESSION['idpro']=[];
      header('Location: home.php');
      exit(0);
  }
  else
  {
    echo "<script>
    alert('Enter mail or password does not match. Try again');
    window.location.href='index.php';
    </script>" ;
  }
}
if($_POST['type']=='register')
{
  $f = $_POST['fname'];
   $l = $_POST['lname'];
   $e = $_POST['email'];
$_SESSION['e']=$e;
   $p = md5($_POST['pass']);
   $pn=$_POST['PN'];
   $ad=$_POST['Add'];
   $try="select f_name from users WHERE email='$e'";
   $row=useDatabase($try);
   if($row->num_rows>0)
   {
     echo "<script>
     alert('Enter mail is already exist');
     window.location.href='register.php';
     </script>";
   }
   else
{

    $sql = "INSERT INTO users (f_name, l_name,email,password,phone_number,Address)
   VALUES ('$f', '$l', '$e', '$p','$pn','$ad')";
   $result = useDatabase($sql);

   $q="select id from users where email='$e'";
   $row=useDatabase($q);
   $ROW=$row->fetch_assoc();
   $try=$ROW['id'];
   mkdir("ProfileImage/".$try);
   move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "ProfileImage/".$try."/1.jpg ");
   if(!$result) //if above any query will get failed, it will give error
   {
     echo "<script>
     alert('There was an error running the query');
     window.location.href='register.php';
     </script>";
   }
   header('Location:home.php');

}
}

?>
