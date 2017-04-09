<!--
  logout page for the form
-->
<?php
  session_start(); //session is a way to store information (in variables) to be used across multiple pages.
  $_SESSION['idpro']=[];
  header('Location: home.php'); //use for the redirection to some page
  exit(0);
?>
