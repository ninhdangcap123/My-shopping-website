<?php

require_once './Function.php';


$loginUsername=$_GET['username'];
$loginPassword=$_GET['password'];

$sql="select * from account where Username= '$loginUsername' and Password='$loginPassword'";
$accounttable=query($sql);


if ($accounttable) {
  require_once './Mainshoppingsite.php';
}

?>
