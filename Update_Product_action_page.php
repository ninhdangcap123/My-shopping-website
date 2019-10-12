<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my website";
$port="3306";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname,$port);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
