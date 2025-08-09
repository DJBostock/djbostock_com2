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
        <div class="mt-4 p-5 pb-0 rounded row">
            <div class="col-12 col-md-8">
                <h1 class="mb-5">Portfolio</h1>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Choose Your Own Adventure</div>
                    <div class="card-body">This is a Python script that allows the user to play a Choose Your Own Adventure style text game.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/Choose-Your-Own-Adventure" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Calculate Area of a Room</div>
                    <div class="card-body">This C++ program will calculate the area of a room in square feet (and rounds the answer to two decimal places).</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/calculate-area-of-a-room" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Convert Feet and Inches To Centimeters</div>
                    <div class="card-body">
                        This is a Java program that prompts the user for a number of feet and inches and then converts that to a number of centimeters. This was practice in method overloading.
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/convert-feet-and-inches-to-centimeters" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Addition Calculator</div>
                    <div class="card-body">This is a C# program that prompts the user for two numbers and then displays the sum of them.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/addition-calculator-CSharp" target="_blank">View on Github</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
        <div class="mt-1 p-5 pt-0 rounded row">
            <div class="col">
                <button class="btn btn-primary btn-lg rounded" onclick="window.location.href='https://djbostock.com/archived.php'">Archived Projects</button>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="ps-5 pe-5">
            <?php include './includes/footer.php'; ?>
        </div>
    </div>
</body>

</html>