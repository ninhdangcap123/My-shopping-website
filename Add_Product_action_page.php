<?php

require_once 'Function.php';

if (isset($_GET['ProductName'])) {
  $ProductNameA=$_GET['ProductName'];
  $ProductPriceA=$_GET['ProductPrice'];
  $ProductDescriptionA=$_GET['ProductDescription'];
  $ProductQuantityA=$_GET['ProductQuantity'];
  $ProductImgA=$_GET['ProductImg'];

  $sql="INSERT INTO  product(productname,productprice,productdescription,categoryid,partnerid,productquantity,productimg) VALUES
   ('$ProductNameA','$ProductPriceA','$ProductDescriptionA',10000,1000,'$ProductQuantityA','$ProductImgA')";
   $insertproduct = insert($sql);


   if ($insertproduct==5) {
     echo '<script>alert("Add failed!")</script>';
     header("refresh:1; url=Add.php");
   }


   
   else {
     echo '<script>alert("Add success!")</script>';
     header("refresh:1; url=Add.php");
   }

}


 ?>
