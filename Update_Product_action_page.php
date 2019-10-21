<?php
function query($sql)
{
  $db = parse_url(getenv("DATABASE_URL"));

    $pdo = new PDO("pgsql:" . sprintf(
        "host=%s;port=%s;user=%s;password=%s;dbname=%s",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
                    )
          );
    $stmt1= $pdo->prepare($sql);
          $stmt1->execute();
          $result =$stmt1->fetchAll();
          return $result;
}
if (isset($_POST['ProductID'])) {
  $sql="update product set ProductName='$_POST[ProductName]',ProductPrice='$_POST[ProductPrice]',ProductDescription='$_POST[ProductDescription]',ProductQuantity='$_POST[ProductQuantity]' where ProductID='$_POST[ProductID]'";
  if (mysqli_query($conn,$sql)) {
    echo '<script>alert("Update success!")</script>';
    header("refresh:1; url=Update.php");

  }
  else {
    echo "update failed!";
    header("refresh:1; url=Update.php");
  }

}
 ?>
