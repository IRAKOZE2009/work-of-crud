<?php
include 'connection.php';

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=$id";
$stmt = $conn->prepare($sql);
$stmt->execute([':id' => $id]);

header("Location: index.php");
?>
