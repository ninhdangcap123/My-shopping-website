
<link rel="stylesheet" href="./showproduct.css">
<title>Show product</title>
<div class="topnav">
<a class="active" href="./index.html">Home</a>
<a href="./Shoppingcart.php">Go to cart</a>
<a href="./Mainshoppingsite.php">Main site</a>


</div>

<?php


 require_once './Function.php';
  $productID=$_GET['ProductID'];
 $sql="select * from product where ProductID=$productID";
 $producttable=query1($sql);

 ?>
 <body>
<?php $producttable as $row; ?>

 <div class="showproduct">
   <div class="productimg">
     <img src="./<?php echo $row["productimg"]; ?>" alt="Product Img">
   </div>

   <div class="productdescription">
     <p class="productname"><?php echo $row["productname"]; ?></p>
     <p class="productprice"><?php echo "Price:$".$row["productprice"];?></p>
     <p>Description :</p>
     <p class="productdesc"><?php echo $row["productdescription"]; ?></p>

   </div>

  <a href="./Shoppingcart.php"> <button type="button" name="button">Go to cart</button></a>

 </body>


 </div>
