<?php
$host="localhost";
$user="root";
$password="";
$db="users";

$conn= mysqli_connect($host,$user,$password,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "successfully connected";
?>
