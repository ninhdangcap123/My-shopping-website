
<?php
require_once './Function.php';
if (isset($_GET['ProductID'])) {
  $ProductIDx= $_GET['ProductID'];
$sql="DELETE from product where ProductID=$ProductIDx";



if (delete($sql)) {
  echo '<script>alert("Delete failed!")</script>';
  header("location: Delete.php");
}
else {
  echo '<script>alert("Delete success!")</script>';
  header("location: Delete.php");
}

}
 ?>
