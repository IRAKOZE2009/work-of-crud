<?php
include 'connection.php';

$sql = "SELECT * FROM users";
$stmt = $conn->query($sql);
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>User List</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
</tr>

<?php foreach ($users as $user): ?>
<tr>
    <td><?= $user['id'] ?></td>
    <td><?= $user['name'] ?></td>
    <td><?= $user['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $user['id'] ?>">Remove</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<a href="create.php">Add New User</a>
