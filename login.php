<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - login';

include './includes/login_credentials.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == $correct_username && $_POST['password'] == $correct_password) {
        session_regenerate_id(true);
        $_SESSION['is_logged_in'] = true;

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
            $protocol = 'https';
        } else {
            $protocol = 'http';
        }

        header("Location: $protocol://" . "djbostock.com/");
        exit;
    }
}

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
                <h2>Login</h2>
                <form action="" method="POST">
                    <div>
                        <label for="username">Username: </label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button>Send</button>
                </form>
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