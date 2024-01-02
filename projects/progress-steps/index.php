<?php

$title = "Progress Steps";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("../../includes/head.php"); ?>
    <link rel="stylesheet" href="./project-style.css">
</head>
<body>
    <nav>
        <?php include("../../includes/nav.php"); ?>
    </nav>
    <header>
        <h1><?= $title; ?></h1>
        <p>Adapted from Brad Traversy's course on Udemy.com <a href="https://www.udemy.com/share/103Pje3@vWss779JzZo8tc0tYJXHMFGHv7t82AdaVag7W4uKhDDTpRbEgZ-2HK1vbSc6-tphwg==/">50 Projects In 50 Days - HTML, CSS & JavaScript</a></p>
    </header>
    <main>
      <div class="container">
        <div class="progress-container">
          <div class="progress" id="progress"></div>
          <div class="circle active">1</div>
          <div class="circle">2</div>
          <div class="circle">3</div>
          <div class="circle">4</div>
        </div>
        <div class="button-container">
          <button class="btn" id="prev" disabled>Prev</button>
          <button class="btn" id="next">Next</button>
        </div>
      </div>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="../../js/script.js"></script>
    <script src="./project-script.js"></script>
</body>
</html>