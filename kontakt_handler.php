<?php
include 'db.php';

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

$sql = "INSERT INTO wiadomosci (name, email, message) VALUES ('$name', '$email', '$message')";
$conn->query($sql);

header("Location: kontakt.php?success=1");
?>