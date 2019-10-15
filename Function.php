<?php
$con = pg_connect("host = ec2-54-83-33-14.compute-1.amazonaws.com , dbname = daaa8gq0g2jfmc , user =  uzyjkzbzfuukqf , servername = My-shopping-website , port = 5432");
if (!$con){
  echo "not connect";

}
else{
  echo"connect";
}
 ?>
