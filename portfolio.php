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
                <h1 class="mb-5">Portfolio</h1>
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Convert Feet and Inches To Centimeters</div>
                    <div class="card-body">
                        This is a Java program that prompts the user for a number of feet and inches and then converts that to a number of centimeters. This was practice in method overloading.
                    </div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/convert-feet-and-inches-to-centimeters" target="_blank">View on Github</a>
                    </div>
                </div>
                <!-- <div class="card mb-4 card-shadow">
                    <div class="card-header">Temperature Converter</div>
                    <div class="card-body">This is a Java program that prompts the user for a degree in either Celsius or Fahrenheit and converts it to the other.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/temperature-converter-Java" target="_blank">View on Github</a>
                    </div>
                </div> -->
                <div class="card mb-4 card-shadow">
                    <div class="card-header">Addition Calculator</div>
                    <div class="card-body">This is a C# program that prompts the user for two numbers and then displays the sum of them.</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/addition-calculator-CSharp" target="_blank">View on Github</a>
                    </div>
                </div>
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
                <!-- <div class="card mb-4 card-shadow">
                    <div class="card-header">Hello World in Java</div>
                    <div class="card-body">This is a Hello World program written in Java</div>
                    <div class="card-footer">
                        <a href="https://github.com/DJBostock/hello-world-java" target="_blank">View on Github</a>
                    </div>
                </div> -->
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
    </div>
</body>

</html>