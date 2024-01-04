<?php $title = "Blog - DJ Bostock"; ?>
<?php include("includes/db-credentials.php"); ?>
<?php
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    $sql = "SELECT * FROM article WHERE id = 1;";
    
    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $article = mysqli_fetch_assoc($results);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>
    <nav>
        <?php include("includes/nav.php"); ?>
    </nav>
    <header>
        <h1>Blog</h1>
    </header>
    <main class="individual-article">
        <?php if ($article === null): ?>
            <p>No articles found.</p>
        <?php else: ?>
            <h3><?= $article['title']; ?></h3>
            <p><?= $article['content']; ?></p>
        <?php endif; ?>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>
