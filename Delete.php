<? php
echo '<!DOCTYPE html>';
echo '<html lang="en" dir="ltr">';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<link rel="stylesheet" href="../My website/Update.css">';
echo '<title>Delete Products</title>';
echo '</head>';
echo '<body>';
echo '<?php';
echo '$servername = "localhost";';
echo '$username = "root";';
echo '$password = "";';
echo '$dbname = "my website";';
echo '$port="3306";';
echo '';
echo '';
echo '// Create connection';
echo '$conn = new mysqli($servername, $username, $password, $dbname,$port);';
echo '// Check connection';
echo 'if ($conn->connect_error) {';
echo 'die("Connection failed: " . $conn->connect_error);';
echo '}';
echo '';
echo '$sql="select *from product";';
echo '$result=mysqli_query($conn,$sql);';
echo '';
echo '';
echo '?>';
echo '';
echo '<h1>Delete Product</h1>';
echo '';
echo '';
echo '<table>';
echo '<tr>';
echo '<th>ProductName</th>';
echo '<th>ProductPrice</th>';
echo '<th>ProductDescription</th>';
echo '<th>ProductQuantity</th>';
echo '</tr>';
echo '<?php';
echo 'while ($row=mysqli_fetch_array($result))';
echo '{';
echo 'echo "<tr><form action=Delete_Product_action_page.php method=get>";';
echo 'echo "<td><input type=text name=ProductName class=data value='".$row['ProductName']."'</td>";';
echo 'echo "<td><input type=text name=ProductPrice class=data value='".$row['ProductPrice']."'</td>";';
echo 'echo "<td><input type=text name=ProductDescription class=data value='".$row['ProductDescription']."'</td>";';
echo 'echo "<td><input type=text name=ProductQuantity class=data value='".$row['ProductQuantity']."'</td>";';
echo 'echo "<input type=hidden name=ProductID value='".$row['ProductID']."'";';
echo 'echo "<td></td>";  echo "<td></td>";  echo "<td></td>";';
echo '';
echo 'echo "<td><input type=submit class=button value=Delete></td>";';
echo 'echo "</form></tr>";';
echo '}';
echo '?>';
echo '';
echo '</table>';
echo '<button type="button" name="button" style="max-width:100%;"><a href="../My website/Mainshoppingsite.php" style=" text-decoration:none;color:white;"> Cancel</a></button>';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '</body>';
echo '</html>';
echo '';
?>
