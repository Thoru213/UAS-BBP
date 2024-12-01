<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete'])) {
        $id = (int)$_POST['id'];
        $mysqli->query("DELETE FROM antrian WHERE id = $id");
    } elseif (isset($_POST['update'])) {
        $id = (int)$_POST['id'];
        $content = $mysqli->real_escape_string($_POST['content']);
        $mysqli->query("UPDATE antrian SET content = '$content' WHERE id = $id");
    } elseif (isset($_POST['approve'])) {
        $id = (int)$_POST['id'];
        $mysqli->query("UPDATE antrian SET status = 'approved' WHERE id = $id");
    }
}

$hasil = $mysqli -> query("SELECT * FROM antrian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h1>Selamat Datang Admin</h1>

    <h2>All Entries</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Content</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $hasil->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['content'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <textarea name="content"><?= $row['content'] ?></textarea>
                        <button type="submit" name="update">Update</button>
                    </form>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="approve">Approve</button>
                    </form>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" name="delete">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>


    <a href="index.php">Logout</a>
</body>
</html>