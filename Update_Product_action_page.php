<?php
require_once './Function.php';

if (isset($_POST['ProductID'])) {
  $sql="update product set ProductName='$_POST[ProductName]',ProductPrice='$_POST[ProductPrice]',ProductDescription='$_POST[ProductDescription]',ProductQuantity='$_POST[ProductQuantity]' where ProductID='$_POST[ProductID]'";
$updateproduct = query1($sql);

  if ($updateproduct) {
    echo '<script>alert("Update success!")</script>';
    header("refresh:1; url=Update.php");

  }
  else {
    echo "update failed!";
    header("refresh:1; url=Update.php");
  }

}
 ?>
