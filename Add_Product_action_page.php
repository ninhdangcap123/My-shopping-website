<?php

require_once 'Function.php';


  $ProductNameA=$_GET['ProductName'];
  $ProductPriceA=$_GET['ProductPrice'];
  $ProductDescriptionA=$_GET['ProductDescription'];
  $ProductQuantityA=$_GET['ProductQuantity'];
  $ProductImgA=$_GET['ProductImg'];

  $sql="INSERT INTO  product(productname,productprice,productdescription,catid,partnerid,productquantity,productimg) VALUES
   ('$ProductNameA','$ProductPriceA','$ProductDescriptionA',10000,1000,'$ProductQuantityA','$ProductImgA')";
   $insertproduct = insert($sql);


   if ($insertproduct) {
     echo '<script>alert("Add success")</script>';
     header("location: Add.php");
   }
   else {
     echo '<script>alert("Add failed")</script>';
     header("location: Add.php");
   }
header("location: Add.php");



 ?>
