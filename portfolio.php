<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Portfolio';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <h1>Hello, World!</h1>
            <img src="/images/happy-stick.jpg" alt="smiling stick figure" class="header-img">
        </header>

        <!-- NAVBAR -->
        <?php include './includes/nav.php'; ?>

        <!-- MAIN -->
        <main>
            <!-- ARTICLE -->
            <article>
                <h2>Current</h2>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Bank Teller</div>
                    <div class="portfolioCardBody">The idea to this Java application is that the user is a bank teller and the application assits with setting up an account, checking the balance, and either depositing or withdrawing funds.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/bank-teller" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Simple Calculator</div>
                    <div class="portfolioCardBody">This is a C# program that prompts the user for two numbers and an operation, performs the operation, and displays the result.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/CSharpSimpleCalculator" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Choose Your Own Adventure</div>
                    <div class="portfolioCardBody">This is a Python program that leads the user through a series of decisions as part of a simple adventure story.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/Choose-Your-Own-Adventure" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Carpet Cleaning Estimate Calculator</div>
                    <div class="portfolioCardBody">This is a C++ program that prompts the user for the number of small and large rooms that they would like cleaned by a carpet cleaning service. It then calculates a billing estimate and displays it to the user.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/Carpet-Cleaning-Estimate-Calculator" target="_blank">View on Github</a>
                    </div>
                </div>
            </article>

            <!-- SECTION -->
            <section>
                <h2>Archived</h2>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Temperature Converter</div>
                    <div class="portfolioCardBody">This is a Java program that prompts the user for a temperature in Celsius or Fahrenheit, converts it to the other, and displays it.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/temperature-converter-Java" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Addition Calculator</div>
                    <div class="portfolioCardBody">This is a C# program that prompts the user for two whole numbers, adds them to each other, and displays the result.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/addition-calculator-CSharp" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Calculate Area</div>
                    <div class="portfolioCardBody">This is a python script that prompts the user for a length and width and calculates the area of the recetangle.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/calculate-area-python" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Favorite Number</div>
                    <div class="portfolioCardBody">This is a C++ program that prompts a user to enter their favorite number and then responds to them.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/favorite-number" target="_blank">View on Github</a>
                    </div>
                </div>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Hello World</div>
                    <div class="portfolioCardBody">This is a Java program that displays the iconic Hello World message.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/hello-world-java" target="_blank">View on Github</a>
                    </div>
                </div>
            </section>
        </main>

        <!-- ASIDE -->
        <aside></aside>

        <!-- FOOTER -->
        <footer>
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
        </footer>
    </div>
</body>

</html>