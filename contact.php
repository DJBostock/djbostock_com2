<?php

$title = "Contact - DJ Bostock";

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
    </nav>
    <header>
        <h1>Contact Me</h1>
    </header>
    <main class="center-main">
        <form action="./contact.php" method="post">
            <div class="contact-input">
                <label for="userFrom">From:</label>
                <input type="text" name="userFrom" id="userFrom">
            </div>
            <div class="contact-input">
                <label for="userSubject">Subject:</label>
                <input type="text" name="userSubject" id="userSubject">
            </div>
            <div class="contact-input">
                <label for="userMessage">Message:</label>
                <textarea name="userMessage" id="userMessage" cols="30" rows="10"></textarea>
            </div>
            <div class="contact-input">
                <button type="submit">Send</button>
            </div>
        </form>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>