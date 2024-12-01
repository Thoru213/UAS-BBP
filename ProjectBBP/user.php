<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $mysqli -> real_escape_string($_POST['content']);
    $mysqli -> query("INSERT INTO antrian (content) VALUES ('$content')");
}

$hasil = $mysqli -> query("SELECT * FROM antrian WHERE status = 'approved'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Selamat Datang User!</h1>
    <h2>Resiko yang Telah Disetujui</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Content</th>
            <th>Created At</th>
        </tr>
        <?php while ($row = $hasil ->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['content'] ?></td>
                <td><?= $row['created_at'] ?></td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h3>Submit New Entry</h3>
    <form method="POST">
        <textarea name="content" required></textarea><br>
        <button type="submit">Submit</button>

    <a href="index.php">Logout</a>
</body>
</html>