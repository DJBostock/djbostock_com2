<?php 

$title = "DJ Bostock - Blog";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="DJ Bostock">

    <title><?= $title; ?></title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Blog</h1>
        <img src="/images/profile-round.png" alt="cartoon headshot of the author" class="hero">
    </header>

    <?php include '../includes/nav.php'; ?>

    <main>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio praesentium est, tempora mollitia temporibus corporis cumque repellendus minus totam quidem nam molestiae exercitationem, reprehenderit cupiditate at, debitis optio suscipit harum!
            Deserunt odio incidunt doloremque laborum assumenda debitis similique facere atque ex. Necessitatibus similique eos reprehenderit vel id nihil. Voluptatibus inventore facere molestias aperiam doloremque porro ad at dicta repudiandae consequatur?
        </p>
    </main>
    <footer>
        <p>&copy; DJ Bostock</p>
    </footer>
    <script src="/js/script.js"></script>
</body>
</html>