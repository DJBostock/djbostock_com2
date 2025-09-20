<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
    <meta name="description" content="Developer portfolio for DJ Bostock">
    <style>
        button {
            margin: 20px;
        }
    </style>
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
                    <button id="wallpaper1">Wallpaper 1</button>
                </div>
                <div>
                    <button id="wallpaper2">Wallpaper 2</button>
                </div>
                <div>
                    <button id="wallpaper3">Wallpaper 3</button>
                </div>
                <div>
                    <button id="wallpaper4">Wallpaper 4</button>
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
                let button1 = document.getElementById("wallpaper1");
                let button2 = document.getElementById("wallpaper2");
                let button3 = document.getElementById("wallpaper3");
                let button4 = document.getElementById("wallpaper4");

                button1.addEventListener("click", () => {
                    document.body.style.backgroundImage = `url("./images/pexels-krisof-1252890.jpg")`;
                });
                button2.addEventListener("click", () => {
                    document.body.style.backgroundImage = `url("./images/pexels-pixmike-413195.jpg")`;
                });
                button3.addEventListener("click", () => {
                    document.body.style.backgroundImage = `url("./images/pexels-sabrina-gelbart-65954-249798.jpg")`;
                });
                button4.addEventListener("click", () => {
                    document.body.style.backgroundImage = `url("./images/pexels-shonejai-445753-1227511.jpg")`;
                });
            </script>
        </footer>
    </div>
</body>

</html>