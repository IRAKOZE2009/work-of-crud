<?php
include 'connection.php';
$id =$_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (id, name, email) VALUES ('$id', '$name', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "User added";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
