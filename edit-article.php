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

// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Blog';

include './includes/database.php';

$errors = [];
$titleValue = '';
$contentValue = '';
$idValue = '';

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
    if ($id == null || !is_numeric($id)) {
        $errors[] = 'Valid ID is required.';
    } else {
        $article['id'] = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
    }

    $title = $_POST['title'];
    if ($title == '') {
        $errors[] = 'The title can not be blank.';
    } else {
        $article['title'] = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    $content = $_POST['content'];
    if ($content == '') {
        $errors[] = 'The content can not be blank.';
    } else {
        $article['content'] = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    }

    if (empty($errors)) {
        $conn = getDB();

        $sql = "UPDATE article SET title = ?, content = ? WHERE id = ?";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "sss", $title, $content, $id);

        if (mysqli_stmt_execute($stmt)) {
            if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
                $protocol = 'https';
            } else {
                $protocol = 'http';
            }

            header("Location: $protocol://" . "djbostock.com/article.php?id=$id");
            exit;
        }
    }
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
                        <button>Save</button>
                    </form>
                    <p><a href="article.php?id=<?= $article['id']; ?>">Cancel</a></p>
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