<?php

$title = "DJ Bostock";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <span class="logo">DJ Bostock</span>
        <span>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
        </span>
    </nav>
    <header>
        <h1>Hello, World!</h1>
        <img src="./images/stick.jpg" class="logo-img" alt="smiling stick person">
    </header>
    <main>
        &nbsp;
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>