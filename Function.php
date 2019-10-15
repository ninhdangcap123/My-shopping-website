<?php
$con = pg_connect("host = ec2-54-83-33-14.compute-1.amazonaws.com , dbname = daaa8gq0g2jfmc , username =  uzyjkzbzfuukqf , password = 38aa430fd2fd2563a7b0165d8ce02a3bdae65c9884efdc6bb05f013fc82b5403 , port = 5432");
if (!$con){
  echo "not connect";

}
else{
  echo"connect";
}
 ?>
