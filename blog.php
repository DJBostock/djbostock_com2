<?php

session_start();

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Blog';

include './includes/database.php';
$conn = getDB();

$sql = "SELECT * FROM article ORDER BY created_at DESC;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    $articles = [];
} else {
    $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
    <link rel="stylesheet" href="./css/blog.css">
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
                <p>Micro updates regarding the page itself or projects for my portfolio.</p>
                <?php if ($_SESSION['is_logged_in']): ?>
                    <p><a href="new-article.php">New Article</a></p>
                <?php endif; ?>

                <?php if (empty($articles)): ?>
                    <p>No articles found.</p>
                <?php else: ?>
                    <ul>
                        <?php foreach ($articles as $article): ?>
                            <li class="blogArticle">
                                <h2><a href="article.php?id=<?= $article['id']; ?>"><?= htmlspecialchars($article['title']); ?></a></h2>
                                <p><?= htmlspecialchars($article['content']); ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
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
        </footer>
    </div>
</body>

</html>