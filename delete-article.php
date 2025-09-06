<?php

session_start();

if (!$_SESSION['is_logged_in']) {
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

    header("Location: $protocol://" . "djbostock.com/");
    exit;
}

include 'includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        $id = 0;
    }
    $conn = getDB();
    $article = getArticle($id, $conn);
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $conn = getDB();

    $sql = "DELETE FROM article WHERE id = ?";

    $stmt = mysqli_prepare($conn, $sql);

    mysqli_stmt_bind_param($stmt, "i", $id);

    mysqli_stmt_execute($stmt);

    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

    header("Location: $protocol://" . "djbostock.com/blog.php");
    exit;
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
                    <h2>Delete Article</h2>
                    <p>Are you sure?</p>
                    <form action="" method="post">
                        <div>
                            <label for="id">ID:</label>
                            <input type="text" name="id" placeholder="Article ID" value="<?= htmlspecialchars($article['id']); ?>">
                        </div>
                        <div>
                            <label for="title">Title:</label>
                            <input type="text" name="title" id="title" placeholder="Article title" value="<?= htmlspecialchars($article['title']); ?>">
                        </div>
                        <div>
                            <label for="content">Content:</label>
                            <textarea name="content" id="content" rows="4" cols="40" placeholder="Article content"><?= htmlspecialchars($article['content']); ?></textarea>
                        </div>
                        <button>Delete</button>
                        <p><a href="article.php?id=<?= $article['id']; ?>">Cancel</a></p>
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