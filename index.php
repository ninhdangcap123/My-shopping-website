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
$result = query1($query);
      foreach ($result as $row) {

          ?>
          <div class="col-md-3"style="max-width:100%;width: 20%;margin:0px;">

              <form method="post" action="Shoppingcart.php?action=add&ProductID=<?php echo $row["ProductID"]; ?>" style=" position: relative;display:inline-block;max-width:100%;">

                  <div class="product"style="float:left;">
                      <img src="<?php echo $row["ProductImg"]; ?>" class="img-responsive"style="max-width:100%;">
                        <a href="./Showproduct.php?ProductID=<?php echo $row["ProductID"]?>"><h5 class="text-info"><?php echo $row["ProductName"]; ?></h5></a>
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