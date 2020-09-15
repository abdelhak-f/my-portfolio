<?php

$host="localhost";
$user="root";
$pw="";
$ndb="myportfolio";
$conn=mysqli_connect($host,$user,$pw,$ndb,3306);
 if($conn){
  //echo"connected";
 }else{
  echo"no connected";}
?>