<?php

require_once 'Function.php';

$fullname=$_GET['fullname'];
$email=$_GET['email'];
$address=$_GET['address'];
$city=$_GET['city'];
$state=$_GET['state'];
$zip=$_GET['zip'];
$nameoncard=$_GET['cardname'];
$cardnumber=$_GET['cardnumber'];
$expmonth=$_GET['expmonth'];
$expyear=$_GET['expyear'];
$cvv=$_GET['cvv'];

$sql="INSERT INTO  customer(CusName,CusEmail,CusAddress,CusCity
  ,CusState,CusZip,CusNameonCard,CusExpmonth,CusCVV,CusExpYear,CusCreditcardNum
)VALUES ('$fullname','$email','$address','$city','$state','$zip','$nameoncard'
  ,'$expmonth','$cvv','$expyear','$cardnumber')";
echo '<script>alert("Thank you for purchasing !")</script>';
  insert($sql);



 ?>
 <meta  http-equiv="refresh"name="" content="3;URL=../My website/Shoppingcart.php" >
