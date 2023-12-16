<?php

$title = "Contact - DJ Bostock";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userFrom = test_input($_POST["userFrom"]);
    $userSubject = test_input($_POST["userSubject"]);
    $userMessage = test_input($_POST["userMessage"]);
    mail($to="douglasjbostock@gmail.com", $subject=$userSubject, $message=$userMessage, $from=$userFrom);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <nav>
        <span class="logo">DJ Bostock</span>
        <span>
            <a href="index.php">Home</a>
            <a href="contact.php">Contact</a>
        </span>
    </nav>
    <header>
        <h1>Contact Me</h1>
    </header>
    <main class="center-main">
        <div class="form-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="contact-input">
                <label for="userFrom">From:</label><br>
                <input type="email" name="userFrom" id="userFrom" placeholder="enter your email address" required>
            </div>
            <div class="contact-input">
                <label for="userSubject">Subject:</label><br>
                <input type="text" name="userSubject" id="userSubject">
            </div>
            <div class="contact-input">
                <label for="userMessage">Message:</label><br>
                <textarea name="userMessage" id="userMessage" cols="30" rows="10"></textarea>
            </div>
            <div class="contact-input">
                <button type="submit" id="contactSubmit">Send</button>
            </div>
        </form>
        </div>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>