<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../My website/Update.css">
    <title>Update Products</title>
  </head>
  <body>
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

$sql="select *from product";
$result=mysqli_query($conn,$sql);


 ?>

 <h1>Update Product</h1>

<table>
  <tr>
    <th>ProductName</th>
    <th>ProductPrice</th>
    <th>ProductDescription</th>
    <th>ProductQuantity</th>
  </tr>
<?php
while ($row=mysqli_fetch_array($result))
 {
  echo "<tr><form action=Update_Product_action_page.php method=post>";
  echo "<td><input type=text name=ProductName class=data value='".$row['ProductName']."'</td>";
  echo "<td><input type=text name=ProductPrice class=data value='".$row['ProductPrice']."'</td>";
  echo "<td><input type=text name=ProductDescription class=data value='".$row['ProductDescription']."'</td>";
  echo "<td><input type=text name=ProductQuantity class=data value='".$row['ProductQuantity']."'</td>";
  echo "<input type=hidden name=ProductID value='".$row['ProductID']."'";
    echo "<td></td>";  echo "<td></td>";  echo "<td></td>";

  echo "<td><input type=submit class=button value=Edit></td>";
  echo "</form></tr>";
}
 ?>

</table>
<button type="button" name="button" style="max-width:100%;"><a href="../My website/Mainshoppingsite.php" style=" text-decoration:none;color:white;"> Cancel</a></button>






  </body>
</html>
