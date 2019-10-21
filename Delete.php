<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Update.css">
    <title>Delete Products</title>
  </head>
  <body>
<?php
require_once './Function.php';
 ?>

 <h1>Delete Product</h1>


<table>
  <tr>
    <th>ProductName</th>
    <th>ProductPrice</th>
    <th>ProductDescription</th>
    <th>ProductQuantity</th>
  </tr>
<?php
$sql = "select * from product";
$result = query1($sql);
while ($result as $row)
 {
  echo "<tr><form action=Delete_Product_action_page.php method=get>";
  echo "<td><input type=text name=ProductName class=data value='".$row['productname']."'</td>";
  echo "<td><input type=text name=ProductPrice class=data value='".$row['productprice']."'</td>";
  echo "<td><input type=text name=ProductDescription class=data value='".$row['productdescription']."'</td>";
  echo "<td><input type=text name=ProductQuantity class=data value='".$row['productquantity']."'</td>";
  echo "<input type=hidden name=ProductID value='".$row['productid']."'";
    echo "<td></td>";  echo "<td></td>";  echo "<td></td>";

  echo "<td><input type=submit class=button value=Delete></td>";
  echo "</form></tr>";
}
 ?>

</table>
<button type="button" name="button" style="max-width:100%;"><a href="./Mainshoppingsite.php" style=" text-decoration:none;color:white;"> Cancel</a></button>









  </body>
</html>
