<?php
// PAGE VARIABLES
$pageTitle = 'DJ Bostock - Blog';

$articles = [
    [
        "title"   => "First post",
        "content" => "This is the first of many posts!"
    ],
    [
        "title"   => "Another post",
        "content" => "Yet another fascinating post..."
    ],
    [
        "title"   => "Read this!",
        "content" => "You must read this now, it's essential reading!"
    ],
    [
        "title"   => "The latest news",
        "content" => "Here's the latest news, read it now"
    ]
];

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
                <h2>* Under Construction *</h2>
                <ul>
                    <?php foreach ($articles as $article): ?>
                        <li>
                            <article>
                                <h3><?= $article['title']; ?></h3>
                                <p><?= $article['content']; ?></p>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
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