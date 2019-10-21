
<?php
require_once './Function.php';
if (isset($_GET['ProductID'])) {
$sql="DELETE from product where ProductID=$ProductID";
$deleteproduct= query1($sql);


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
