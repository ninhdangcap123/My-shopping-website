
<?php

require_once './Function.php';
if (isset($_GET['ProductID'])) {
  $ProductIDx= $_GET['ProductID'];
$sqlk="DELETE FROM product WHERE ProductID = $ProductIDx";
$resultx=delete($sqlk);


if ($resultx==5) {
  echo '<script>alert("Delete failed!")</script>';
  header("refresh:1; url=Delete.php");
}

else {
  echo '<script>alert("Delete success!")</script>';
  header("refresh:1; url=Delete.php");
}

}
 ?>
