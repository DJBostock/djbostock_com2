<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>

    <style>
        button {
            border-radius: 10px;
            padding: 10px 15px;
        }

        label {
            min-width: 100px;
        }

        form>div {
            margin-bottom: 10px;
        }

        .invalidEmail {
            border: 4px solid red;
        }
    </style>
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
                <form action="contact2.php" method="post">
                    <div>
                        <label for="user_email">Your Email:</label>
                        <input type="email" name="user_email" id="user_email" required>
                    </div>
                    <div>
                        <label for="user_subject">Subject:</label>
                        <input type="text" name="user_subject" id="user_subject" required>
                    </div>
                    <div>
                        <label for="user_message">Message:</label>
                        <textarea name="user_message" id="user_message" cols="40" required></textarea>
                    </div>
                    <button type="submit">Send</button>
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
            <script>
                let userEmail = document.getElementById('user_email');

                function validateEmail() {
                    let userEmailValue = document.getElementById('user_email').value;
                    if (/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(userEmailValue)) {
                        document.getElementById('user_email').classList.remove('invalidEmail');
                    } else {
                        document.getElementById('user_email').classList.add('invalidEmail');
                    }
                }

                userEmail.addEventListener("input", validateEmail);
            </script>
        </div>
    </div>
</body>

</html>