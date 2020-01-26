<?php 

$title = "DJ Bostock";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DJ Bostock">

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>DJ Bostock</h1>
        <img src="images/profile-round.png" alt="cartoon headshot of the author" class="hero">
    </header>
    <main>
        <p>Hello, World!</p>
        <p>This website is largely a test environment for me where I experiment with different web technologies as I learn about them. I am forever building things and tearing them down again.</p>
    </main>
    <section>
        <h2>Projects</h2>
        <div class="card">
            <h3>Project 1</h3>
            <p>This is the card for project 1.</p>
        </div>
        <div class="card">
            <h3>Project 2</h3>
            <p>This is the card for project 2.</p>
        </div>
        <div class="card">
            <h3>Project 3</h3>
            <p>This is the card for project 3.</p>
        </div>
    </section>
    <footer>
        <p>&copy; DJ Bostock</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>