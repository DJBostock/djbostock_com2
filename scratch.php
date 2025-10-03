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
                <div>
                    <h2 id="usernameH2">Enter Your Username</h2>
                    <input type="text" id="username">
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
            <script>
                let h2 = document.getElementById('usernameH2');
                let username = document.getElementById('username');

                username.addEventListener('input', function(evt) {
                    // console.log(evt);
                    if (username.value == '') {
                        h2.innerText = 'Enter Your Username';
                    } else {
                        h2.innerText = 'Welcome, ' + username.value;
                    }
                });
            </script>
        </footer>
    </div>
</body>

</html>