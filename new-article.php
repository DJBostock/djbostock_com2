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
$pageTitle = 'New Article';

$errors = [];
$titleValue = '';
$contentValue = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    if ($title == '') {
        $errors[] = 'The title can not be blank.';
    } else {
        $titleValue = htmlspecialchars($title, ENT_QUOTES, 'UTF-8');
    }

    $content = $_POST['content'];
    if ($content == '') {
        $errors[] = 'The content can not be blank.';
    } else {
        $contentValue = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    }

    if (empty($errors)) {
        include './includes/database.php';
        $conn = getDB();

        $sql = "INSERT INTO article (title, content) VALUES (?, ?)";

        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "ss", $title, $content);

        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);

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
                <h2>New Article</h2>

                <?php if (!empty($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?= $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <form action="" method="post">
                    <div>
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" placeholder="Article title" value="<?= $titleValue; ?>">
                    </div>
                    <div>
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" rows="4" cols="40" placeholder="Article content"><?= $contentValue; ?></textarea>
                    </div>
                    <button>Add</button>
                </form>
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