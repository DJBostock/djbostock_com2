<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Blog';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
} else {
    $id = 0;
}

include './includes/database.php';
$conn = getDB();
$article = getArticle($id, $conn);

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
                    <form action="" method="post">
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($article['title']); ?>">
                        </div>
                        <div>
                            <label for="content">Content:</label>
                            <textarea name="content" id="content" rows="4" cols="40" placeholder="Article content"><?= htmlspecialchars($article['content']); ?></textarea>
                        </div>
                        <button>Save</button>
                    </form>
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