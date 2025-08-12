<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
</head>

<body>
    <div class="container">
        <!-- NAVBAR -->
        <?php include './includes/nav.php'; ?>

        <!-- MAIN -->
        <div class="mt-4 p-5 rounded row">
            <div class="col-12 col-md-8">
                <h1 class="mb-5">Contact Me</h1>
                <!-- CONTACT FORM -->
                <form action="contact2.php" method="get">
                    <div>
                        <label for="user_email">User Email:</label>
                        <input type="text" name="user_email" id="user_email">
                    </div>
                </form>
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
        <!-- FOOTER -->
        <div class="ps-5 pe-5">
            <?php include './includes/footer.php'; ?>
            <script src="./js/script.js"></script>
        </div>
    </div>
</body>

</html>