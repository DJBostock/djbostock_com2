<?php
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
            <article></article>

            <!-- SECTION -->
            <section>
                <div class="portfolioCard">
                    <div class="portfolioCardHead">Favorite Number</div>
                    <div class="portfolioCardBody">This is a C++ program that prompts a user to enter their favorite number and then responds to them.</div>
                    <div class="portfolioCardFoot">
                        <a href="https://github.com/DJBostock/favorite-number" target="_blank">View on Github</a>
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