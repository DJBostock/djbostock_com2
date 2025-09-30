<?php

session_start();

// This code redirects a user to the main page if they are not logged in.
if (!$_SESSION['is_logged_in']) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

    header("Location: $protocol://" . "djbostock.com/");
    exit;
}

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

        #contactForm {
            border: 2px solid black;
            padding: 10px;
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
                <p>Send me a message!</p>
                <form action="" method="post" id="contactForm">
                    <div>
                        <label for="userEmail">Your Email:</label>
                        <input type="text" name="userEmail" id="userEmail">
                    </div>
                    <div>
                        <label for="userSubject">Message Subject:</label>
                        <input type="text" name="userSubject" id="userSubject">
                    </div>
                    <div>
                        <textarea name="userMessage" id="userMessage"></textarea>
                    </div>
                    <button>Send</button>
                </form>
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