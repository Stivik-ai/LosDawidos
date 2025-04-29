<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = $conn->query($sql);
    $admin = $result->fetch_assoc();

    if ($admin && hash("sha256", $password) === $admin["password"]) {
        $_SESSION['admin_logged_in'] = true;
        header("Location: admin.php");
        exit();
    } else {
        $error = "Błędne dane logowania!";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Strona główna</a>
            <a href="kontakt.php">Kontakt</a>
            <a href="login.php">Admin</a>
        </nav>
    </header>

    <h2>Dawid zamknął oczy aby spokojnie się zalogować.</h2>
    <img src="images.jfif" style="width: 500px; height: auto;" alt="Obraz">

    <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Login" required>
        <input type="password" name="password" placeholder="Hasło" required>
        <button type="submit">Zaloguj</button>
    </form>
</body>
</html>
