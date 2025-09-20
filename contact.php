<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Contact Me';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
    <style>
        li {
            margin-bottom: 20px;
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
                <p>For now, it is best to contact me by email at: <a href="mailto:douglasjbostock@gmail.com">douglasjbostock@gmail.com</a></p>
            </article>

            <!-- SECTION -->
            <section>
                <h2>My Socials</h2>
                <ul>
                    <li><a href="https://github.com/DJBostock" target="_blank"><i class="fa-brands fa-github fa-2x"></i> Github</a></li>
                    <li><a href="https://www.linkedin.com/in/djbostock/" target="_blank"><i class="fa-brands fa-linkedin fa-2x"></i> LinkedIn</a></li>
                    <li><a href="https://bsky.app/profile/djbostock.bsky.social" target="_blank"><i class="fa-brands fa-bluesky fa-2x"></i>BlueSky</a></li>
                </ul>
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