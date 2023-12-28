<?php $title = "Blog - DJ Bostock"; ?>
<?php include("includes/db-credentials.php"); ?>
<?php
    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }
    $sql = "SELECT * FROM article ORDER BY published_at;";
    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);
    } else {
        $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/head.php"); ?>
</head>
<body>
    <nav>
        <span class="logo">DJ Bostock</span>
    </nav>
    <header>
        <h1>Blog</h1>
    </header>
    <main>
        <ul>
            <?php foreach ($articles as $article): ?>
                <li>
                    <div>
                        <h3><?= $article['title']; ?></h3>
                        <p><?= $article['content']; ?></p>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </main>
    <footer>&copy; <span id="currentYear"></span></footer>
    <script src="./js/script.js"></script>
</body>
</html>
