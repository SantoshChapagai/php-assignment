<?php
$host = 'db';
$dbname = 'logindb';
$user = 'root';
$pass = 'lionPass';

$conn = new mysqli($host, $user, $pass, $dbname);
if($conn->connect_error){
  die ('connection failed:'. $conn->connect_error);
}else{
 'Connected to MYSQL server successfully';
}
?>