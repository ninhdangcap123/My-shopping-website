<?php

require_once 'Function.php';


  $ProductNameA=$_GET['ProductName'];
  $ProductPriceA=$_GET['ProductPrice'];
  $ProductDescriptionA=$_GET['ProductDescription'];
  $ProductQuantityA=$_GET['ProductQuantity'];
  $ProductImgA=$_GET['ProductImg'];

  $sql="INSERT INTO  product(ProductName,ProductPrice,ProductDescription,CategoryID,PartnerID,ProductQuantity,ProductImg) VALUES
   ('$ProductNameA','$ProductPriceA','$ProductDescriptionA',10000,1000,'$ProductQuantityA','$ProductImgA')";
   insert($sql);
header("location: Add.php");



 ?>
