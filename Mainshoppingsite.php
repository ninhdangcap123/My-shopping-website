<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href=".gsite.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Main website</title>
  </head>
  <body>
<!-- The navigation menu -->
<div class="navbar">
   <a href="../My website/Mywebsite.html">Home</a>
   <div class="subnav">
    <button class="subnavbtn">Categories<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="./Mainshoppingsite.php?CategoryID=<?=10000?>">Sneaker</a>
      <a href="./Mainshoppingsite.php?CategoryID=<?=20000?>">Leather</a>
      <a href="./Mainshoppingsite.php?CategoryID=<?=30000?>">Lifestyle</a>
    </div>
   </div>
   <div class="subnav">
    <button class="subnavbtn">Product<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="./Add.php">Add</a>
      <a href="./Update.php">Update</a>
      <a href="./Delete.php">Delete</a>
    </div>
   </div>
   <div class="subnav">
    <button class="subnavbtn">Partners <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="./Mainshoppingsite.php?PartnerID=<?=1000?>">Adidas</a>
      <a href="./Mainshoppingsite.php?PartnerID=<?=1001?>">Calvin Klein</a>
      <a href="./Mainshoppingsite.php?PartnerID=<?=1002?>">LA Gear</a>
      <a href="./Mainshoppingsite.php?PartnerID=<?=1003?>">Crocs</a>
    </div>
   </div>
   <a href="./Shoppingcart.php">Go to cart</a>
   <form class="search" action="./Mainshoppingsite.php" method="GET" >
    <div class="search">
       <input type="text" name="search" placeholder="Search..">
       <button type="submit"><i class="fa fa-search"></i></button>
    </div>
   </form>


</div>





<!showproduct>
<div class="showproduct">
  <div class="row">
  <?php
  require_once './Function.php';
            if (isset($_GET['CategoryID'])) {
            $categoryID=$_GET['CategoryID'];
            $sql="select*from product where CategoryID='$categoryID' ";


            }

           else if (isset($_GET['PartnerID'])) {
                    $partnersID=$_GET['PartnerID'];
                      $sql="select*from product where PartnerID='$partnersID' ";
                   }

        else if (isset($_GET['ProductPrice']))
            {
              $productprice=$_GET['ProductPrice'];
              $sql="select*from product where ProductPrice='$productprice' ";

            }

             else if (isset($_GET['search'])) {
              $search=$_GET['search'];
              $sql="select * from product where ProductName like '%$search%'";

            }
           else {

                       $sql="select*from product";
            }

           $Producttable=query($sql);
           for($i=0;$i<count($Producttable);$i++){
           ?>
           <div class="column">
               <img src="<?=$Producttable[$i][3] ?>" alt="img" style="width:100%">
              <div class="overlay">
                <a href="../My website/Showproduct.php?ProductID=<?=$Producttable[$i][0]?>"><p class="overlay-text"><?=$Producttable[$i][1]?></p></a>


              </div>

           </div>

 <?php
 }
 ?>
</div>
</div>
  </body>
</html>
