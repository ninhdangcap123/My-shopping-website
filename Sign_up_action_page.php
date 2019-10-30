<?php

require_once 'Function.php';

$Usernamez=$_GET['Username1'];
$Passwordz=$_GET['Password1'];
$Passwordrepeatz=$_GET['Password-repeat1'];

$sql="INSERT INTO  account(Username,Password) VALUES ('$Usernamez','$Passwordz')";
$insertusers = insert1($sql);

if ($insertusers==5) {
  echo '<script>alert("Add success")</script>';
  header("refresh:1; url=Login.php");
}
else {
  echo '<script>alert("Add failed")</script>';
  header("refresh:1; url=Login.php");
}




 ?>
