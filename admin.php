<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';

$sql = "SELECT * FROM wiadomosci ORDER BY date DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel Admina</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Dawid uczy się czytać wykorzystując wysłane mu wiadomości.</h2>
    <img src="e510c9801ac3f68324af70dfc31069c2.gif" style="width: 400px; height: auto;" alt="GIF z Dawidem">
    <table border="1">
        <tr><th>ID</th><th>Imię</th><th>Email</th><th>Wiadomość</th><th>Data</th></tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['message'] ?></td>
            <td><?= $row['date'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="logout.php">Wyloguj</a>
</body>
</html>