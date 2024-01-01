<?php

$title = "DJ Bostock";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("./includes/head.php"); ?>
</head>
<body>
    <nav>
        <?php include("includes/nav.php"); ?>
    </nav>
    <header>
        <h1>Hello, World!</h1>
        <img src="./images/stick.jpg" class="logo-img" alt="smiling stick person">
    </header>
    <main>
        <div class="tutorial-box">
            <h2>Tutorial Projects</h2>
            <p>Below are projects adapted from various online tutorials.</p>
            <ul>
                <li><a href="./projects/expanding-cards/">Expanding Cards</a></li>
                <li><a href="./projects/progress-steps/">Progress Steps</a></li>
            </ul>
        </div>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>