
<?php
require_once 'Function.php';


$ProductID=$_GET['ProductID'];

$sql="DELETE from product where ProductID=$ProductID";
delete($sql);


if (delete($sql)) {
  echo '<script>alert("Delete failed!")</script>';
  header("location: Delete.php");
}
else {
  echo '<script>alert("Delete success!")</script>';
  header("location: Delete.php");
}


 ?>
