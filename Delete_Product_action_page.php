
<?php

require_once './Function.php';
if (isset($_POST['ProductID'])) {
  $ProductIDx= $_POST['ProductID'];
$sql="DELETE from product where ProductID=$ProductIDx";
$resultx=delete($sql);


if ($resultx==5) {
  echo '<script>alert("Delete failed!")</script>';
  header("location: Delete.php");
}

else {
  echo '<script>alert("Delete success!")</script>';
  header("location: Delete.php");
}

}
 ?>
