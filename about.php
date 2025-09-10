<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - About Me';

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
                <p>I am an experienced IT help desk person. Mostly I have worked remote roles supporting government contractors.</p>
                <p>I have a certificate in web development from my local community college. This level of education is roughly similar to a bootcamp program.</p>
                <p>I am currently seeking a new role in either IT support or software development.</p>
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
        </footer>
    </div>
</body>

</html>