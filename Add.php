<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../My website/Add.css">
    <title>Add Products</title>
  </head>
  <body>
    <form action="Add_Product_action_page.php" method="get" style="border:1px solid #ccc">
  <div class="container">
    <h1>Add new product</h1>



    <label for="ProductName"><b>Product Name</b></label>
    <input type="text" placeholder="stan smith" name="ProductName" required>

    <label for="ProductPrice"><b>Product Price</b></label>
    <input type="number" placeholder="121231245512" name="ProductPrice" required>

    <label for="ProductDescription"><b>Product Description</b></label>
    <input type="text" placeholder="this is a good thing" name="ProductDescription" required>

    <label for="ProductQuantity"><b>Product Quantity</b></label>
     <input type="text" placeholder="21314" name="ProductQuantity" required>

    <label for="ProductImg"><b>Product Image</b></label>
    <input type="text" placeholder="img/imagename.jpg" name="ProductImg" required>




    <div class="clearfix">
      <button type="submit" class="Addbtn">Add</button>

      <button type="button" class="cancelbtn"><a href="../My website/Mainshoppingsite.php"> Cancel </a></button>
    </div>
  </div>
</form>
  </body>
</html>
