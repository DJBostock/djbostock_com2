<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Blog';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

include './includes/database.php';

$sql = "SELECT * FROM article WHERE id = $id;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    $article = null;
} else {
    $article = mysqli_fetch_assoc($results);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/head.php'; ?>
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
                <?php if ($article == null): ?>
                    <p>Article not found.</p>
                <?php else: ?>
                    <h2><?= $article['title']; ?></h2>
                    <p><?= $article['content']; ?></p>
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