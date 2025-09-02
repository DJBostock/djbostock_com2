<?php
// PAGE VARIABLES
$pageTitle = 'New Article';

include './includes/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = '"' . $_POST['title'] . '"';
    $content = '"' . $_POST['content'] . '"';

    $sql = "INSERT INTO article (title, content) VALUES ($title, $content)";

    $results = mysqli_query($conn, $sql);

    $id = mysqli_insert_id($conn);
    echo "Inserted record with ID: $id";
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

                <form action="" method="post">
                    <div>
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" placeholder="Article title">
                    </div>
                    <div>
                        <label for="content">Content:</label>
                        <textarea name="content" id="content" rows="4" cols="40" placeholder="Article content"></textarea>
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