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

          echo "<li>". $row["productid"] . '--' . $row["productname"] . '--' . $row["productprice"] . '--' . $row["productimg"] . '--' . $row["productquantity"] . '--' . $row["productdescription"] . "</li>";
      }
      ?>
      </div>
      