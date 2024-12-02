<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $mysqli -> real_escape_string($_POST['deskripsi']);
    $mysqli -> query("INSERT INTO antrian (deskripsi) VALUES ('$content')");
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
        <th>Nomor</th>
            <th>Kategori</th>
            <th>Lokasi</th>
            <th>Urgensi</th>
            <th>Deskripsi</th>
            <th>Solusi</th>
            <th>Status Penyelesaian</th>
        </tr>
        <?php while ($row = $hasil ->fetch_assoc()): ?>
            <tr>
                <?php $i = 1?>
                <td><?= $i; ?></td>
                <td><?= $row['kategori'] ?></td>
                <td><?= $row['lokasi'] ?></td>
                <td><?= $row['tingkat'] ?></td>
                <td><?= $row['deskripsi'] ?></td>
                <td><?= $row['solusi'] ?></td>
                <td><?= $row['penyelesaian'] ?></td>
                <?php $i++;?>
            </tr>
        <?php endwhile; ?>
    </table>

    <h3>Submit New Entry</h3>
    <form method="POST">
        <textarea name="deskripsi" required></textarea><br>
        <button type="submit">Submit</button>

    <a href="index.php">Logout</a>
</body>
</html>