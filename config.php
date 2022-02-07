<?php 

$server="sql671.main-hosting.eu";
$username="u429173902_bankingsystem";
$password="Admin@1224";
$db="u429173902_bankingsystem";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
