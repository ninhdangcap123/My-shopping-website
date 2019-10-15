
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
 $producttable=query($sql);

 ?>
 <body>


 <div class="showproduct">
   <div class="productimg">
     <img src="<?=$producttable[0][3]?>" alt="Product Img">
   </div>

   <div class="productdescription">
     <p class="productname"><?=$producttable[0][1]?></p>
     <p class="productprice"><?="Price:$".$producttable[0][2]?></p>
     <p>Description :</p>
     <p class="productdesc"><?=$producttable[0][5]?></p>

   </div>

  <a href="./Shoppingcart.php"> <button type="button" name="button">Go to cart</button></a>

 </body>


 </div>
