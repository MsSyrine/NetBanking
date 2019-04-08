<?php
// Enter your MySQL username below(default=root)
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "net_banking";


$conn= new mysqli($servername, $username, $password, $dbname)
or die("Connect failed: %s\n". $conn -> error);

?>
