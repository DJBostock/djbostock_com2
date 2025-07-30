<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
</head>

<body>
    <div class="container">
        <!-- NAVBAR -->
        <?php include './includes/nav.php'; ?>

        <!-- MAIN -->
        <div class="mt-4 p-5 rounded row">
            <div class="col-12 col-md-8">
                <h1>DJ Bostock</h1>
                <p>Hello, World! Welcome to my page.</p>
                <p>I am a web developer into turning ideas into functional websites.</p>
                <p>I am eager to join a team where I can contribute and grow my skills.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
        <div class="mt-4 p-5 rounded row">
            <div class="col">
                <button class="btn btn-primary btn-lg rounded" onclick="window.location.href='https://djbostock.com/portfolio.php'">View My Portfolio</button>
            </div>
        </div>
    </div>
</body>

</html>