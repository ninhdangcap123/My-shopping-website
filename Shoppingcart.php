<? php
echo '<?php';
echo 'session_start();';
echo '$dbname="my website";';
echo '$conn2=mysqli_connect("localhost","root","",$dbname);';
echo 'if (isset($_POST["add"])){';
echo 'if (isset($_SESSION["Shoppingcart"])){';
echo '$item_array_id = array_column($_SESSION["Shoppingcart"],"ProductID");';
echo 'if (!in_array($_GET["ProductID"],$item_array_id)){';
echo '$count = count($_SESSION["Shoppingcart"]);';
echo '$item_array = array(';
echo ''ProductID' => $_GET["ProductID"],';
echo ''ProductName' => $_POST["productname"],';
echo ''ProductPrice' => $_POST["productprice"],';
echo ''ProductQuantity' => $_POST["productquantity"],';
echo ');';
echo '$_SESSION["Shoppingcart"][$count] = $item_array;';
echo 'echo '<script>window.location="Shoppingcart.php"</script>';';
echo '}else{';
echo 'echo '<script>alert("Product is already Added to Cart")</script>';';
echo 'echo '<script>window.location="Shoppingcart.php"</script>';';
echo '}';
echo '}else{';
echo '$item_array = array(';
echo ''ProductID' => $_GET["ProductID"],';
echo ''ProductName' => $_POST["productname"],';
echo ''ProductPrice' => $_POST["productprice"],';
echo ''ProductQuantity' => $_POST["productquantity"],';
echo ');';
echo '$_SESSION["Shoppingcart"][0] = $item_array;';
echo '}';
echo '}';
echo '';
echo 'if (isset($_GET["action"])){';
echo 'if ($_GET["action"] == "delete"){';
echo 'foreach ($_SESSION["Shoppingcart"] as $keys => $value){';
echo 'if ($value["ProductID"] == $_GET["ProductID"]){';
echo 'unset($_SESSION["Shoppingcart"][$keys]);';
echo 'echo '<script>alert("Product has been Removed...!")</script>';';
echo 'echo '<script>window.location="Shoppingcart.php"</script>';';
echo '}';
echo '}';
echo '}';
echo '}';
echo '';
echo '';
echo '?>';
echo '';
echo '';
echo '';
echo '<!DOCTYPE html>';
echo '<html lang="en" dir="ltr">';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Shopping Cart</title>';
echo '';
echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>';
echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';
echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
echo '<link rel="stylesheet" href="../My website/Shoppingcart.css">';
echo '<style>';
echo '@import url('https://fonts.googleapis.com/css?family=Titillium+Web');';
echo '*{';
echo 'font-family: 'Titillium Web', sans-serif;';
echo '}';
echo '.product{';
echo 'border: 1px solid #eaeaec;';
echo 'margin: -1px 19px 3px -1px;';
echo 'padding: 10px;';
echo 'text-align: center;';
echo 'background-color: #efefef;';
echo '}';
echo 'table, th, tr{';
echo 'text-align: center;';
echo '}';
echo '.title2{';
echo 'text-align: center;';
echo 'color: #66afe9;';
echo 'background-color: #efefef;';
echo 'padding: 2%;';
echo '}';
echo 'h2{';
echo 'text-align: center;';
echo 'color: #66afe9;';
echo 'background-color: #efefef;';
echo 'padding: 2%;';
echo '}';
echo 'table th{';
echo 'background-color: #efefef;';
echo '}';
echo '';
echo '.img_responsive{';
echo 'float: right;';
echo '}';
echo '';
echo '</style>';
echo '';
echo '</head>';
echo '<body>';
echo '<div class="topnav">';
echo '<a class="active" href="../My website/Mywebsite.html">Home</a>';
echo '<a href="../My website/Mainshoppingsite.php">Main Site</a>';
echo '<a href="../My website/Contact.html">Contact</a>';
echo '';
echo '';
echo '';
echo '<form class="search" action="../My website/Shoppingcart.php" method="GET" >';
echo '<div class="search">';
echo '<input type="text" name="search" placeholder="Search..">';
echo '<button type="submit"><i class="fa fa-search"></i></button>';
echo '</div>';
echo '</form>';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '</div>';
echo '';
echo '<div class="container" style="width: 100%">';
echo '<div class="category" style="min-width:10%;">';
echo '<ul>';
echo '<a href="../My website/Shoppingcart.php?CategoryID=<?=10000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-primary">Sneaker</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?CategoryID=<?=20000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-secondary">Leather</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?CategoryID=<?=30000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-success">Lifestyle</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?PartnerID=<?=1000?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-danger">Adidas</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?PartnerID=<?=1001?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-warning">Calvin Klein</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?PartnerID=<?=1002?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-info">LA Gear</span></li></a>';
echo '<a href="../My website/Shoppingcart.php?PartnerID=<?=1003?>"><li style="font-size:25px;display:block;min-width: 10%;padding:5px;"><span class="badge badge-light">Crocs</span></li></a>';
echo '</ul>';
echo '</div>';
echo '<div class="showproduct">';
echo '';
echo '<div class="row"style="padding:0px;">';
echo '<?php';
echo 'require_once './Function.php';';
echo 'if (isset($_GET['CategoryID'])) {';
echo '$categoryID=$_GET['CategoryID'];';
echo '$query="select*from product where CategoryID='$categoryID' ";';
echo '';
echo '';
echo '}';
echo '';
echo 'else if (isset($_GET['PartnerID'])) {';
echo '$partnersID=$_GET['PartnerID'];';
echo '$query="select*from product where PartnerID='$partnersID' ";';
echo '}';
echo 'else   if (isset($_GET['search'])) {';
echo '$search=$_GET['search'];';
echo '$query="select * from product where ProductName like '%$search%'";';
echo '';
echo '}';
echo '';
echo '';
echo 'else {';
echo '$query = "select * from product order by ProductID ASC";';
echo '}';
echo '';
echo '?>';
echo '<?php';
echo '$result = mysqli_query($conn2,$query);';
echo 'if(mysqli_num_rows($result) > 0) {';
echo 'while ($row = mysqli_fetch_array($result)) {';
echo '';
echo '?>';
echo '<div class="col-md-3"style="max-width:100%;width: 20%;margin:0px;">';
echo '';
echo '<form method="post" action="Shoppingcart.php?action=add&ProductID=<?php echo $row["ProductID"]; ?>" style=" position: relative;display:inline-block;max-width:100%;">';
echo '';
echo '<div class="product"style="float:left;">';
echo '<img src="<?php echo $row["ProductImg"]; ?>" class="img-responsive"style="max-width:100%;">';
echo '<a href="../My website/Showproduct.php?ProductID=<?php echo $row["ProductID"]?>"><h5 class="text-info"><?php echo $row["ProductName"]; ?></h5></a>';
echo '<h5 class="text-danger"><?php echo "$".$row["ProductPrice"]; ?></h5>';
echo '<input type="text" name="productquantity" class="form-control" value="1">';
echo '<input type="hidden" name="productname" value="<?php echo $row["ProductName"]; ?>">';
echo '<input type="hidden" name="productprice" value="<?php echo $row["ProductPrice"]; ?>">';
echo '<input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success"';
echo 'value="Add to Cart">';
echo '</div>';
echo '</form>';
echo '</div>';
echo '<?php';
echo '}';
echo '?>';
echo '</div>';
echo '<?php';
echo '}';
echo '';
echo '';
echo '?>';
echo '</div>';
echo '';
echo '<ul class="pagination"  style="float:right;">';
echo '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
echo '<li class="page-item"><a class="page-link" href="#">1</a></li>';
echo '<li class="page-item"><a class="page-link" href="#">2</a></li>';
echo '<li class="page-item"><a class="page-link" href="#">3</a></li>';
echo '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
echo '</ul>';
echo '';
echo '<div style="clear: both" style="float:left;">';
echo '<h3 class="title2">Shopping Cart Details</h3>';
echo '<div class="table-responsive">';
echo '<table class="table table-bordered">';
echo '<tr>';
echo '<th width="30%">Product Name</th>';
echo '<th width="10%">Quantity</th>';
echo '<th width="13%">Price Details</th>';
echo '<th width="10%">Total Price</th>';
echo '<th width="17%">Remove Item</th>';
echo '</tr>';
echo '';
echo '<?php';
echo 'if(!empty($_SESSION["Shoppingcart"])){';
echo '$total = 0;';
echo 'foreach ($_SESSION["Shoppingcart"] as $key => $value) {';
echo '?>';
echo '<tr>';
echo '<td><?php echo $value["ProductName"]; ?></td>';
echo '<td><?php echo $value["ProductQuantity"]; ?></td>';
echo '<td>$ <?php echo $value["ProductPrice"]; ?></td>';
echo '<td>';
echo '$ <?php echo number_format($value["ProductQuantity"] * $value["ProductPrice"], 2); ?></td>';
echo '<td><a href="Shoppingcart.php?action=delete&ProductID=<?php echo $value["ProductID"]; ?>"><span';
echo 'class="text-danger">Remove Item</span></a></td>';
echo '';
echo '</tr>';
echo '<?php';
echo '$total = $total + ($value["ProductQuantity"] * $value["ProductPrice"]);';
echo '}';
echo '?>';
echo '<tr>';
echo '<td colspan="3" align="right">Total</td>';
echo '<th align="right">$ <?php echo number_format($total, 2); ?></th>';
echo '<td><a href="../My website/Cart.php"> Payment</a></td>';
echo '</tr>';
echo '<?php';
echo '}';
echo '?>';
echo '</table>';
echo '</div>';
echo '';
echo '';
echo '</div>';
echo '</body>';
echo '</html>';
echo '';
?>
