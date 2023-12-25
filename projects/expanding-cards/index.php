<?php

$title = "Expanding Cards";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../includes/head.php"); ?>
    <link rel="stylesheet" href="./project-style.css">
</head>
<body>
    <nav>
        <span class="logo">DJ Bostock</span>
        <span>
            <a href="/index.php">Home</a>
            <a href="/contact.php">Contact</a>
        </span>
    </nav>
    <header>
        <h1><?= $title; ?></h1>
    </header>
    <main>
        <div class="container">
      <div class="panel active">
        <h3>Explore The World</h3>
      </div>
      <div class="panel">
        <h3>Wild Forest</h3>
      </div>
      <div class="panel">
        <h3>Sunny Beach</h3>
      </div>
      <div class="panel">
        <h3>City on Winter</h3>
      </div>
      <div class="panel">
        <h3>Mountains - Clouds</h3>
      </div>
    </div>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="../../js/script.js"></script>
    <script src="./project-script.js"></script>
</body>
</html>