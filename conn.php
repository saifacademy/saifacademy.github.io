<?php 
$servername = "localhost";
$database="std";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, $database);
$charset= 'SET CHARACTER SET utf8'; 
mysqli_query($conn,$charset);
?>