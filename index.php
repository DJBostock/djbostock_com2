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
        <main>
            <h1>Hello, World!</h1>
            <section class="hero">
                <div>
                    <p>Welcome to my page!</p>
                    <p>I am a developer into turning ideas into functional code.</p>
                    <p>I am eager to join a team where I can contribute and grow my skills.</p>
                    <p>Email me at: <a href="mailto:douglasjbostock@gmail.com">douglasjbostock@gmail.com</a></p>
                </div>
                <div>
                    <img src="./images/happy-stick.jpg" alt="smiling stick figure" class="hero-img">
                </div>
            </section>
            <section class="portfolio">
                <h2>Portfolio</h2>
                <div class="row">
                    <div class="card">
                        <div>
                            <i class="fa-regular fa-file-code fa-2xl"></i>&nbsp;
                        </div>
                        <div>
                            <div>Cost Calculator For A Carpet Cleaning Business</div>
                            <div>This is a C++ program that will create a price estimate for a customer based on the number and size of the rooms they want cleaned at a carpet cleaning business.</div>
                            <div><a href="https://github.com/DJBostock/Carpet-Cleaning-Estimate-Calculator" target="_blank">View on Github</a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <i class="fa-regular fa-file-code fa-2xl"></i>&nbsp;
                        </div>
                        <div>
                            <div>Choose Your Own Adventure</div>
                            <div>This is a Python script that allows the user to play a Choose Your Own Adventure style text game.</div>
                            <div><a href="https://github.com/DJBostock/Choose-Your-Own-Adventure" target="_blank">View on Github</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card">
                        <div>
                            <i class="fa-regular fa-file-code fa-2xl"></i>&nbsp;
                        </div>
                        <div>
                            <div>Convert Feet and Inches To Centimeters</div>
                            <div>This is a Java program that prompts the user for a number of feet and inches and then converts that to a number of centimeters. This was practice in method overloading.</div>
                            <div><a href="https://github.com/DJBostock/convert-feet-and-inches-to-centimeters" target="_blank">View on Github</a></div>
                        </div>
                    </div>
                    <div class="card">
                        <div>
                            <i class="fa-regular fa-file-code fa-2xl"></i>&nbsp;
                        </div>
                        <div>
                            <div>Addition Calculator</div>
                            <div>This is a C# program that prompts the user for two numbers and then displays the sum of them.</div>
                            <div><a href="https://github.com/DJBostock/addition-calculator-CSharp" target="_blank">View on Github</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- FOOTER -->
        <footer>
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
        </footer>
    </div>
</body>

</html>