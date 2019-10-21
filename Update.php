<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./Update.css">
    <title>Update Products</title>
  </head>
  <body>
<?php
require_once './Function.php';

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
$sql="select* from product";
$result=query1($sql);
while ($row as $result)
 {
  echo "<tr><form action=Update_Product_action_page.php method=post>";
  echo "<td><input type=text name=ProductName class=data value='".$row['productname']."'</td>";
  echo "<td><input type=text name=ProductPrice class=data value='".$row['productprice']."'</td>";
  echo "<td><input type=text name=ProductDescription class=data value='".$row['productdescription']."'</td>";
  echo "<td><input type=text name=ProductQuantity class=data value='".$row['productquantity']."'</td>";
  echo "<input type=hidden name=ProductID value='".$row['productid']."'";
    echo "<td></td>";  echo "<td></td>";  echo "<td></td>";

  echo "<td><input type=submit class=button value=Edit></td>";
  echo "</form></tr>";
}
 ?>

</table>
<button type="button" name="button" style="max-width:100%;"><a href="./Mainshoppingsite.php" style=" text-decoration:none;color:white;"> Cancel</a></button>






  </body>
</html>
