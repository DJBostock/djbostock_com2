<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
    <meta name="description" content="Developer portfolio for DJ Bostock">
</head>

<body>
    <div class="container">
        <!-- NAVBAR -->
        <?php include './includes/nav.php'; ?>

        <!-- MAIN -->
        <div class="mt-4 p-5 rounded row">
            <div class="col-12 col-md-8">
                <h1 class="mb-5">DJ Bostock</h1>
                <p>Hello, World! Welcome to my page.</p>
                <p>I am a developer into turning ideas into functional code.</p>
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
        <!-- FOOTER -->
        <div class="ps-5 pe-5">
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
        </div>
    </div>
</body>

</html>