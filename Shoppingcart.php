<?php
session_start();
$dbname="my website";
$conn2=mysqli_connect("localhost","root","",$dbname);
if (isset($_POST["add"])){
        if (isset($_SESSION["Shoppingcart"])){
            $item_array_id = array_column($_SESSION["Shoppingcart"],"ProductID");
            if (!in_array($_GET["ProductID"],$item_array_id)){
                $count = count($_SESSION["Shoppingcart"]);
                $item_array = array(
                    'ProductID' => $_GET["ProductID"],
                    'ProductName' => $_POST["productname"],
                    'ProductPrice' => $_POST["productprice"],
                    'ProductQuantity' => $_POST["productquantity"],
                );
                $_SESSION["Shoppingcart"][$count] = $item_array;
                echo '<script>window.location="Shoppingcart.php"</script>';
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                echo '<script>window.location="Shoppingcart.php"</script>';
            }
        }else{
            $item_array = array(
              'ProductID' => $_GET["ProductID"],
              'ProductName' => $_POST["productname"],
              'ProductPrice' => $_POST["productprice"],
              'ProductQuantity' => $_POST["productquantity"],
            );
            $_SESSION["Shoppingcart"][0] = $item_array;
        }
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["Shoppingcart"] as $keys => $value){
                if ($value["ProductID"] == $_GET["ProductID"]){
                    unset($_SESSION["Shoppingcart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="Shoppingcart.php"</script>';
                }
            }
        }
    }


 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./Shoppingcart.css">
<style>
@import url('https://fonts.googleapis.com/css?family=Titillium+Web');
*{
  font-family: 'Titillium Web', sans-serif;
}
.product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }

        .img_responsive{
          float: right;
        }

</style>

  </head>
  <body>
    <div class="topnav">
    <a class="active" href="./index.html">Home</a>
    <a href="./Mainshoppingsite.php">Main Site</a>
    <a href="./Contact.html">Contact</a>



  <form class="search" action="./Shoppingcart.php" method="GET" >
   <div class="search">
      <input type="text" name="search" placeholder="Search..">
      <button type="submit"><i class="fa fa-search"></i></button>
   </div>
  </form>








  </div>

    <div class="container" style="width: 100%">
      <div class="category" style="min-width:10%;">
        <ul>
            <a href="./Shoppingcart.php?CategoryID=<?=10000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-primary">Sneaker</span></li></a>
            <a href="./Shoppingcart.php?CategoryID=<?=20000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-secondary">Leather</span></li></a>
            <a href="./Shoppingcart.php?CategoryID=<?=30000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-success">Lifestyle</span></li></a>
            <a href="./Shoppingcart.php?PartnerID=<?=1000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-danger">Adidas</span></li></a>
            <a href="./Shoppingcart.php?PartnerID=<?=1001?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-warning">Calvin Klein</span></li></a>
            <a href="./Shoppingcart.php?PartnerID=<?=1002?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-info">LA Gear</span></li></a>
            <a href="./Shoppingcart.php?PartnerID=<?=1003?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-light">Crocs</span></li></a>
        </ul>
          </div>
<div class="showproduct">

<div class="row"style="padding:0px;">
  <?php
  require_once './Function.php';
            if (isset($_GET['CategoryID'])) {
            $categoryID=$_GET['CategoryID'];
            $query="select*from product where CategoryID='$categoryID' ";


            }

            else if (isset($_GET['PartnerID'])) {
                    $partnersID=$_GET['PartnerID'];
                      $query="select*from product where PartnerID='$partnersID' ";
                   }
                else   if (isset($_GET['search'])) {
                     $search=$_GET['search'];
                     $query="select * from product where ProductName like '%$search%'";

                   }


              else {
                $query = "select * from product order by ProductID ASC";
              }

   ?>
<?php
$result = mysqli_query($conn2,$query);
if(mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_array($result)) {

          ?>
          <div class="col-md-3"style="max-width:100%;width: 20%;margin:0px;">

              <form method="post" action="Shoppingcart.php?action=add&ProductID=<?php echo $row["ProductID"]; ?>" style=" position: relative;display:inline-block;max-width:100%;">

                  <div class="product"style="float:left;">
                      <img src="<?php echo $row["ProductImg"]; ?>" class="img-responsive"style="max-width:100%;">
                        <a href="../My website/Showproduct.php?ProductID=<?php echo $row["ProductID"]?>"><h5 class="text-info"><?php echo $row["ProductName"]; ?></h5></a>
                      <h5 class="text-danger"><?php echo "$".$row["ProductPrice"]; ?></h5>
                      <input type="text" name="productquantity" class="form-control" value="1">
                      <input type="hidden" name="productname" value="<?php echo $row["ProductName"]; ?>">
                      <input type="hidden" name="productprice" value="<?php echo $row["ProductPrice"]; ?>">
                      <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"
                             value="Add to Cart">
                  </div>
              </form>
          </div>
          <?php
      }
      ?>
      </div>
      <?php
  }


         ?>
         </div>

         <ul class="pagination"  style="float:right;">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>

         <div style="clear: both" style="float:left;">
        <h3 class="title2">Shopping Cart Details</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th width="30%">Product Name</th>
                <th width="10%">Quantity</th>
                <th width="13%">Price Details</th>
                <th width="10%">Total Price</th>
                <th width="17%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["Shoppingcart"])){
                    $total = 0;
                    foreach ($_SESSION["Shoppingcart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["ProductName"]; ?></td>
                            <td><?php echo $value["ProductQuantity"]; ?></td>
                            <td>$ <?php echo $value["ProductPrice"]; ?></td>
                            <td>
                                $ <?php echo number_format($value["ProductQuantity"] * $value["ProductPrice"], 2); ?></td>
                            <td><a href="Shoppingcart.php?action=delete&ProductID=<?php echo $value["ProductID"]; ?>"><span
                                        class="text-danger">Remove Item</span></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["ProductQuantity"] * $value["ProductPrice"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right">Total</td>
                            <th align="right">$ <?php echo number_format($total, 2); ?></th>
                            <td><a href="./Cart.php"> Payment</a></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>


      </div>
  </body>
</html>
