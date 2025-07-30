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
                <h1>Portfolio</h1>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Calculate Area</div>
                    <div class="card-body">This is a Python script that prompts the user for a length and width and returns the area.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/calculate-area-python" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Favorite Number</div>
                    <div class="card-body">This is a C++ program that asks a user for their favorite number and then responds.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/favorite-number" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Hello World in Java</div>
                    <div class="card-body">This is a Hello World program written in Java</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/hello-world-java" target="_blank">View on Github</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
    </div>
</body>

</html>