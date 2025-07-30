<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DJ Bostock">

    <link rel="icon" type="image/x-icon" href="./favicon.ico">

    <title><?= $pageTitle; ?></title>

    <!-- BOOTSTRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-sm fixed-top pt-0">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://djbostock.com">DJ Bostock</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- HERO -->
        <div class="mt-4 p-5 rounded row">
            <div class="col-12 col-md-8">
                <h1>DJ Bostock</h1>
                <p>Hello, World! Welcome to my page. I am a web developer into turning ideas into functional websites. I am eager to join a team where I can contribute and grow my skills.</p>
            </div>
            <div class="col-12 col-md-4">
                <img src="./images/happy-stick.jpg" alt="happy stick person" class="hero-img">
            </div>
        </div>
    </div>
</body>

</html>