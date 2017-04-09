<!--
  logout page for the form
-->
<?php
session_start(); //session is a way to store information (in variables) to be used across multiple pages.
unset($_SESSION['checkemail']);
unset($_SESSION['checkpass']);
session_destroy();
header('Location: index.php'); //use for the redirection to some page
exit(0);
 ?>
