<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my website";
$port="3306";

function query($sql){

  global $servername ;
  global $username;
  global $password;
  global $dbname;
  global $port;
  $conn = new mysqli($servername, $username, $password, $dbname,$port);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

//the result get value from sql
  $result=$conn->query($sql);
  $rows=mysqli_fetch_all($result);
  return $rows;

}

function insert($sql){

  global $servername ;
  global $username;
  global $password;
  global $dbname;
  global $port;
  $conn1 = new mysqli($servername, $username, $password, $dbname,$port);
  // Check connection
  if ($conn1->connect_error) {
      die("Connection failed: " . $conn1->connect_error);
  }

  if (mysqli_query($conn1,$sql))
   {

  }
  else {
    echo "Error:".$sql."<br>".mysqli_error($conn1);
  }


}
function update($sql){

  global $servername ;
  global $username;
  global $password;
  global $dbname;
  global $port;
  $conn1 = new mysqli($servername, $username, $password, $dbname,$port);
  // Check connection
  if ($conn1->connect_error) {
      die("Connection failed: " . $conn1->connect_error);
  }

  if (mysqli_query($conn1,$sql))
   {

  }
  else {
    echo "Error:".$sql."<br>".mysqli_error($conn1);
  }


}
function delete($sql){

  global $servername ;
  global $username;
  global $password;
  global $dbname;
  global $port;
  $conn1 = new mysqli($servername, $username, $password, $dbname,$port);
  // Check connection
  if ($conn1->connect_error) {
      die("Connection failed: " . $conn1->connect_error);
  }

  if (mysqli_query($conn1,$sql))
   {

  }
  else {
    echo "Error:".$sql."<br>".mysqli_error($conn1);
  }


}



 ?>
