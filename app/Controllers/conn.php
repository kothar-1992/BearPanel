<?php

$servername = "localhost";
$username = "keypusdk_Bear";
$password = "@BEGanUq4$@$";
$dbname = "keypusdk_Bear";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn) {

die(" PROBLEM WITH CONNECTION : " . mysqli_connect_error());

}
  
?>