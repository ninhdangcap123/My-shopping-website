
<?php
require_once './Function.php';

$sql="DELETE from product where ProductID=$ProductID";
$deleteproduct= delete($sql);


if ($deleteproduct) {
  echo '<script>alert("Delete failed!")</script>';
  header("location: Delete.php");
}
else {
  echo '<script>alert("Delete success!")</script>';
  header("location: Delete.php");
}


 ?>
