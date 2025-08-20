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
            <section>
                <div>
                    <p>Welcome to my page!</p>
                    <p>I am a developer into turning ideas into functional code.</p>
                    <p>I am eager to join a team where I can contribute and grow my skills.</p>
                </div>
                <div>
                    <img src="./images/happy-stick.jpg" alt="smiling stick figure" class="hero-img">
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