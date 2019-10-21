
<?php
require_once './Function.php';
if (isset($_GET['productid'])) {
$sql="DELETE from product where ProductID='$_GET[productid]'";
$deleteproduct= delete($sql);


if ($deleteproduct) {
  echo '<script>alert("Delete failed!")</script>';
  header("location: Delete.php");
}
else {
  echo '<script>alert("Delete success!")</script>';
  header("location: Delete.php");
}

}
 ?>
