<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Scratch';

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
                <div>
                    <h2>Click the button to change the background to a random color</h2>
                    <button id="colorChanger">Change Background Color</button>
                </div>
            </article>

            <!-- SECTION -->
            <section></section>
        </main>

        <!-- ASIDE -->
        <aside></aside>

        <!-- FOOTER -->
        <footer>
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
            <script>
                let colorChanger = document.getElementById('colorChanger');
                colorChanger.addEventListener('click', () => {
                    document.body.style.backgroundImage = 'none';
                    let red = Math.floor(Math.random() * 256);
                    let green = Math.floor(Math.random() * 256);
                    let blue = Math.floor(Math.random() * 256);
                    document.body.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;
                });
            </script>
        </footer>
    </div>
</body>

</html>