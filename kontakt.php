<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kontakt</title>
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
    <h2>Napisz do Dawida.</h2>
    <img src="images (1).jfif" style="width: 500px; height: auto;" alt="Obraz">
    <form action="kontakt_handler.php" method="POST">
        <input type="text" name="name" placeholder="Imię" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <textarea name="message" placeholder="Wiadomość" required></textarea>
        <button type="submit">Wyślij</button>
    </form>
</body>
</html>