
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
