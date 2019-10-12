<?php

require_once 'Function.php';

$Usernamez=$_GET['Username1'];
$Passwordz=$_GET['Password1'];
$Passwordrepeatz=$_GET['Password-repeat1'];

$sql="INSERT INTO  account(Username,Password) VALUES ('$Usernamez','$Passwordz')";
insert($sql);

header("location: Login.php");



 ?>
